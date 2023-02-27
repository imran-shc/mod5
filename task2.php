<?php

class Person{
    private $name;
    private $email;
    private $methods;

    function __construct($name="",$email=""){
        $this->name = $name;
        $this->email = $email;
    }

    function setName($name){
        $this->name = $name;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function getName(){
        return $this->name;
    }

    function getEmail(){
        return $this->email;
    }
}

$person_disply = new Person("imran", "mdimranali373@gmail.com");

echo $person_disply->getName();
echo "\n";
echo $person_disply->getEmail();
