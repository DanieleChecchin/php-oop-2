<?php

require_once __DIR__ . '/Products.php';

class Foods extends Products
{
    public $target; //Per che animale è indicato

    public function __construct(string $image, string $title, float $price, string $typeOf, string $target)
    {
        parent::__construct($image,  $title,  $price,  $typeOf,  $target);

        $this->target = $target;
    }

    public function getTarget()
    {
        return $this->target;
    }
}