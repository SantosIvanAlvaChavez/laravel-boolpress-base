<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Infopost;

class InfopostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Create a record for every post
        $posts = Post::all();

        foreach ($posts as $post) {
            // creazione istanza 
            $newInfo = new Infopost();

            // set valori colonne
            $newInfo->post_id = $post->id;
            $newInfo->post_status = $faker->randomElement(['public', 'private', 'draft']);
            $newInfo->comment_status = $faker->randomElement(['open', 'closed', 'private']);

            // salvataggio
            $newInfo->save();
        }
    }
}
