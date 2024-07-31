<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Student::all();

        $data['students'] = Student::all();
        return view('students.index', $data);

        // $students = Student::all();
        // return view('students.index', ['students' => $students]);

        // return Student::where('province', 'Kansas')->get();

        // return Student::where('province', 'Hawaii')
        //     ->where ('fname', 'Sigmund')
        //     ->get();

        // return Student::where('province', 'Hawaii')
        // ->orwhere ('province', 'kansas')
        // ->orwhere ('fname', 'Sigmund')
        // ->get();

        // return Student::where('province', 'like', '%T%')->get();

        // return Student::orderBy('fname', 'desc')->get();
        
        // return Student::limit(4)->get();
        // $data['students'] = Student::limit(4)->get();
        // return view('students.index', $data);
        // return Student::whereIn('id', [1,3,5,7,9,11,13])->get();

        // return Student::where('province', 'Virginia')->first();

        // return Student::with('grades')->get();

        // return student::with(['grades' => function($query){
        //     return $query->where('grade', '>=', 97);
        // }])->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'zip' => 'required',
            'birthdate' => 'required|date',
        ]);

        $student = new Student();
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
        $student->email = $request['email'];
        $student->phone = $request['phone'];
        $student->address = $request['address'];
        $student->city = $request['city'];
        $student->province = $request['province'];
        $student->zip = $request['zip'];
        $student->birthdate = $request['birthdate'];
        $student->save();

        // return redirect()->back();
        return back()->with('success', 'Data saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return Student::find($id);

        // $student = Student::find($id);
        // return $student->fname . '' . $student->lname;

        $student = Student::find($id);
        return $student->fullname;

        // $student = Student::find($id);
        // return $student->birthday;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['student'] = Student::find($id);
        return view('students.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
 
        
        $student = Student::find($id);
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
        $student->email = $request['email'];
        $student->phone = $request['phone'];
        $student->address = $request['address'];
        $student->city = $request['city'];
        $student->province = $request['province'];
        $student->zip = $request['zip'];
        $student->birthdate = $request['birthdate'];
        $student->save();

        return redirect()->back();

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->to('students');
    }
}