<x-app-layout>
    <section class="section">

        <div class="pagetitle">
            <h1> Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <div class="row">
            <div class="col-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Produk Baru</h5>

                        <!-- No Labels Form -->
                        <form class="row g-3" action="{{ route('produk.store') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            <div class="col-md-6">
                                <label for="namaproduk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" name="namaproduk">
                            </div>
                            <div class="col-md-6">
                                <label for="hargaproduk" class="form-label">Harga Produk</label>
                                <input type="number" class="form-control" name="hargaproduk">
                            </div>
                            <div class="col-12">
                                <label for="gambar" class="form-label">Gambar Produk</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form><!-- End No Labels Form -->

                    </div>
                </div>


            </div>
        </div>
    </section>
</x-app-layout>
