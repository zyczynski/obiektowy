<?php

include 'person.php';

$user1 = new Person("Piotr", "Kacala", "mezczyzna", 1986);
$user2 = new Person("Bartek", "Zyczynski", "mezczyzna", 1985);

$dataCzas = new DateTime();

echo $user1->Hello();
echo $user1->calculateAge() . '<br>';

echo $user2->Hello();
echo $user2->calculateAge() . "<br>";


echo $user1->Name();
echo $user1->addFriend($user2);
echo "</br>";
echo $user1->roznicaWieku($user2);
echo "</br>";

$pociag = new Train();
$samochod = new Car();



$user1->setTransport($samochod);

echo $user1->getTransport()->getName();
echo "<br>";

$cat = new Cat();
$dog = new Dog();

$user1->setAnimalType($cat);
echo $user1->getAnimalType()->getAnimalName();
//wazna zmiana



