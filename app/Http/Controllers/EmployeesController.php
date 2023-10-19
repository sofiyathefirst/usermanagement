<?php

namespace App\Http\Controllers;
use App\Models\Employees;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        //
        $employees = Employees::orderBy('created_at', 'DESC')->get();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        //
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    {
        //
        Employees::create($request->all());
   
        return redirect()->route('employees.index')
                        ->with('success','Employees added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) 
    {
        //
        $employees = Employees::findOrFail($id);
        return view('employees.show', compact ('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) 
    {
        //
        $employees = Employees::findOrFail($id);
        return view('employees.edit', compact ('employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) 
    {
        //
        $employees = Employees::findOrFail($id);
        $employees->update($request->all());
  
        return redirect()->route('employees.index')
                        ->with('success','Employees updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) 
    {
        //
        $employees = Employees::findOrFail($id);
        $employees -> delete();
  
        return redirect()->route('employees.index')
                        ->with('success','Employees deleted successfully');
    }
}
