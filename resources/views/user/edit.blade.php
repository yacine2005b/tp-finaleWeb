@extends('layout.layout')

@section('content')
    <div class="container">
        @include('shared.edit-card')
        <div class="allAffichages">
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

    </div>
@endsection
