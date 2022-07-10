<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'пролюбовь',        //1
            'немцы',            //2
            'война',            //3
            'проза',            //4
            'романэпопея',      //5
            'толстой',          //6
            'горький',          //7
            'классики19века',   //8
            'драмотурги',       //9
            '18+',              //10
            '18век',            //11
            'французы',         //12
            'Дно',              //13
        ];

        foreach ($tags as $tag) {
            DB::table('tags')->insert([
                'title' => $tag,
            ]);
        }
    }
}
