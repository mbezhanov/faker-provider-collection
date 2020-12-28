<?php

namespace Bezhanov\Tests\Faker\Provider;

class EducatorTest extends TestCase
{
    public function testUniversity()
    {
        $this->assertMatchesRegularExpression('#(\w+\.? ?){2,3}#', $this->faker->university);
    }

    public function testSecondarySchool()
    {
        $this->assertMatchesRegularExpression('#(\w+\.? ?){2,3}#', $this->faker->secondarySchool);
    }

    public function testCourse()
    {
        $this->assertMatchesRegularExpression('#(\w+\.? ?){3,6}#', $this->faker->course);
    }

    public function testCampus()
    {
        $this->assertMatchesRegularExpression('#(\w+\.? ?){1,2}#', $this->faker->campus);
    }
}
