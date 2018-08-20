<?php

namespace Bezhanov\Tests\Faker\Provider;

class DeviceTest extends TestCase
{
    public function testModelName()
    {
        $this->assertRegExp('/\w+/', $this->faker->deviceModelName);
    }

    public function testPlatform()
    {
        $this->assertRegExp('/\w+/', $this->faker->devicePlatform);
    }

    public function testVersion()
    {
        $version = $this->faker->deviceVersion;
        $this->assertGreaterThan(0, $version);
        $this->assertLessThanOrEqual(1000, $version);
    }

    public function testBuildNumber()
    {
        $buildNumber = $this->faker->deviceBuildNumber;
        $this->assertGreaterThan(0, $buildNumber);
        $this->assertLessThanOrEqual(500, $buildNumber);
    }

    public function testManufacturer()
    {
        $this->assertRegExp('/\w+/', $this->faker->deviceManufacturer);
    }

    public function testSerialNumber()
    {
        $this->assertRegExp('/\w+/', $this->faker->deviceSerialNumber);
    }
}
