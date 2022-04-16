<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;

class viewLandingPageTest extends TestCase
{
    
    public function landing_page_loads_correctly()
    {
        //Arrange

        //Act
        $response = $this->get('/');

        //Assert
        $response->assertStatus(200);
        $response->assertSee('SALE UPTO 50%');
        $response->assertSee('Trending Products');
    }

    /** @test */
    public function product_is_visible()
    {
        // Arrange
        $Product = Product::create([
            'id' => '10',
            'name' => 'Laptop 1',
            'price' => 149999,
            'description' => 'demo data',
            'image' => 'demo.jpg',

        ]);

        // Act
        $response = $this->get('/');

        // Assert
        $response->assertSee($Product->name);
        $response->assertSee($Product->price);
    }
}
