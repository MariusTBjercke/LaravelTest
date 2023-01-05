@extends('grid')

@section('title', 'Create User')

@section('description', 'Create a new user')

@section('className', 'register')

@section('content')

    <h1>Register a new user</h1>

    <div class="register__form">

        <form method="POST" action="{{ route('users.store') }}">
            @csrf
test
        </form>

    </div>

@endsection
