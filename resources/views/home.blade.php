<!-- Blade to show the home page after successfully logging in. -->

@extends('layouts.user')

@section('content')
<div class="row">
<!-- Page is intended to be used as a list of URLs which can be given out to participants. -->
    <h1>Share your Questionnaires</h1>
    <p>Share your questionnaires by providing your target audience with the direct link</p>
    <div>
        <ul class="no-bullet">
            @foreach($questionnaires as $questionnaire)
            <li class="panel">{{ $questionnaire->title }}

            <div class="panel callout">
            <!-- Calls the link() function to direct respondents to each questionnaire without requiring authentication -->
                <a href="{{ $questionnaire->link() }}">{{ $questionnaire->link() }}</a>
            </div></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
