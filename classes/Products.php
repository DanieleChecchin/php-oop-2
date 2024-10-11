<?php

require_once __DIR__ . '/Category.php';

class Products
{                             // Variabili d'istanza
    public string $image;
    public string $title;
    public float $price;
    public string $typeOf;
    public Category $category;

    public function __construct(string $image, string $title, float $price, string $typeOf, Category $category)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->typeOf = $typeOf;
        $this->category = $category;                                       // Construct
    }

    public function getImage()
    {
        return $this->image;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getTypeOf()
    {
        return $this->typeOf;
    }
}
