<?php

namespace App\Entities\Pan;

class SquarePan extends Pan
{
    /**
     * @param $measures
     * @return int
     */
    public function calculateDoughWeight($measures)
    {
        $edge = (int)$measures['edge'];
        $weight = intval(pow($edge, 2) / 2);

        return $this->addPercentageToWeight($weight);
    }

    /** @return array */
    public static function acceptedMeasures()
    {
        return [
            "shape" => "square",
            "measures" => ["edge"]
        ];
    }
}
