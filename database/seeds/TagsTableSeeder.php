<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            '2022',
            '2023',
            'Microsoft',
            'Apple',
            'Google',
            'Switch',
            'NiceDay',
            'BadDay',
            'Summer',
            'Winter',
            'HotD',
            'GoT',
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->save();
        }
    }
}
