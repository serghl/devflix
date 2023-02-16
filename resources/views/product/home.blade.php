@extends('layouts.devflix')
@include('layouts.devflix-nolog-bar')
@section('content')

<body>

    <!-- Content container -->
    <div class="content-container">
        <div class="img-header">
            <img id="coverflow-img" src="{{ Vite::asset('resources/images/coverflow.png') }}" alt="..." height="520" onclick="location.href='search'">
            <h1 class="img-header-text">TODOS LOS ESTRENOS A TU ALCANCE</h1>
        </div> <!-- content-container -->

        <hr class="sep">

        <div class="content-block">
            <img class="img-container-left" src="{{ Vite::asset('resources/images/la haine_background.png') }}" height="240" alt="image">
            <p class="p-container-left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacus purus, feugiat in fringilla quis, egestas eget neque. Donec non vehicula libero. Quisque augue massa, malesuada id fermentum vel, dignissim a nisi. Duis in dolor sit amet metus ullamcorper varius at sed metus. Morbi dignissim erat felis, quis ullamcorper dui facilisis eu. Aliquam cursus pretium ante, eu euismod leo cursus sit amet. Nam id convallis lectus, vitae cursus odio.
                Aenean nec mollis eros. Nulla dapibus luctus est at porta. Mauris molestie libero non neque feugiat ornare. Quisque vitae vulputate metus. Nunc fermentum mauris sed orci ultricies gravida. Praesent suscipit molestie nulla, quis eleifend metus pellentesque eget. Pellentesque at ullamcorper leo. Aliquam id eleifend tellus, id tincidunt magna. Suspendisse pellentesque dignissim orci, id porta orci efficitur non. Nulla tempus, orci quis lobortis euismod, est lorem consequat libero, vitae dapibus ligula enim at sem. Aliquam eu congue nibh, a maximus metus. Sed mattis vulputate enim at volutpat. Aenean tempor lectus vitae magna convallis, eget consequat urna malesuada. </p>
        </div><!-- content-block-->

        <hr class="sep">

        <div class="content-block">
            <p class="p-container-right">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacus purus, feugiat in fringilla quis, egestas eget neque. Donec non vehicula libero. Quisque augue massa, malesuada id fermentum vel, dignissim a nisi. Duis in dolor sit amet metus ullamcorper varius at sed metus. Morbi dignissim erat felis, quis ullamcorper dui facilisis eu. Aliquam cursus pretium ante, eu euismod leo cursus sit amet. Nam id convallis lectus, vitae cursus odio.
                Aenean nec mollis eros. Nulla dapibus luctus est at porta. Mauris molestie libero non neque feugiat ornare. Quisque vitae vulputate metus. Nunc fermentum mauris sed orci ultricies gravida. Praesent suscipit molestie nulla, quis eleifend metus pellentesque eget. Pellentesque at ullamcorper leo. Aliquam id eleifend tellus, id tincidunt magna. Suspendisse pellentesque dignissim orci, id porta orci efficitur non. Nulla tempus, orci quis lobortis euismod, est lorem consequat libero, vitae dapibus ligula enim at sem. Aliquam eu congue nibh, a maximus metus. Sed mattis vulputate enim at volutpat. Aenean tempor lectus vitae magna convallis, eget consequat urna malesuada. </p>
            <img class="img-container-right" src="{{ Vite::asset('resources/images/la haine_background.png') }}" height="240" alt="image">
        </div> <!-- content-block-->

        <hr class="sep">

        <div class="content-block">
            <img class="img-container-left" src="{{ Vite::asset('resources/images/la haine_background.png') }}" height="240" alt="image">
            <p class="p-container-left">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacus purus, feugiat in fringilla quis, egestas eget neque. Donec non vehicula libero. Quisque augue massa, malesuada id fermentum vel, dignissim a nisi. Duis in dolor sit amet metus ullamcorper varius at sed metus. Morbi dignissim erat felis, quis ullamcorper dui facilisis eu. Aliquam cursus pretium ante, eu euismod leo cursus sit amet. Nam id convallis lectus, vitae cursus odio.
                Aenean nec mollis eros. Nulla dapibus luctus est at porta. Mauris molestie libero non neque feugiat ornare. Quisque vitae vulputate metus. Nunc fermentum mauris sed orci ultricies gravida. Praesent suscipit molestie nulla, quis eleifend metus pellentesque eget. Pellentesque at ullamcorper leo. Aliquam id eleifend tellus, id tincidunt magna. Suspendisse pellentesque dignissim orci, id porta orci efficitur non. Nulla tempus, orci quis lobortis euismod, est lorem consequat libero, vitae dapibus ligula enim at sem. Aliquam eu congue nibh, a maximus metus. Sed mattis vulputate enim at volutpat. Aenean tempor lectus vitae magna convallis, eget consequat urna malesuada. </p>
        </div><!-- content-block-->
        
    </div>

</body>