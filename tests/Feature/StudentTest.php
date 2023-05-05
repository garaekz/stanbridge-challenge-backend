<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{
    use RefreshDatabase;

    public function test_returns_error_when_date_is_missing()
    {
        $this->getJson('/api/students')
            ->assertStatus(422)
            ->assertInvalid([
                'date' => 'The date field is required.'
            ]);
    }

    public function test_get_paginated_students_with_attendance()
    {
        $this->seed();
        $this->getJson('/api/students?date=2023-05-05')
            ->assertOk()
            ->assertJsonStructure([
                'current_page',
                'data' => [
                    '*' => [
                        'id',
                        'first_name',
                        'last_name',
                        'email',
                        'created_at',
                        'updated_at',
                        'attendance',
                    ]
                ],
                'first_page_url',
                'from',
                'last_page',
                'last_page_url',
                'links' => [
                    '*' => [
                        'url',
                        'label',
                        'active',
                    ]
                ],
                'next_page_url',
                'path',
                'per_page',
                'prev_page_url',
                'to',
                'total',
            ]);
    }

}
