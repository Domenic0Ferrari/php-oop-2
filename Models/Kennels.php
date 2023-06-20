<?php
class Kennels extends Products
{
    public string $materials;
    public string $size;
    // COSTRUTTORE
    public function __construct(string $name, int $price, string $categories, string $materials, string $size)
    {
        $this->materials = $materials;
        $this->size = $size;
        // COSTRUTTORE DEL GENITORE
        parent::__construct($name, $price, $categories);
    }
}
