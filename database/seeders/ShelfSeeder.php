<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shelves = [
            'A1',
            'A2',
            'A3',
            'B1',
            'B2',
            'B3',
        ];

        foreach ($shelves as $shelf) {
            DB::table('shelves')->insert([
                'title' => $shelf,
            ]);
        }
    }
}
