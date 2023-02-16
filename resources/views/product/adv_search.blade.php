@extends('layouts.devflix')
@include('layouts.devflix-log-nav')
@section('content')

<div class="showcase">
    <div class="showcase-reg-content">
        <div class="formm">
            <form>
                <h1>Advanced Search</h1>
                <div class="info">
                    <input class="email" type="text" placeholder="Enter your search here"> 
                </div>
                <!-- Genre dropdown -->
                <div class="dropdown col-4">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Genre
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">Action</button>
                        <button class="dropdown-item" type="button">Another action</button>
                        <button class="dropdown-item" type="button">Something else here</button>
                    </div>
                </div>
                <!-- Rating -->
                <div class="dropdown col-4">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Rating
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">Action</button>
                        <button class="dropdown-item" type="button">Another action</button>
                        <button class="dropdown-item" type="button">Something else here</button>
                    </div>
                </div>
                <!-- Release Year -->
                <div class="dropdown col-4">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Release Year
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button">Action</button>
                        <button class="dropdown-item" type="button">Another action</button>
                        <button class="dropdown-item" type="button">Something else here</button>
                    </div>
                </div>
                <div class="btn col-4">
                    <button class="btn-primary" type="submit">Search</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection