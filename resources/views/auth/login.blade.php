
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

    <form action="{{route('login')}}" method="post">
        @csrf
        <h1>LOGIN</h1>
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


 <button>Submit</button>
 <p>Doesn't have an account ?<b><a style="" href="{{route('register')}}">Register</a></b></p>
            </form>
</div>


</body>

