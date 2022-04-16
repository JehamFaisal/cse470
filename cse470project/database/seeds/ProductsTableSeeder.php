<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Deli 4116 Fingerprint & Digital Safe Box / Locker / Vault',
            'price' => '820 ',
            'description' => 'Deli 4116 Fingerprint & Digital Safe comes with PIN Code and Fingerprint with Handle. This Fingerprint & Digital Safe comes with H550 x W410 x D360mm Dimension and 10/6mm. The new Deli 4116 Fingerprint & Digital Safe has 01 year warranty.',
            'image' => '01.jpg',
        ]);

        

        Product::create([
            'name' => 'Samsung LED',
            'price' => '3000',
            'description' => 'This is some text for the Samsung LED',
            'image' => '02.jpg',
        ]);
        Product::create([
            'name' => 'Samsung LED',
            'price' => '3000',
            'description' => 'This is some text for the Samsung LED',
            'image' => '03.jpg',
        ]);
        Product::create([
            'name' => 'Samsung LED',
            'price' => '3000',
            'description' => 'This is some text for the Samsung LED',
            'image' => '04.jpg',
        ]);
        Product::create([
            'name' => 'Samsung LED',
            'price' => '3000',
            'description' => 'This is some text for the Samsung LED',
            'image' => '05.jpg',
        ]);
        Product::create([
            'name' => 'Samsung LED',
            'price' => '3000',
            'description' => 'This is some text for the Samsung LED',
            'image' => '05.jpg',
        ]);
        Product::create([
            'name' => 'Samsung LED',
            'price' => '3000',
            'description' => 'This is some text for the Samsung LED',
            'image' => '05.jpg',
        ]);
        Product::create([
            'name' => 'Samsung LED',
            'price' => '3000',
            'description' => 'This is some text for the Samsung LED',
            'image' => '02.jpg',
        ]);
    }
}
