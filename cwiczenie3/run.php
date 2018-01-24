<?php

include 'osoba.php';

$user1 = new Osoba("Piotr", "Kacala", "mezczyzna", 1986);
$user2 = new Osoba("Bartek", "Zyczynski", "mezczyzna", 1985);


echo $user1->powitaj();
echo $user1->obliczWiek() . '<br>';

echo $user2->powitaj();
echo $user2->obliczWiek();