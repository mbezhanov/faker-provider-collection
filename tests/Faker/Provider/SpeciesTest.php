<?php

namespace Bezhanov\Tests\Faker\Provider;

use phpmock\MockBuilder;

class SpeciesTest extends TestCase
{
    public function testBird()
    {
        $this->assertRegExp('#(\w+){2}#', $this->faker->bird);
    }

    public function testCreature()
    {
        $mtRandCallsCount = 0;
        $mtRandMock = $this->buildMtRandMock($mtRandCallsCount);
        $mtRandMock->enable();

        $this->assertRegExp('#(\w+){2}#', $this->faker->creature);
        $this->assertRegExp('#(\w+){2}#', $this->faker->creature);

        $mtRandMock->disable();
    }

    public function testPlant()
    {
        $this->assertRegExp('#(\w+){2}#', $this->faker->plant);
    }

    private function buildMtRandMock(&$counter)
    {
        return (new MockBuilder())
            ->setNamespace('Bezhanov\Faker\Provider')
            ->setName('mt_rand')
            ->setFunction(function () use (&$counter) {
                return ++$counter;
            })
            ->build();
    }
}
