<?php

namespace Xuplau\HSAPI\Entities;

class Card
{
    /** @var string */
    public $cardId;

    /** @var string */
    public $name;

    /** @var string */
    public $cardSet;

    /** @var string */
    public $type;

    /** @var string */
    public $faction;

    /** @var string */
    public $rarity;

    /** @var string */
    public $cost;

    /** @var string */
    public $attack;

    /** @var string */
    public $health;

    /** @var string */
    public $text;

    /** @var string */
    public $flavor;

    /** @var string */
    public $artist;

    /** @var bool */
    public $collectible;

    /** @var bool */
    public $elite;

    /** @var string */
    public $race;

    /** @var string */
    public $img;

    /** @var string */
    public $imgGold;

    /** @var string */
    public $locale;

    /** @var \Xuplau\HSAPI\Entities\Mechanics[] */
    public $mechanics = [];
}
