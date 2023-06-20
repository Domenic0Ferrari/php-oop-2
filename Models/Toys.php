<?php
class Toys extends Products
{
    public string $materials;
    public string $size;
    // COSTRUTTORE
    public function __construct(string $materials, string $size, string $name, int $price, string $categories)
    {
        $this->materials = $materials;
        $this->size = $size;
        // COSTRUTTORE GENITORE
        parent::__construct($name, $price, $categories);
    }
}
