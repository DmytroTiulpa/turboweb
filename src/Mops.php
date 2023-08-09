<?php

namespace DogNamespace;

class Mops extends Dog
{
    public function makeSound(): string
    {
        return "woof! woof!";
    }

    public function hunt(): string
    {
        return "I'm too lazy to hunt.";
    }
}
