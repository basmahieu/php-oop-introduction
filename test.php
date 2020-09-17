<?php

declare(strict_types=1);
class Product
{
    private string $name;
    private int $counter;

    public function __contstructor(string $name)
    {
        $this->name = $name;
    }
    function sell()
    {
        self::counter++;
    }
    function getTimeSold(): int
    {
        return self::counter;
    }
    static public timeSold()
    {

    }
  

}

$chair = new product


class solution { 
      
    static $count; 
      
    public static function getCount() { 
        return self::$count++; 
    } 
} 
  
solution::$count = 1; 
  
for($i = 0; $i < 5; ++$i) { 
    echo 'The next value is: '.  
    solution::getCount() . "\n"; 
} 