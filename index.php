
<?php

require_once './src/Fighter.php';

$fighter1 = new Fighter(' 🧟 Héraclès', 20, 6);
$fighter2= new Fighter(' 🦁 Lion de Némée', 11, 13);

/* echo $fighter1->getName() . " a " . $fighter1->getLife() . '</br>' ;
echo $fighter2->getName() . " a " . $fighter2->getLife() . '</br>' ; */

// $fighter2->fight($fighter1);

// echo $fighter1->getName() . " a " . $fighter1->getLife() . '</br>' ;
// echo $fighter2->getName() . " a " . $fighter2->getLife();

$counter = 1;

// while ($fighter1->getLife() > 0 && $fighter2->getLife() > 0)
while (!$fighter1->isDead() && !$fighter2->isDead()) {
    echo "Round $counter </br>" ;

    echo $fighter1->getName() . " ⚔️ " . $fighter2->getName() . " 🖤 " . $fighter2->getName() . " : " . $fighter2->getLife() . "</br>";
    $fighter1->fight($fighter2);
    if ($fighter2->isDead()) {
        echo $fighter1->getName() . " a vaincu " . $fighter2->getName() . "</br>";
    } else {
        echo $fighter2->getName() . " ⚔️ " . $fighter1->getName() . " 🖤 " . $fighter1->getName() . " : " . $fighter1->getLife() . "</br>";
        $fighter2->fight($fighter1);
        if ($fighter1->isDead()) {
            echo $fighter2->getName() . " a vaincu " . $fighter1->getName() . "</br>";
        }
    }

    echo "</br>";

    $counter ++;
}