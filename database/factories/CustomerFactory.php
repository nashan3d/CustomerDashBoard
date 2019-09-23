<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'firstname' => 'nashan',
        'lastname' => 'haris',
        'phonenumber'=> '0760199568'
    ];
});
