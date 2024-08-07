<?php

namespace Tests\Feature;

 use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;



class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
   // public function test_the_application_returns_a_successful_response(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function test_the_application_returns_a_successful_response(): void
    {
        // Create and authenticate a user with the required role or permission
        $user = User::factory()->create();
        $user->assignRole('admin'); // Assign the required role or permission
        $this->actingAs($user);

        // Seed the database with some roles if necessary
        // Role::factory()->count(10)->create();

        // Make a GET request to the index route of the RoleController
        $response = $this->get(route('roles.index'));

        // Assert that the response status is 200
        $response->assertStatus(200);

        // Optionally, assert that the view has certain data
        $response->assertViewHas('roles');
    }

}
