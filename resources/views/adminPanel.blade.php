<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{asset("CSS/adminPanel.css")}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <nav>
        <ul class="navbar">
            <li><a href="\">Home</a></li>
            <li><a href="{{route('inventory')}}">Products</a></li>
        </ul>
    </nav>

    <div class="title">
        <h1>Admin Panel</h1>
        <a href="{{route('addItemPage')}}"><button type="button" class="addButton">+ Add Product</button></a>
    </div>

    <div class="table">
        <table>
            <thead>
                <col width="15%">
                <col width="15%">
                <col width="10%">
                <col width="15%">
                <col width="35%">
                <col width="10%">
                <tr>
                    <th>PRODUCTS</th>
                    <th>PRICE</th>
                    <th>STOCK</th>
                    <th>TYPE</th>
                    <th>DESCRIPTION</th>
                    <th>EDIT/DELETE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>
                        <div class="product-column">
                            <img src="{{asset('storage/products/'.$product->ProductImage)}}" alt="">
                            <div>
                                <h5>{{$product->ProductName}}</h5>
                                {{-- show the primary key from product (ProductID) --}}
                                <p>{{$product->ProductID}}</p>
                            </div>
                        </div>
                    </td>
                    <td>{{$product->ProductPrice}}</td>
                    <td>{{$product->ProductStock}}</td>
                    <td>{{$product->ProductCategory}}</td>
                    <td>{{$product->ProductDescription}}</td>
                    <td>
                        <div class="editDelete">
                            <a href="{{route('updateItemPage', [$product->ProductID])}}">
                                <button type="button"><i class="uil uil-edit"></i></button>
                            </a>
                            <form action="{{route('deleteItem', [$product->ProductID])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit"><i class="uil uil-trash-alt"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>