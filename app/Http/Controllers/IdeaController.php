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

        $payload = request()->validate([
            'name' => 'required|min:5|max:20',
            'description' => '',
            'goal' => '',
            'idea_owner' => ''
        ]);

        $idea::create($payload);

        return redirect()->back();
    }
}
