<?php

use Faker\Generator as Faker;

$factory->define(App\Lesson::class, function (Faker $faker) {

	$title = $faker->sentence(6);

    return [
        'name'  => $title,
        'slug'  => str_slug($title),
        'body'  => $faker->text(500),
    ];
    
});
