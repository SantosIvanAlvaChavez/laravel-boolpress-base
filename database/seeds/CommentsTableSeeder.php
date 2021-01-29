<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;
use Faker\Generator as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Get Post - 3x comments
        $posts = Post::all();

        foreach ($posts as $post) {

            for($i = 0; $i < 3; $i++) {
                // 1. Creazione istanza 
                $newComment = new Comment();

                // 2. Dati colonne
                $newComment->post_id = $post->id; // FK -> id posts
                $newComment->author = $faker->userName();
                $newComment->text = $faker->sentence(10);
                
                // 3. Salvare
                $newComment->save();
            }          
        }
    }
}
