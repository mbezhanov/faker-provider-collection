<?php

namespace Bezhanov\Tests\Faker\Provider;

class TeamTest extends TestCase
{
    public function testTeam()
    {
        $this->assertMatchesRegularExpression('#(\w+\.? ?){2,3}#', $this->faker->team);
    }

    public function testSport()
    {
        $this->assertMatchesRegularExpression('#(\w+){1}#', $this->faker->sport);
    }
}
