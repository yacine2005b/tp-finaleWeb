@auth
<form action="{{route("affichages.comments.store",$affichage->id)}}" method="post">
    @csrf
    {{-- <input type="text" name="comment">
    <button>add a comment</button> --}}


    <div class="input-place">
        <input placeholder="Send a comment." name="comment" class="send-input" type="text">
        <div class="send">
            <button><svg class="send-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path fill="#6B6C7B" d="M481.508,210.336L68.414,38.926c-17.403-7.222-37.064-4.045-51.309,8.287C2.86,59.547-3.098,78.551,1.558,96.808 L38.327,241h180.026c8.284,0,15.001,6.716,15.001,15.001c0,8.284-6.716,15.001-15.001,15.001H38.327L1.558,415.193 c-4.656,18.258,1.301,37.262,15.547,49.595c14.274,12.357,33.937,15.495,51.31,8.287l413.094-171.409 C500.317,293.862,512,276.364,512,256.001C512,235.638,500.317,218.139,481.508,210.336z"></path></g></g></svg></button>
        </div>
      </div>
    </form>
@endauth
@guest
    <h2>login to Comment</h2>
@endguest
<style>
    /* input{
        margin-top: 7px;
        color: transparent;
        width: 70%;
    } */

    .send button{
   background-color:transparent;
    border: none;
}

    .send-input {
  outline: none;
  display: flex;
  border: none;
  background: none;
  height: 40px;
  width: 290px;
  border-radius: 7px;
  background: none;
  color: black;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  margin-left: 5px;
}

.send-input::placeholder {
  color: #828E9E;
}

.input-place {
  display: flex;
  flex-direction: row;
  margin-top: 15px;
  margin-left: 10px;
  align-items: center;
  background-color: #40414f00;
  border-radius: 7px;
  height: 40px;
  width: 90%;
  gap: 5px;
  border: 2px solid black;
  justify-content: space-between;
}

.send {
  width: 40px;
  height: 30px;
  background-color: none;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.send-icon {
  width: 17px;
}

</style>
