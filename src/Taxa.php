<?php

namespace DogNamespace;

class Taxa extends Dog
{
    public function makeSound(): string
    {
        return "woof!";
    }

    public function hunt(): string
    {
        return "I'm hunting!";
    }
}
