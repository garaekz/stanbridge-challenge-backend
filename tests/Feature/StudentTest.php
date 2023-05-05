<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_students_with_attendance()
    {
        $this->seed();
        $this->getJson('/api/students')
            ->assertOk()
            ->assertJsonCount(30)
            ->assertJsonStructure([
                '*' => [
                    'id',
                    'first_name',
                    'last_name',
                    'email',
                    'created_at',
                    'updated_at',
                    'attendance',
                ]
            ]);
    }

}
