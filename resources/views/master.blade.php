<!doctype html>
<html lang="en">
  <head>
    <title>Ecom Project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    @include('header')
    @yield('content')  
    @include('fotter')

  
  </body>
  <style>
    
    /* .custom-height {
        height: 500px;
        padding-top:100px;
        padding-left: 350px;
    } */
    .slider-text{
      background-color: #24465454 !important;
    }
    .trending-img{
      height: 100px;
    }
    .trending-item{
      float: left;
      width: 20%;
    }
    .trending-wrapper{
      margin: 20px;
    }
    .detail-img{
      height: 200px;

    }
    .search-box {
      width: 500px !important;
    }
    .cart-list-divider{
      border-bottom: 1px solid black;
      margin-bottom: 20px;
      padding-bottom: 20px;
    }
  </style>
</html>