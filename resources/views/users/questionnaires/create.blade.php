<!-- Blade to show the questionnaire creation form to the user -->

@extends('layouts.user')

@section('content')
<div class="row">
    <div>
        <h1>Create New Questionnaire</h1>
        <div>
            {!! Form::open(['url' => '/users/questionnaires']) !!}
            @csrf 
            <div>
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                @error('title')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div>
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                @error('description')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div>
                {!! Form::submit('Create Questionnaire', ['class' => 'button form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
