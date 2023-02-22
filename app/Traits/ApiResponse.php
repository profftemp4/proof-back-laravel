<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ApiResponse
{

    /**
     * @param $data
     * @param int $id
     * @param int $statusCode
     * @return JsonResponse
     */
    public function successResponse($data, $id, $statusCode = Response::HTTP_OK): JsonResponse
    {
        return response()->json(['JsonData' => $data, 'id' => $id], $statusCode);
    }

    /**
     * @param $errorMessage
     * @param $statusCode
     * @return JsonResponse
     */
    public function errorResponse($errorMessage, $statusCode): JsonResponse
    {
        return response()->json(['error' => $errorMessage, 'error_code' => $statusCode], $statusCode);
    }
}
