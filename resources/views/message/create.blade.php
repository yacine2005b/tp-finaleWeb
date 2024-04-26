@extends('layout.layout')

@section('content')
<div class="sndMessage">
    <h2>Send a Message</h2>
    <form action="{{ route('message.store') }}" method="POST">
        @csrf



            @if ($recipient_name && $recipient->id)

                <textarea name="message" id="message" rows="4" cols="50" placeholder="Send a Message"></textarea>

            <!-- If recipient name is provided, display it as plain text -->
            <div class="snd">
                <label for="sent_to_id">Send To:</label>
                <input class="sentTo" type="text" value="{{ $recipient_name }}" readonly>
            </div>

            <input type="hidden" name="sent_to_id" value="{{ $recipient->id }}"><br>
            <div class="btnSnd">
                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/></svg><b>Send</b></button>
            </div>
        @else
        <div>
            <label for="message">Message:</label><br>
            <textarea name="message" id="message" rows="4" cols="50" placeholder="Send a Message"></textarea>

            <label for="sent_to_id">Send To:</label><br>
            <select name="sent_to_id" id="sent_to_id">
                @foreach ($users as $user)
                @if ($user->name !=Auth()->user()->name)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endif

                @endforeach
            </select>
        </div>
        <div class="btnSnd">
            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/></svg><b>Send</b></button>
        </div>
        </form>





    @endif
</div>



    @endsection
<style>
.sndMessage{
    width: 600px;
    margin: auto;
    border: 2px solid black;
}
.sndMessage{
    width: 600px;
    margin: auto;
    border: 2px solid black;
}
.sndMessage textarea{
    border: none;
}
.sndMessage h2 {
    text-align: center;
        border-bottom: 2px solid black;
        padding: 7px 10px;
}
.snd{
    border-top: 2px solid black;
    padding: 5px;
}
.sentTo{
    border: none;
    outline: none;
    font-size: 18px;
    font-weight: 600;
    background-color: transparent;
}
svg{
    width: 20px;
}
button {
    padding: 5px 40px;
    border-radius: 10px;
    margin: 10px;
    text-align: center;
    cursor: pointer;
    background-color: transparent;
}
.btnSnd{
    text-align: center;
    font-weight: 600;
}

</style>
