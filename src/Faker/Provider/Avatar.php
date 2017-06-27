<?php

namespace Bezhanov\Faker\Provider;

use Faker\Provider\Base;

class Avatar extends Base
{
    protected static $supportedFormats = ['png', 'jpg', 'bmp'];

    public function avatar(string $slug = null, string $size = '300x300', string $format = 'png', string $set = 'set1', string $bgset = null): string
    {
        if (!preg_match('/^[0-9]+x[0-9]+$/', $size)) {
            throw new \InvalidArgumentException('Size should be specified in format 300x300');
        }

        if (!in_array($format, static::$supportedFormats)) {
            throw new \InvalidArgumentException('Supported formats are ' . implode(', ', static::$supportedFormats));
        }

        $slug = $slug ?? $this->generator->slug(3);
        $bgsetQuery = $bgset ? "&bgset=$bgset" : '';

        return "https://robohash.org/$slug.$format?size=$size&set=$set$bgsetQuery";
    }
}
