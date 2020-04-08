<?php

namespace Modules\Pizza\Entities\Pan;

interface PanInterface
{
    const PERCENTAGE_OF_DOUGH_TO_ADD = 10;

    public function calculateDoughWeight($measures);

    public function addPercentageToWeight($originalWeight);

    public static function acceptedMeasures();

    public function toArray();
}
