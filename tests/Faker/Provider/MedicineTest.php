<?php

namespace Bezhanov\Tests\Faker\Provider;

class MedicineTest extends TestCase
{
    public function testMedicine()
    {
        $this->assertMatchesRegularExpression('#\w+#', $this->faker->medicine);
    }
}
