<?php
include_once __DIR__ . '/Product.php';
class Kennel extends Product
{
    public function __construct(
        protected int $id,
        protected string $name,
        protected string $description,
        protected Category $category,
        protected int $price,
        protected string $image,
        // NEW
        private int $height, // in millimetri
        private int $width,
        private int $length,
    ) {
        parent::__construct($id, $name, $description, $category, $price, $image);
    }

    public function printCard()
    {
        // ritorna il codice html della card da mostrare in pagina
        return "
        <div class=\"col\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"{$this->image}\" class=\"card-img-top\" alt=\"{$this->name}\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{$this->name}</h5>
                    <p class=\"card-text\">{$this->description}</p>
                </div>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\">{$this->weight}</li>
                    <li class=\"list-group-item\">{$this->expiry}</li>
                    <li class=\"list-group-item\">£{$this->price}</li>
                    <li class=\"list-group-item\">£{$this->category->getName()}</li>
                </ul>
                <div class=\"card-body\">
                    <a href=\"#\" class=\"card-link\">Card Link</a>
                </div>
            </div>
        </div>
        ";
    }
}
