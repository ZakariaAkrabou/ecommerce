<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::insert([

            ['category_name'=>'Womens','slug'=>'womens','category_code'=>'w','created_at'=>now(),'updated_at'=>now()],
            ['category_name'=>'Mens','slug'=>'mens','category_code'=>'m','created_at'=>now(),'updated_at'=>now()],
            ['category_name'=>'Kids','slug'=>'kids','category_code'=>'k','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
