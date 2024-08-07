@extends('partial.template')


@section('content')
    <div class="row mb-3">
        <!-- Jumlah Buku Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-primary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-uppercase mb-1 text-dark">Jumlah Buku</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-bold">{{ $buku }}</div>
                            <div class="button mt-2">
                                <a href="/buku" class="text-dark">Lihat</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-book fa-3x text-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kategori Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-warning">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-bold font-weight-bold mb-1 text-dark">Kategori</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-bold">{{ $kategori }}</div>
                            <div class="button mt-2">
                                <a href="/kategori" class="text-dark">Lihat</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-bookmark fa-3x text-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Anggota Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-success">
                <div class="card-body text-bold font-weight">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold mb-1 text-dark">Anggota</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-bold">{{ $user }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-3x text-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pinjaman Saat Ini Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card h-100 bg-danger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-uppercase mb-1 text-dark" style="font-size: .8rem;">Pinjaman Saat Ini</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-bold">{{ $pinjamanUser }}</div>
                            <div class="button mt-2">
                                <a href="/peminjaman" class="text-dark">Lihat</a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-3x text-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Aturan Peminjaman -->
    <div class="card bg-secondary">
        <div class="container">
            <h3 class="text-light">
                <i class="fa-solid fa-circle-info text-bold my-3"></i>
                Informasi Aturan Peminjaman
            </h3>
            <ol class="text-dark">
                <li>Waktu peminjaman maksimal 1 minggu</li>
                <li>Setiap anggota hanya dapat meminjam maksimal 3 buku</li>
                <li>Jika pengembalian buku lebih dari waktu yang ditentukan, akan dikenakan denda setiap buku Rp.15.000/minggu.</li>
                <li>Jika telah meminjam buku, silakan ke tempat petugas untuk melakukan konfirmasi</li>
                <li>Jika terlambat mengembalikan buku dan mendapatkan denda, maka wajib langsung membayar pada petugas saat mengembalikan buku</li>
            </ol>
        </div>
    </div>
@endsection
