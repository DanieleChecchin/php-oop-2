<?php

require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/../traits/Info.php';
class Foods extends Products
{
    public $target; //Per che animale è indicato

    //TRAIT
    use Info;

    public function __construct(string $image, string $title, float $price, string $typeOf, $category, string $target)
    {
        parent::__construct($image,  $title,  $price,  $typeOf, $category);  // Construct del padre

        $this->target = $target;
    }

    public function getTarget()
    {
        return $this->target;
    }
}
