
<body>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <nav>
        <h1 class="logo">school name</h1>
        <div class="btnForm">
        <button><h3><a href="{{route('login')}}">login</a></h3></button>
       <button><h3><a href="{{route('register')}}">register</a></h3></button>
        </div>

    </nav>

<div class="registerForm">

    <form action="{{route('register')}}" method="post">
        @csrf
        <h1>Register</h1>
        <label for="username">Username*</label>
        <input type="text" name="name" placeholder="Write Username Here" >
        @error('name')
<span class="error"><p>{{$message}}</p></span>
@enderror
        <label for="Gmail">Gmail*</label>
        <input type="email" name="email"placeholder="Write Gmail Here" >
        @error('email')
<span class="error"><p>{{$message}}</p></span>
@enderror
        <label for="Password">Password*</label>
        <input type="password" name="password"  placeholder="Write Password Here">
        @error('password')
           <span class="error"><p>{{$message}}</p></span>
        @enderror
        <label for="Password">Confirm Password</label>
        <input type="password" name="password_confirmation" placeholder="Write Password Here">
        @error('password_confirmation')
<span class="error"><p>{{$message}}</p></span>
@enderror

<div class="role">
    <label for="role">Select Your Role:</label>
    <input type="radio" id="parent" name="role" value="parent">
    <label for="parent">Parent</label><br>
    <input type="radio" id="teacher" name="role" value="teacher">
    <label for="teacher">Teacher</label>

</div>

 <button>Submit</button>
<p>Already have an account? <b><a href="{{route('login')}}">Login</a></b></p>
            </form>
</div>


</body>


<style>


</style>
