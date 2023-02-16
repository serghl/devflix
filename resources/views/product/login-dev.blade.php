@extends('layouts.devflix')
@include('layouts.devflix-nolog-bar')
@section('content')



<!-- <img id="login-img" src="{{ Vite::asset('resources/images/la_haine_2.jpg') }}" alt="login-img"> -->
<div class="showcase">
    <div class="showcase-content">
        <div class="formm">
            <form>
                <h1>Log In</h1>
                <div class="info">
                    <input class="email" type="email" placeholder="Email or phone number"> <br>
                    <input class="email" type="password" placeholder="Password">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Forgot your password ?</a>
                </div>
                <div class="btn">
                    <button class="btn-primary" type="submit">Sign In</button>
                </div>
                <div class="help">
                    <div>
                        <input value="true" type="checkbox"><label>Remember me</label>
                    </div>
                    <a href="https://www.netflix.com/dz-en/LoginHelp">Need Help ?</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection