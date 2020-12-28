<?php

namespace Bezhanov\Tests\Faker\Provider;

use Bezhanov\Faker\ProviderCollectionHelper;
use Faker\Factory;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    protected $faker;

    protected function setUp(): void
    {
        $this->faker = Factory::create();
        ProviderCollectionHelper::addAllProvidersTo($this->faker);
    }
}
