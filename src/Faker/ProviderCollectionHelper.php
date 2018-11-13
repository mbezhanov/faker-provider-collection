<?php

namespace Bezhanov\Faker;

use Bezhanov\Faker\Provider;
use Faker\Generator;

class ProviderCollectionHelper
{
    public static function addAllProvidersTo(Generator $faker)
    {
        $faker->addProvider(new Provider\Avatar($faker));
        $faker->addProvider(new Provider\Commerce($faker));
        $faker->addProvider(new Provider\Demographic($faker));
        $faker->addProvider(new Provider\Device($faker));
        $faker->addProvider(new Provider\Educator($faker));
        $faker->addProvider(new Provider\Food($faker));
        $faker->addProvider(new Provider\Medicine($faker));
        $faker->addProvider(new Provider\Placeholder($faker));
        $faker->addProvider(new Provider\Science($faker));
        $faker->addProvider(new Provider\Space($faker));
        $faker->addProvider(new Provider\Species($faker));
        $faker->addProvider(new Provider\Team($faker));
    }
}
