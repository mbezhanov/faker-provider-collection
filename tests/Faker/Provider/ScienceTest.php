<?php

namespace Bezhanov\Tests\Faker\Provider;

class ScienceTest extends TestCase
{
    public function testChemicalElement()
    {
        $this->assertRegExp('/\w+/', $this->faker->chemicalElement);
    }

    public function testChemicalElementSymbol()
    {
        $this->assertRegExp('/\w{1,2}/', $this->faker->chemicalElementSymbol);
    }

    public function testScientist()
    {
        $this->assertRegExp('/\w+/', $this->faker->scientist);
    }
}
