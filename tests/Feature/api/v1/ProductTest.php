<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
//    /**
//     * A basic feature test example.
//     *
//     * @return void
//     */
//
//    public function test_users_can_authenticate_using_the_login_screen()
//    {
//        $user = auth()->user()->factory()->create();
//
//        $response = $this->post('api/v1/login', [
//            'email' => $user->email,
//            'password' => 'password',
//        ]);
//
//        $this->assertAuthenticated();
//        $response->assertRedirect(RouteServiceProvider::HOME);
//    }
//}

    /** @test */
    public function a_product_can_be_added_to_the_cart()
    {
// Create a new product
        $product = Product::factory()->create([
            'category_id'=> 1,
            'name' => 'name',
            'price' => 1000,
            'description'=> 'loremsfdas'
        ]);

// Simulate a user adding the product to the cart
        $response = $this->post('/cart/add', [
            'product_id' => $product->id,
        ]);

// Assert that the product was added to the cart
        $response->assertStatus(200);
        $this->assertEquals(session('cart.total'), 1000);
    }
}
