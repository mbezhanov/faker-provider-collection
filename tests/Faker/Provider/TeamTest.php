<?php

namespace Bezhanov\Tests\Faker\Provider;

class TeamTest extends TestCase
{
    public function testTeam()
    {
        $this->assertRegExp('#(\w+\.? ?){2,3}#', $this->faker->team);
    }

    public function testSport()
    {
        $this->assertRegExp('#(\w+){1}#', $this->faker->sport);
    }
}
