<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class PanController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function pansList(): JsonResponse
    {
        $pans = [
            (object)[
                "id" => 1,
                "shape" => "Round",
                "measures" => ["Ray"]
            ],
            (object)[
                "id" => 2,
                "shape" => "Rectangular",
                "measures" => ["Width", "Length"]
            ],
            (object)[
                "id" => 3,
                "shape" => "Square",
                "measures" => ["Edge"]
            ]
        ];
        return response()->json(
            $pans,
            Response::HTTP_OK
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function generateDough(Request $request): JsonResponse
    {
        $this->validate($request, [
            'pans' => 'required|array',
            'pans.*.shape' => 'required|string',
            'pans.*.measure' => 'required',
        ]);

        $pans = (object)[
            "total" => (object)[
                "flour" => 500,
                "water" => 300,
                "oil" => 10,
                "salt" => 10
            ],
            "pans" => [
                (object)[
                    "shape" => "Round",
                    "measures" => ["Ray" => 4],
                    "dough" => 140
                ],
                (object)[
                    "shape" => "Rectangular",
                    "measures" => ["Width" => 3, "Length" => 4],
                    "dough" => 160
                ],
                (object)[
                    "shape" => "Round",
                    "measures" => ["Ray" => 7],
                    "dough" => 200
                ]
            ]
        ];
        return response()->json(
            $pans,
            Response::HTTP_OK
        );
    }
}
