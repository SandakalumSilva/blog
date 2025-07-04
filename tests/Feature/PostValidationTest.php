<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class PostValidationTest extends TestCase
{
    use RefreshDatabase;

    public function test_title_is_required()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('posts.store'), [
            'title' => '',
            'body' => 'This is the post body.',
        ]);

        $response->assertSessionHasErrors('title');
    }

    public function test_title_cannot_exceed_255_characters()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('posts.store'), [
            'title' => str_repeat('a', 256),
            'body' => 'This is the post body.',
        ]);

        $response->assertSessionHasErrors('title');
    }

    public function test_body_is_required()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('posts.store'), [
            'title' => 'Test Title',
            'body' => '',
        ]);

        $response->assertSessionHasErrors('body');
    }

    public function test_valid_post_can_be_created()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->post(route('posts.store'), [
            'title' => 'Test Title',
            'body' => 'This is the post body.',
        ]);

        $response->assertSessionHasNoErrors();
        $this->assertDatabaseHas('posts', [
            'title' => 'Test Title',
            'body' => 'This is the post body.',
        ]);
        $response->assertRedirect(route('posts.index'));
    }
}
