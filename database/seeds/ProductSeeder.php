<?php

use Illuminate\Database\Seeder;
use App\Model\Category\Category;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $category = Category::all()->pluck('category_id');
        foreach (range(1,32) as $index) {

            DB::table('product')->insert([
               
                'product_name' => Str::random(10),
                'description'=>Str::random(350),
                'category_foreign_id' => $faker->randomElement($category),
                'price'=>$faker->numberBetween(10,500)
                
            
            ]);
        }
    }
}
