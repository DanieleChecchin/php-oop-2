<?php



//immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

class Products
{                             // Variabili d'istanza
    public $image;
    public $title;
    public $price;
    public $typeOf;
    public $category;

    public function __construct(string $image, string $title, float $price, string $typeOf, $category)
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