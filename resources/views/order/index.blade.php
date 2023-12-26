<x-app-layout>



    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">Menu</li>
                <li class="breadcrumb-item active">Data Order</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Order</h5>
                        <!-- Table with stripped rows -->
                        <table class="table " id="myTable">
                            <thead>
                                <tr>
                                    <th>Tanggal Pesan</th>
                                    <th>Nama Pemesan </th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($orders as $order)
                                    <tr>

                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->nama }}</td>
                                        <td>
                                            <a href="{{ route('order.show', $order) }}"
                                                class="btn btn-md btn-primary">LIhat</a>
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
