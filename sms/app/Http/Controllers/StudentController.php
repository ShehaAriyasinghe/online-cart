<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stu=new Student;
        $s=$stu->all();
        return view('student.list',['list'=>$s]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {

		


  /*       $validated = $request->validate([
            'first_name' => 'required|max:30',
            'last_name' => 'nullable|max:30',
            'email' => 'required|unique:students|max:10',
        ]);
 */

     /*    $validated = $request->validate([
            'first_name' => ['required','max:30'],
            'last_name' => ['nullable','max:30'],
            'email' => ['bail','required','unique:students','max:10'],
        ]); */



        $stu=new Student;
        $stu->first_name=$request->first_name;
        $stu->last_name=$request->last_name;
        $stu->address=$request->address;
        $stu->telno=$request->telno;
        $stu->email=$request->email;

        $stu->save();
        return redirect()->route('student.index');



    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit',['student'=>$student]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
    
        $stu = $student->find($student->id);
 
        $stu->first_name = $request->first_name;
        $stu->last_name = $request->last_name;
        $stu->address = $request->address;
        $stu->telno = $request->telno;
        $stu->email = $request->email;
        $stu->save();        
        return redirect()->route('student.index')->with('success', 'Student updated successfully');

    }


    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $stu = $student->find($student->id);
 
        $stu->delete();
        return redirect()->route('student.index')->with('success', 'Student deleted successfully');


    }
}
