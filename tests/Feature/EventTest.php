<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use App\Models\User;

class EventTest extends TestCase
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
        Event::factory()->create(['user_id' => $user->id]);
        
        $result = $user->EventDetails()->get('title');

        $this->assertDatabaseCount('event', 1);
        $this->assertDatabaseHas('event', ['title' => $result[0]->position]);
    }
}
