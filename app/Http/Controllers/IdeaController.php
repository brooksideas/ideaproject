<?php

namespace App\Http\Controllers;

use \App\Models\Idea;
use \App\Repositories\IdeaRepository;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     *@var \App\Repositories\IdeaRepository
     */


    private $ideaRepository;

    // Constructor
    public function __construct(IdeaRepository $ideaRepository)
    {
        $this->ideaRepository = $ideaRepository;
    }

    // GET
    public function index()
    {
        $ideas = $this->ideaRepository->all();

        // $ideas = Idea::all();

        return view('partials.idea', compact('ideas'));
    }

    //GET/1
    public function show(Idea $idea)
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

    public function edit(Idea $idea)
    {
        return view('partials.edit', compact('idea'));
    }

    // PATCH
    public function update(Idea $idea)
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

    // DELETE
    public function delete(Idea $idea)
    {
        $idea->delete();

        return redirect('/ideas');
    }
}
