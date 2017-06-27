<?php

namespace Bezhanov\Tests\Faker;

use Bezhanov\Faker\ProviderCollectionHelper;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

class ProviderCollectionHelperTest extends TestCase
{
    public function testAddAllProviders()
    {
        $faker = new Generator();
        ProviderCollectionHelper::addAllProvidersTo($faker);
        $this->assertEquals(5, count($faker->getProviders()));
    }
}
