<?php

namespace App\Http\Controllers;

use \App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    // GET
    public function index()
    {
        $ideas = Idea::all();
        return view('partials.idea', compact('ideas'));
    }

    // POST
    public function save()
    {
        $idea = new Idea();
         
        $data = request()->validate(['name' => 'required|min:5|max:20']);

        $idea->name = request('name');
        $idea->description = request('description');
        $idea->goal = request('goal');
        $idea->idea_owner = request('idea_owner');

        $idea->save();

        return redirect()->back();
    }
}
