<?php

namespace Tests\Unit\Controllers;

use Modules\Pizza\Http\Controllers\PanController;
use Modules\Pizza\Http\Services\PanService;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;
use Illuminate\Http\Response;

class PanControllerTest extends TestCase
{
    /** @var PanController $panController */
    private $panController;
    /** @var MockObject $panService */
    private $panService;

    public function setUp(): void
    {
        $this->panService = $this->createMock(PanService::class);

        $this->panController = new PanController($this->panService);
        parent::setUp();
    }

    public function testValidateDoughSuccessful()
    {
        $expectedData = [
            'pans' => [
                ['shape' => 'round',
                'measure' => ['diameter' => 10]]
            ]
        ];
        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->json(
            'POST', '/api/pans', $expectedData
        );

        $this->assertEquals(Response::HTTP_OK, $response->getStatusCode());
    }

    public function testValidateDoughWithoutData()
    {
        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->json(
            'POST', '/api/pans'
        );
        $this->assertEquals(Response::HTTP_UNPROCESSABLE_ENTITY, $response->getStatusCode());
    }
}
