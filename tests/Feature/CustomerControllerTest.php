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

    public function test_update_customer_with_password_change() {
	$this->withoutExceptionHandling();
	$customer = factory(\App\Customer::class)->create();

	$response = $this->put('/customers/' . $customer->id,
			       $customer->toArray());

	$response->assertRedirect('/customers/' . $customer->id);
    }

    public function test_update_customer_without_password_change() {
	$this->withoutExceptionHandling();
	$customer = factory(\App\Customer::class)->create();
	$customerArray =$customer->toArray();
	unset($customerArray['user_password']);
	
	$response = $this->put('/customers/' . $customer->id,
			       $customerArray);

	$response->assertRedirect('/customers/' . $customer->id);
    }
}
