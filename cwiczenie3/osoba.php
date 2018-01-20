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