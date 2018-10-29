<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all();
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
        $request->validate([
            'full_name' => 'required|max:255',
            'address' => 'required|max:255',
            // 'contact_no' => 'required|regex:/\d{10} ?/',
            'contact_no' => 'required|phone:IN',
        ]);
        $student = new student();
        $student->full_name = $request->full_name;
        $student->address = $request->address;
        $student->contact_no = $request->contact_no;
        $student->save();
       
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::find($id);
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = student::find($id);
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required|max:255',
            'address' => 'required|max:255',
            // 'contact_no' => 'required|regex:/\d{10} ?/',
            'contact_no' => 'required|phone:IN',
        ]);

        $student = student::find($id);
        $student->full_name = $request->full_name;
        $student->address = $request->address;
        $student->contact_no = $request->contact_no;
        $student->save();
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect('students');
    }
}
