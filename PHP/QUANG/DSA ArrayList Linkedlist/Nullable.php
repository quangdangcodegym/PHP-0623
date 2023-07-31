<?php

class Nullable {
    public ?string $name = null;

    public function getFullName(): string {
        return $this->name;
    }
}

$a = new Nullable();
echo $a->getFullName();

?>