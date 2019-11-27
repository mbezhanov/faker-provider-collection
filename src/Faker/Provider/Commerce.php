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

    protected static $brandName = [
        'A' => ['ABC','Activia','Adem Sari','AdeS','Agel','Aice','Aim Biscuits','Ajinomoto','Alamina','Anchor','Anlene','Apollo','Aqua','Arirang','Arla','Arnott\'s','Arrow Brand','Ashitaki','Astor','Australia\'s Own Organic','Ayam Brand'],
        'B' => ['Bamboe','Bango','Barco','Batagor','Beard Papa\'s','Belfoods','Bella','Belvita','Beng-Beng','Bernardi','Bertolli','Bihunku','Bimoli','Bintang','Bio Kul','Biokul','Biskitop','Blue Band','Borges','Bragg','Brookfarm','BSN','Buavita','Bulla','BXN'],
        'C' => ['Cadbury','Calbee Wings','Calpico','Camel','Campbell\'s','Campina','Cap Enaak','Captain Oats','Carnation','Carnivor','CCO','Cedea','Ceremix','Ceres','Champ','Chatime','Cheetos','Chia-Yo','Chiki','Chips Ahoy','Chitato','Choki Choki','Chuba','Cimory','CNI','Coca-Cola','Colatta','Coolant','Country Choice']
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

    public function brandName($alphabet = 'A'): string
    {
        if (\strtoupper($alphabet) == 'A') {
            $brands = static::randomElement(static::$brandName['A']);
        } else {
            $brands = static::randomElement(static::$brandName[$alphabet]);
        }

        return $brands;
    }
}
