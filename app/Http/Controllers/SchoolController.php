<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('school.list', compact('schools'));
    }

    public function create()
    {
       return view('school.create');
    }

    public function store(Request $request)
    {
        $name = $request->name; $description = $request->description;
        $school = new School();

        $school->name = $name;
        $school->description = $description;

        $school->save();

        return redirect()->route("school.list");
    }

    public function edit($id)
    {
        $school = School::find($id);
        return view('school.edit', compact('school'));
    }

    public function update(Request $request){
        $school = School::find($request->id);
        $school->name = $request->name;
        $school->description = $request->description;
        $school->save();
        return redirect()->route("school.list");
    }

    public function delete($id)
    {
        $school = School::find($id);
        return view('school.delete', compact('school'));
    }

    public function destroy(Request $request){
        School::destroy($request->id);
        return redirect()->route("school.list");
    }


}
