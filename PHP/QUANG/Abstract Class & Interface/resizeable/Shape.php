<?php
class Shape
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function show(): string
    {
        return "I am a shape. My name is $this->name";
    }
    public function __toString()
    {
        return "I am a shape. My name is $this->name";
    }
}

$s1 = new Shape("HINH VUONG");
echo $s1;

?>