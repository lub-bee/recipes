<?php

namespace Tests\Feature;

use App\Models\Receipe;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReceipeTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_a_user_can_see_all_receipes(){
        $receipes = Receipe::factory()->create(5);

        $response = $this->get("/receipe");

        $names = Receipe::all()->pluck("name");
        // var_dump($names);
        $response->assertSee($names);

        // $view = $this->blade(
        //     '<x-single-receipe :name="$name" :preparationTime="$preparation_time" :cookingTime="$cooking_time" difficulty="$difficulty" />',
        //     [
        //         'name' => $receipe->name,
        //         'id' => $receipe->id,
        //         'preparation_time' => $receipe->preparation_time,
        //         'cooking_time' => $receipe->cooking_time,
        //         'difficulty' => $receipe->difficulty,
        //         'requirements' => $receipe->requirements,
        //         'steps' => $receipe->steps
        //     ]
        // );

        // $view->assertSee($receipe->name);
    }
}
