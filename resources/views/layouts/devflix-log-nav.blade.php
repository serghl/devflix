<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="search">
            <img src="{{ Vite::asset('resources/images/letter-d-xxl.png') }}" alt="..." height="64">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav navbar-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="series">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="series">Tv Shows</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="series">Documentary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="series">My List</a>
                </li>
            </ul>
        </div>
        <div class="navbar-right">
            <form class="search" method="post" action="index.html">
                <input type="text" name="q" placeholder="Search..." />
                <ul class="results">
                    <li><a href="index.html">Search Result #1<br /><span>Description...</span></a></li>
                    <li><a href="index.html">Search Result #2<br /><span>Description...</span></a></li>
                    <li><a href="index.html">Search Result #3<br /><span>Description...</span></a></li>
                    <li><a href="index.html">Search Result #4</a></li>
                </ul>
            </form>

            <a class="navbar-brand" href="adv_search">
                <img src="{{ Vite::asset('resources/images/search2.png') }}" alt="..." height="64" class="right-nav-image">
            </a>
            <a class="navbar-brand" href="userProfile">
                <img src="{{ Vite::asset('resources/images/profile.png') }}" alt="..." height="64" class="right-nav-image">
            </a>
        </div>
    </div>
</nav>