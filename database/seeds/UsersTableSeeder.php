<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $itsMeUser = new User();
        $itsMeUser->name = 'ErJump';
        $itsMeUser->email = 'fedelijunior@gmail.com';
        $itsMeUser->password = Hash::make('password');
        $itsMeUser->save();
        
        for($i = 0; $i < 10; $i++) {
            $newUser = new User();
            $newUser->name = $faker->userName();
            $newUser->email = $faker->unique()->email();
            $newUser->password = Hash::make($faker->password());
            $newUser->save();
        }
    }
}
