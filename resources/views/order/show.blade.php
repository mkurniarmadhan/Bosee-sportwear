<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INVOICE NO {{ $order->id }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap');

        body {
            font-family: 'Maven Pro', sans-serif;
            background-color: #0000004f
        }

        hr {
            color: #0000004f;
            margin-top: 5px;
            margin-bottom: 5px
        }

        .add td {
            color: #c5c4c4;
            text-transform: uppercase;
            font-size: 12px
        }

        .content {
            font-size: 14px
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex flex-column p-2">
                        {{-- <img src="https://i.imgur.com/vzlPPh3.png" width="48"> --}}
                        <h3> Bosse Sportwear</h3>
                        <p> InoiveID : <small>{{ $order->id }}</small></p>
                    </div>
                    <hr>
                    <div class="table-responsive p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>PEMESAN</td>
                                    <td>KONFIRMASI</td>

                                </tr>
                                <tr class="content">
                                    <td class="font-weight-bold">{{ $order->nama }} <br>{{ $order->phone }}
                                        <br>{{ $order->alamat }}
                                        <br>{{ $order->created_at }}
                                    </td>
                                    @auth
                                        <td>


                                            @if ($order->status)
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    Sudah di konfirmasi
                                                </div>
                                            @else
                                                <form action="{{ route('order.update', $order->id) }}" method="post">

                                                    @csrf
                                                    @method('put')
                                                    <button type="submit" class="btn btn-md btn-success">Konfirmasi
                                                        Pesanan</button>
                                                </form>
                                            @endif


                                        </td>
                                    @else
                                        @if ($order->status)
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Sudah di konfirmasi
                                            </div>
                                        @else
                                            <td>
                                                <a target="_blank"
                                                    href="https://api.whatsapp.com/send/?phone=6289694273720&text=HALLO%20BOSSE...%0A%0AAku%20mau%20konfirmasi%20Pesanan%3A%0A%0AID%20%20%20%3A%20{{ $order->id }}%0ANAMA%20%3A%20{{ $order->nama }}%0A%0Atanggal%20Order%20%3A%20{{ $order->created_at }}&type=phone_number&app_absent=0"
                                                    class=" btn btn-md btn-success">HUBUNGI ADMIN</a>
                                            </td>
                                        @endif



                                    @endauth

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="products p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>SKU</td>
                                    <td>Nama Produk</td>
                                    <td>Harga</td>
                                    <td>Jumlah</td>
                                    <td class="text-center">Total</td>
                                </tr>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($order->orders as $item)
                                    @php
                                        $total += $item->produk->hargaproduk * $item->jumlah;
                                    @endphp
                                    <tr class="content">
                                        <td>{{ $item->produk->sku }}</td>
                                        <td>{{ $item->produk->namaproduk }}</td>
                                        <td>{{ $item->produk->hargaproduk }}</td>
                                        <td>{{ $item->jumlah }}</td>

                                        <td class="text-center">Rp . {{ $item->produk->hargaproduk * $item->jumlah }}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="products p-2">
                        <div class="d-flex align-items-center ">
                            {{-- <img src="https://i.imgur.com/vzlPPh3.png" width="48"> --}}
                            <h3 class=""> TOtal</h3>
                            <p class="ml-auto"> InoiveID : <small>{{ $total }}</small></p>
                        </div>
                    </div>
                    <hr>

                </div>

                @auth

                    <a href="{{ route('order.index') }}" class="btn btn-lg btn-primary mt-2">KEMBALI</a>
                @else
                    <a href="{{ route('home') }}" class="btn btn-lg btn-primary mt-2">KEMBALI</a>
                @endauth
            </div>
        </div>
    </div>


</body>

</html>
