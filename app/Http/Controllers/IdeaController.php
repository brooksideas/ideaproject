<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index(){
        $var = 'Hello from Inside';
        return view('partials.idea' , compact('var'));
    }
}
