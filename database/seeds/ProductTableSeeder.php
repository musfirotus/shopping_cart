<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStPJL7LJkTiknm4_N3Yi_iaSFbVpXhjZcsRw&usqp=CAU',
            'title' => 'Headphone',
            'description' => 'This is a supercool headphone. You will not hear disturbing noise anymore.',
            'price' => 100000
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i.pinimg.com/564x/0c/9e/c4/0c9ec463395210b24f247e571cfce2a5.jpg',
            'title' => 'Table',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque massa placerat duis ultricies lacus sed turpis. Tempor commodo ullamcorper a lacus vestibulum sed arcu non odio.',
            'price' => 40000
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i.pinimg.com/564x/9e/03/41/9e0341c19985524e963c9146a4f91b4b.jpg',
            'title' => 'Keyboard',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis nisl rhoncus mattis rhoncus urna neque. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor.',
            'price' => 87000
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i.pinimg.com/564x/2e/1c/d1/2e1cd1f50e4686b202150bec7d8e6e53.jpg',
            'title' => 'Webcam Mic',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Odio tempor orci dapibus ultrices in iaculis. Consequat interdum varius sit amet.',
            'price' => 150000
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i.pinimg.com/236x/18/ef/eb/18efeb91f55b1d74cfe0be4d89cf84d5.jpg',
            'title' => 'ASUS Notebook',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lectus sit amet est placerat in egestas erat imperdiet. Dolor sit amet consectetur adipiscing elit.',
            'price' => 6500000
        ]);
        $product->save();
    }
}
