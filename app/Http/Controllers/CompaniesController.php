<?php

namespace App\Http\Controllers;
use App\Models\Companies;

use Illuminate\Http\Request;


class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        //
        $companies = Companies::orderBy('created_at', 'DESC')->get();
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        //
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) 
    {
        //
        Companies::create($request->all());
   
        return redirect()->route('companies.index')
                        ->with('success','Companies added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) 
    {
        //
        $companies = Companies::findOrFail($id);
        return view('companies.show', compact ('companies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) 
    {
        //
        $companies = Companies::findOrFail($id);
        return view('companies.edit', compact ('companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) 
    {
        //
        $companies = Companies::findOrFail($id);
        $companies->update($request->all());
  
        return redirect()->route('companies.index')
                        ->with('success','Companies updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) 
    {
        //
        $companies = Companies::findOrFail($id);
        $companies -> delete();
  
        return redirect()->route('companies.index')
                        ->with('success','Companies deleted successfully');
    }
}
