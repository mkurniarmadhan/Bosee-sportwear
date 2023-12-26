<x-app-layout>



    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">Menu</li>
                <li class="breadcrumb-item active">Data Produk</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Produk</h5>
                        <a href="{{ route('produk.create') }}" class="btn btn-md btn-success mb-3"> Tambah Produk</a>
                        <table class="table " id="myTable">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Foto</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($produks as $produk)
                                    <tr>
                                        <td>{{ $produk->namaproduk }}</td>
                                        <td>Rp. {{ number_format($produk->hargaproduk, 2) }}</td>
                                        <td><img src="{{ $produk->gambar }}" class="img-fluid" width="56px"
                                                alt=""></td>

                                        <td>

                                            <a href="{{ route('produk.edit', $produk) }}"
                                                class="btn btn-md btn-primary">Edit</a>

                                            <form action="{{ route('produk.destroy', $produk) }}" method="post"
                                                class="d-inline-block">

                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-md btn-danger">Hapus</button>
                                            </form>


                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"> Produk masih kosong</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
