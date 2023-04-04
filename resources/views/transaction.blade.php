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
                            <td>Rp {{$c->Product->ProductPrice}}</td>
                            <td>{{$c->Quantity}}</td>
                            <td>Rp {{$c->Product->ProductPrice * $c->Quantity}}</td>
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
                    <select name="ShipmentMethod" id="opsi-text">
                        @foreach ($shipments as $s)
                            <option value="{{$s->ShipmentTypeID}}">{{$s->ShipmentTypeName}} - Rp {{$s->ShipmentTypeFee}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="end">
                <h2>Total pesanan ({{count($cartItems)}} Produk)</h2>
                <h2>Rp {{$totalPrice}}</h2>
            </div>
        </div>
        <div class="content">
            <h2>Metode Pembayaran</h2>
            <div class="row">
                @php
                    $i = 1;
                @endphp
                @foreach($payments->take(3) as $p)
                    <label id="btn{{$i}}" for="radiobtn{{$i}}">{{$p->PaymentMethodName}}</label>
                    <input id="radiobtn{{$i}}" type="radio" name="PaymentMethod" value="{{$p->PaymentMethodID}}">
                    @php
                        $i++;
                    @endphp
                @endforeach
            </div>
            @php
                $i = 4;
            @endphp
            <div class="row">
                @foreach($payments->slice(3) as $p)
                    <label id="btn{{$i}}" for="radiobtn{{$i}}">{{$p->PaymentMethodName}}</label>
                    <input id="radiobtn{{$i}}" type="radio" name="PaymentMethod" value="{{$p->PaymentMethodID}}">
                    @php
                        $i++;
                    @endphp
                @endforeach
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