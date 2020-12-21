<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,10) as $index) {
        DB::table('category')->insert([
           
            'category_name' => Str::random(10),
            
        
        ]);
        }
    }
}
