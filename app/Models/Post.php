<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'post_content',
        'post_image',
        'post_date',
        'slug',
        'uploaded_image',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function tags() {
        return $this->belongsToMany('App\Models\Tag');
    }
}
