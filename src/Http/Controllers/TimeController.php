<?php

namespace Robiiinos\LaravelTime\Http\Controllers;

use Illuminate\Http\JsonResponse;

class TimeController
{
    /**
     * Return current time, in millisecond.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        return response()->json([
            'time' => now()->getPreciseTimestamp(3),
        ]);
    }
}
