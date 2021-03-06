<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\ProductVariation::class, function (Faker $faker) {
    return [
       'product_id'=> factory(\App\Models\Product::class)->create()->id,
       'name'=> $faker->unique()->name
    ];
});
