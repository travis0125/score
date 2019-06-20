<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function toIndex()
    {
        return redirect()->to('/');
    }

    public function toStudent($student_no)
    {
        return redirect()->route('student', ['student_no' => $student_no]);
    }

    public function toStudentSubject($student_no, $subject = null)
    {
        return redirect()->action('StudentController@getStudentScore', ['student_no' => $student_no, 'subject' => $subject]);
    }
}