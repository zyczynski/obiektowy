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
    /** @var Animal */
    private $animal;

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
    public function addFriend(Person $person)
    {

        $this->friend = $person;
        return " dodal " . $person->Name() . " do znajomych";
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

    public function setAnimalType (Animal $typeOfAnimal)
    {
        $this->animal = $typeOfAnimal;
    }


    public function getAnimalType()
    {
        {
            return $this->animal;
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

interface Animal
{
    public function getAnimalName();
    public function wiek();
}

class Cat implements Animal
{
    public function getAnimalName()
    {
        return "cat";
    }

    public function wiek()
    {

    }
}

class Dog implements Animal
{
    public function getAnimalName()
    {
        return "dog";
    }

    public function wiek()
    {
        $rok = new DateTime('Y-m-d');
        return (string)$rok - $rokUrodzenia;
    }
}
