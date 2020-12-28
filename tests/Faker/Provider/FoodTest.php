<?php

namespace Bezhanov\Tests\Faker\Provider;

class FoodTest extends TestCase
{
    public function testIngredient()
    {
        $this->assertMatchesRegularExpression('#\w+#', $this->faker->ingredient);
    }

    public function testSpice()
    {
        $this->assertMatchesRegularExpression('#\w+#', $this->faker->spice);
    }

    public function testMeasurement()
    {
        $this->assertEquals(2, count(explode(' ', $this->faker->measurement)));
    }
}
