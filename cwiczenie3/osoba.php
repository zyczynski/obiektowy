<?php
class Osoba
{
    private $imie;
    private $nazwisko;
    private $plec;
    private $rok;
    private $przyjaciel;

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
    public function obliczWiek()
    {
        return " i mam " . (date('Y') - ($this->rok)) . " lata";
    }

    public function Imie()
    {
      return $this->imie;
    }
    public function dodajZnajomego(Osoba $osoba)
    {

        $this->przyjaciel = $osoba->Imie();
        return " dodal " . $osoba->Imie() . " do znajomych";
    }
}