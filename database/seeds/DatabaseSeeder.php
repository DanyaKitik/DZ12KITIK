<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tags = factory(\App\Tag::class,20)->create();
        factory(\App\Post::class,50)->create()->each(function ($post) use ($tags){
            $tags->shuffle();
            $post->tags()->attach($tags->pluck('id')->random(rand(3,5)));
        });
    }
}
