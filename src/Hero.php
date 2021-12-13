<?php
namespace App;

class Hero extends Fighter 
{

    private $weapon = null;
    private $shield = null;
    public function __construct(?Weapon $weapon, ?Shield $shield)
    {
        //parent::__construct($name, $strength, $dexterity, $image); 
        $this->weapon = $weapon;
        $this->shield = $shield;
    }
    public function getDamage(): int
    {
        $damage = $this->getStrength();
        if($this->getWeapon() !== null) {
            $damage += $this->getWeapon()->getDamage();
        }
        return $damage;
    }

    public function getDefense(): int
    {
        $defense = $this->getDexterity();
        if ($this->getShield() !== null) {
            $defense += $this->getShield()->getProtection();
        }    

        return $defense;
    }

    public function getWeapon(): ?Weapon
    {
        return $this->weapon;
    }

    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function getShield(): ?Shield
    {
        return $this->shield;
    }

    public function setShield(?Shield $shield): void
    {
        $this->shield = $shield;
    }

}