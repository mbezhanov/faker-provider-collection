# faker-provider-collection

A growing collection of useful Providers for [fzaninotto/faker](https://github.com/fzaninotto/faker) mostly ported to PHP from the [stympy/faker](https://github.com/stympy/faker) Ruby library.

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

### `Bezhanov\Faker\Provider\Team`

Generates sports and sports team names

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \Bezhanov\Faker\Provider\Team($faker));

$faker->team; // Oregon Tigers
$faker->sport; // soccer

```

## Contributing

All contributions are welcome. Before opening PRs, make sure that all tests are passing, and that code coverage is satisfactory:

```bash
phpunit tests --coverage-html coverage
```