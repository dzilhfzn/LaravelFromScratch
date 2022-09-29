<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function getStudentList() {
        try {
            $student = Student::all();
            return response()->json($student);
        }
        catch(Exception $e) {
            Log::error($e);
        }
    }
}
