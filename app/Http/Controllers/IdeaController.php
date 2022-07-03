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

    //GET/1
    public function show(\App\Models\Idea $idea)
    {

        return view('partials.show', compact('idea'));
    }

    // POST
    public function save()
    {
        $ideaInstance = new Idea();

        $payload = request()->validate([
            'name' => 'required|min:5|max:20',
            'description' => '',
            'goal' => '',
            'idea_owner' => ''
        ]);

        $ideaInstance::create($payload);

        return redirect()->back();
    }

    // EDIT 

    public function edit(\App\Models\Idea $idea)
    {
        return view('partials.edit', compact('idea'));
    }

    // PATCH
    public function update(\App\Models\Idea $idea)
    {
 
        $payload = request()->validate([
            'name' => 'required|min:5|max:20',
            'description' => 'required',
            'goal' => 'required',
            'idea_owner' => 'required'
        ]);

        $idea->update($payload);

        return redirect('/ideas');
    }
}
