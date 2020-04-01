<?php

namespace App\Http\Services;

use App\Entities\Dough\Dough;
use App\Entities\Pan\PanFactory;
use App\Entities\Pan\PansList;

class PanService
{
    /** @var PanFactory */
    private $panFactory;

    /** @var DoughService */
    private $doughService;

    public function __construct(
        PanFactory $panFactory,
        DoughService $doughService
    )
    {
        $this->panFactory = $panFactory;
        $this->doughService = $doughService;
    }

    /**
     * @return PansList
     */
    public function getPans(): PansList
    {
        return $this->panFactory->getPansList();
    }

    /**
     * @param PansList $pansList
     * @return Dough
     */
    public function calculateDoughByPans(PansList $pansList): Dough
    {
        $totalDough = $pansList->sum('dough');
        return $this->doughService->retrieveIngredientsFromTotal($totalDough);
    }

    /**
     * @param $pans
     * @return PansList
     */
    public function generatePansListByPans(array $pans): PansList
    {
        return $this->panFactory->generatePansList($pans);
    }
}
