@extends('layouts.general_layout')

@section('title', 'Recommended Privacy Solutions')

@section('content')

@if($value == 1)
    <p>Welcome to the Recommended Privacy Solutions</p>

    <p>!! Under Construction !!</p>

    <form action="proceed_to_end" method="post">
        @csrf
        <button type="submit" class="btn btn-primary" value="1" name="value">Proceed</button>
    </form>

@else
    <p>You have to agree.</p>
    <a href="{{ url('system_description') }}" class="btn btn-primary">Start Again</a>
@endif

@stop