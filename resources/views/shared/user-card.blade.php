<div class="user-card">
    <div class="userTop">
        <div>
            <img src="{{ Auth()->user()->getImageURL() }}" alt="">

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
        <span><b>n°comments : {{ $user->comments()->count() }} |</b></span>
        <span><b>n°students : {{ $user->students()->count() }}</b></span>
    </div>
    @if ($user->role == 'parent')
        <div>
            <h3>Students Added :</h3>
            @foreach ($students as $student)
                <h5>{{ $student->name }}</h5>
            @endforeach
        </div>
    @endif

    <div>


    </div>
</div>
