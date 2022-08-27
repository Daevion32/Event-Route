<?php

namespace Tests\Feature;

use App\Models\Event;
use GuzzleHttp\Promise\Create;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_list_event_appear_in_welcomepage()
    {
        $this->withExceptionHandling();

        $events = Event::factory(2)->create();

        $response = $this->get('/');
        $response->assertStatus(200)
                ->assertViewIs('home');
                
    }


    public function test_event_can_be_deleted()
    {
        $this->withExceptionHandling();
        $event = Event::factory()->create();
        $this->assertCount(1, $event::all());
        $response = $this->delete(route('delete', $event->id));
        this->assertCount(0, Event::all());
    }

    public function test_a_event_can_be_create()[
        $this->withExceptionHandling();
        $response = $this->post(route('storeEvent'),
                'name' => 'new name',
                'description' =>
    ];

    }
}
