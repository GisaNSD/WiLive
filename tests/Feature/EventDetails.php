<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventDetails extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
     public function test_I_can_add_Events_in_db()
    {
        $user = User::factory()->create();
        EventDetails::factory()->create(['user_id' => $user->id]);
        
        $result = $user->EventDetails()->get('title');

        $this->assertDatabaseCount('event_details', 1);
        $this->assertDatabaseHas('event_details', ['title' => $result[0]->position]);
    }
}
