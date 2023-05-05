<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrDestroyAttendanceRequest;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    /**
     * Store or update attendance.
     */
    public function storeOrDestroy(StoreOrDestroyAttendanceRequest $request)
    {
        try {
            if ($request->attendance === false) {
                Attendance::where('student_id', $request->student_id)
                    ->where('course_id', $request->course_id)
                    ->where('date', $request->date)
                    ->delete();
                return response()->json([
                    'message' => 'Attendance deleted successfully.',
                ]);
            }

            Attendance::firstOrCreate([
                'student_id' => $request->student_id,
                'course_id' => $request->course_id,
                'date' => $request->date,
            ], [
                'attendance' => $request->attendance,
            ]);
            return response()->json([
                'message' => 'Attendance stored successfully.',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Attendance could not be stored.',
            ], 500);
        }
    }
}
