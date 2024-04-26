<div class="user-card">
    <div class="userTop">
        <div>
            <img src="{{ $user->getImageURL() }}" alt="">

            @if ($user->role == 'parent')
                <h3><b style="color: green">{{ $user->role }}</b> {{ $user->name }}</h3>
            @else
                <h3><b style="color: red">{{ $user->role }}</b> {{ $user->name }}</h3>
            @endif


        </div>
        <div>

            @auth
                @if (Auth()->user()->id === $user->id)
                    <b><a href="{{ route('users.edit', $user->id) }}">edit</a></b>
                @endif
            @endauth
        </div>
    </div>
    <div class="bio">
        <h4>Bio:</h4>
        <p>{{ $user->bio }}</p>
    </div>
    <div class="info">
        <span><b>n°affichages : {{ $user->affichages()->count() }}|</b></span>
        <span><b>n°comments : {{ $user->comments()->count() }}</b></span>
    </div>
    <div>


    </div>
</div>
<style>
    img {
        width: 100px;
        height: 100px;
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
</style>
