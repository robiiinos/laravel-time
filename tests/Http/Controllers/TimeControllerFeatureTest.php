<?php

namespace Robiiinos\LaravelTime\Tests\Http\Controllers;

use Robiiinos\LaravelTime\Tests\FeatureTestCase;

class TimeControllerFeatureTest extends FeatureTestCase
{
    /** @test */
    public function it_can_get_time_and_result_is_lower_than_or_equal_to_current_time(): void
    {
        $response = $this->getJson('/api/time');

        $response
            ->assertStatus(200)
            ->assertJsonStructure(['time']);

        $this->assertLessThanOrEqual(
            now()->getPreciseTimestamp(3),
            $response['time']
        );
    }
}
