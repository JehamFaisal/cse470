<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;

class ViewShopPageTest extends TestCase
{
    public function Shop_page_loads_correctly()
    {
        //Arrange

        //Act
        $response = $this->get('/shop');

        //Assert
        $response->assertStatus(200);
        
    }

    /** @test */
    public function product_is_visible()
    {
        // Arrange
        $Product = Product::create([
            'id' => '9',
            'name' => 'Laptop 1',
            'price' => 149999,
            'description' => 'demo data',
            'image' => 'demo.jpg',

        ]);

        // Act
        $response = $this->get('/');

        //Assert
        $response->assertSee($Product->name);
        $response->assertSee($Product->price);
    }
}