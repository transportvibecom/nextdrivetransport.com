@extends('layouts.layout')

@section('title')404 Error @endsection

@section('content')
    <div id="page">
        <div class="container-xl">
            <h1>404 Error - Page Not Found</h1>
            <p>The page you are looking for could not be found.</p>
            <p class="mb-5 text-center">Go back to <a href="{{ route('home') }}">main page</a></p>
        </div>
    </div>
@endsection
