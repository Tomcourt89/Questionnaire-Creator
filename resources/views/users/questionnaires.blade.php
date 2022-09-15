<!-- Blade to show the user homepage with a list of their questionnaires -->

@extends('layouts.user')

@section('content')
<div class="row">
    <h1>Your Questionnaires</h1>
    <!-- Iterates through this users questionnaires and displays them -->
    @if (isset ($questionnaires))

    <ul class="no-bullet">
        @foreach ($questionnaires as $questionnaire)
        <div class="panel">
            <li><h3>{{ $questionnaire->title }}</h3></li>
            <!-- Shows the amount of responses each questionnaire has had so far with a button to review it -->
            <p>{{ $questionnaire->description }}</p>
            <p>Responses: {{ $questionnaire->participations->count() / $questionnaire->questions->count() }}</p>

            <a class="button small" href="/users/questionnaires/{{ $questionnaire->id }}">Review Questionnaire</a>
        </div>
        @endforeach
    </ul>
        @else
            <p> No questionnaires added yet</p>
        @endif
</div>
@endsection