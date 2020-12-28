<?php

namespace Bezhanov\Tests\Faker\Provider;

class PlaceholderTest extends TestCase
{
    public function testPlaceholder()
    {
        $this->assertMatchesRegularExpression('#https://placehold.it/(.+)(png?)#', $this->faker->placeholder);
    }

    public function testPlaceholderWithCustomSize()
    {
        $this->assertEquals('https://placehold.it/3x3.png', $this->faker->placeholder('3x3'));
    }

    public function testPlaceholderWithIncorrectSize()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->placeholder('300x300s');
    }

    public function testPlaceholderWithSupportedFormat()
    {
        $this->assertEquals('https://placehold.it/300x300.jpg', $this->faker->placeholder('300x300', 'jpg'));
    }

    public function testPlaceholderWithIncorrectFormat()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->placeholder('300x300', 'wrong_format');
    }

    public function testPlaceholderBackgroundWithCorrectSixCharHex()
    {
        $this->assertMatchesRegularExpression('#^https://placehold.it/(.+)(jpg?)/ffffff$#', $this->faker->placeholder('300x300', 'jpg', 'ffffff'));
    }

    public function testPlaceholderBackgroundWithCorrectThreeCharHex()
    {
        $this->assertMatchesRegularExpression('#^https://placehold.it/(.+)(jpg?)/fff$#', $this->faker->placeholder('300x300', 'jpg', 'fff'));
    }

    public function testPlaceholderBackgroundWithWrongSixCharHex()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->placeholder('300x300', 'jpg', 'fffffz');
    }

    public function testPlaceholderBackgroundWithWrongHex()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->placeholder('300x300', 'jpg', 'ffff4');
    }

    public function testPlaceholderBackgroundWithWrongThreeCharHex()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->placeholder('300x300', 'jpg', 'ffz');
    }

    public function testPlaceholderFontColorWithCorrectSixCharHex()
    {
        $this->assertMatchesRegularExpression('#^https://placehold.it/(.+)(jpg?)/ffffff/000000$#', $this->faker->placeholder('300x300', 'jpg', 'ffffff', '000000'));
    }

    public function testPlaceholderFontColorWithCorrectThreeCharHex()
    {
        $this->assertMatchesRegularExpression('#^https://placehold.it/(.+)(jpg?)/ffffff/000$#', $this->faker->placeholder('300x300', 'jpg', 'ffffff', '000'));
    }

    public function testPlaceholderFontColorWithWrongSixCharHex()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->placeholder('300x300', 'jpg', 'ffffff', '900F0z');
    }

    public function testPlaceholderFontColorWithWrongHex()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->placeholder('300x300', 'jpg', 'ffffff', 'x9');
    }

    public function testPlaceholderFontColorWithWrongThreeCharHex()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->placeholder('300x300', 'jpg', 'ffffff', '00p');
    }

    public function testPlaceholderTextNotPresent()
    {
        $this->assertMatchesRegularExpression('#https://placehold.it/[^\\?]+$#', $this->faker->placeholder('300x300', 'jpg', 'fff', '000'));
    }

    public function testPlaceholderTextPresent()
    {
        $this->assertMatchesRegularExpression('#https://placehold.it/(.+)\?text=hello#', $this->faker->placeholder('300x300', 'jpg', 'fff', '000', 'hello'));
    }
}
