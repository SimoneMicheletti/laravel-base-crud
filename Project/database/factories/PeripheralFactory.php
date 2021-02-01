<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Peripheral;
use Faker\Generator as Faker;

$factory->define(Peripheral::class, function (Faker $faker) {
    return [
		'name' => $faker -> randomElement($array = array ('Mouse','Keyboard','WebCam','Headset','Monitor')) . " " . $faker -> word,
        'model' => $faker -> company,
        'price' => ($faker -> numberBetween(3000, 10000))/100,
        'consumption' => $faker -> randomElement($array = array ('A++','A+','A','B','C','D'))
    ];
});
