<?php

namespace Bezhanov\Tests\Faker\Provider;

class AvatarTest extends TestCase
{
    public function testAvatar()
    {
        $this->assertRegExp('#https://robohash.org/(.+).png#', $this->faker->avatar);
    }

    public function testAvatarWithCustomSlug()
    {
        $this->assertRegExp('#https://robohash.org/faker.png#', $this->faker->avatar('faker'));
    }

    public function testAvatarWithCorrectSize()
    {
        $this->assertRegExp('#https://robohash.org/faker.png\?size=150x320#', $this->faker->avatar('faker', '150x320'));
    }

    public function testAvatarWithIncorrectSize()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->avatar('faker', '150x320z');
    }

    public function testAvatarWithSupportedFormat()
    {
        $this->assertRegExp('#https://robohash.org/faker.jpg\?size=300x300#', $this->faker->avatar('faker', '300x300', 'jpg'));
    }

    public function testAvatarWithUnsupportedFormat()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->faker->avatar('faker', '300x300', 'unsupported_format');
    }

    public function testAvatarWithSet()
    {
        $this->assertRegExp('#https://robohash.org/faker.jpg\?size=300x300&set=set2#', $this->faker->avatar('faker', '300x300', 'jpg', 'set2'));
    }

    public function testAvatarWithBgset()
    {
        $this->assertRegExp('#https://robohash.org/faker.jpg\?size=300x300&set=set1&bgset=bg1#', $this->faker->avatar('faker', '300x300', 'jpg', 'set1', 'bg1'));
    }
}
