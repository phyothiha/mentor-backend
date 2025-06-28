<?php

namespace App\Traits\V1;

use Illuminate\Http\JsonResponse as HttpJsonResponse;

trait JsonResponse
{
    public function success($data = [], $message = '', $statusCode = 200): HttpJsonResponse
    {
        $struct = [
            'success' => true,
            'message' => $message,
            'data' => $data,
        ];

        return response()->json($struct, $statusCode);
    }

    public function paginated($paginator, $message = '', $statusCode = 200): HttpJsonResponse
    {
        $struct = [
            'success' => true,
            'message' => $message,
            'data' => $paginator->items(),
            'meta' => [
                'current_page' => $paginator->currentPage(),
                'from' => $paginator->firstItem(),
                'last_page' => $paginator->lastPage(),
                'per_page' => $paginator->perPage(),
                'to' => $paginator->lastItem(),
                'total' => $paginator->total(),
            ],
        ];

        return response()->json($struct, $statusCode);
    }

    public function error($message = '', $statusCode = 400): HttpJsonResponse
    {
        $struct = [
            'success' => false,
            'message' => $message,
        ];

        return response()->json($struct, $statusCode);
    }

    public function validationError()
    {
        // TBD
    }
}