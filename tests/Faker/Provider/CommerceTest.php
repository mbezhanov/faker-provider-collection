<?php

namespace Bezhanov\Tests\Faker\Provider;

class CommerceTest extends TestCase
{
    public function testPromotionCode()
    {
        $this->assertMatchesRegularExpression('#[a-z]+[a-z]+\d{6}#i', $this->faker->promotionCode);
    }

    public function testPromotionCodeWithSpecifiedNumberOfDigits()
    {
        $this->assertMatchesRegularExpression('#[a-z]+[a-z]+\d{1}#i', $this->faker->promotionCode(1));
    }

    public function testPromotionCodeWithFixedNumberOfDigits()
    {
        $this->assertMatchesRegularExpression('#[a-z]+[a-z]+\d{3}#i', $this->faker->promotionCode(3, true));

    }

    public function testDepartment()
    {
        $this->assertMatchesRegularExpression('#[a-z]+\.?#i', $this->faker->department);
    }

    public function testDeparmentShouldNotContainSeparators()
    {
        $this->assertMatchesRegularExpression('#^[a-z]+$#i', $this->faker->department(1));
    }

    public function testDepartmentShouldHaveAmpersandAsDefaultSeparator()
    {
        $this->assertStringContainsString('&', $this->faker->department(2, true));
    }

    public function testDepartmentShouldHaveExactNumberOfCategoriesWhenFixedAmount()
    {
        $this->assertMatchesRegularExpression('#^([a-z]+, ){8}[a-z]+ & [a-z]+$#i', $this->faker->department(10, true));
    }

    public function testDepartmentShouldNeverExceedTheMaxNumberOfCategoriesWhenRandomAmount()
    {
        $this->assertMatchesRegularExpression('#^([a-z]+(, | & )){0,5}[a-z]+$#i', $this->faker->department(5));
    }

    public function testDeparmentShouldHaveNoDuplicateCategories()
    {
        $department = $this->faker->department(10, true);
        $departments = preg_split('#[,& ]+#', $department);
        $this->assertEquals(count($departments), count(array_unique($departments)));
    }

    public function testProductName()
    {
        $this->assertMatchesRegularExpression('#^([a-z]+ ){2,3}[a-z]+$#i', $this->faker->productName());
    }
}
