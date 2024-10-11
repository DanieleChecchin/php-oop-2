<?php

require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/../traits/Info.php';

class AnimalToys extends Products
{
    public $color;
    public $weight;

    //TRAIT
    use Info;


    public function __construct(string $image, string $title, float $price, string $typeOf, $category, string $color, float $weight)
    {
        parent::__construct($image,  $title,  $price, $typeOf, $category);

        $this->color = $color;
        $this->weight = $weight;
    }

    public function getColor()
    {
        return $this->color;
    }
    public function getWeight()
    {
        return $this->weight;
    }
}
