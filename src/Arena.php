<?php
namespace App;
class Arena {
    private $monsters;
    private $hero;
    private $size = 10;
    public function __construct(array $monsters, ?Hero $hero)
    {
        $this->monsters = $monsters;
        $this->hero = $hero;
    }

    public function getDistance(Fighter $fighter1, Fighter $fighter2): int
    {
        return sqrt(($fighter2->getX() - $fighter1->getX())**2 + ($fighter2->getY() - $fighter1->getY())**2);
    }
//$arena->touchable($arena->getHero(), $fighter)
    public function touchable(Fighter $attacker, Fighter $defender): bool
    {
        if ($this->getDistance($attacker, $defender) <=  $attacker->getRange()){
            return true;
        }
        return false;
    }
    public function getMonsters(): array
    {
        return $this->monsters;
    }

    /**
     * @param array $monsters
     */
    public function setMonsters(array $monsters): void
    {
        $this->monsters = $monsters;
    }

    /**
     * @return Hero|null
     */
    public function getHero(): ?Hero
    {
        return $this->hero;
    }

    /**
     * @param Hero|null $hero
     */
    public function setHero(?Hero $hero): void
    {
        $this->hero = $hero;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

}