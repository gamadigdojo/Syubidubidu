<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Item</title>
    <link rel="stylesheet" href="{{asset('CSS/addItem.css')}}">
</head>
<body>
    <div class="content">
        <div>
            <h2>Add Item</h2>
        </div>
        <form action="{{route('addItem')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <label for="">Nama Barang</label>
                <input type="text" name="ProductName" placeholder="Masukkan nama barang di sini" required>

                <label for="">Deskripsi Barang</label>
                <textarea type="text" class="form-control" name="ProductDescription" placeholder="Masukkan deskripsi anda" required></textarea>

                <label>Gambar Barang</label>
                <input type="file" id="file-input" name="ProductImage" required>

                <label for="">Tipe Barang</label>
                <input type="text" name="ProductCategory" placeholder="Masukkan tipe barang di sini" required>

                <label for="">Harga Barang</label>
                <input type="number" name="ProductPrice" placeholder="Masukkan harga barang di sini" required>

                <label for="">Kode Barang</label>
                {{-- Product ID Format PD[0-9][0-9][0-9] & unique --}}
                <input type="text" name="ProductID" placeholder="Masukkan kode barang(PD[0-9][0-9][0-9])" pattern="PD\d{3}" required>

                <label for="">Stok Barang</label>
                <input type="number" name="ProductStock" placeholder="Masukkan stok barang di sini" required>

                <label for="">Nama Toko</label>
                <input type="text" name="StoreName" placeholder="Masukkan nama toko di sini" required>

                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
<script type="text/javascript" src="{{asset('JS/addItem.js')}}"></script>
</html>