<?php

namespace Bezhanov\Tests\Faker\Provider;

class SpaceTest extends TestCase
{
    public function testPlanet()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->planet);
    }

    public function testMoon()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->moon);
    }

    public function testGalaxy()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->galaxy);
    }

    public function testNebula()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->nebula);
    }

    public function testStarCluster()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->starCluster);
    }

    public function testConstellation()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->constellation);
    }

    public function testStar()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->star);
    }

    public function testAgency()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->agency);
    }

    public function testAgencyAbv()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->agencyAbv);
    }

    public function testNasaSpaceCraft()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->nasaSpaceCraft);
    }

    public function testSpaceCompany()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->spaceCompany);
    }

    public function testDistanceMeasurement()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->distanceMeasurement);
    }

    public function testMeteorite()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->meteorite);
    }

    public function testLaunchVehicle()
    {
        $this->assertRegExp('/(\w+\.? ?){2,3}/', $this->faker->launchVehicle);
    }
}
