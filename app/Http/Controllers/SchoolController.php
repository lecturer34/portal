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

    public function show(School $school)
    {
        return view('school.show', compact('school','school'));
    }

    public function edit(School $school)
    {
        return view('school.edit', compact('school','school'));
    }

    public function update(Request $request, School $school){
        $school->name = $request->name;
        $school->description = $request->description;
        $school->save();
        return redirect()->route("university.schools");
    }

    public function destroy($id)
    {
        School::destroy($id);
        return redirect()->route("university.schools");
    }


}
