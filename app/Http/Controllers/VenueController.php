<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\School;
use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{

    private function validate_($request){

        $this->validate($request, [
            "school_id"=>"required",
            "department_id"=>"required",
            "name"=>"required",
            "capacity"=>"required",
            "type"=>"required",
            "status"=>"required",
            "has_multimedia"=>"required"
        ]);

    }

    public function index()
    {
        $venues = Venue::all();
        return view('venue.list', compact('venues'));
    }

    public function create()
    {
        $schools = School::all();
        $departments = Department::all();
        return view('venue.create', compact('schools', 'departments'));
    }

    public function store(Request $request)
    {
        $this->validate_($request);

        Venue::create([
            "school_id"=>$request->school_id,
            "department_id"=>$request->department_id,
            "name"=>$request->name,
            "capacity"=>$request->capacity,
            "type"=>$request->type,
            "status"=>$request->status,
            "has_multimedia"=>$request->has_multimedia

        ]);
        $schools = School::all();
        $departments = Department::all();
        return redirect()->route('venue.list')->with(compact('schools', 'departments'));
    }

    public function show(Venue $venue)
    {
        return view('venue.show', compact('venue'));
    }

    public function destroy(Venue $id)
    {

        if($id->checkDelete()){
            $id->delete();
            session()->flash('success', 'Venue was deleted successfully!');
        }else{
            session()->flash('error', 'Venue cannot be deleted');
        }

        $schools = School::all();
        $departments = Department::all();
        return redirect()->route('venue.list')->with(compact('schools', 'departments'));
    }
}

