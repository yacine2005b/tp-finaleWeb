@extends('layout.layout')

@section('content')
    <div class="registerForm">

        <form action="{{ route('students.store') }}" method="post">

            @csrf
            <h2 style="text-align: center">Add Your Children</h2>
            <label for="name">Name</label>
            <input type="text" required name="name">
            <input type="hidden" name="parent_id" value="{{ Auth()->id() }}">

            <button>Add</button>

        </form>
    </div>
@endsection
