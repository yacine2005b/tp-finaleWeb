@extends('layout.layout')

@section('content')
    @auth
        <div class="Users">
            @foreach ($users as $user)
                @if ($user->role == 'parent' && $user->name != Auth()->user()->name)
                    <div class="cardUser">
                        <h3><u>{{ $user->name }}</u></h3>
                        <a class="sndMessage"
                            href="{{ route('message.create', ['recipient_id' => $user->id, 'recipient_name' => $user->name]) }}">Send
                            Message</a>
                    </div>
                @endif
            @endforeach
        </div>

    @endauth
    @guest
        <h2>You Have To Login</h2>
    @endguest

    <style>
        .Users {
            display: flex;

        }

        .cardUser {
            padding: 10px;
            border: 2px solid black;
            margin: 5px;

        }

        .cardUser h3 {
            margin-bottom: 20px;
            text-align: center;
        }

        .sndMessage {
            cursor: pointer;
            padding: 5px 27px;
            border: 2px solid black;
            border-radius: 8px;
            margin: 20px;

            font-weight: 600;

        }
    </style>
@endsection
