<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // membuat factory(jumlah)
        User::factory(5)->create();


        //Database dan seeder "php artisan migrate:fresh --seed"
        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);
        
        Category::create([
            'name' => 'Anime Baru',
            'slug' => 'anime-baru'
        ]);
        
        Post::factory(20)->create();
    }
}
