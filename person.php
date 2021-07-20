<?php
class Person
{
    /* Здоровье человека не может быть более 100% */
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }

    function sayHi($name)
    {
        return "Hi, $name, I`m " . $this->name;
    }
    function setHP($hp)
    {
        if ($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHP()
    {
        return $this->hp;
    }
    function getAge()
    {
        return $this->age;
    }
    function getName()
    {
        return $this->name;
    }
    function getLastname()
    {
        return $this->lastname;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }




    function getInfo()
    {
        return " <h3>A few words about myself.</h3>
    <br>" . "My name is: " . $this->getName() .
            "<br>
    my lastname is: " . $this->getLastname() .
            "<br>
    my father is: " . $this->getFather()->getName() .
            "<br>
    he is " . $this->getFather()->getAge() . "years old" .
            "<br>he has a mother whose name is " . $this->getFather()->getMother()->getName() . ".She is "
            . $this->getFather()->getMother()->getAge() . "years old" .
            "<br>he also has a dad whose name is " . $this->getFather()->getFather()->getName() .
            " and he is " . $this->getFather()->getFather()->getAge() . " years old" .
            "<br>
     my mother is: " . $this->getMother()->getName() .
            "<br>
     she is " . $this->getMother()->getAge() . " years old" .
            "<br> she has a mother whose name is " . $this->getMother()->getMother()->getName() .
            ".She is " . $this->getMother()->getMother()->getAge() . " years old" .
            "<br>she also has a dad whose name is " . $this->getMother()->getFather()->getName() .
            " and he is " . $this->getMother()->getFather()->getAge() . " years old";
    }
}
$nikita = new Person("Nikita", "Sidorov", 71);
$anna = new Person("Anna", "Sidorova", 69);
$svetlana = new Person("Svetlana", "Petrova", 63);
$viktor = new Person("Viktor", "Petrov", 68);
$alex = new Person("Alex", "Petrov", 42, $svetlana, $viktor);
$olga = new Person("Olga", "Petrova", 42, $anna, $nikita);
$valera = new Person("Valera", "Petrov", 15, $olga, $alex);

echo $valera->getInfo();

// echo $valera->getMother()->getFather()->getName();


// $medKit = 50;
// $alex->setHP(-30); //Упал

// echo $alex->getHP()."<br>";
// $alex->setHP($medKit); //Нашел аптечку
// echo $alex->getHP();
