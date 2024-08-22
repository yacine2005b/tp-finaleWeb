@if (session('search_results'))
    <div id="search-results">


        @if (session('search_results')->count() > 0)
            @foreach (session('search_results') as $user)
                <div class="user-result" id="search-result">
                    <h4 style="color: green; text-transform: uppercase;">
                        {{ $user->role }}
                        <b style="color: black; text-transform: initial;">{{ $user->name }}</b>
                    </h4>
                    <a class="msgUser"
                        href="{{ route('message.create', ['recipient_id' => $user->id, 'recipient_name' => $user->name]) }}">
                        Send Message
                    </a>
                </div>
            @endforeach
            <button id="btnHide">Hide</button>
        @else
            <p>No users found.</p>
        @endif
    </div>
@endif

<style>
    #search-results {
        display: block;
        border: 1px solid black;
        border-top: none;
        z-index: 999;
    }

    #btnHide {
        cursor: pointer;
        width: 100%;
        border: none;
        background-color: transparent;
        font-size: 1rem;
        font-weight: 600;
    }

    .user-result {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid black;
        padding: 10px;
    }

    .msgUser {
        font-size: 1rem;
        border: 2px solid black;
        padding: 4px 8px;
    }
</style>
<script>
    document.getElementById('btnHide').addEventListener('click', function() {
        fetch('/remove-session-variable', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                key: 'search_results'
            })
        }).then(response => {
            if (response.ok) {
                document.getElementById('search-results').style.display = 'none';
            }
        }).catch(error => {
            console.error('Error:', error);
        });
    });
</script>

</body>
