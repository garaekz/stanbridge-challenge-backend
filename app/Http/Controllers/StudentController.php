<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexStudentRequest;
use App\Services\StudentService;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(IndexStudentRequest $request, StudentService $service)
    {
        try {
            return $service->getPaginatedWithAttendance($request->date, 30);
        } catch (\Throwable $th) {
            // Or any logging system you use
            Log::error($th);
            return response()->json(['message' => 'An error ocurred while fetching your data'], 500);
        }
    }
}
