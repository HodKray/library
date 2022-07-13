<?php

namespace Tests\Unit;

use App\Http\Controllers\BookController;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class BookControllerTest extends TestCase
{

    private  $controller;
    public function setUp(): void
    {
        parent::setUp();
        $this->controller = new BookController();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */


    public function testCreateBook()
    {


        $request = Request::create('/books/create', 'POST', [
            'title' => 'test',
            'shelf_id' => 1,
            'category_id' => 1,
        ], files: [
            'photo' => $file,
        ]);

        $response = $this->controller->createBook($request);
        $this->assertEquals(302, $response->getStatusCode());
    }
}
