@extends('layout.layout')
@section('content')
    <div class="Senders">
        <h2>Users Who Sent Messages</h2>


        @foreach ($users as $user)
            <div class="sender">
                <a href="{{ route('messages.from', $user->id) }}">
                    <h4>{{ $user->name }}<h4>
                </a>
            </div>
        @endforeach


        @if ($users->isEmpty())
            <h3>no one sent a message</h3>
        @endif
    </div>
    <div style="text-align: center; margin-top:10px">
        <a href="{{ route('message.create') }}"><button class="a">Send a Message</button></a>
    </div>
@endsection

<style>
    .senders {
        width: 600px;
        margin: auto;
        border: 2px solid black;
    }

    h2 {
        text-align: center;
        border-bottom: 2px solid black;

        padding: 7px 10px;
    }

    .sender {
        border-bottom: 2px solid black;
        padding: 5px 10px;
        text-align: center;
        font-size: 20px;
        letter-spacing: 2px;
    }

    .sender:last-child {
        border: none;
    }

    .a {
        border: 2px solid black;
        padding: 10px 5px;
        border-radius: 20px;
        cursor: pointer;

    }
</style>
