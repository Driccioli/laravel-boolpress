<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Category;

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
        $categoryList=[
            'news',
            'sport',
            'opinion',
            'tourism',
            'music',
            'movies',
            'gaming',
            'memes',
            'rant',
            'writing',
            'theory',
        ];

        for($i=0;$i<50;$i++){

            //Category foreign key
            $postCategory = new Category();
            $categoryKey = array_rand($categoryList, 1);
            $category = $categoryList[$categoryKey];
            $postCategory->category = $category;
            $postCategory->save();
            

            $newPost = new Post();
            $newPost->title = $faker->sentence(3);
            $newPost->user = $faker->userName();
            $newPost->userpic= $faker->imageUrl(64, 64, "animals", true);
            $newPost->content = $faker->paragraphs(3, true);
            $newPost->category_id = $postCategory->id;
            

            $newPost->save();
        }
    }
}
