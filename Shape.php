<?php

abstract class Shape
{
    protected $color;

    public function __construct($color='green')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    abstract protected function getArea();
}

class Square extends Shape
{
    protected $length = 2;

    public function getArea()
    {
        // return ($this->length * $this->length);
        // or
        return pow($this->length, 2);
    }
}

class Triangle extends Shape
{
    protected $base = 10;
    protected $height = 4;

    public function getArea()
    {
        return 0.5 * $this->base * $this->height;
    }
}

class Circle extends Shape
{
    protected $radius = 4;

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// $shape->getArea();

// echo (new Square)->getArea();

// $square = new Square();
// $area = $square->getArea();

// $triangle = new Triangle();
// $area2 = $triangle->getArea();

// $area3 = $circle->getArea();

echo (new Circle('yellow'))->getArea();

// echo $area3;
