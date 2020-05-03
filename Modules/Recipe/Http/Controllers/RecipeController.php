<?php

namespace Modules\Recipe\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Recipe\Entities\Recipe;
use Modules\Recipe\Http\Services\RecipeService;

class RecipeController extends Controller
{
    /** @var RecipeService */
    private $recipeService;

    public function __construct(
        RecipeService $recipeService
    )
    {
        $this->recipeService = $recipeService;
    }

    /**
     * Display a listing of the resource.
     * @return JsonResponse
     */
    public function index()
    {
        $recipes = $this->recipeService->getRecipes();

        return response()->json(
            $recipes->toArray(),
            Response::HTTP_OK
        );
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Recipe
     */
    public function show($id)
    {
        return $this->recipeService->getRecipe($id);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
