<?php

namespace Xuplau\HSAPI\Filters;

class Card
{
    /** @var string
        If name not empty, ignore all other filters except collectible and locale
    */
    public $name;

    /** @var int (0|1) */
    public $collectible;

    /** @var string
        (enUS|enGB|deDE|esES|esMX|frFR|itIT|koKR|plPL|ptBR|ruRU|zhCN|zhTW|jaJP)
    */
    public $locale;

    /** @var int */
    public $attack;

    /** @var int */
    public $cost;

    /** @var int */
    public $durability;

    /** @var int */
    public $health;
}
