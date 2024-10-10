<?php

require_once __DIR__ . '/Products.php';

class AnimalToys extends Products
{
    public $color;
    public $weight;

    public function __construct(string $image, string $title, float $price, string $typeOf, string $color, float $weight)
    {
        parent::__construct($image,  $title,  $price, 'Giocattoli');

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