<?php



class Category
{
    public $name;
    public $iconUrl;

    function __construct($name, $iconUrl)
    {
        $this->name = $name;
        $this->iconUrl = $iconUrl;
    }
}
