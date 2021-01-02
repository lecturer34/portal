<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('university.schools', compact('schools'));
    }

    public function create()
    {
       return view('school.create');
    }

    public function store(Request $request)
    {
        School::create([
            "name"=>$request->name,
            "description"=>$request->description,
        ]);

        return redirect()->route("university.schools");
    }

    public function show($id)
    {
        $school = School::findOrFail($id);
        return view('school.show', compact('school','school'));
    }

    public function edit($id)
    {
        $school = School::find($id);
        return view('school.edit', compact('school'));
    }

    public function update($id){
        return false;
    }

    public function destroy($id)
    {
        School::destroy($id);
        return redirect()->route("university.schools");
    }


}
