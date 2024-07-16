@auth
    <form action="{{ route('affichages.store') }}" method="post">
        @csrf
        <div class="user">
            <img src="{{ Auth()->user()->getImageURL() }}" alt="">
            <div>
                @include('shared.user')
            </div>

        </div>

        <textarea id="affich" rows="4" placeholder="what's on your mind" name="content"></textarea>
        @error('affichage')
            <span>
                <p>{{ $message }}</p>
            </span>
        @enderror
        <button class="button-name">Share</button>

    </form>
@endauth
@guest
    <h3>login to share</h3>
@endguest

<style>
    .button-name {
        align-items: center;
        appearance: none;
        background-color: #FCFCFD;
        border-radius: 4px;
        border-width: 0;
        box-shadow: rgba(45, 35, 66, 0.2) 0 2px 4px, rgba(45, 35, 66, 0.15) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
        cursor: pointer;
        display: inline-flex;
        font-weight: 600;
        height: 40px;
        justify-content: center;
        line-height: 1;
        list-style: none;
        overflow: hidden;
        padding-left: 16px;
        padding-right: 16px;
        position: relative;
        text-align: left;
        text-decoration: none;
        transition: box-shadow .15s, transform .15s;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
        will-change: box-shadow, transform;
        font-size: 15px;
    }

    .button-name:focus {
        box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
    }

    .button-name:hover {
        box-shadow: rgba(45, 35, 66, 0.3) 0 4px 8px, rgba(45, 35, 66, 0.2) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
        transform: translateY(-2px);
    }

    .button-name:active {
        box-shadow: #D6D6E7 0 3px 7px inset;
        transform: translateY(2px);
    }

    span {
        color: red;
        font-size: 14px;
        font-weight: 500
    }

    img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
    }

    .user {
        display: flex;
        gap: 10px;
        border-bottom: none;
        padding: 5px;
        border: 2px solid black;
        border-bottom: none;
        text-transform: capitalize;
        margin-top: 10px;
    }
</style>
