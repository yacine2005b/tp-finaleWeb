<nav>
    <div class="imageLogo">
        <h1>BACHIRI MIDDLE SCHOOL</h1>
    </div>

    <div class="btnForm">
        @auth
            @include('shared.user')
            <button>
                <a href="{{ route('message.index') }}"> messages</a>
            </button>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button>logout</button>
            </form>
        @endauth
        @guest
            <button>
                <h3><a href="{{ route('login') }}">login</a></h3>
            </button>
            <button>
                <h3><a href="{{ route('register') }}">register</a></h3>
            </button>
        @endguest

    </div>

</nav>
<ul>
    <div>
        <form action="{{ route('news') }}" method="GET">
            <div class="search">
                <input type="text" class="search__input" name="search" placeholder="ask something">
                <button class="search__button">
                    <svg class="search__icon" aria-hidden="true" viewBox="0 0 24 24">
                        <g>
                            <path
                                d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                            </path>
                        </g>
                    </svg>
                </button>
            </div>
        </form>
    </div>


    {{-- search input --}}
    <li><a href="/">Home</a></li>
    <li><a href="/news">News</a></li>
    <li><a href="{{ route('parents') }}">Parents</a></li>
    <li><a href="{{ route('teachers') }}">Teachers</a></li>
    @auth
        <li><a href="{{ route('profile') }}">Me</a></li>

    @endauth
</ul>

<style>
    a {
        color: black;
        text-decoration: none;
    }

    h4,
    b {
        white-space: nowrap;
    }

    .imgLogo {
        width: 500px
    }
</style>
