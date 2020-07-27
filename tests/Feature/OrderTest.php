<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    public function test_an_order_can_be_created() {
	$this->withoutExceptionHandling();

	$order = factory(\App\Order::class)->make();

	$response = $this->post('/orders', $order->toArray());

	$this->assertDatabaseCount('orders', 1);

	$response->assertRedirect('/orders');
    }

    public function test_an_order_can_be_updated() {
	$this->withoutExceptionHandling();

	$order = factory(\App\Order::class)->create();
	$order->total = 0.25;
	
	$response = $this->put('/orders/' . $order->id, $order->toArray());
	
	$this->assertEquals(0.25, \App\Order::first()->total);

	$response->assertRedirect('/orders/' . $order->id);
    }

    public function test_an_order_can_be_readed() {
	$order = factory(\App\Order::class)->create();

	$response = $this->get('/orders/' . $order->id);

	$response->assertOk();
    }

    public function test_orders_can_be_readed() {
	$this->withoutExceptionHandling();
	
	$order = factory(\App\Order::class, 10)->create();

	$response = $this->get('/orders/');

	$response->assertOk();
    }

}

