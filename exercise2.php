<?php

// EXERCISE ONE
class Beverage
{
    // Properties
    public string $color;
    public int $price;
    public string $temperature;

    // Constructor
    public function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    // Methods
    public function getInfo()
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color;
    }
}

$cola = new Beverage('black', 2);
echo $cola->getInfo();

// EXERCISE TWO
class Beer extends Beverage
{
    public string $name;
    public float $alcoholPercentage;

    public function __construct(string $color, float $price,  string $name, float $alcoholPercentage, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholpercentage()
    {
        return $this->alcoholPercentage . '%';
    }
}

$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);
echo '<br>';
echo $duvel->alcoholPercentage . '%';
echo '<br>';
echo $duvel->getAlcoholpercentage();
echo '<br>';
echo $duvel->color;
echo '<br>';
echo $duvel->getInfo();
echo '<br>';
echo '<br>';
echo $cola->alcoholPercentage . '%';
