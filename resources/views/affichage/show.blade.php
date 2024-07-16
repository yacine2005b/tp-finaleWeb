@extends('layout.layout')

@section('content')
    <section>
        @include('shared.success_affichage')
        <div class="allaffichages">


            <div class="singleAffichage">

                <div class="top">
                    <div>
                        <img src="{{ $affichage->user->getImageURL() }}" alt="">
                    </div>
                    <div>
                        @if ($affichage->user->role == 'parent')
                            <h4 style="color: green;text-transform :uppercase">{{ $affichage->user->role }} <b
                                    style="color: black;text-transform:initial">{{ $affichage->user->name }}</b></h4>
                        @else
                            <h4 style="color: red;text-transform :uppercase">{{ $affichage->user->role }} <b
                                    style="color: black;text-transform:initial">{{ $affichage->user->name }}</b></h4>
                        @endif
                    </div>

                </div>
                <h6>{{ $affichage->created_at }}</h6>
                <p class="affichage">{{ $affichage->content }}</p>
                <div class="comments">
                    @foreach ($affichage->comments as $comment)
                        <div class="singleComment">
                            <div class="top">
                                <div>
                                    <img src="{{ $comment->user->getImageURL() }}" alt="">
                                </div>
                                @if ($comment->user->role == 'parent')
                                    <h4 style="color: green;text-transform :uppercase">{{ $comment->user->role }} <b
                                            style="color: black;text-transform:initial">{{ $comment->user->name }}</b></h4>
                                @else
                                    <h4 style="color: red;text-transform :uppercase">{{ $comment->user->role }} <b
                                            style="color: black;text-transform:initial">{{ $comment->user->name }}</b></h4>
                                @endif
                            </div>

                            <h6>{{ $comment->created_at }}</h6>
                            <p>{{ $comment->content }}</p>
                        </div>
                    @endforeach
                    @include('shared.comment')
                </div>
            </div>

        </div>

    </section>
@endsection

<style>
    .affichage {
        border-bottom: 2px black solid;
        padding-bottom: 8px;
        font-weight: 600;
    }

    .singleComment {
        border-bottom: 2px dashed black;
        padding-bottom: 6px;
    }

    .top {
        display: flex;
    }

    img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
    }
</style>
