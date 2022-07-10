<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'научное',      //1
            'детективы',    //2
            'история',      //3
            'биография',    //4
            'детское',      //5
            'сказка',       //6
            'проза',        //7
            'роман',        //8
            'драма',        //9
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'title' => $category,
            ]);
        }
    }
}
