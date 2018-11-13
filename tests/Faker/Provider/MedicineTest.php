<?php

namespace Bezhanov\Tests\Faker\Provider;

class MedicineTest extends TestCase
{
    public function testMedicine()
    {
        $this->assertRegExp('#\w+#', $this->faker->medicine);
    }
}
