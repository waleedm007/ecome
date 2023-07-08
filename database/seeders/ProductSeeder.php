<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            [
                'name'=>'LG Mobile',
                'price'=>'1000',
                'description'=>'A SamartPhone 4GB Ram and more other feature',
                'category'=>'mobile',
                'gallery'=>'https://images.pexels.com/photos/1092644/pexels-photo-1092644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ],
            [
                'name'=>'Apple Phone',
                'price'=>'2000',
                'description'=>'A SamartPhone 4GB Ram and more other feature',
                'category'=>'mobile',
                'gallery'=>'https://images.unsplash.com/photo-1601784551446-20c9e07cdbdb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=367&q=80'
            ],

        ]);
    }
}
