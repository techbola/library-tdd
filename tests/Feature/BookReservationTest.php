<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookReservationTest extends TestCase
{

    public function a_book_can_be_added_to_library()
    {
        // remove laravel default exception handling so we can get a detialed error
        $this->withoutExceptionHandling();
    }

}
