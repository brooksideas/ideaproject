<?php

namespace App\Http\Controllers;

use \App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index(){
        $ideas = Idea::all();

        // dd($ideas);
        return view('partials.idea' , compact('ideas'));
    }
}
