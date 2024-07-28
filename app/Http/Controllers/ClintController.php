<?php

namespace App\Http\Controllers;

use App\Models\Clint;
use App\Models\Course;
use App\Models\employee;
use Illuminate\Http\Request;

class ClintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $Courses = Course::all();
        $employees = employee::all();
       return view('travela.index',compact('Courses', 'employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = employee::all();
        return view('travela.about',compact( 'employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => ['required'],
        //     'phone' => ['required'],
        //     'age' => ['required'],
        //     'country' => ['required'],
        //     'qualification' => ['required'],
        //     'message' => ['required'],
        //     'email' => ['required'],

        // ]);
    
        // $message =Clint::create([
        //     'name' =>  $request->name,                   
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'message' => $request->message,
        //     'country' => $request->country,
        //     'qualification'=>$request->qualification,
        //     'age' => $request->age,
        // ]);
        // $message->save(); 

    
        // return redirect()->back()->with('message', 'IT success!');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
