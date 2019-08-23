<?php

namespace Tests\Feature;

use App\Book;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookReservationTest extends TestCase
{

    use RefreshDatabase;

    public function testBookReservation()
    {
        // remove laravel default exception handling so we can get a detialed error
        $this->withoutExceptionHandling();

        $response = $this->post('/books', [
           'title' => 'book title',
           'author' => 'bola',
        ]);

        $response->assertOk();
        $this->assertCount(1, Book::all());

    }

}
