<?php

namespace Modules\Recipe\Entities;

class RecipeFactory
{
    /**
     * @return RecipesList
     */
    public function getRecipesList()
    {
        return new RecipesList();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getRecipeById(int $id)
    {
        $recipe = Recipe::findOrFail($id, [
            'name',
            'description',
            'image'
        ]);
        $ingredientsId = $recipe->get('ingredient_id');
        $ingredients = $this->getIngredientsById($ingredientsId);

        $recipe['author'] = [
            'id' => 1,
            'name' => 'Pizzamaker'
        ];
        $recipe['ingredients'] = $ingredients;
        $recipe['steps'] = [];

        return $recipe;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getIngredientsById($id)
    {
        return Ingredients::findOrFail($id, [
            "total",
            "flour",
            "water",
            "salt",
            "oil",
            "yeast"
        ]);
    }
}
