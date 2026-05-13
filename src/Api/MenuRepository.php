<?php

namespace App\Api;

class MenuRepository
{
    public function getAll(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Krabby Patty',
                'price' => 1.25,
                'image' => 'media/krabby-patty.jpg',
                'alt' => 'Крабсбургер',
                'description' => 'Булочка, котлета, листя салату, цибуля, помідори, сир, мариновані огірки, гірчиця, кетчуп і секретний інгредієнт.',
            ],
            [
                'id' => 2,
                'name' => 'Krabby Fries',
                'price' => 2.99,
                'image' => 'media/krabby-fries.webp',
                'alt' => 'Картопля фрі',
                'description' => 'Класична картопля фрі, сіль і фірмова приправа.',
            ],
            [
                'id' => 3,
                'name' => 'Krusty Krab Pizza',
                'price' => 3.99,
                'image' => 'media/krusty-krab-pizza.webp',
                'alt' => 'Піца',
                'description' => 'Фірмова піца на сирній основі з пепероні та грибами.',
            ],
        ];
    }
}