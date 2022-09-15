<!-- Blade to show the questionnaire to the user -->

@extends('layouts.response')

@section('content')
<div class="row">
    <h1>{{ $questionnaire->title }}</h1>

    <!-- Form posting the users choices for each specific questionnaire -->
    <form action="/participation/{{ $questionnaire->id }}" method="post">
    @csrf

    <!-- Loop to cycle through each question through the questionnaire and give each one a countable variable -->
    @foreach($questionnaire->questions as $new => $question)
    <div>
        <div class="panel">
            <h3>{{ $question->question }}</h3>
        </div>
        <div class="panel">
        <ul class="no-bullet">

        <!-- Foreach loop that shows possible answer choices for their respective question to the user
            stores the answers in a new array "responses" that keeps the answer_id as indexes
            Also has two hidden input elements that will pass the question_id and questionnaire_id with the response
            This is to circumvent foreign keys not working in the migrations -->
            @foreach($question->answers as $answer)
            <label for="answer{{ $answer->id }}">
                <li class="panel callout">{{ $answer->answer }}
                    <input class="right" type="radio" name="responses[{{ $new }}][answer_id]" id="answer{{ $answer->id }}" value="{{ $answer->id }}">
                    <input type="hidden" name="responses[{{ $new }}][question_id]" value="{{ $question->id }}">
                    <input type="hidden" name="responses[{{ $new }}][questionnaire_id]" value="{{ $questionnaire->id }}">
                </li>
            </label>
            @endforeach
        </ul>
        </div>
    </div>
    @endforeach
    <button type="submit">Save Responses</button> 
    </form>
</div>
@endsection
