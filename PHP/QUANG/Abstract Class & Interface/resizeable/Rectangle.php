<?php
namespace com\cg\shape;
use JetBrains\PhpStorm\Pure;
include_once "Shape.php";

use com\cg\shape\Shape;
use com\cg\shape\Resizeable;


class Rectangle extends Shape implements Resizeable
{
    public int $width;
    public int $height;

    #[Pure] public function __construct(string $name,
                                        int $width,
                                        int $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float|int
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter(): float|int
    {
        return ($this->height + $this->width) * 2;
    }
    public function resize(float $pecent){
        $this->width = ($pecent * $this->width)/100;;
    }
}


?>