<?php
use App\Http\Controllers\ProductController;
$total=0;
if (Session::has('user')) {
  $total=ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/">Ecomerece</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Order</a>
        </li>
        
      </ul>
      <form action="/search" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <ul class="navbar-nav  mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="/cartlist">Cart({{ $total }})</a>
        </li>
        @if (Session::has('user'))
          
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            {{ Session::get('user')['name'] }}
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/logout">Logout</a>
            
          </div>
        </li>
        @else
        <li><a href="">Login</a></li>
        @endif
        
        
      </ul>
    </div>
  </nav>