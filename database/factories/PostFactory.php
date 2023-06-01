<?php
use Faker\Generator as Faker;
use Illuminate\Support\Str;
 
$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'excerpt' => $this->faker->sentence(),
        'title' => $this->faker->sentence(),
        'image_path' => $this->faker->imageUrl(640,480),
        'description' => $this->faker->text(),
        // 'is_published' => $this->faker->integer(),
    ];
});
