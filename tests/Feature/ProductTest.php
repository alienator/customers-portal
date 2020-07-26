<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_a_product_can_be_created() {
	$this->withoutExceptionHandling();

	$product = factory(\App\Product::class)->make();

	$response = $this->post('/products', $product->toArray());

	$response->assertRedirect('/products/');
    }

    public function test_a_product_can_be_updated() {
	$this->withoutExceptionHandling();

	$product  = factory(\App\Product::class)->create();
	$product->name = "New name";
	
	$response = $this->put('/products/' . $product->sku,
			       $product->toArray());

	$response->assertRedirect('/products/' . $product->sku);
    }

    public function test_a_product_can_be_deleted() {
	$this->withoutExceptionHandling();

	$product = factory(\App\Product::class)->create();
	$response = $this->delete('/products/' . $product->sku);

	$response->assertRedirect('/products/');
    }

    public function test_a_product_can_be_readed() {
	$this->withoutExceptionHandling();

	$product = factory(\App\Product::class)->create();

	$response = $this->get('/products/' . $product->sku);

	$response->assertOk();
    }

    public function test_products_can_be_readed() {
	$this->withoutExceptionHandling();

	$products = factory(\App\Product::class, 3)->create();

	$response = $this->get('/products');

	$response->assertOk();
    }
}
