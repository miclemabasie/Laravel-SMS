<?php

namespace App\Http\Controllers;

use App\Models\Klass;
use App\Models\Student;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view("students.list", ["students" => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $klasses = Klass::all();
        return view("students.create", ['klasses' => $klasses]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:students,email',
            'phone' => 'nullable|string|max:20',
            'gender' => 'required|in:male,female,other',
            'dob' => 'nullable|date',
            'address' => 'nullable|string|max:255',
            'admission_number' => 'nullable|string|unique:students,admission_number',
            'klass_id' => 'required|exists:klasses,id',
        ]);

        // Create user
        $user = User::create([
            'name' => $request->user_name,
            'email' => $request->user_email,
            'password' => Hash::make($request->password), // Hash the password for security
        ]);

        // Create student and link to user
        $student = Student::create([
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'address' => $request->address,
            'admission_number' => $request->admission_number,
            'klass_id' => $request->klass_id,
        ]);

        return redirect()->route("students.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view("students.show", ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $klasses = Klass::all();
        return view("students.edit", ['student' => $student, 'klasses' => $klasses]);
    }

    /**
     * Update the specified resource in storage.
     */
    // Handle Update Request
    public function update(Request $request, Student $student)
    {
        // Validate form inputs
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:students,email,' . $student->id,
            'phone' => 'nullable|string|max:20',
            'gender' => 'required|in:male,female,other',
            'dob' => 'nullable|date',
            'address' => 'nullable|string|max:255',
            'admission_number' => 'nullable|string|unique:students,admission_number,' . $student->id,
            'klass_id' => 'required|exists:klasses,id',
        ]);

        // Update student data
        $student->update($validatedData);

        // Redirect back to student list with a success message
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
