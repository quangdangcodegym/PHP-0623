<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Phone',
        ]);
        DB::table('categories')->insert([
            'name' => 'Laptop',
        ]);
        DB::table('products')->insert(
            [
                'name'=>'Quang Dang',
                'description'=>'quang dang 123',
                'price'=>'10000',
                'category_id'=> 1,
            ]);
        DB::table('products')->insert(
            [
                'name'=>'Quang Dang',
                'description'=>'quang dang 123',
                'price'=>'10000',
                'category_id'=>2
            ]);

    }
}
