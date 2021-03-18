<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProdutcsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([
        'title'=> 'Manque passion',
        'slug'=> 'manque-passion',
        'subtitle'=> 'The point of using Lorem Ipsum is nlum point of using Lorem Ipsum is nlum point of using Lorem Ipsum is nlum ',
        'description' => 'point of using Lorem Ipsum is nlumpoint of using Lorem Ipsum is nlumpoint of using Lorem Ipsum is nlumpoint of using Lorem Ipsum is nlumpoint of using Lorem Ipsum is nlum',
        'price' => 6,
        ]);
        Product::create([
            'title'=> 'Fruit de la passion',
            'slug'=> 'fruits-passion',
            'subtitle'=> 'Point of using Lorem Ipsum is nlum point of using Lorem Ipsum is nlum point of using Lorem Ipsum is nlum ',
            'description' => 'point of using Lorem Ipsum is nlumpoint of using Lorem Ipsum is nlumpoint of using Lorem Ipsum is nlumpoint of using Lorem Ipsum is nlumpoint of using Lorem Ipsum is nlum',
            'price' => 18,
        ]);

        Product::create([
            'title'=> 'Cerise gateau',
            'slug'=> 'cerise-gateau',
            'subtitle'=> 'Point of using Lorem Ipsum is nlum point of using Lorem Ipsum is nlum point of using Lorem Ipsum is nlum ',
            'description' => 'point of using Lorem Ipsum is nlumpoint of using Lorem Ipsum is nlumpoint of using Lorem Ipsum is nlumpoint of using Lorem Ipsum is nlumpoint of using Lorem Ipsum is nlum',
            'price' => 32,
        ]);
    }
}
