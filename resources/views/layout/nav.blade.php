<nav>
    <div class="imageLogo">
        <h1>BACHIRI MIDDLE SCHOOL</h1>
    </div>

    <div class="btnForm">
        @auth
            @include('shared.user')
            <button style="color: cyan;border-color:cyan">
                <a href="{{ route('message.index') }}"> messages</a>
            </button>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button style="color: red;border-color:red;">logout</button>
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


    {{-- search input --}}
    <li class="searchBar">@include('shared.search')</li>
    <li><a href="/">Home</a></li>
    <li><a href="/news">News</a></li>

    @auth
        @if (auth()->user()->role == 'parent')
            <li><a href="{{ route('students.create') }}">Add Student</a></li>
        @endif

        <li><a href="{{ route('profile') }}">Me</a></li>

    @endauth
</ul>
<footer>

</footer>
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

    .active {
        color: blue;
        /* Change color for active link */
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var links = document.querySelectorAll('li a');

        for (var i = 0; i < links.length; i++) {
            var link = links[i];

            if (link.href === window.location.href) {
                link.classList.add('active');
                break;
            }
        }
    });
</script>
