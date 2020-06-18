<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // Get POST data
        $data = $request->all();

        // Validation
        $request->validate( $this->validationRules() );

        // Instancing new student
        $student = new Student();
        $student->fill($data);
        $saved = $student->save();

        if ($saved) {
            // Get last created student
            $newStudent = Student::find($student->id);
            return redirect()->route('students.show', $newStudent);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $data = $request->all();

        // validation
        $request->validate( $this->validationRules( $student->id ) );

        // update data
        $updated = $student->update($data);

        // redirect
        if ($updated) {
            return redirect()->route('students.show', $student->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {   
        // Refs entity to delete
        $ref = $student->name;
        $deleted = $student->delete();

        // redirect with session data
        if ($deleted) {
            return redirect()->route('students.index')->with('deleted', $ref);
        }
    }

    /**
     * Validation
     */
    private function validationRules($id = null)
    {
        return [
            //'name' => 'required|unique:students|max:30',
            'name' => [
                'required',
                'max:30',
                Rule::unique('students')->ignore($id)
            ],
            'description' => 'required'
        ];
    }
}
