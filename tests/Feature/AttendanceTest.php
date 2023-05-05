<?php

namespace Tests\Feature;

use App\Models\Attendance;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AttendanceTest extends TestCase
{
    use RefreshDatabase;

    public function test_cannot_store_attendance_with_invalid_student_id()
    {
        $this->postJson('/api/attendances', [
            'student_id' => 'invalid',
            'course_id' => 1,
            'date' => now()->format('Y-m-d'),
            'attendance' => true,
        ])
            ->assertUnprocessable()
            ->assertInvalid(['student_id']);
    }

    public function test_cannot_store_attendance_with_invalid_course_id()
    {
        $this->postJson('/api/attendances', [
            'student_id' => 1665101843499,
            'course_id' => 'invalid',
            'date' => now()->format('Y-m-d'),
            'attendance' => true,
        ])
            ->assertUnprocessable()
            ->assertInvalid(['course_id']);
    }

    public function test_cannot_store_attendance_with_invalid_date()
    {
        $this->postJson('/api/attendances', [
            'student_id' => 1665101843499,
            'course_id' => 1,
            'date' => 'invalid',
            'attendance' => true,
        ])
            ->assertUnprocessable()
            ->assertInvalid(['date']);
    }

    public function test_cannot_store_attendance_with_invalid_attendance()
    {
        $this->postJson('/api/attendances', [
            'student_id' => 1665101843499,
            'course_id' => 1,
            'date' => now()->format('Y-m-d'),
            'attendance' => 'invalid',
        ])
            ->assertUnprocessable()
            ->assertInvalid(['attendance']);
    }

    public function test_can_store_attendance_with_valid_data()
    {
        $student = Student::factory()->create();
        $course = Course::factory()->create();

        $response = $this->postJson('/api/attendances', [
            'student_id' => $student->id,
            'course_id' => $course->id,
            'date' => now()->format('Y-m-d'),
            'attendance' => true,
        ]);

        $response->assertSuccessful();
    }

    public function test_it_deletes_attendance_if_exists_and_attendance_is_false()
    {
        $attendance = Attendance::factory()->create([
            'date' => now()->format('Y-m-d'),
        ]);

        $this->assertModelExists($attendance);

        $response = $this->postJson('/api/attendances', [
            'student_id' => $attendance->student_id,
            'course_id' => $attendance->course_id,
            'date' => $attendance->date,
            'attendance' => false,
        ]);

        $response->assertSuccessful();
        $this->assertModelMissing($attendance);
    }
}
