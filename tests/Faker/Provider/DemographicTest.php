<?php

namespace Bezhanov\Tests\Faker\Provider;

use Bezhanov\Faker\Provider\Demographic;

class DemographicTest extends TestCase
{
    public function testRace()
    {
        $this->assertMatchesRegularExpression('/\w+/', $this->faker->race);
    }

    public function testEducationalAttainment()
    {
        $this->assertMatchesRegularExpression('/\w+/', $this->faker->educationalAttainment);
    }

    public function testDemonym()
    {
        $this->assertMatchesRegularExpression('/\w+/', $this->faker->demonym);
    }

    public function testMaritalStatus()
    {
        $this->assertMatchesRegularExpression('/\w+/', $this->faker->maritalStatus);
    }

    public function testGender()
    {
        $this->assertTrue(in_array($this->faker->gender, ['Male', 'Female']));
    }

    public function testHeightMetricUnits()
    {
        $this->assertMatchesRegularExpression('/[\d]{1}\.[\d]{2}/', $this->faker->height);
    }

    public function testHeightImperialUnits()
    {
        $this->assertMatchesRegularExpression('/[\d]{1} ft, [\d]{1,2} in/', $this->faker->height(Demographic::UNIT_TYPE_IMPERIAL));
    }
}
