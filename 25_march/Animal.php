<?php
interface Animal
{
    public function eat();
    public function walk();
    public function makeSound();
}

class DomesticAnimals implements Animal
{
    public function eat()
    {
        echo "Glass or meat";
    }
    public function walk()
    {
        echo "4 legs or 2";
    }
    public function makeSound()
    {
        echo "Kwabira";
    }
}

class carnivole implements Animal
{
    public function eat()
    {
        echo "meat";
    }
    public function walk()
    {
        echo "4 legs";
    }
    public function makeSound()
    {
        echo "Kwabira";
    }
}


class cat implements Animal
{
    public function eat()
    {
        echo "Meet";
    }
    public function walk()
    {
        echo "4 legs";
    }
    public function makeSound()
    {
        echo "meows";
    }
}

class dog implements Animal
{
    public function eat()
    {
        echo "Meet";
    }
    public function walk()
    {
        echo "4 legs";
    }
    public function makeSound()
    {
        echo "balks";
    }
}




class WildAnimal implements Animal
{
    public function eat()
    {
        echo "Meet";
    }
    public function walk()
    {
        echo "4 legs";
    }
    public function makeSound()
    {
        echo "gutonoma";
    }
}

