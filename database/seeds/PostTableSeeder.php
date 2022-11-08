<?php

use App\Models\Admin\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tags = Tag::all();

        for ($i=0; $i < 25; $i++) { 
            $newPost = new Post();
            $newPost->user_id = rand(1, 11);
            $newPost->title = $faker->realText(50);
            $newPost->post_content = $faker->paragraph(10, true);
            $newPost->post_date = $faker->dateTimeThisYear();
            $newPost->post_image = $faker->imageUrl(640, 480, 'animals', true);

            $newPost->save();
        }
    }
}
