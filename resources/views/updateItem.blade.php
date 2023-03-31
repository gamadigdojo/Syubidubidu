<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Item</title>
</head>
<body>
    <div>
        <div>
            <form action="{{route('updateItem',$product->ProductID)}}" method="POST">
                @csrf
                @method('PATCH')
                <div>
                    <h2>Update {{$product->ProductName}}</h2>
                </div>
                <div>
                    <label for="">Deskripsi Barang</label>
                    <textarea type="text" class="form-control" name="ProductDescription">{{ old('ProductDescription', $product->ProductDescription) }}</textarea>
                </div>
                <div>
                    <label for="">Stok Barang</label>
                    <input type="number" name="ProductStock" value="{{ old('ProductStock', $product->ProductStock) }}">
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>