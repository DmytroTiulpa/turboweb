<?php

namespace DogNamespace;

class RubberTaxa extends Dog
{
    public function makeSound()
    {
        return "squeak! squeak!";
    }

    public function hunt()
    {
        return "I'm a toy, I can't hunt.";
    }
}