<?php

namespace DogNamespace;

class Dog
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function makeSound()
    {
        return "woof! woof!";
    }

    public function hunt()
    {
        return "I'm hunting!";
    }
}
