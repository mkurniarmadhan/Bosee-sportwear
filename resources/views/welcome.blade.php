<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BOSEE SPORTWEAR</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('assets') }}/css/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('assets') }}/css/templatemo-festava-live.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

    <main>
        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <strong class="text-dark">BOSEE</strong>
                    </div>

                </div>
            </div>
        </header>


        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    Bosse Sportwear
                </a>


                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Order</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>
                        <li class="nav-item">

                            {{-- <button type="button" class="btn btn-primary mb-2">
                                Primary <span class="badge bg-white text-primary">4</span>
                            </button> --}}
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                My Cart <span
                                    class="badge bg-white text-primary">{{ count((array) session('cart')) }}</span>
                            </button>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <section class="hero-section" id="section_1">
            <div class="section-overlay"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row">

                    <div class="col-12 mt-auto mb-5 text-center">
                        <small></small>
                        <div class="col-lg-20 col-20">
                            <h1 class="text-black mb-5">BOSEE SPORTWEAR</h1>
                        </div>
                    </div>
                </div>

        </section>



        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                        <div class="services-info">
                            <HEADER>
                                <div class="col-12 text-center">
                                    <h1 class="text-black mb-4">About us</h1>
                            </HEADER>

                            <h3 class="text-black mb-4">Our History</h3>

                            <p class="text-black">Berpengalaman lebih dari 5 tahun di bidang industry garmen,
                                telah membentuk kami siap menyambut system perdagangan
                                bebas dalam industry tersebut.</p>

                            <h3 class="text-black mt-4">Our Commitment</h3>

                            <p class="text-black">Komitmen Kami untuk mengangkat insdustri garmen
                                nasional ke kancah pasar global, telah membawa kami
                                melangkah lebih jauh untuk membangun brand
                                terpercaya dan berstandar internasional : BOSEE.</p>

                            <h3 class="text-black mt-4">Our Mission</h3>

                            <p class="text-black">Pendekatan inovatif berdasarkan riset ilmiah dan
                                kolaborasi dengan para atlet, telah menjadi inti dari
                                misi kami, membantu masyarakat memperoleh pakaian
                                olahraga berkualitas internasional dengan harga terjangkau.
                            <p class="line-height">
                            <p class="text-black">
                                Kami sadar bahwa industry yang terkait dengan olahraga di dunia
                                sedang berkembang dengan pesat. Masyarakat sekarang lebih peduli akan
                                Kesehatan, dan berusaha untuk memiliki gaya hidup yang lebih sehat.
                                Kondisi ini menjadikan kebutuhan akan baju olahraga yang bukan hanya
                                harganya terjangkau, namun tetap berfungsi baik dengan teknologi
                                garmen terkini.</p>
                            </p>
                            <p class="line-height">
                            <p class="text-black">
                                Kami yakin BOSEE akan berkembang pesat dan memimpin pasar segmen
                                menengah untuk pakaian olahraga, dikenal karena product berkualitas tinggi,
                                material berteknologi mumpuni, design yang menarik dan harga yang terjangkau.</p>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="about-text-wrap">
                            <img src="{{ asset('assets') }}/images/pexels-alexander-suhorucov-6457579.jpg"
                                class="about-image img-fluid">

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="site-footer-bottom"></div>

        <section class="artists-section section-padding" id="section_3">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">Product</h2>
                    </div>


                    @foreach ($produks as $item)
                        <div class="col-lg-5 col-6 my-2">
                            <div class="artists-image-wrap">
                                <a href="{{ route('addToCart', $item->sku) }}">
                                    <img src="{{ asset('assets') }}/images/produks/{{ $item->gambar }}"
                                        class="artists-image img-fluid">
                                </a>
                            </div>
                        </div>
                    @endforeach




                </div>
            </div>
        </section>

        <div class="site-footer-bottom"></div>
        <!--batas order -->

        <section class="artists-section section-padding" id="section_4">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">ORDER</h1>
                    </div>

                    <div class="col-lg-3 col-4">
                        <div class="artists-image-wrap">
                            <img src="{{ asset('assets') }}/images/artists/order-1.jpg"
                                class="artists-image img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-3 col-4">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="{{ asset('assets') }}/images/artists/order-2.jpg"
                                    class="artists-image img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-4">
                        <div class="artists-image-wrap">
                            <img src="{{ asset('assets') }}/images/artists/order-3.jpg"
                                class="artists-image img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-3 col-4">
                        <div class="artists-thumb">
                            <div class="artists-image-wrap">
                                <img src="{{ asset('assets') }}/images/artists/order-4.jpg"
                                    class="artists-image img-fluid">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--batas order -->

        <section class="contact-section section-padding" id="section_5">
            <footer class="site-footer">
                <div class="site-footer-top">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-6">
                                <h2 class="text-black mb-lg-0">Contact</h2>
                            </div>

                            <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                                <ul class="social-icon d-flex justify-content-lg-end">

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link">
                                            <span class="bi-instagram"></span>
                                        </a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link">
                                            <span class="bi-whatsapp"></span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-4 pb-2">
                            <h5 class="text-black mb-lg-0">Costumer Service</h5>

                            <ul class="site-footer-links">
                                <li class="site-footer-link-item">
                                    </br>
                                    <a href="https://console.dialogflow.com/api-client/demo/embedded/bb5e368a-f8d3-4fc6-a275-f6bd3050e9ba"
                                        class="site-footer-link">Chat Cs</a>
                                </li>


                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                            <h5 class="site-footer-title mb-3">Contact us</h5>

                            <p class="text-black d-flex">
                                <a href="mailto:bosee.apparel@gmail.com" class="site-footer-link">
                                    <p> Email:</br>
                                        bosee.apparel@gmail.com
                                </a>
                            </p>

                            <p class="text-black d-flex mb-1">
                                <a href="tel:0858-0061-5177" class="site-footer-link">
                                    <p> whatsapp:</br>
                                        0858-0061-5177
                                </a>
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                            <h5 class="site-footer-title mb-3">Follow us</h5>

                            <p class="text-black d-flex mt-3 mb-2">
                            <p>Instagram:</br> boseeapparel

                        </div>
                    </div>
                </div>


                <div class="site-footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12  text-center">
                                <p class="copyright-text"> copyright © 2023 Bosee Sportwear</p>
                            </div>
                        </div>
                    </div>
            </footer>


            <!-- JAVASCRIPT FILES -->
            <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
            <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
            <script src="{{ asset('assets') }}/js/jquery.sticky.js"></script>
            <script src="{{ asset('assets') }}/js/click-scroll.js"></script>
            <script src="{{ asset('assets') }}/js/custom.js"></script>

        </section>



        {{-- cart --}}

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">MY Cart</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>

                    @php $total = 0 @endphp
                    @if (session('cart'))
                        @foreach (session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity']   @endphp
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">{{ $details['name'] }}</div>
                                        Rp {{ $details['price'] }} X {{ $details['quantity'] }}
                                    </div>
                                    <span data-id="{{ $id }}"
                                        class="badge bg-danger rounded-pill remove-from-cart">x</span>
                                </li>
                            </ol>
                        @endforeach

                        <li class="list-group-item d-flex justify-content-between align-items-start mt-3">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Total</div>
                                Rp {{ $total }}
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                    @endif
                </div>
                @if (session('cart'))
                    <div class="dropdown mt-3">
                        <h3>BUAT PESANAN</h3>
                        <form method="POST" class="row g-3" action="{{ route('order.store') }}">
                            @csrf
                            <div class="col-12">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="col-12">
                                <label for="phone" class="form-label">No Hp</label>
                                <input type="phone" name="phone" class="form-control" id="phone">
                            </div>
                            <div class="col-12">
                                <label for="alamat" class="form-label">Address</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    placeholder="1234 Main St">
                            </div>


                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Buat Pesanan</button>
                            </div>

                        </form>
                    </div>
                @else
                    <div class="alert alert-danger" role="alert">
                        Keranjang kamu masih kosong
                    </div>
                @endif
            </div>
        </div>

        <script>
            $(".remove-from-cart").click(function(e) {
                e.preventDefault();

                var ele = $(this);


                if (confirm("Are you sure want to remove?")) {
                    $.ajax({
                        url: '{{ route('delete.cart.item') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.data('id')
                        },
                        success: function(response) {

                            window.location.reload();
                        }
                    });
                }
            });
        </script>
</body>

</html>
