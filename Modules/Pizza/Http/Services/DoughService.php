<?php

namespace Modules\Pizza\Http\Services;

use Modules\Pizza\Entities\Dough\Dough;
use Modules\Pizza\Entities\Dough\DoughFactory;

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
