<?php

namespace Bezhanov\Tests\Faker\Provider;

use Bezhanov\Faker\Provider\Food;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class FoodTest extends TestCase
{
    private $faker;

    protected function setUp()
    {
        $faker = Factory::create();
        $faker->addProvider(new Food($faker));
        $this->faker = $faker;
    }

    public function testIngredient()
    {
        $this->assertRegExp('#\w+#', $this->faker->ingredient);
    }

    public function testSpice()
    {
        $this->assertRegExp('#\w+#', $this->faker->spice);
    }

    public function testMeasurement()
    {
        $this->assertEquals(2, count(explode(' ', $this->faker->measurement)));
    }
}
