<?php

/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 13.11.2018
 * Time: 22:38
 */
class FirstClass
{
    private $name;

    public function setName($value) {
        $this->name = $value;
    }

    public function getName() {
        return $this->name;
    }
}

class City
{
    private $name;
    private $piople = [];

    public function setName($value) {
        $this->name = $value;
    }

    public function getName() {
        return $this->name;
    }

    public function addPerson(FirstClass $class) {
        $this->piople[] = $class;
    }

    public function getPiople() {
        $result = '';
        /** @var FirstClass $person*/
        foreach ($this->piople as $person){
            $result .= $person->getName();
        }
        return $result;
    }
}


$person1 = new FirstClass();
$person1->setName('Andrey');
//$person1->getName();
