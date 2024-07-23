@extends('layout.layout')
@section('content')
    <div class="registerForm">

        <form action="{{ route('login') }}" method="post">
            <a href="{{ route('dashboard') }}" style="font-size: 36px"> &#x2190;</a>
            @csrf
            <h1>LOGIN</h1>
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


            <button>Submit</button>
            <p>Doesn't have an account ?<b><a style="" href="{{ route('register') }}">Register</a></b></p>
        </form>

    </div>
@endsection
