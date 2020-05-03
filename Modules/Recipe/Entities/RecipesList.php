<?php


namespace Modules\Recipe\Entities;

use Illuminate\Contracts\Support\Arrayable;

class RecipesList
{
    /**
     * @return array
     */
    public function toArray()
    {
        return [
            [
                "id" => 1,
                "name" => "Pizza Romana",
                "author" => "Pizzamaker",
                "image" => "img/pizza_romana.png"
            ],
            [
                "id" => 2,
                "name" => "Pizza Napoletana",
                "author" => "Pizzamaker",
                "image" => "img/pizza_napoletana.png"
            ],
        ];
    }
}
