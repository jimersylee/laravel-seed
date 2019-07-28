<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence(mt_rand(3, 10)),
        'content'=>join("\n\n",$faker->paragraphs(mt_rand(3,10))),
        'published_at'=>$faker->dateTimeBetween("-1 month","+3 days")
    ];
});

