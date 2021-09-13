<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
require_once "vendor/autoload.php";

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<50;$i++){
            $newPost = new Post();
            $newPost->title = $faker->sentence(3);
            $newPost->user = $faker->userName();
            $newPost->userpic= $faker->imageUrl(64, 64, "animals", true);
            $newPost->content = $faker->paragraphs(3, true);
            $newPost->save();
        }
    }
}
