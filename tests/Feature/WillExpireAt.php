<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WillExpireAt extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $due_time = '2023-09-20 12:00:00'; 
        $created_at = '2023-09-20 10:00:00';
        $result = willExpireAt($due_time, $created_at);

        // Assert that the result is a string in the 'Y-m-d H:i:s' format.
        $this->assertMatchesRegularExpression('/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/', $result);

        // Convert the result back to a Carbon instance for further assertions.
        $resultCarbon = \Carbon\Carbon::parse($result);

        // Assert that the result is after the created_at timestamp.
        $this->assertTrue($resultCarbon->greaterThanOrEqualTo(\Carbon\Carbon::parse($created_at)));

        // Assert that the result is before or equal to the due_time timestamp.
        $this->assertTrue($resultCarbon->lessThanOrEqualTo(\Carbon\Carbon::parse($due_time)));
        // Assert that the result is before or equal to the due_time timestamp.
        $this->assertTrue($resultCarbon->lessThanOrEqualTo(\Carbon\Carbon::parse($due_time)));
    }
}
