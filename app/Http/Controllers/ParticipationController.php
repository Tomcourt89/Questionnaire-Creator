<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\questionnaire;
use App\Participation;

/*
Functions to navigate routes based on input.
Show function calls the answers that relate to that specific questionnaire. 
*/
class ParticipationController extends Controller
{

    public function index()
    {
        return view('/participation/index');
    }
    //
    public function show(questionnaire $questionnaire)
    {
        $questionnaire->load('questions.answers');
        return view('/participation/show', compact('questionnaire'));
    }

    public function store(questionnaire $questionnaire, Participation $participations)
    {
        
        $input = request()->all();

        $part = $questionnaire->participations()->createMany($input['responses']);

        return redirect('/participation/index');
    }
}
