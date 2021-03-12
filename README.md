# faker-provider-collection

[![CircleCI](https://img.shields.io/circleci/project/github/mbezhanov/faker-provider-collection.svg)](https://circleci.com/gh/mbezhanov/faker-provider-collection)
[![Codecov](https://img.shields.io/codecov/c/github/mbezhanov/faker-provider-collection.svg)](https://codecov.io/gh/mbezhanov/faker-provider-collection)
[![Packagist](https://img.shields.io/packagist/dt/mbezhanov/faker-provider-collection.svg)](https://packagist.org/packages/mbezhanov/faker-provider-collection)

A growing collection of useful Providers for [fakerphp/faker](https://github.com/fakerphp/faker) mostly ported to PHP from the [stympy/faker](https://github.com/stympy/faker) Ruby library.

## Contents

1. [Installation](#installation)
1. [Basic Usage](#basic-usage)
1. [Available Formatters](#formatters)
1. [Integrations](#integrations)
1. [Contributing](#contributing)

## Installation

```bash
composer require mbezhanov/faker-provider-collection
```

## Basic Usage

You can use the `ProviderCollectionHelper` utility class to quickly add all providers to the Faker generator:

```php
<?php

$faker = \Faker\Factory::create();
\Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);
```

## Formatters

Below is the list of bundled formatters in the default locale.

### `Bezhanov\Faker\Provider\Avatar`

Generates an avatar URL using the [RoboHash](https://robohash.org/) web service.

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Avatar($faker));

$faker->avatar; // https://robohash.org/repellat-veritatis-consequatur.png?size=300x300&set=set1
$faker->avatar('foo'); // https://robohash.org/foo.png?size=300x300&set=set1
$faker->avatar('foo', '300x300'); // https://robohash.org/foo.png?size=300x300&set=set1
$faker->avatar('foo', '300x300', 'jpg'); // https://robohash.org/foo.jpg?size=300x300&set=set1
$faker->avatar('foo', '300x300', 'jpg', 'set2'); // https://robohash.org/foo.jpg?size=300x300&set=set2
$faker->avatar('foo', '300x300', 'jpg', 'set2', 'bg2'); // https://robohash.org/foo.jpg?size=300x300&set=set2&bgset=bg2

```

### `Bezhanov\Faker\Provider\Commerce`

Generates product and department data for e-commerce websites and online stores.

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));

$faker->promotionCode; // KillerPromotion257835
$faker->department; // Kids & Games
$faker->department(6); // Games, Industrial, Books & Automotive
$faker->department(3, true); // Jewelry, Music & Shoes
$faker->productName; // Small Rubber Bottle

```

### `Bezhanov\Faker\Provider\Device`

Generates random mobile device specifications

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Device($faker));

$faker->deviceBuildNumber; // 186
$faker->deviceManufacturer; // Apple
$faker->deviceModelName; // iPhone 4
$faker->devicePlatform; // Ubuntu Touch
$faker->deviceSerialNumber; // ejfjnRNInxh0363JC2WM
$faker->deviceVersion; // 812

```

### `Bezhanov\Faker\Provider\Demographic`

Generates random demographic data, such as: race, gender, demonym, educational attainment, height

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Demographic($faker));

$faker->race; // Asian
$faker->educationalAttainment; // Master's degree
$faker->demonym; // Bulgarian
$faker->maritalStatus; // Married
$faker->gender; // Female
$faker->height; // 1.99
$faker->height(Demographic::UNIT_TYPE_IMPERIAL); // 7 ft, 2 in

```

### `Bezhanov\Faker\Provider\Educator`

Generates secondary school and university names, and course names.

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Educator($faker));

$faker->university; // Clearcourt University
$faker->secondarySchool; // Mallowpond High
$faker->course; // Bachelor of Forensic Science
$faker->campus; // Brighthurst Campus

```

### `Bezhanov\Faker\Provider\Food`

Generates ingredient names, spice names, and recipe measurements.

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Food($faker));

$faker->ingredient; // Hazelnut
$faker->spice; // Chamomile
$faker->measurement; // 1 pint

```

### `Bezhanov\Faker\Provider\Medicine`

Generates fake medicine names.

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Medicine($faker));

$faker->medicine; // Amphevorin

```

### `Bezhanov\Faker\Provider\Placeholder`

Generates URLs to placeholder images using the [Placeholder.com](https://placeholder.com/) image placeholder service.

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Placeholder($faker));

$faker->placeholder(); // https://placehold.it/300x300.png
$faker->placeholder('250x250'); // https://placehold.it/250x250.png
$faker->placeholder('250x250', 'jpg'); // https://placehold.it/250x250.jpg
$faker->placeholder('250x250', 'jpg', 'ff0000'); // https://placehold.it/250x250.jpg/ff0000
$faker->placeholder('250x250', 'jpg', 'f00', '000000'); // https://placehold.it/250x250.jpg/f00/000000
$faker->placeholder('250x250', 'jpg', 'ff0000', '000', 'test'); // https://placehold.it/250x250.jpg/ff0000/000?text=test

```

### `Bezhanov\Faker\Provider\Science`

Generates names of scientists and chemical elements

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Science($faker));

$faker->chemicalElement; // Radium
$faker->chemicalElementSymbol; // Fe
$faker->scientist; // Max Planck

```


### `Bezhanov\Faker\Provider\Space`

Generates names of astronomical objects, distance measurements, spacecrafts, etc.

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Space($faker));

$faker->planet; // Neptune
$faker->moon; // Europa
$faker->galaxy; // Andromeda
$faker->nebula; // Orion Nebula
$faker->starCluster; // Palomar 6
$faker->constellation; // Ursa Major
$faker->star; // Luyten 726-8B
$faker->agency; // Japan Aerospace Exploration Agency
$faker->agencyAbv; // NASA
$faker->nasaSpaceCraft; // Atlantis
$faker->spaceCompany; // SpaceX
$faker->distanceMeasurement; // 43 kiloparsecs
$faker->meteorite; // Qidong
$faker->launchVehicle; // Saturn IV

```

### `Bezhanov\Faker\Provider\Species`

Generates scientific names of fictional bird, animal, and plant species.

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Species($faker));

echo $faker->bird . PHP_EOL; // Rostratula subis
echo $faker->creature . PHP_EOL; // Latrodectus indri
echo $faker->plant . PHP_EOL; // Pyrus filiformis

```

### `Bezhanov\Faker\Provider\Team`

Generates sports and sports team names

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Team($faker));

$faker->team; // Oregon Tigers
$faker->sport; // soccer

```

## Integrations

* [Laravel](https://github.com/mbezhanov/laravel-faker-provider-collection)

## Contributing

All contributions are welcome. Before opening PRs, make sure that all tests are passing, and that code coverage is satisfactory:

```bash
phpunit tests --coverage-html coverage
```
