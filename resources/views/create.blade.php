<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Produk</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UTS LARAVEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UTS LARAVEL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('produk') }}">Produk</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="py-5 ms-5">Form Tambah Produk</h1>
        <form action="#" method="#">
            <div class="row">
                <div class="col-sm-4">
                    <label for="kode_barang" class="form-label">kode Produk</label>
                    <input class="form-control col-md-4" type="text" placeholder="Input Kode Produk"
                        aria-label="readonly input example">
                </div>
                <div class="col-sm-4">
                    <label for="nama_barang" class="form-label">Nama Produk</label>
                    <input class="form-control col-md-4" type="text" placeholder="Input Nama Produk"
                        aria-label="readonly input example">
                </div>
                <div class="col-sm-4">
                    <label for="jenis_produk" class="form-label">Jenis Produk</label>
                    <select name="jenis_produk" id="jenis_produk" class="form-control">
                        <option value="">Input Jenis Produk</option>
                        @foreach ($data as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="kode_barang" class="form-label">Harga</label>
                    <input class="form-control col-md-4" type="text" placeholder="Input Harga"
                        aria-label="readonly input example">
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="form-control col-md-4 btn btn-success mt-4 btn-lg">Simpan</button>
                </div>
            </div>
        </form>
    </div>


    <script src="js/bootstrap.js"></script>
</body>

</html>
