<?php

require_once 'vendor/autoload.php';

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));

echo $faker->brandName .PHP_EOL; // Default sort by A
echo $faker->brandName('B') .PHP_EOL; // Sort by B
echo $faker->brandName('C') .PHP_EOL; // Sort by C