<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\questionnaire;
use App\Question;

/*
Functions to navigate routes based on input.
Store function validates the user input so that fields are not left empty.
Questions and Answers created based on input relating to their variables in the blade view.
Input stored to specific questionnaire id.
*/
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Questionnaire $questionnaire)
    {
        //

        return view('users/questions/create', compact('questionnaire'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Questionnaire $questionnaire)
    {
        // dd(request()->all());
        //
        $input = request()->validate([
            'question.question' => 'required',
            'answers.*.answer' => 'required',
        ]);

        
        $question = $questionnaire->questions()->create($input['question']);
        $question->answers()->createMany($input['answers']);

        return redirect('/users/questionnaires/'.$questionnaire->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
