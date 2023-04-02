<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction</title>
    <link rel="stylesheet" href="{{asset('CSS/transaction.css')}}">
</head>
<body>
    <nav>
        <ul class="navbar">
            <li><a href="">Home</a></li>
            <li><a href="">Cart</a></li>
            <li><a href="">Profile</a></li>
            <li><a href="">Products</a></li>
        </ul>
    </nav>

    <form action="" method="POST">
        @csrf
        <div class="content">
            <div class="alamat-title">
                <h2>Alamat Pengiriman</h2>
                <button>Ubah</button>
            </div>
            <div class="alamat-isi">
                <div class="alamat-profil">
                    <p>Nama Penerima</p>
                    <p class="no-telp">081238751923</p>
                </div>
                <div class="alamat-jalan">
                    <p>Jl. Sudirman No. 130, Tanjung Karang Pusat, Kota Bandar Lampung</p>
                </div>
            </div>
        </div>
        <div class="content">
            <h2>Produk Dipesan</h2>
            <table>
                <col width="500px"/>
                <col width="150px"/>
                <col width="150px"/>
                <col width="150px"/>
                <thead>
                    <tr>
                        <td></td>
                        <td>Harga Satuan</td>
                        <td>Jumlah</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="item-info">
                                <img src="1.png" alt="">
                                <h5>Nama Barang</h5>
                            </div>
                        </td>
                        <td>14.000</td>
                        <td>3</td>
                        <td>42.000</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="item-info">
                                <img src="1.png" alt="">
                                <h5>Nama Barang</h5>
                            </div>
                        </td>
                        <td>14.000</td>
                        <td>3</td>
                        <td>42.000</td>
                    </tr>
                </tbody>
            </table>
            <h2>Opsi Pengiriman</h2>
            <div class="opsi">
                <div class="opsi-info">
                    <p>Ambil di Tempat</p>
                    <p>Rp 6.000</p>
                </div>
                <button>Ubah</button>
            </div>
            <div class="end">
                <h2>Total pesanan (2 produk)</h2>
                <h2>Rp 56.000</h2>
            </div>
        </div>
        <div class="content">
            <h2>Metode Pembayaran</h2>
            <div class="row">
                <label id="btn1" for="radiobtn1">COD</label>
                <input id="radiobtn1" type="radio" name="PaymentMethod">
        
                <label id="btn2" for="radiobtn2">Visa / Master Card</label>
                <input id="radiobtn2" type="radio" name="PaymentMethod">
        
                <label id="btn3" for="radiobtn3">Virtual Account</label>
                <input id="radiobtn3" type="radio" name="PaymentMethod">
            </div>
        
            <div class="row">
                <label id="btn4" for="radiobtn4">Transfer Bank</label>
                <input id="radiobtn4" type="radio" name="PaymentMethod">
        
                <label id="btn5" for="radiobtn5">OVO</label>
                <input id="radiobtn5" type="radio" name="PaymentMethod">
        
                <label id="btn6" for="radiobtn6">Gopay</label>
                <input id="radiobtn6" type="radio" name="PaymentMethod">
            </div>
        </div>
        <div class="pesan">
            <button class="pesan-btn" type="submit">
                <h2>Buat Pesanan</h2>
            </button>
        </div>
    </form>
    <script type="text/javascript" src="{{asset('JS/transaction.js')}}"></script>
</body>
</html>