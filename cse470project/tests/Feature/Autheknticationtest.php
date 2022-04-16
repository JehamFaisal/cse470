<?php

namespace Tests\Feature;

use App\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    
    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/user/login');

        $response->assertStatus(200);
    }

    public function test_users_authentication()
    {
        $user = User::factory()->create();

        $response = $this->post('/user/login', [
            'email' => $users->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response = $this->get('/');
    }

    public function users_cannot_authenticate_with_invalid_password()
    {
        $user = User::factory()->create();

        $this->post('/user/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}