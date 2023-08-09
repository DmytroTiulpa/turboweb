<?php

use PHPUnit\Framework\TestCase;
use DogNamespace\Mops;
use DogNamespace\Taxa;
use DogNamespace\PlushLabrador;
use DogNamespace\RubberTaxa;

class Test extends TestCase
{
    public function testMopsSound()
    {
        $mops = new Mops("Mops");
        $this->assertEquals("woof! woof!", $mops->makeSound());
    }

    public function testMopsHunt()
    {
        $mops = new Mops("Mops");
        $this->assertEquals("I'm too lazy to hunt.", $mops->hunt());
    }

    public function testTaxaSound()
    {
        $taxa = new Taxa("Taxa");
        $this->assertEquals("woof!", $taxa->makeSound());
    }

    public function testTaxaHunt()
    {
        $taxa = new Taxa("Taxa");
        $this->assertEquals("I'm hunting!", $taxa->hunt());
    }

    public function testPlushLabradorSound()
    {
        $plushLabrador = new PlushLabrador("Plush Labrador");
        $this->assertEquals("woof! woof!", $plushLabrador->makeSound());
    }

    public function testPlushLabradorHunt()
    {
        $plushLabrador = new PlushLabrador("Plush Labrador");
        $this->assertEquals("I'm a toy, I can't hunt.", $plushLabrador->hunt());
    }

    public function testRubberTaxaSound()
    {
        $rubberTaxa = new RubberTaxa("Rubber Taxa");
        $this->assertEquals("squeak! squeak!", $rubberTaxa->makeSound());
    }

    public function testRubberTaxaHunt()
    {
        $rubberTaxa = new RubberTaxa("Rubber Taxa");
        $this->assertEquals("I'm a toy, I can't hunt.", $rubberTaxa->hunt());
    }

}
