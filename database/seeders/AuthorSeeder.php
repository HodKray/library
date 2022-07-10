<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            'Александр Пушкин', //1
            'Михаил Лермонтов', //2
            'Лев Толстой',      //3
            'Антон Чехов',      //4
            'Николай Гоголь',   //5
            'Иван Тургенев',    //6
            'Максим Горький',   //7
        ];

        foreach ($authors as $author) {
            DB::table('authors')->insert([
                'fio' => $author,
            ]);
        }
    }
}
