<?php

namespace Tests\Unit\Services;

use App\Entities\Dough\Dough;
use App\Entities\Pan\PanFactory;
use App\Entities\Pan\PansList;
use App\Http\Services\DoughService;
use App\Http\Services\PanService;
use Tests\TestCase;

class PanServiceTest extends TestCase
{
    const DOUGH_WEIGHT = 1000;

    /** @var PanService */
    private $panService;
    /** @var MockObject $doughService */
    private $doughService;
    /** @var MockObject $panFactory */
    private $panFactory;
    /** @var MockObject $panList */
    private $panList;
    /** @var MockObject $dough */
    private $dough;

    public function setUp(): void
    {
        $this->panFactory = $this->createMock(PanFactory::class);
        $this->doughService = $this->createMock(DoughService::class);
        $this->panList = $this->createMock(PansList::class);
        $this->dough = $this->createMock(Dough::class);

        $this->panService = new PanService($this->panFactory, $this->doughService);
        parent::setUp();
    }

    public function testCalculateDoughSuccessful() {
        $this->panList
            ->expects($this->once())
            ->method('sum')
            ->willReturn(self::DOUGH_WEIGHT);
        $this->doughService
            ->expects($this->once())
            ->method('retrieveIngredientsFromTotal')
            ->with(self::DOUGH_WEIGHT)
            ->willReturn($this->dough);

        $dough = $this->panService->calculateDoughByPans($this->panList);

        $this->assertInstanceOf("App\Entities\Dough\Dough", $dough);
    }
}
