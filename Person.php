<?php

class Person
{
    private $name;
    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ($age < 18){
            throw new Exception(
                "Person is below set age requirement of 18 year"
            );
        }
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$steven = new Person('Steven Ennis');

// $steven->age = 30;
$steven->setAge(49);

//Manipulation of the age property which is not protected or encapsulated
$steven->age = 14;

var_dump($steven->getAge());
