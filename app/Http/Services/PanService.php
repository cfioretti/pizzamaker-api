<?php

namespace App\Http\Services;

use Illuminate\Http\Request;

class PanService
{
    /**
     * @return array
     */
    public function getPans()
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
        return $pans;
    }

    /**
     * @param Request $request
     * @return object
     */
    public function calculateDoughByPans(Request $request)
    {
        $dough = (object)[
            "total" => (object)[
                "flour" => 500,
                "water" => 300,
                "oil" => 10,
                "salt" => 10
            ],
            "pans" => [
                (object)[
                    "shape" => "Round",
                    "measures" => (object)["Ray" => 4],
                    "dough" => 140
                ],
                (object)[
                    "shape" => "Rectangular",
                    "measures" => (object)["Width" => 3, "Length" => 4],
                    "dough" => 160
                ],
                (object)[
                    "shape" => "Round",
                    "measures" => (object)["Ray" => 7],
                    "dough" => 200
                ]
            ]
        ];
        return $dough;
    }
}
