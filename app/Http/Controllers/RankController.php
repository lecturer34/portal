<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use Illuminate\Http\Request;

class RankController extends Controller
{
    private function validate_($request)
    {

        $this->validate($request, [
            "name" => "required"
        ]);

    }

    public function index()
    {
        $ranks = Rank::all();
        return view('rank.list', compact('ranks'));
    }

    public function create()
    {
        return view('rank.create');
    }

    public function store(Request $request)
    {
        $this->validate_($request);

        Rank::create([
            "name" => $request->name
        ]);
        return redirect()->route('rank.list');
    }

    public function show(Rank $rank)
    {
        return view('rank.show',compact('rank'));
    }

    public function edit(Rank $rank)
    {
        return view('rank.edit',compact('rank'));
    }

    public function update(Request $request, Rank $rank){
        $this->validate_($request);
        $rank->name = $request->name;
        $rank->save();
        return redirect()->route('rank.list');
    }

    public function destroy(Rank $rank)
    {
        if ($rank->delete()) {
            session()->flash('success', 'Rank was deleted successfully!');
        } else {
            session()->flash('error', 'Rank cannot be deleted');
        }
        return redirect()->route('rank.list');

    }
}
