<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('categories')->count() === 0)
        {
            DB::table('categories')->insert([
                [
                    'id'=>'1',
                    'name'=>'Sam Sung',
                    'parent_id'=>'1',
                ],
                [
                'id'=>'2',
                'name'=>'Nokia',
                'parent_id'=>'2',
                ],
            ]);
        }
    }
}
