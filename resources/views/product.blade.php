@extends('master')
@section('content')
<div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
                @foreach ($products as $item)
                <div class="carousel-item @if($loop->index == 0) active @endif">
                    <a href="detail/{{ $item['id'] }}">
                        <img class="slider-img" src="{{ $item['gallery'] }}" alt="Los Angeles" width="1100" height="400">
                        <div class="carousel-caption slider-text">
                            <h3>{{ $item['name'] }}</h3>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
          <div class="trending-wrapper"> 
            <h1>Trending Product</h1>
            <div class="carousel-inner">
                @foreach ($products as $item)
                <div class="trending-item">
                <a href="detail/{{ $item['id'] }}"> 
                  <img class="trending-img" src="{{ $item['gallery'] }}">
                  <div class="">
                    <h3>{{ $item['name'] }}</h3>
                  </div>
                </a>
                </div>
                @endforeach
            </div>
          </div>
          
</div>
@endsection