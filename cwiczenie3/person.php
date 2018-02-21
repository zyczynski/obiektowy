<?php
class Person
{
    private $name;
    private $surname;
    private $sex;
    private $year;
    private $friend;
    /** @var Vehicles */
    private $transport;

    function __construct($name, $surname, $sex, $year)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->sex = $sex;
        $this->year = $year;
    }
    public function Hello()
    {
        return "Czesc mam na imie " . $this->name;
    }
    public function calculateAge()
    {
        return " i mam " . (date('Y') - ($this->year)) . " lata";
    }

    public function Name()
    {
      return $this->name;
    }
    public function addFriend(Person $osoba)
    {

        $this->friend = $osoba;
        return " dodal " . $osoba->Name() . " do znajomych";
    }

    public function roznicaWieku(Person $person)
    {
        $Y1 = $person->year;
        $Y2 = $this->year;
        $age1 = new DateTime($Y1);
        $age2 = new DateTime($Y2);
        $roznica = $age1->diff($age2);


        return "Roznica wieku miedzy przyjaciolmi wynosi " . $roznica->format('%y') . " lat.";
    }

    public function setTransport(Vehicles $transportType)
    {
        $this->transport = $transportType;
    }


    public function getTransport()
    {
        {
            return $this->transport;
        }
    }


}

interface Vehicles
{
   public function averageSpeed();
   public function getName();

}

class Train implements Vehicles
{
    public function averageSpeed()
    {
        $TrainAverageSpeed = 30;
        return $TrainAverageSpeed;
    }

    public function getName()
    {
        return "Pociag";
    }

}

class Car implements Vehicles
    {
        public function averageSpeed()
        {
            $CarAverageSpeed = 50;
            return $CarAverageSpeed ;
        }

        public function getName()
        {
            return "Samochod";
        }
}