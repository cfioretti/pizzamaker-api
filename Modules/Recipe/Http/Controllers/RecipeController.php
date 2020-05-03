<?php

namespace Modules\Recipe\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Recipe\Entities\Recipe;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return JsonResponse
     */
    public function index()
    {
        $recipes = [
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
        return response()->json(
            $recipes,
            Response::HTTP_OK
        );
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
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return Recipe::findOrFail($id);
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
