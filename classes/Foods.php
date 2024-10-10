<?php

require_once __DIR__ . '/Products.php';

class Foods extends Products
{
    public $target; //Per che animale è indicato

    public function __construct(string $image, string $title, float $price, string $target)
    {
        parent::__construct($image,  $title,  $price,  "Cibo");  // Construct del padre

        $this->target = $target;
    }

    public function getTarget()
    {
        return $this->target;
    }
}