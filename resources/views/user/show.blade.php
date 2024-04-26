@extends('layout.layout')

@section('content')
    <div class="container">
        @include('shared.user-card')


    </div>
    <div class="allaffichages">
        <h2>{{ $user->name }} Affichages</h2>
        @foreach ($affichages as $affichage)
            <div class="singleAffichage">

                <div class="top">
                    @if ($affichage->user->role == 'parent')
                        <h4 style="color: green;text-transform :uppercase">{{ $affichage->user->role }} <b
                                style="color: black;text-transform:initial">{{ $affichage->user->name }}</b></h4>
                    @else
                        <h4 style="color: red;text-transform :uppercase">{{ $affichage->user->role }} <b
                                style="color: black;text-transform:initial">{{ $affichage->user->name }}</b></h4>
                    @endif



                </div>
                <h6>{{ $affichage->created_at }}</h6>


                <p class="affichage">{{ $affichage->content }}</p>
                <p class="comment"><a
                        href="{{ route('affichages.show', $affichage->id) }}">{{ $affichage->comments->count() }}comments</a>
                </p>
            </div>
        @endforeach
    </div>
@endsection
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

    .container {
        width: 600px;
        margin: auto;
        border: 2px solid black;
        padding: 1rem 4rem;

    }

    textarea {
        padding: 8px;
        border: 2px solid black;
        resize: none;
        width: 80%;
        font-size: 1rem;
        height: 100px;
        background-color: transparent;
        letter-spacing: 2px;
    }

    .allAffichages {
        width: 600px;
        margin: auto;
    }
</style>
