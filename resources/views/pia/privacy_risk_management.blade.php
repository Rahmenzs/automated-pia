@extends('layouts.general_layout')

@section('title', 'Privacy Risk Management')

@section('content')

@if($value == 1)
    <p>Welcome to the Privacy Risk Management</p>

    <p>!! Under Construction !!</p>

    <form action="proceed_to_recommended_privacy_solutions" method="post">
        @csrf
        <button type="submit" class="btn btn-primary" value="1" name="value">Proceed</button>
    </form>

@else
    <p>You have to agree.</p>
    <a href="{{ url('system_description') }}" class="btn btn-primary">Start Again</a>
@endif

@stop
