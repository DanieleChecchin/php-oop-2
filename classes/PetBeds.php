<?php

require_once __DIR__ . '/Products.php';

class PetBeds extends Products
{
    public $color;
    public $season;

    public function __construct(string $image, string $title, float $price, string $typeOf, $category, string $color, string $season)
    {
        parent::__construct($image,  $title,  $price, 'Cucce', $category);

        $this->color = $color;
        $this->season = $season;
    }

    public function getColor()
    {
        return $this->color;
    }
    public function getSeason()
    {
        return $this->season;
    }
}