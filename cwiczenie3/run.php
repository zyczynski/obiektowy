<?php

include 'osoba.php';

$user1 = new Osoba("Piotr", "Kacala", "mezczyzna", 1986);
echo $user1->powitaj() . "<br>";

$user1 = new Osoba("Bartek", "Zyczynski", "mezczyzna", 1985);
echo $user1->powitaj() . "<br>";