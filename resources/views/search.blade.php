@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <a href="">Filter</a>
        </div>
        <div class="col-sm-4">

            <div class="trending-wrapper"> 
              <h4>Result For Product</h4>
              <div class="carousel-inner">
                  @foreach ($products as $item)
                  <div class="search-item">
                  <a href="detail/{{ $item['id'] }}"> 
                    <img class="trending-img" src="{{ $item['gallery'] }}">
                    <div class="">
                      <h2>{{ $item['name'] }}</h2>
                      <h2>{{ $item['description'] }}</h2>
  
                    </div>
                  </a>
                  </div>
                  @endforeach
              </div>
            </div>
        </div>
    </div>     
</div>
@endsection