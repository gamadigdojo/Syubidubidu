{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="row">
        @foreach ($product as $p)
        <div class="col-sm-6 ">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$p->ProductID}}</h5>
              <p class="card-text">{{$p->ProductName}}</p>
              <form action="{{route('AddToCart')}}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="ProductID" value="{{$p->ProductID}}">
                <input type="hidden" name="Email" value="{{Auth::user()->email}}">
                <input type="hidden" name="Quantity" value="1">
                <button type="submit" class="btn btn-primary">Add to cart</button>
              </form>
            </div>
          </div>
        </div>
        @endforeach
      </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('CSS/inventory.css') }}">
    <title>Inventory</title>
</head>
<body>
    <header>
        <ul class="navbar">
            <li><a href="/">Home</a></li>
            <li><a href="{{route('cart')}}">Cart</a></li>
            <li><a href="{{route('profile.edit')}}">Profile</a></li>
            {{-- show admin menu if the user is admin --}}
            @if (Auth::user()->role == 'admin')
            <li><a href="{{route('adminPanel')}}">Admin</a></li>
            @endif
        </ul>
    </header>

    <section id="content">
        <div class="title">
            <h1>Inventory Page</h1>
        </div>
        <div class="container">
            @foreach ($product as $p)
            <div class="card">
                <div class="title-content">
                    <h1>{{$p->ProductName}}</h1>
                    <img class="img-product" src="{{asset('storage/products/'.$p->ProductImage)}}" alt="" height="200px" width="100%">
                </div>
                <div class="detail">
                    <p class="font-detail">{{$p->ProductCategory}}</p>
                    <p class="price-detail">Rp.{{$p->ProductPrice}},-</p>
                </div>
                <div class="description">
                    <p>{{$p->ProductDescription}}</p>
                </div>
                <form action="{{route('AddToCart')}}" method="POST">
                  @csrf
                  @method('PUT')
                  <input type="hidden" name="ProductID" value="{{$p->ProductID}}">
                  <input type="hidden" name="Email" value="{{Auth::user()->email}}">
                  <input type="hidden" name="Quantity" value="1">
                  <button type="submit" class="add">Add to cart</button>
                </form>
            </div>
            @endforeach
        </div>
    </section>
</body>
</html>
