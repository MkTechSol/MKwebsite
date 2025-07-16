<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\banner;
use App\Models\banner2;
use App\Models\Post;
use App\Models\service;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
       /*    banner::insert([
            'section' =>    'Main Banner',
            'slug'  =>  'main-banner',
            'img'   =>  '/assets/images/first.jpg'
        ]);  */

        /* service::insert(
        [
            'section' =>    'services',
            'slug'  =>  'services',
            'img'   =>  '/assets/images/s1.jpg',
            'heading'   => 'Creative Design',
            'content'   => 'Our digital marketing strategies ignite brands, optimize reach, and amplify engagement. From SEO mastery to captivating content, we craft tailored campaigns that drive results in the digital landscape.'
        ]); */
         Post::insert(
            [
                'section' =>    'services',
                
                'img'   =>  '/assets/images/s1.jpg',
                'heading'   => 'Creative Design',
                'content'   => 'Our digital marketing strategies ignite brands, optimize reach, and amplify engagement. From SEO mastery to captivating content, we craft tailored campaigns that drive results in the digital landscape.'
            ]
        ); 
        /* User::insert([
            'name'  => 'Arslan',
            'email' =>  'arslan@gmail.com',
            'password'  =>  bcrypt('hello123')
        ]); */
       /*  */
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
