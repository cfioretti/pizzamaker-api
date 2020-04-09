<?php

namespace Modules\Pizza\Entities\Pan;

class RoundPan extends Pan
{
    /**
     * @param $measures
     * @return int
     */
    public function calculateDoughWeight($measures)
    {
        $ray = (int)$measures['diameter']/2;
        $weight = intval(pow($ray, 2) * 3.14 / 2);

        return $this->addPercentageToWeight($weight);
    }

    /** @return array */
    public static function acceptedMeasures()
    {
        return [
            "shape" => "round",
            "measures" => ["diameter"]
        ];
    }
}
