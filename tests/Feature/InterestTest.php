<?php

namespace Tests\Feature;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tymon\JWTAuth\Facades\JWTAuth;

class InterestTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function setUp(): void
    {
        parent::setUp();
//        $this->artisan('db:seed');
    }

    public function tearDown(): void
    {
        parent::setUp();
//        $this->artisan('db:seed');
    }


    protected function authenticate()
    {
        //Create user
        $user = User::find(1);
        $token = JWTAuth::fromUser($user);
        //return token
        return $token;
    }

    public function testSubscribeToInterest(){
        //Get token
        $token = $this->authenticate();
        $response = $this->withHeaders([
            'Authorization' => 'Bearer '. $token,
        ])->json('GET',route('api.subscribeToInterest', 4));
        $response->assertStatus(200);

//        Log::info($response->json());
    }

    public function testUnsubscribeToInterest(){
        //Get token
        $token = $this->authenticate();
        $response = $this->withHeaders([
            'Authorization' => 'Bearer '. $token,
        ])->json('GET',route('api.unsubscribeToInterest', 3));
        $response->assertStatus(200);

//        Log::info($response->json());
    }
}
