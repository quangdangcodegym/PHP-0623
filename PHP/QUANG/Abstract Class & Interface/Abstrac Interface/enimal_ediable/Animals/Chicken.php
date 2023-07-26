<?php

include_once(dirname(__FILE__) . '/../AbstractClass/Animal.php');


class Chicken extends Animal
{
    public function makeSound(): string
    {
        return "Chicken: cluck-cluck!";
    }
}