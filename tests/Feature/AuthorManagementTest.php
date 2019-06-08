<?php

namespace Tests\Feature;

use App\Author;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Carbon\Carbon;

class AuthorManagementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_author_can_be_created()
    {
        $this->withoutExceptionHandling();

        $this->post('/author', [
            'name' => 'Wichan',
            'dob' => '10/24/1989'
        ]);

        $author = Author::all();

        $this->assertCount(1, $author);

        $this->assertInstanceOf(Carbon::class, $author->first()->dob);

        $this->assertEquals('1989-10-24', $author->first()->dob->format('Y-m-d'));
    }
}
