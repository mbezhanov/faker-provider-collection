<?php

namespace Bezhanov\Tests\Faker\Provider;

class ScienceTest extends TestCase
{
    public function testChemicalElement()
    {
        $this->assertMatchesRegularExpression('/\w+/', $this->faker->chemicalElement);
    }

    public function testChemicalElementSymbol()
    {
        $this->assertMatchesRegularExpression('/\w{1,2}/', $this->faker->chemicalElementSymbol);
    }

    public function testScientist()
    {
        $this->assertMatchesRegularExpression('/\w+/', $this->faker->scientist);
    }
}
