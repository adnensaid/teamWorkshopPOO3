<?php

namespace App;

class Shield
{
    private $protection = 10;
    private $image = 'shield.svg';

    /**
     * Get the value of protection
     */ 
    public function getProtection(): int
    {
        return $this->protection;
    }

    /**
     * Set the value of protection
     */ 
    public function setProtection(int $protection): void
    {
        $this->protection = $protection;
    }

    /**
     * Get the value of image
     */ 
    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    /**
     * Set the value of image
     *
     */ 
    public function setImage($image): void
    {
        $this->image = $image;
    }
}