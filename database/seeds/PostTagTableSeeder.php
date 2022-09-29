<?php

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            $randomTags = Tag::inRandomOrder()->take(rand(1, 3))->get();
            $post->tags()->attach($randomTags);
        }
    }
}
