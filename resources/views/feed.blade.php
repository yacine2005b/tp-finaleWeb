@extends('layout.layout')

@section('content')
    <section>
        @include('shared.success_affichage')
        @include('shared.submit_affichage')
        <div class="allaffichages">
            @foreach ($affichages as $affichage)
                <a href="{{ route('affichages.show', $affichage->id) }}">
                    <div class="singleAffichage">
                        <div class="top">
                            <img src="{{ $affichage->user->getImageURL() }}" alt="">

                            @if ($affichage->user->role == 'parent')
                                <a href="{{ route('users.show', $affichage->user->id) }}">

                                    <h4 style="color: green;text-transform :uppercase">{{ $affichage->user->role }} <b
                                            style="color: black;text-transform:initial">{{ $affichage->user->name }}</b></h4>
                                </a>
                            @else
                                <a href="{{ route('users.show', $affichage->user->id) }}">
                                    <h4 style="color: red;text-transform :uppercase">{{ $affichage->user->role }} <b
                                            style="color: black;text-transform:initial">{{ $affichage->user->name }}</b>
                                    </h4>
                                </a>
                            @endif



                        </div>
                        <h6>{{ $affichage->created_at }}</h6>


                        <p class="affichage">{{ $affichage->content }}</p>
                        <p class="comment"><a
                                href="{{ route('affichages.show', $affichage->id) }}">{{ $affichage->comments->count() }}comments</a>
                        </p>
                    </div>
                </a>
            @endforeach
            {{ $affichages->links() }}
        </div>

    </section>
@endsection
<style>
    .top {
        display: flex;
    }
</style>
