<?php

namespace Modules\Pizza\Http\Controllers;

use Modules\Pizza\Http\Services\PanService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

class PanController extends Controller
{
    use ValidatesRequests;

    /** @var PanService */
    private $panService;

    public function __construct(
        PanService $panService
    )
    {
        $this->panService = $panService;
    }

    /**
     * @return JsonResponse
     */
    public function pansList(): JsonResponse
    {
        $pans = $this->panService->getPans();

        return response()->json(
            $pans->toArray(),
            Response::HTTP_OK
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     *
     * @bodyParam pans.*.shape string required The shape of a pan. Example: Round
     * @bodyParam pans.*.measure object required The measure of a pan. Example: { "diameter": 14 }
     */
    public function generateDough(Request $request): JsonResponse
    {
        $this->validate($request, [
            'pans' => 'required|array',
            'pans.*.shape' => 'required|string',
            'pans.*.measure' => 'required',
        ]);
        $pans = $request->get('pans');

        $pansList = $this->panService->generatePansListByPans($pans);
        $totalDough = $this->panService->calculateDoughByPans($pansList);

        return response()->json([
            'total' => $totalDough->toArray(),
            'pans' => $pansList->toArray()],
            Response::HTTP_OK
        );
    }
}
