<?php

require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/../traits/Info.php';


class PetBeds extends Products
{
    public $color;
    public $season;

    //TRAIT
    use Info;


    public function __construct(string $image, string $title, float $price, string $typeOf, $category, string $color, string $season)
    {
        parent::__construct($image,  $title,  $price, $typeOf, $category);

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
