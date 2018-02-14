<?php
class Osoba
{
    private $imie;
    private $nazwisko;
    private $plec;
    private $rok;
    private $przyjaciel;
    private $transport =[];

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

        $this->przyjaciel = $osoba;
        return " dodal " . $osoba->Imie() . " do znajomych";
    }

    public function roznicaWieku(Osoba $osoba)
    {
        $Y1 = $osoba->rok;
        $Y2 = $this->rok;
        $wiek1 = new DateTime($Y1);
        $wiek2 = new DateTime($Y2);
        $roznica = $wiek1->diff($wiek2);


        return "Roznica wieku miedzy przyjaciolmi wynosi " . $roznica->format('%y') . " lat.";
    }


    public function __set($co, $wartosc)
    {
        $this->transport[$co] = $wartosc;
        echo "Preferowany transport to " . $co;
    }

    public function __get($co)
    {
        return "Preferowany transport to " . $this->transport[$co];

    }

}

interface Pojazdy
{
   public function sredniaPredkosc();
}

class Pociag implements Pojazdy
{
    public function sredniaPredkosc()
    {
        $predkoscPociagu = 30;
        return $predkoscPociagu;
    }
}

class Samochod implements Pojazdy
    {
        public function sredniaPredkosc()
        {
            $predkoscSamochodu = 50;
            return $predkoscSamochodu ;
        }
    }