<?php
class Product
{
    // CONSTRUCT (si può scrivere così da php.8)
    public function __construct(
        protected int $id,
        protected string $name,
        protected string $description,
        protected Category $category,
        protected int $price,
        protected string $image,
    ) {
    }

    public function printCard()
    {
        // ritorna il codice html della card da mostrare in pagina
        return 'sono la card di:' . $this->name . '<br>';
    }
}
