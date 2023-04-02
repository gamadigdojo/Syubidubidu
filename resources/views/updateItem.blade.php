<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Item</title>
    <link rel="stylesheet" href="{{asset('CSS/addItem.css')}}">
</head>
<body>
    <div class="content">
        <div>
            <h2>Update {{$product->ProductName}}</h2>
        </div>
        <form action="{{route('updateItem',$product->ProductID)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form">
                    <label for="">Deskripsi Barang</label>
                    <textarea rows="5" type="text" class="form-control" name="ProductDescription">{{ old('ProductDescription', $product->ProductDescription) }}</textarea>

                    <label for="">Stok Barang</label>
                    <input type="number" name="ProductStock" value="{{ old('ProductStock', $product->ProductStock) }}">
                    
                    <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>