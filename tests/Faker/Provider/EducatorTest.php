<?php

namespace Bezhanov\Tests\Faker\Provider;

use Bezhanov\Faker\Provider\Educator;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class EducatorTest extends TestCase
{
    private $faker;

    protected function setUp()
    {
        $faker = Factory::create();
        $faker->addProvider(new Educator($faker));
        $this->faker = $faker;
    }

    public function testUniversity()
    {
        $this->assertRegExp('#(\w+\.? ?){2,3}#', $this->faker->university);
    }

    public function testSecondarySchool()
    {
        $this->assertRegExp('#(\w+\.? ?){2,3}#', $this->faker->secondarySchool);
    }

    public function testCourse()
    {
        $this->assertRegExp('#(\w+\.? ?){3,6}#', $this->faker->course);
    }

    public function testCampus()
    {
        $this->assertRegExp('#(\w+\.? ?){1,2}#', $this->faker->campus);
    }
}
