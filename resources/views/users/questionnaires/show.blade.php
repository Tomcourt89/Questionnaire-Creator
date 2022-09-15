<!-- Blade to show the chosen Questionnaire to the user -->

@extends('layouts.user')

@section('content')


<div class="row">
    <div>
        <h1>{{ $questionnaire->title}}</h1>
    
        <div>
            <!-- Buttons to create new questions and also view the questionnaire "as the respondent would see it" -->
            <a class="button" href="/users/questionnaires/{{ $questionnaire->id }}/questions/create">Add New Question</a>
            <a class="success button right" href="/participation/{{ $questionnaire->id }}">View Live Questionnaire</a>

        </div>

        <!-- Loops through each question -->
        @foreach($questionnaire->questions as $question)
        <div>
            <div class="panel">
            <h3>{{ $question->question }}</h3>

                <ul class="no-bullet">
                <!-- Loops through each questions respective answers -->
                @foreach($question->answers as $answer)
                        
                    <li>{{ $answer->answer }}</li>
                    <!-- Shows the number of responses -->
                    <div>Number of responses: {{ $answer->responses->count() }}</div>
                            
                        <!-- If there are responses then the amount is shown in percentage format as bars -->
                        @if($answer->responses->count())
                        <div class="progress round">
                            <span class="meter" style="width: {{ ($answer->responses->count() * 100 / $question->responses->count()) }}%"></span>
                        </div>
                        @else
                        <div class="progress round">
                            <span class="meter" style="width: 0%"></span>
                        </div>
                        @endif
                @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>
@endsection