<form class="input-container" action="{{ route('users.search') }}" method="GET">

    @method('GET')
    <input type="text" name="query" class="input" placeholder="search..." id="search-form">
    <button type="submit" class="icon">
        search
    </button>

</form>
<div>
    @include('shared.search-results')
</div>
