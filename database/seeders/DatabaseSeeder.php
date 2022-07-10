<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AuthorSeeder::class,
            BookSeeder::class,
            CategorySeeder::class,
            ReaderSeeder::class,
            ShelfSeeder::class,
            TagSeeder::class,
        ]);
    }
}
