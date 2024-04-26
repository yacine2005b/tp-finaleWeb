@extends('layout.layout')

@section('content')

     <div class="chat-container">
        <h2>Messages with {{$sender->name}}</h2>
        @foreach ($sortedMessages as $message)
            <div class="chat-message">


               @if ($message->sent_by_me)
               <div class="lhgt">
                <h5>{{$receiver->name}}</h5>
                <div class="sent">
                 <div class="message"><b>{{ $message->message }}</b></div>
                 <div class="timestamp">{{ $message->created_at->format('H:i') }}</div>
                </div>
               </div>



               @else
               <div class="sended">
                 <h5>{{$sender->name}}</h5>
                 <div class="received">
                     <div class="message"><b>{{ $message->message }}</b></div>
                 <div class="timestamp">{{ $message->created_at->format('H:i') }}</div>
                 </div>
               </div>



               @endif
            </div>
        @endforeach
        <div class="envoye">
            <div class="inputMessage">
                <form action="{{route('message.store')}} " method="POST">
                    @csrf
                    <div class="inputMessage">
                        <input type="text" name="message" id="message" placeholder="Send a Messsage">
                        <input type="hidden" name="sent_to_id" value="{{ $sender->id}}">
                    </div>
                    <button>send</button>

                </form>
            </div>

        </div>
    </div>
    @endsection
<style>

   .chat-container{
    width: 600px;
    border: 2px solid black;
    margin: auto;
    overflow-y: auto;

   }
   .chat-container h2{
    padding: 4px 3px;
    border-bottom: 2px solid black
   }
   .sended{
    align-self: flex-start;
}
.lhgt{
    align-self: flex-end;
}
.chat-message {
    margin-bottom: 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.chat-message h5{
    padding: 0 3px;
}



/* Message text style */
.message {
    font-size: 14px;
    color: #333; /* Dark text color */
}

/* Timestamp style */
.timestamp {
    font-size: 12px;
    color: #666; /* Grey text color */
}

.received{
    border: 2px solid black;
    border-left: none;
    border-radius: 0 20px 20px 0;
    padding: 3px 6px;
}
.sent{
    border: 2px solid black;
    border-right: none;
    border-radius: 20px 0 0 20px;
    padding: 3px 6px;
}
.envoye{
    display: flex;
    width: 100%;

}
.envoye form {
    display: flex;
}
.envoye input{
    outline: none;
    border: 2px solid black;
    border-bottom: none;
    border-left: none;
    width: 100%;
    padding: 10px 10px;
}
.inputMessage{
    width: 100%;
}
.envoye button {
    background: transparent;
    border: none;
    border-top: 2px solid black;
    padding: 5px 20px;
    width: 20%;
    cursor: pointer;
    font-weight: 600;
    font-size: 16px;
}
</style>

