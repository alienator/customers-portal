<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerControllerTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_customers_profile_returns_view() {
        $this->withoutExceptionHandling();
	$customer = factory(\App\Customer::class)->create();
	$response = $this->get('/customers/' . $customer->id);

	$response->assertOk();
    }
}
