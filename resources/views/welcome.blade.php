<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{asset("CSS/Homepage.css")}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
       <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="{{route('inventory')}}">Product</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#content">Contact</a></li>
        {{-- Login or logout button --}}
        @if (Route::has('login'))
            @auth
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <li><button type="submit" class="btn btn-primary">Logout</button></li>
                </form>
            @else
                <li><a href="{{ route('login') }}" class="btn btn-primary">Login</a></li>
            @endauth
        @endif
    
       </ul>
    </header>

    <section class="home" id="home">
        <div class="home-text">
            <span>Welcome To</span>
            <h1>IDO STORE</h1>
            <h2>Discount Product is Arrived !<br> <span>18 jan - 18 june 2023</span> </h2>
            <a href="{{ route('register') }}" class="btn">Register</a>
        </div>
        <div class="home-img">
            <img src="./assets/home.png" alt="">
        </div>
    </section>

    <section class="shop" id="shop">
        <div class="heading">
          <span>Order Now</span>
          <h1>Best Product is HERE!</h1>
        </div>
        <div class="shop-container" id="shop-container">
        @foreach($products as $product)
          <div class="box active">
            <div class="box-img">
              <img src="{{asset('storage/products/'.$product->ProductImage)}}" alt="">
            </div>
            <div class="stars">
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star'></i>
              <i class='bx bxs-star-half' ></i>
            </div>
            <h2>{{$product->ProductName}}</h2>
            <span>{{$product->ProductPrice}}</span>
            <a href="{{route('inventory')}}" class="btn">Buy Now!</a>
          </div>
        @endforeach
        </div>
        {{-- <div class="pagination">
            <button class="pag-btn" id="prev-btn">Prev</button>
            <button class="pag-btn" id="next-btn">Next</button>
        </div> --}}
      </section>



    <section class="about" id="about">
        <div class="about-img">
            <img src="./assets/aboutus.png" alt="">
        </div>
        <div class="about-text">
            <h2>About Us</h2>
            <p>Pak Tesoi is a retail entrepreneur who sells various general merchandise. With years of experience in the industry, he has built a reputation for providing high-quality products and excellent customer service. </p>
            <p>At Pak Tesoi's store (Ido Store), customers can find a wide range of goods, from household items and clothing to electronic gadgets and accessories. He sources his products from trusted suppliers, ensuring that they meet his strict standards of quality and affordability.</p>
            <a href="#"class="btn">Learn More</a>
        </div>
    </section>

    <section class="content" id="content">

        <div class="title">
            <h1>Contact us</h1>
        </div>
        <div class="social">
            <a href=""><i class='bx bxl-facebook' ></i></a>
            <a href=""><i class='bx bxl-twitter' ></i></a>
            <a href=""><i class='bx bxl-instagram' ></i></a>
            <a href=""><i class='bx bx-globe' ></i></a>
        </div>
        <div class="links">
            <a href="#">Privacy Policy</a>
            <a href="#">Carrer</a>
            <a href="#">Terms of Use</a>
        </div>
        <p>&#169; Ido Store All Right Reserved.</p>
    </section>

</body>
<script src="{{asset("JS/Homepage.js")}}"></script>
</html>
