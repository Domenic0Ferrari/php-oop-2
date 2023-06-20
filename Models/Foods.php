<?php
class Foods extends Products
{
    public string $type;
    public string $expiry;
    // COSTRUTTORE
    public function __construct(string $name, int $price, string $categories, string $type, string $expiry)
    {
        $this->type = $type;
        $this->expiry = $expiry;
        // COSTRUTTORE GENITORE
        parent::__construct($name, $price, $categories);
    }
}
