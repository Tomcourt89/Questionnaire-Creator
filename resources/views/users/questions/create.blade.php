<!-- Blade to show the question creation form to the user -->

@extends('layouts.user')

@section('content')
<div class="row">
    <h1>Create New Question</h1>

    <!-- Form for creating new questions and posting them to the questionnaire id that they belong to. -->
    <form action="/users/questionnaires/{{ $questionnaire->id }}/questions" method="post">
    @csrf

    <!-- Input for question creation, stored into a question array -->
    <div class="panel">
        <label for="question"><h3>Question</h3></label>
        <input name="question[question]" type="text" id="question">
        <!-- Validation check -->
        @error('question.question')
            <small>{{ $message }}</small>
        @enderror
    </div>

    <div class="panel">
        <fieldset>
            <legend>Choices</legend>
            <!-- Input fields for multiple choice answer types. Answers stored into an answer array -->
            <div>
                <label for="answer1">Answer1</label>
                <input name="answers[][answer]" type="text" id="answer">
                @error('answers.0.answer')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="answer2">Answer2</label>
                <input name="answers[][answer]" type="text" id="answer">
                @error('answers.1.answer')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="answer3">Answer3</label>
                <input name="answers[][answer]" type="text" id="answer">
                @error('answers.2.answer')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div>
                <label for="answer4">Answer4</label>
                <input name="answers[][answer]" type="text" id="answer">
                @error('answers.3.answer')
                    <small>{{ $message }}</small>
                @enderror
            </div>
        </fieldset>     
    </div>

        <button type="submit">Add Question</button>
    </form>
</div>
@endsection