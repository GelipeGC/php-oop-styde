<?php

abstract class Unit {

    protected $alive = true;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move($direction)
    {
        echo "<p> {$this->name} avanza hacia $direction</p>";
    }
    
    abstract public function attack($opponent);

}

class Soldier extends Unit 
{
    public function attack($opponent)
    {
        echo "<p> {$this->name} corta a $opponent en dos</p>";
    }
}

class Archer extends Unit
{
    public function attack($opponent)
    {
        echo "<p> {$this->name} dispara una flecha a $opponent</p>";
    }
}

$fguzman = new Archer('Fguzman');
//$fguzman->move('el sur');
$fguzman->attack('fiona');