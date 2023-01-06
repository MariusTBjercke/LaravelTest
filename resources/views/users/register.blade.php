@extends('grid')

@section('title', 'Create User')

@section('description', 'Create a new user')

@section('className', 'register')

@section('content')

    <h1>Register a new user</h1>

    <div class="register__form">

        <form method="POST" action="{{ route('users.store') }}">
            @csrf

            <div class="register__input">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="@error('name') register__input_invalid @enderror" required autofocus>
            </div>

            <div class="register__input">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="@error('email') register__input_invalid @enderror" required>
            </div>

            <div class="register__input">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="@error('password') register__input_invalid @enderror" required>
            </div>

            <div class="register__input">
                <input type="submit" id="submit" class="register__submit" value="Register">
            </div>

        </form>

    </div>

@endsection
