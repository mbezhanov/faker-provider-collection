<?php

namespace Bezhanov\Tests\Faker\Provider;

class SpaceTest extends TestCase
{
    public function testPlanet()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->planet);
    }

    public function testMoon()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->moon);
    }

    public function testGalaxy()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->galaxy);
    }

    public function testNebula()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->nebula);
    }

    public function testStarCluster()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->starCluster);
    }

    public function testConstellation()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->constellation);
    }

    public function testStar()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->star);
    }

    public function testAgency()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->agency);
    }

    public function testAgencyAbv()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->agencyAbv);
    }

    public function testNasaSpaceCraft()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->nasaSpaceCraft);
    }

    public function testSpaceCompany()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->spaceCompany);
    }

    public function testDistanceMeasurement()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->distanceMeasurement);
    }

    public function testMeteorite()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->meteorite);
    }

    public function testLaunchVehicle()
    {
        $this->assertMatchesRegularExpression('/(\w+\.? ?){2,3}/', $this->faker->launchVehicle);
    }
}
