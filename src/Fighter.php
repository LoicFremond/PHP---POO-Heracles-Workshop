<?php

class Fighter
{
    const MAX_LIFE = 100;

    private $name;

    private $life = self :: MAX_LIFE;

    private $strenght;

    private $dexterity;

    public function __construct(string $name, int $strenght, int $dexterity)
    {
        $this->name = $name;
        $this->strenght = $strenght;
        $this->dexterity = $dexterity;
    }

    public function setName(string $name) : Fighter
    {
        $this->name = $name;
        return $this;
    }

    public function getName() : string
    {
        return $this->name;
    }


    public function setDexterity($dexterity)
    {
        $this->dexterity = $dexterity;

        return $this;
    }

    public function getDexterity()
    {
        return $this->dexterity;
    }


    public function getStrenght()
    {
        return $this->strenght;
    }

    public function setStrenght($strenght)
    {
        $this->strenght = $strenght;

        return $this;
    }
    

    /**
     * Get the value of life
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @return  self
     */
    public function setLife($life)
    {
        /*         if ($life >= 0) {
                    $this->life = $life;
                } else {
                    $life = 0;
                } */
        $this->life = $life >= 0 ? $life : 0;

        return $this;
    }

    public function getDefense() : int
    {
        return $this->getDexterity();
    }

    public function getDamage() : int
    {
        $damage = rand(1, $this->getStrenght());
        return $damage;
    }

    // soustraire aux dégats le score de defense de l'attaqué
    public function fight(Fighter $targetFighter)
    {
        $damages = $this->getDamage();
        $damages -= $targetFighter->getDefense();
        $damages = $damages < 0 ? 0 : $damages;
        $targetFighter->setLife($targetFighter->getLife() - $damages);
    }
    // diminuer le nb de pts de vie l'attaqué par la valeur ainsi obtenue

    public function isDead() : bool
    {
        return $this->getLife() <= 0 ? true : false;
    }
}