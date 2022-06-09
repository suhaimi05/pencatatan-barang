<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/js/bootstrap.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <title>UTS | Barang</title>
    <!-- Style membuat teks pada datatable menjadi Center -->
    <style>
        th, td {
            text-align: center;
        }
    </style>
    <!-- End style -->

    </head>
    <body>
        <!-- Include pada folder components -->
        <?php include './components/navbar.php'; ?>
        <?php include './components/modal.php'; ?>
        <!-- End include -->
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="shadow p-3 mb-5 bg-white rounded">
                    
                    <!-- Button tambah dan cari barang -->
                    <div class="card-header">
                        <div class="form-row">
                        <div class="text-right">
                            <a class="btn btn-sm text-white" data-toggle="modal" data-target="#tambah" style="background-color: #7d5fff;">
                                <b>Tambah Data</b>
                            </a>
                        </div>
                        <div class="input-group col-md-3">
                            <input type="text" class="form-control form-control-sm" placeholder="Cari...">
                            <div class="input-group-append">
                                <button class="btn btn-sm text-white" style="background-color: #7f8c8d;">
                                    <b>Cari</b>
                                </button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- End Button tambah dan cari barang -->

                    <!-- Data Tabel Barang -->
                    <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Diskon</th>
                                <th>Jenis</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <a href="#" class="btn btn-sm text-white" style="background-color: #ff9f1a;" data-toggle="modal" data-target="#edit">Edit</a>
                                    <a href="#" class="btn btn-sm text-white" style="background-color: #ff3838;" data-toggle="modal" data-target="#hapus">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    <!-- End Data Tabel Barang -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
