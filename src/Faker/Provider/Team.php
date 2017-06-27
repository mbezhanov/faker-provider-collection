<?php

namespace Bezhanov\Faker\Provider;

use Faker\Provider\Base;

class Team extends Base
{
    protected static $creatures = ['ants', 'bats', 'bears', 'bees', 'birds', 'buffalo', 'cats', 'chickens', 'cattle', 'dogs', 'dolphins', 'ducks', 'elephants', 'fishes', 'foxes', 'frogs', 'geese', 'goats', 'horses', 'kangaroos', 'lions', 'monkeys', 'owls', 'oxen', 'penguins', 'people', 'pigs', 'rabbits', 'sheep', 'tigers', 'whales', 'wolves', 'zebras', 'banshees', 'crows', 'black cats', 'chimeras', 'ghosts', 'conspirators', 'dragons', 'dwarfs', 'elves', 'enchanters', 'exorcists', 'sons', 'foes', 'giants', 'gnomes', 'goblins', 'gooses', 'griffins', 'lycanthropes', 'nemesis', 'ogres', 'oracles', 'prophets', 'sorcerers', 'spiders', 'spirits', 'vampires', 'warlocks', 'vixens', 'werewolves', 'witches', 'worshipers', 'zombies', 'druids'];
    protected static $sports = ['baseball', 'basketball', 'football', 'hockey', 'rugby', 'lacrosse', 'soccer'];

    public function team(): string
    {
        return ucwords($this->generator->state . ' ' . static::randomElement(static::$creatures));
    }

    public function sport(): string
    {
        return static::randomElement(static::$sports);
    }
}
