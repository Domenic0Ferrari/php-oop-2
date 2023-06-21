<?php

$categories = [
    new Category(1, 'Cats'),
    new Category(2, 'Dogs'),
];

$arrProducts = [
    $food = new Food(1, 'Croccantini al salmone', 'Ottimi croccanti al gusto di salmone norvegese', $categories[0], 1000, 'percorso immagine', '2023-08-30', 300),
    $toy = new Toy(2, 'Palla di lana', 'Palla di lana per far divertire i vostri gattini', $categories[0], 1500, 'percorso immagine', 'Lana', 'Rosso'),
    $shelter = new Kennel(3, 'Cuccia da interno', 'Bellissima cuccia da interno per il vostro gattino', $categories[0], 3500, 'percorso immagine', 1000, 700, 800),
];
