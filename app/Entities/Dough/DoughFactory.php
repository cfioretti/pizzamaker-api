<?php

namespace App\Entities\Dough;

use stdClass;

class DoughFactory
{
    /**
     * @param int $totalDough
     * @return Dough
     */
    public function generateIngredientsFromTotal(int $totalDough): Dough
    {
        $part = (float)$totalDough / 1800;

        $doughObj = new stdClass();
        $doughObj->total = $totalDough;
        $doughObj->flour = round($part * 1000, 0, PHP_ROUND_HALF_EVEN);
        $doughObj->water = round($part * 750, 0, PHP_ROUND_HALF_EVEN);
        $doughObj->salt = round($part * 22, 0, PHP_ROUND_HALF_UP);
        $doughObj->evoOil = round($part * 18, 0, PHP_ROUND_HALF_UP);
        $doughObj->yeast = round($part * 10, 0, PHP_ROUND_HALF_UP);

        return Dough::importFromObject($doughObj);
    }
}
