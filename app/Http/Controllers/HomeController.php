<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\questionnaire;
/*
Function added to make a users questionnaires visible only to that user.
*/
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Questionnaire $questionnaire)
    {
        
        $questionnaires = auth()->user()->questionnaires;

        return view('home', compact('questionnaires'));
    }
}
