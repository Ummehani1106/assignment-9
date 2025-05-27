@extends('layouts.master')

@section('title', 'About Us')

@section('content')
    <h2>About Our Team</h2>
    <ul>
        @foreach($team as $member)
            <li>{{ $member }}</li>
        @endforeach
    </ul>
@endsection




