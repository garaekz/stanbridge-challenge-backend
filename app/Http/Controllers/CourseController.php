<?php

namespace App\Http\Controllers;

use App\Services\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(CourseService $service)
    {
        return $service->getAll(null);
    }
}
