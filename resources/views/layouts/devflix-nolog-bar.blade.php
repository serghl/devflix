<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container d-flex justify-content-between">
        <div>
            <a class="navbar-brand" href="#">
                <img id="logo" src="{{ Vite::asset('resources/images/Logo-Devflix-1024x300-1.png') }}" alt="..." height="108" onclick="location.href='search'">
        </div>
    </div>
    <div>
        <a href="#">
            <button type="button" class="btn btn-secondary mr-3" onclick="location.href='/signin'">Sign In</button>
        </a>
        <a href="#">
            <button type="button" class="btn btn-secondary mr-3" onclick="location.href='/login'">Log In</button>
        </a>
    </div>
</nav>