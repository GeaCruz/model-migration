<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SubjectGrade;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data['students'] = Student::all();
       return view('students.index', $data);
       
        //return Student::all();

       //return Student::where('province', 'New Jersey')->get();

       //return Student::where('province', 'New Jersey')
        //  ->Where('fname', 'Imogene')
        //  ->get();

        //return Student::where('province', 'New Jersey')
        //  ->orWhere('province', 'New York')
        //  ->orWhere('lname', 'Kunde')
        //  ->get();

        //return Student::where('fname', 'like', '%t%')->get();

        //return Student::orderBy('fname')->get();
        //return Student::orderBy('city', 'desc')->get();
        
        //return Student::limit(7)->get();
        //return Student::whereNotIn('id', [1,3,5,7,9,11])->get();
        //return Student::where('province', 'New York')->first();

        //return Student::with('grades')->get();
        //return Student::with(['grades' => function($query){
        //    return $query->where('grade', '>=', 90);
        //}])->get();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
        $students = new Student();
        $students->fname = $request['fname'];
        $students->lname = $request['lname'];
        $students->email = $request['email'];
        $students->phone = $request['phone'];
        $students->address = $request['address'];
        $students->city = $request['city'];
        $students->province = $request['province'];
        $students->zip = $request['zip'];
        $students->birthdate = $request['birthdate'];
        $students->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students = new Student();
        $students->fname = $request['fname'];
        $students->lname = $request['lname'];
        $students->email = $request['email'];
        $students->phone = $request['phone'];
        $students->address = $request['address'];
        $students->city = $request['city'];
        $students->province = $request['province'];
        $students->zip = $request['zip'];
        $students->birthdate = $request['birthdate'];
        $students->save();

        return redirect()->to('students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return Student::find($id);

        // $student = Student::find($id);
        //return $student->fname . ' ' .$student->lname;

        $students = Student::find($id);
        return $students->fullname;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['student'] = Student::find($id);
        return view ('students.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $students = Student::find($id);
        $students->fname = $request['fname'];
        $students->lname = $request['lname'];
        $students->email = $request['email'];
        $students->phone = $request['phone'];
        $students->address = $request['address'];
        $students->city = $request['city'];
        $students->province = $request['province'];
        $students->zip = $request['zip'];
        $students->birthdate = $request['birthdate'];
        $students->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::find($id);
        $students->delete();
        return redirect()->to('students');
    }

}
