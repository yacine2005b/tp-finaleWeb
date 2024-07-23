@extends('layout.layout')
@section('content')
    <div class="registerForm">

        <form action="{{ route('register') }}" method="post">
            <a href="{{ route('dashboard') }}" style="font-size: 36px"> &#x2190;</a>
            @csrf
            <h1>Register</h1>
            <label for="username">Username*</label>
            <input type="text" name="name" placeholder="Write Username Here">
            @error('name')
                <span class="error">
                    <p>{{ $message }}</p>
                </span>
            @enderror
            <label for="Gmail">Gmail*</label>
            <input type="email" name="email"placeholder="Write Gmail Here">
            @error('email')
                <span class="error">
                    <p>{{ $message }}</p>
                </span>
            @enderror
            <label for="Password">Password*</label>
            <input type="password" name="password" placeholder="Write Password Here">
            @error('password')
                <span class="error">
                    <p>{{ $message }}</p>
                </span>
            @enderror
            <label for="Password">Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Write Password Here">
            @error('password_confirmation')
                <span class="error">
                    <p>{{ $message }}</p>
                </span>
            @enderror

            <div class="role">
                <label for="role">Select Your Role:</label>
                <input type="radio" id="parent" name="role" value="parent">
                <label for="parent">Parent</label><br>
                <input type="radio" id="teacher" name="role" value="teacher">
                <label for="teacher">Teacher</label>

            </div>

            <button>Submit</button>
            <p>Already have an account? <b><a href="{{ route('login') }}">Login</a></b></p>
        </form>
    </div>
@endsection
