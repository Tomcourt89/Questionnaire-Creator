<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\questionnaire;

/*
Functions to navigate routes based on input.
Store function validates user input so that fields are not left empty.
Questionnaires stored with user id so they cannot be accessed without authorisation.
Show function to display users questionnaires back to them.
Auth middleware function added to make secure.
*/
class QuestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $questionnaires = Questionnaire::all();

        return view('users/questionnaires', ['questionnaires' => $questionnaires]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users/questionnaires/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();
        $input['user_id'] = $request->user()->id;
        $questionnaire = Questionnaire::create($input);

        

        return redirect('/users/questionnaires/'.$questionnaire->id );

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
        $questionnaire = Questionnaire::where('id', $id)->first();
        if(!$questionnaire) {
            return redirect('/users/questionnaires');
        }

        $questionnaire->load('questions.answers');
        
        return view('/users/questionnaires/show')->withQuestionnaire($questionnaire);
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

    public function __construct()
    {
        $this->middleware('auth');
    }

}
