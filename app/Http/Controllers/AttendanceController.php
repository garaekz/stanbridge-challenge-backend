<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrDestroyAttendanceRequest;
use App\Services\AttendanceService;
use Illuminate\Support\Facades\Log;

class AttendanceController extends Controller
{
    /**
     * Store or update attendance.
     */
    public function storeOrDestroy(StoreOrDestroyAttendanceRequest $request, AttendanceService $service)
    {
        try {
            $service->createOrDelete($request->validated());

            return response()->json([
                'message' => 'Attendance updated successfully.',
            ]);
        } catch (\Throwable $th) {
            // Or any logging system you use
            Log::error($th);
            return response()->json([
                'message' => 'Attendance could not be stored.',
            ], 500);
        }
    }
}
