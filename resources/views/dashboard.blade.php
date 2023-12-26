<x-app-layout>
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">


                            <div class="card-body">
                                <h5 class="card-title">Total Produk <span></span></h5>

                                <div class="d-flex align-items-center">

                                    <div class="ps-3">
                                        <h6>{{ $produk }}</h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->
                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">


                            <div class="card-body">
                                <h5 class="card-title">Total Penjulan selesai <span></span></h5>

                                <div class="d-flex align-items-center">

                                    <div class="ps-3">
                                        <h6>{{ $OrderSelesai }}</h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->
                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">


                            <div class="card-body">
                                <h5 class="card-title">Total Penjulan belum selesai <span></span></h5>

                                <div class="d-flex align-items-center">

                                    <div class="ps-3">
                                        <h6>{{ $orderBelumSelesai }}</h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->


                </div>
            </div><!-- End Left side columns -->


        </div>
    </section>


</x-app-layout>
