<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ReaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $readers = [
            [
                'fio' => 'Майнагашев Андрей Сергеевич',
                'date_of_birth' => '2001-07-25',
            ],
            [
                'fio' => 'Пешков Анатолий Андреевич',
                'date_of_birth' => '2001-07-07',
            ],
            [
                'fio' => 'Селиванов Максимилиан Андреевич',
                'date_of_birth' => '2003-02-23',
            ],
            [
                'fio' => 'Михаил Андреевич Игоревич',
                'date_of_birth' => '2002-01-24',
            ],
            [
                'fio' => 'Бондарчук Кирилл Александрович',
                'date_of_birth' => '2003-04-02',
            ],
        ];

        foreach ($readers as $reader) {
            DB::table('readers')->insert([
                'fio' => $reader['fio'],
                'date_of_birth' => $reader['date_of_birth'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
