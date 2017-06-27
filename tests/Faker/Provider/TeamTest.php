<?php

namespace Bezhanov\Tests\Faker\Provider;

use Bezhanov\Faker\Provider\Team;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class TeamTest extends TestCase
{
    private $faker;

    protected function setUp()
    {
        $faker = Factory::create();
        $faker->addProvider(new Team($faker));
        $this->faker = $faker;
    }

    public function testTeam()
    {
        $this->assertRegExp('#(\w+\.? ?){2,3}#', $this->faker->team);
    }

    public function testSport()
    {
        $this->assertRegExp('#(\w+){1}#', $this->faker->sport);
    }
}
