@extends('layouts.admin')
@section('title', 'Users')

@section('content')
<div class="columns">
    <table>
        <thead>
            <tr>
                <th class="large-2 small-2">User ID</th>
                <th class="large-2 small-2">Username</th>
                <th class="large-8 small-8">Email</th>
                <th class="large-1 small-1">Questionnaires</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><a href="/">Test</a></td>
                <!-- <td> variable->id </td>
                <td> variable->name </td>
                <td> variable->user </td>
                <td> variable->completions </td> 
                
                Need to fill these in with seeded data + foreach loop that checks the other database entries-->
            </tr>
        </tbody>
    </table>
</div>
@endsection
