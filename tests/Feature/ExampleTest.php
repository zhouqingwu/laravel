<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    /**
     * rollback database after testing
     */
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // $response = $this->get('/posts');

        // $response->assertStatus(200);
        // $response->assertSee('Blog');
        //
        $first = factory(Post::class)->create();
        $senond = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth(),
        ]);

        $posts = Post::archives();

        // $this->assertEquals([
        //     [
        //         "year" => $first->created_at->format('Y'),
        //         "month" => $first->created_at->format('F'),
        //         "published" => 1,
        //     ],
        //     [
        //         "year" => $senond->created_at->format('Y'),
        //         "month" => $senond->created_at->format('F'),
        //         "published" => 1,
        //     ],

        // ], $posts);

        $response = $this->get('/posts');
        $response->assertStatus(200);
    }
}
