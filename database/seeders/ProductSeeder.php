<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //women

        for($i=1;$i<=12;$i++){

            $category =  Categorie::find(1);
            Product::create([
                'title' => 'Womens' .$i,
                'slug' => 'womens' .$i,
                'descreption' => 'lorem ipsum dolor sit amet, consectet' .$i,
                'product_code' => $category->category_code. '-00' .$i,
                'price' => rand(999,9999),
                'quantity' => rand(1,10),
            ])->categories()->attach($category);


        }
        //mens
        for($i=1;$i<=12;$i++){

            $category =  Categorie::find(2);
            Product::create([
                'title' => 'Mens' .$i,
                'slug' => 'mens' .$i,
                'descreption' => 'lorem ipsum dolor sit amet, consectet' .$i,
                'product_code' => $category->category_code. '-00' .$i,
                'price' => rand(999,9999),
                'quantity' => rand(1,10),
            ])->categories()->attach($category);


        }
        //kids
        for($i=1;$i<=12;$i++){

            $category =  Categorie::find(3);
            Product::create([
                'title' => 'Kids' .$i,
                'slug' => 'kids' .$i,
                'descreption' => 'lorem ipsum dolor sit amet, consectet' .$i,
                'product_code' => $category->category_code. '-00' .$i,
                'price' => rand(999,9999),
                'quantity' => rand(1,10),
            ])->categories()->attach($category);


        }

        $products = Product::find(1);
        $products->categories()->attach(3);
    }
}
