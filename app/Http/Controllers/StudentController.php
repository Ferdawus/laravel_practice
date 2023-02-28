<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return $students = Student::all();
        // $students = Student::where('name','Ariel Dean')->first();
        // $students = Student::firstWhere('name','Ariel Dean');
        // $students = Student::find(2);

        // dd($students);
        return view('index',compact('students'));
    }
    public function add()
    {
        return view('add');
    }
    public function store(Request $request)
    {
        // $student = new Student();
        // $student->name  = $request->name;
        // $student->email = $request->email;
        // $student->phone = $request->phone;
        // $student->save();

        $data = array(
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        );
        Student::create($data);
        return redirect()->route('student.store');

    }
}
