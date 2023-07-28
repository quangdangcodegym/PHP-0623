<?php
namespace com\cg\shape;
include_once "Rectangle.php";

use com\cg\shape\Rectangle;
use JetBrains\PhpStorm\Pure;
class Square extends Rectangle
{
    #[Pure] public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }
}


?>