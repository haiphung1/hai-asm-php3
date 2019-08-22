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
        if(DB::table('products')->count() === 0)
        {
            DB::table('products')->insert([
                [
                    'id'=>'1',
                    'name'=>'Sam sung 1',
                    'category_id'=>'1',
                    'description'=>'May dep',
                    'price'=>'2000000',
                    'sale_percent'=>'12',
                    'stocks'=>'20',
                    'is_active'=>'1'
                ],
                [
                    'id'=>'2',
                    'name'=>'Nokia 1',
                    'category_id'=>'2',
                    'description'=>'May cung duoc',
                    'price'=>'2100000',
                    'sale_percent'=>'11',
                    'stocks'=>'11',
                    'is_active'=>'1'
                ]
            ]);
        }
    }
}
