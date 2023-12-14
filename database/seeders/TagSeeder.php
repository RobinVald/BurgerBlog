<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Tag::factory(1)->create([
            'name' => "spice:🌶️🌶️🌶️🌶️🌶️",
        ]);
        Tag::factory(1)->create([
            'name' => "spice:🌶️🌶️🌶️🌶️",
        ]);
        Tag::factory(1)->create([
            'name' => "spice:🌶️🌶️🌶️",
        ]);
        Tag::factory(1)->create([
            'name' => "spice:🌶️🌶️",
        ]);
        Tag::factory(1)->create([
            'name' => "spice:🌶️",
        ]);
        Tag::factory(1)->create([
            'name' => "not spicy",
        ]);
        // $tags = Tag::factory(20)->create();
        // $articles = Article::all();
        // foreach ($articles as $article){
        //     $randCount = rand(0, 5);
        //     $randTags = $tags->random($randCount);
        //     foreach ($randTags as $tag){
        //         $article->tags()->attach($tag);
            }
        }
    //}
//}
