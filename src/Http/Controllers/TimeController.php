<?php

namespace Robiiinos\LaravelTime\Http\Controllers;

use Illuminate\Http\JsonResponse;

class TimeController
{
    /**
     * Return current time, with a millisecond precision.
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
