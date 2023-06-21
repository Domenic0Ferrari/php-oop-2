<?php
include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Category.php';
class Food extends Product
{
    public function __construct(
        protected int $id,
        protected string $name,
        protected string $description,
        protected Category $category,
        protected int $price,
        protected string $image,
        // NEW
        protected string $expiry,
        protected string $weight,
    ) {
        parent::__construct($id, $name, $description, $category, $price, $image);
    }

    public function printCard()
    {
        // ritorna il codice html della card da mostrare in pagina
        return "
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"{$this->image}\" class=\"card-img-top\" alt=\"{$this->name}\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{$this->name}</h5>
                    <p class=\"card-text\">{$this->description}</p>
                </div>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\">Peso: {$this->weight}g</li>
                    <li class=\"list-group-item\">Data di scadenza: {$this->expiry}</li>
                    <li class=\"list-group-item\">Prezzo: £{$this->price}</li>
                    <li class=\"list-group-item\">Categoria: {$this->category->getName()}</li>
                </ul>
                <div class=\"card-body\">
                    <a href=\"#\" class=\"card-link\">Card Link</a>
                </div>
            </div>
        ";
    }
}
