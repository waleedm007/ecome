@extends('master')
@section('content')
<div class="container">
    <div class="row">
      

            
        <div class="">
                <h4>Cart List</h4>
                @foreach ($products as $item)
                <div class="row search-item cart-list-divider">
                    <div class="colo-sm-3">
                        <a href="detail/{{ $item->id }}"> 
                            <img class="trending-img" src="{{ $item->gallery }}">
                            
                        </a>
                    </div>
                    <div class="colo-sm-3">
                    
                            <div class="">
                                <p>{{ $item->name }}</p>
                                <p>{{ $item->description }}</p>
            
                            </div>
                        
                    </div>
                    <div class="col-sm-3">
                        <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning btn-right">Remove from cart</a>
                    </div>
                
                </div>
                @endforeach
            </div>
          
            
       
    </div> 
</div>
@endsection