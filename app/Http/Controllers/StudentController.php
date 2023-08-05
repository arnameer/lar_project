<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = DB::select('select * from students');
        return view('student',compact('student'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return view('student');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
    }
}
