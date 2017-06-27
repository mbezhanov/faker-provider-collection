<?php

namespace Bezhanov\Faker\Provider;

use Faker\Provider\Base;

class Placeholder extends Base
{
    protected static $supportedFormats = ['png', 'jpg', 'gif', 'jpeg'];

    public function placeholder(string $size = '300x300', string $format = 'png', string $backgroundColor = null, string $textColor = null, string $text = null): string
    {
        if (!preg_match('/^[0-9]+x[0-9]+$/', $size)) {
            throw new \InvalidArgumentException('Size should be specified in format 300x300');
        }

        if (!in_array($format, static::$supportedFormats)) {
            throw new \InvalidArgumentException('Supported formats are ' . implode(', ', static::$supportedFormats));
        }

        if ($backgroundColor && !preg_match('#((?:^[0-9a-f]{3}$)|(?:^[0-9A-Fa-f]{6}$)){1}(?!.*\H)#i', $backgroundColor)) {
            throw new \InvalidArgumentException("backgroundColor must be a hex value without '#'");
        }

        if ($textColor && !preg_match('#((?:^[0-9a-f]{3}$)|(?:^[0-9A-Fa-f]{6}$)){1}(?!.*\H)#i', $textColor)) {
            throw new \InvalidArgumentException("textColor must be a hex value without '#'");
        }

        $url = "https://placehold.it/$size.$format";

        if ($backgroundColor) {
            $url .= "/$backgroundColor";
        }

        if ($textColor) {
            $url .= "/$textColor";
        }

        if ($text) {
            $url .= "?text=$text";
        }

        return $url;
    }
}
