<?php

namespace Modules\Pizza\Entities\Pan;

class RectangularPan extends Pan
{
    /**
     * @param $measures
     * @return int
     */
    public function calculateDoughWeight($measures)
    {
        $width = (int)$measures['width'];
        $length = (int)$measures['length'];
        $weight = intval($width * $length / 2);

        return $this->addPercentageToWeight($weight);
    }

    /** @return array */
    public static function acceptedMeasures()
    {
        return [
            "shape" => "rectangular",
            "measures" => ["width", "length"]
        ];
    }
}
