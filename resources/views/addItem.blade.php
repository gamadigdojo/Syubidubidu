<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Item</title>
</head>
<body>
    <div>
        <div>
            <form action="{{route('addItem')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <h2>Add Item</h2>
                </div>
                <div>
                    <label for="">Nama Barang</label>
                    <input type="text" name="ProductName" placeholder="Masukkan nama barang di sini">
                </div>
                <div>
                    <label for="">Deskripsi Barang</label>
                    <textarea type="text" class="form-control" name="ProductDescription" placeholder="Masukkan deskripsi anda"></textarea>
                </div>
                <div>
                    <label for="">Gambar Barang</label>
                    <input type="file" name="ProductImage">
                </div>
                <div>
                    <label for="">Tipe Barang</label>
                    <input type="text" name="ProductCategory" placeholder="Masukkan tipe barang di sini">
                </div>
                <div>
                    <label for="">Harga Barang</label>
                    <input type="number" name="ProductPrice" placeholder="Masukkan harga barang di sini">
                </div>
                <div>
                    <label for="">Kode Barang</label>
                    <input type="text" name="ProductID" placeholder="Masukkan kode barang di sini">
                </div>
                <div>
                    <label for="">Stok Barang</label>
                    <input type="number" name="ProductStock" placeholder="Masukkan stok barang di sini">
                </div>
                <div>
                    <label for="">Nama Toko</label>
                    <input type="text" name="StoreName" placeholder="Masukkan nama toko di sini">
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>