<div class="user-card">
    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="userTop">
            <div>
                @include('shared.button-file')
                @if ($editing ?? false)
                    @if ($user->role == 'parent')
                        <h3><b style="color: green">{{ $user->role }}</b> <input type="text" name="name"
                                value="{{ $user->name }}">
                        </h3>
                    @else
                        <h3><b style="color: red">{{ $user->role }}</b> <input type="text" name="name"
                                value="{{ $user->name }}">
                        </h3>
                    @endif
                @endif


            </div>
            <div>

                @if (Auth()->user()->id === $user->id)
                    <b><a href="{{ route('users.show', $user->id) }}">show</a></b>
                @endif

            </div>
        </div>
        <div class="bio">
            <h4>Bio</h4>
            <textarea name="bio" placeholder="Add a Bio" id="">{{ $user->bio }}</textarea>
            <div class="info">
                <span><b>n°affichages : {{ $user->affichages()->count() }}|</b></span>
                <span><b>n°comments : {{ $user->comments()->count() }} |</b></span>
                <span><b>n°students : {{ $user->students()->count() }}</b></span>
            </div>
        </div>
        <div>
            <button>Save</button>
        </div>
    </form>


</div>
<style>
    img {
        width: 100px;
        border: 2px solid black;
        border-radius: 50%;
        margin-right: 5px;
    }

    .userTop {
        display: flex;
        justify-content: space-between;
        align-items: center;

    }

    .userTop:first-child {
        display: flex;
    }



    input {
        padding: 10px 5px;
        font-weight: 600;
        outline: none;
    }

    button {
        padding: 7px 25px;
        border-radius: 10px;
        cursor: pointer;
        background-color: transparent;
        text-align: center;
        margin-top: 4px;
    }

    .file input {
        display: flex;
        border: 2px solid black;
    }
</style>
