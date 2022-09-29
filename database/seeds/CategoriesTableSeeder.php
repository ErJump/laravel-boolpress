<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categoriesArray = [
            'Sport',
            'News',
            'Politics',
            'Economy',
            'Technology',
            'Science',
            'Art',
            'Music',
            'Movies',
            'TV',
            'Games'
        ];
        foreach($categoriesArray as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->slug = Str::slug($newCategory->name, '-');
            $newCategory->color = $faker->hexColor();
            $newCategory->save();
        }
    }
}
