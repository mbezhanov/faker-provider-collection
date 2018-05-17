<?php

namespace Bezhanov\Faker\Provider;

use Faker\Provider\Base;

class Commerce extends Base
{
    protected static $department = ["Books", "Movies", "Music", "Games", "Electronics", "Computers", "Home", "Garden", "Tools", "Grocery", "Health", "Beauty", "Toys", "Kids", "Baby", "Clothing", "Shoes", "Jewelry", "Sports", "Outdoors", "Automotive", "Industrial"];

    protected static $productName = [
        'adjective' => ['Small', 'Ergonomic', 'Rustic', 'Intelligent', 'Gorgeous', 'Incredible', 'Fantastic', 'Practical', 'Sleek', 'Awesome', 'Enormous', 'Mediocre', 'Synergistic', 'Heavy Duty', 'Lightweight', 'Aerodynamic', 'Durable'],
        'material' => ['Steel', 'Wooden', 'Concrete', 'Plastic', 'Cotton', 'Granite', 'Rubber', 'Leather', 'Silk', 'Wool', 'Linen', 'Marble', 'Iron', 'Bronze', 'Copper', 'Aluminum', 'Paper'],
        'product' => ['Chair', 'Car', 'Computer', 'Gloves', 'Pants', 'Shirt', 'Table', 'Shoes', 'Hat', 'Plate', 'Knife', 'Bottle', 'Coat', 'Lamp', 'Keyboard', 'Bag', 'Bench', 'Clock', 'Watch', 'Wallet'],
    ];

    protected static $promotionCode = [
        'adjective' => ['Amazing', 'Awesome', 'Cool', 'Good', 'Great', 'Incredible', 'Killer', 'Premium', 'Special', 'Stellar', 'Sweet'],
        'noun' => ['Code', 'Deal', 'Discount', 'Price', 'Promo', 'Promotion', 'Sale', 'Savings'],
    ];

    public function promotionCode(int $digits = 6): string
    {
       return static::randomElement(static::$promotionCode['adjective'])
           . static::randomElement(static::$promotionCode['noun'])
           . $this->generator->randomNumber($digits, true);
    }

    public function department(int $max = 3, bool $fixedAmount = false): string
    {
        $categories = [];

        if (!$fixedAmount) {
            $max = mt_rand(1, $max);
        }
        $uniqueGenerator = $this->generator->unique(true);

        for ($i = 0; $i < $max; $i++) {
            $categories[] = $uniqueGenerator->category;
        }

        if (count($categories) >= 2) {
            $commaSeparatedCategories = implode(', ', array_slice($categories, 0, -1));
            $categories = [
                $commaSeparatedCategories,
                end($categories),
            ];
        }

        return implode(' & ', $categories);
    }

    public function category(): string
    {
        return static::randomElement(static::$department);
    }

    public function productName(): string
    {
        return static::randomElement(static::$productName['adjective'])
            . ' ' . static::randomElement(static::$productName['material'])
            . ' ' . static::randomElement(static::$productName['product']);
    }
}
