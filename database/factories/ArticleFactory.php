<?php

use Faker\Generator as Faker;
use App\Model\Article;


$factory->define(Article::class, function (Faker $faker) {
    return [
        'title'=> $faker->word,
        'description'=> $faker->paragraph,
        'image'=> $faker->imageUrl($width = 400, $height = 200, 'cats'),
        'user_id'=>$faker->randomDigitNotNull,
    ];
});
