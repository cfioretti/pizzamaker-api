<?php

namespace Modules\Recipe\Http\Services;

use Modules\Recipe\Entities\Recipe;
use Modules\Recipe\Entities\RecipeFactory;
use Modules\Recipe\Entities\RecipesList;

class RecipeService
{
    /** @var RecipeFactory */
    private $recipeFactory;

    public function __construct(
        RecipeFactory $recipeFactory
    )
    {
        $this->recipeFactory = $recipeFactory;
    }

    /**
     * @return RecipesList
     */
    public function getRecipes(): RecipesList
    {
        return $this->recipeFactory->getRecipesList();
    }

    /**
     * @param int
     * @return Recipe
     */
    public function getRecipe(int $id)
    {
        return $this->recipeFactory->getRecipeById($id);
    }
}
