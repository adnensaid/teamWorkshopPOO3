<?php

namespace App;

class Weapon
{
    private $damage;
    private $image;
    private $range;

    public function __construct(float $range = 0.5, int $damage = 10, string $image = 'sword.svg')
    {
        $this->range = $range;
        $this->damage = $damage;
        $this->image = $image;
    }


    public function getRange(): float
    {
        return $this->range;
    }

    public function setRange(float $range): void
    {
        $this->range = $range;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }
}