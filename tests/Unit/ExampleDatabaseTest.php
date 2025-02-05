<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleDatabaseTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_factory(): void
    {
        User::factory()->count(10)->create();

        $this->assertDatabaseCount('users', 10);
    }
}
