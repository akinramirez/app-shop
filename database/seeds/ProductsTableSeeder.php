<?php

use Illuminate\Database\Seeder;
use App\Product; // Se agrego esta linea para agregar la clase User
use App\Category;
use App\ProductoImage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(Category::class,5)->create();
//        factory(Product::class,100)->create();
//        factory(ProductoImage::class,200)->create();

        $categories = factory(Category::class,5)->create();
        $categories->each(function ($category){
            $products = factory(Product::class,20)->make();
            $category->products()->saveMany($products);

            $products->each(function ($p){
                $images = factory(ProductoImage::class,5)->make();
                $p->images()->saveMany($images);
            });
        });
    }
}
