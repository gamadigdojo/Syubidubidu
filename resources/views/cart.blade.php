<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="{{asset('CSS/cart.css')}}">
</head>
<body>
  <nav>
    <ul class="navbar">
        <li><a href="">Home</a></li>
        <li><a href="">About Us</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Products</a></li>
    </ul>
  </nav>

  <div class="title">
    <h1>Keranjang anda.</h1>
  </div>

  <div class="row">
    @foreach ($cart as $c)
    <div class="content">
      <img src="1.png" alt="">
      <div class="desc">
          <p>{{$c->ProductID}}</p>
          <span class="quantity">
              <button id="increase" type="button"><p>+</p></button>
              <p id="amount"></p>
              <button id="decrease" type="button"><p>-</p></button>
          </span>
        </div>
    </div>
    @endforeach
  </div>
</body>
<script type="text/javascript" src="{{asset('JS/cart.js')}}"></script>
</html>