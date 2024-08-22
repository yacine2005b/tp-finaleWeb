@auth
    <form action="{{ route('affichages.comments.store', $affichage->id) }}" method="post">
        @csrf


        <div class="comment_input">
            <input placeholder="Send a comment." name="comment" class="send-input" type="text">
            <div class="send">
                <button>send
                </button>
            </div>
        </div>
    </form>
@endauth
@guest
    <h2>login to Comment</h2>
@endguest

<style>
    .comment_input {
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding: 0px 20px;
        align-items: center;
    }

    .comment_input input {
        border: none;
        outline: none;
        background-color: transparent;
        padding: 6px 8px;
        width: 100%;
        font-size: 1.2rem;
    }

    .comment_input input::placeholder {
        font-size: 1rem;
    }

    .send {
        text-align: center;
    }

    .comment_input .send button {
        padding: 4px 20px;
        background-color: transparent;
        cursor: pointer;
        font-weight: 700;
        font-size: 1.1rem;
    }
</style>
