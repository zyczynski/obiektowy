<?php

include 'osoba.php';

$user1 = new Osoba("Piotr", "Kacala", "mezczyzna", 1986);
$user2 = new Osoba("Bartek", "Zyczynski", "mezczyzna", 1985);

$dataCzas = new DateTime();

echo $user1->powitaj();
echo $user1->obliczWiek() . '<br>';

echo $user2->powitaj();
echo $user2->obliczWiek() . "<br>";


echo $user1->Imie();
echo $user1->dodajZnajomego($user2);
echo "</br>";
echo $user1->roznicaWieku($user2);
echo "</br>";

$user1->setTransport("pociag");
echo $user1->getTransport();

