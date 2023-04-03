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
                <h2>Tujuan Pengiriman</h2>
            </div>
            <div class="alamat-isi">
                <div class="alamat-profil">
                    {{-- concat first name & last name --}}
                    <p>{{$user->Fname}} {{$user->Lname}}</p>
                    <p class="no-telp">{{$user->phone}}</p>
                </div>
                <input id="alamat" type="text" value="{{old('address', $user->address)}}" name="address">
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
                        <td>Produk</td>
                        <td>Harga Satuan</td>
                        <td>Jumlah</td>
                        <td>Subtotal</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $totalPrice = 0;
                    @endphp
                    @foreach ($cartItems as $c)
                        <tr>
                            <td>
                                <div class="item-info">
                                    <img src="{{asset('storage/products/'.$c->Product->ProductImage)}}" alt="">
                                    <h5>{{$c->Product->ProductName}}</h5>
                                </div>
                            </td>
                            <td>Rp.{{$c->Product->ProductPrice}}</td>
                            <td>{{$c->Quantity}}</td>
                            <td>Rp.{{$c->Product->ProductPrice * $c->Quantity}}</td>
                        </tr>
                        {{-- Count Total Price --}}
                        @php
                        $totalPrice += $c->Product->ProductPrice * $c->Quantity; 
                        @endphp
                    @endforeach
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
                <h2>Total pesanan ({{count($cartItems)}} Produk)</h2>
                <h2>Rp.{{$totalPrice}}</h2>
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