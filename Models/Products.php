<?php
class Products
{
    public string $name;
    public int $price;
    public string $categories;

    // CONSTRUCT
    public function __construct(string $name, int $price, string $categories)
    {
        $this->name = $name;
        $this->price = $price;
        $this->categories = $categories;
    }
}
