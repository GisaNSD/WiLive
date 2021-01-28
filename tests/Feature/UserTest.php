<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;
use App\Models\Event;

class UserTest extends TestCase
{
     use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_I_can_add_user_in_db()
    {
        $user = User::factory()->create();

        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseHas('users', ['name' => $user->name]);
    }
    public function test_exists_pivot_table()
    {
        $user = User::factory()->create();
        $event = Event::factory()->create();

        $user->events()->attach([$user->id]);
        $event->users()->attach([$event->id]);

        $this->assertDatabaseHas('users_event',[1,1]);
    }
}
