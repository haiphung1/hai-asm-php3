<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('users')->count() === 0)
        {
            DB::table('users')->insert([
                [
                'id'=>'1',
                'first_name'=>'Hai',
                'last_name'=>'Phung',
                'email'=>'hai@gmail.com',
                'password'=>'123456',
                'address'=>'Ha Noi',
                'birthday'=>'22/10/1999',
                'is_active'=>'1'
                ],
                [
                'id'=>'2',
                'first_name'=>'Hoang',
                'last_name'=>'Huy',
                'email'=>'huyhoang@gmail.com',
                'password'=>'123456',
                'address'=>'Ha Nam',
                'birthday'=>'22/11/1998',
                'is_active'=>'1'
                ]
            ]);
        }
    }
}
