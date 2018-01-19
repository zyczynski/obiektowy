<?php
class Osoba
{
    private $imie;
    private $nazwisko;
    private $plec;
    private $rok;

    function __construct($imie, $nazwisko, $plec, $rok)
    {
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->plec = $plec;
        $this->rok = $rok;
    }

    public function powitaj()
    {
        return "Czesc mam na imie " . $this->imie;
    }
}

// Run.php

$user1 = new Osoba("Piotr", "Kacala", "mezczyzna", 1986);
echo $user1->powitaj() . "<br>";

$user1 = new Osoba("Bartek", "Zyczynski", "mezczyzna", 1985);
echo $user1->powitaj() . "<br>";