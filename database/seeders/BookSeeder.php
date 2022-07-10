<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'id' => 1,
                'title' => 'Война и мир',
                'shelf_id' => 3,
                'count' => 8,
                'category_id' => 7,
                'photo' => '1.jpg',
                'authors' => [3],
                'tags' => [1, 3, 11, 9],
                'readers' => [
                    [
                        'reader_id' => 1,
                        'start_date' => '2022-06-20',
                        'end_date' => '2022-07-25',
                    ],
                ]
            ],
            [
                'id' => 2,
                'title' => 'Сказка о царе Салтане',
                'shelf_id' => 3,
                'count' => 2,
                'category_id' => 6,
                'photo' => '2.jpg',
                'authors' => [1],
                'tags' => [9],
                'readers' => [
                    [
                        'reader_id' => 3,
                        'start_date' => '2021-04-15',
                        'end_date' => '2022-05-20',
                    ],
                    [
                        'reader_id' => 4,
                        'start_date' => '2022-02-11',
                        'end_date' => '2022-11-22',
                    ],
                ]
            ],
            [
                'id' => 3,
                'title' => 'Евгений Онегин',
                'shelf_id' => 1,
                'count' => 1,
                'category_id' => 8,
                'photo' => '3.jpg',
                'authors' => [1],
                'tags' => [8, 11],
                'readers' => [
                    [
                        'reader_id' => 1,
                        'start_date' => '2022-01-11',
                        'end_date' => '2022-12-24',
                    ],
                ]
            ],
            [
                'id' => 4,
                'title' => 'Мертвые души',
                'shelf_id' => 2,
                'count' => 4,
                'category_id' => 8,
                'photo' => '4.jpg',
                'authors' => [5],
                'tags' => [8, 11],
                'readers' => [
                    [
                        'reader_id' => 1,
                        'start_date' => '2021-05-10',
                        'end_date' => '2022-05-10',
                    ],
                    [
                        'reader_id' => 2,
                        'start_date' => '2021-06-11',
                        'end_date' => '2023-05-21',
                    ],
                    [
                        'reader_id' => 4,
                        'start_date' => '2021-07-25',
                        'end_date' => '2021-08-18',
                    ],
                ]
            ],
            [
                'id' => 5,
                'title' => 'На дне',
                'shelf_id' => 1,
                'count' => 7,
                'category_id' => 9,
                'photo' => '5.jpg',
                'authors' => [7],
                'tags' => [12, 13],
                'readers' => [
                    [
                        'reader_id' => 1,
                        'start_date' => '2021-06-12',
                        'end_date' => '2021-06-24',
                    ],
                    [
                        'reader_id' => 1,
                        'start_date' => '2021-03-23',
                        'end_date' => '2021-07-24',
                    ],
                    [
                        'reader_id' => 1,
                        'start_date' => '2021-06-20',
                        'end_date' => '2022-06-20',
                    ],
                ]
            ],
        ];

        foreach ($books as $book) {
            DB::table('books')->insert([
                'id' => $book['id'],
                'title' => $book['title'],
                'shelf_id' => $book['shelf_id'],
                'count' => $book['count'],
                'category_id' => $book['category_id'],
                'photo' => $book['photo'],
            ]);
            foreach ($book['authors'] as $author) {
                DB::table('book_author')->insert([
                    'book_id' => $book['id'],
                    'author_id' => $author,
                ]);
            }
            foreach ($book['tags'] as $tag) {
                DB::table('book_tag')->insert([
                    'book_id' => $book['id'],
                    'tag_id' => $tag,
                ]);
            }
            foreach ($book['readers'] as $reader) {
                DB::table('book_reader')->insert([
                    'book_id' => $book['id'],
                    'reader_id' => $reader['reader_id'],
                    'start_date' => $reader['start_date'],
                    'end_date' => $reader['end_date'],
                ]);
            }
        }
    }
}
