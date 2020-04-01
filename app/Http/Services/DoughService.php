<?php

namespace App\Http\Services;

use App\Entities\Dough\Dough;
use App\Entities\Dough\DoughFactory;

class DoughService
{
    /** @var DoughFactory **/
    private $doughFactory;

    public function __construct(
        DoughFactory $doughFactory
    )
    {
        $this->doughFactory = $doughFactory;
    }

    /**
     * @param int $totalDough
     * @return Dough
     */
    public function retrieveIngredientsFromTotal(int $totalDough): Dough
    {
        return $this->doughFactory->generateIngredientsFromTotal($totalDough);
    }
}
