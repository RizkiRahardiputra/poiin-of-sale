<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
        integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="main.js"></script>
</head>

<body>
    <div class="container">
        <!-- <h2>Tambah Barang Gudang</h2> -->
        <div style="float: right; margin: 5px 0 20px 0;">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                action="" method="post">
                <input type="hidden" name="barcode" value="<?= $barangmasuk['barcode']; ?>">
                <div class="input-group">

                </div>
            </form>
        </div>

        <div class="form-group col-md-4" style="float: right;">
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">
                    <h2>Tambah Barang Gudang</h2>
                </div>
                <div class="card-body">

                    <label for="exampleInputEmail1">Barcode</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="barcode" name="barcode" value="<?= $barangmasuk['barcode'] ?>"
                        style="height:35px; margin-bottom:15px;">
                    <small id="emailHelp" class="form-text text-muted"></small>

                    <label for="exampleInputEmail1">Nama Produk</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="namaproduk" name="namaproduk" value="<?= $barangmasuk['namaproduk'] ?> "
                        style="height:35px; margin-bottom:15px;">
                    <small id=" emailHelp" class="form-text text-muted"></small>

                    <label for="exampleInputEmail1">Nama Toko</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="namaproduk" name="namatoko" value="<?= $barangmasuk['namatoko'] ?>"
                        style="height:35px; margin-bottom:15px;">
                    <small id=" emailHelp" class="form-text text-muted"></small>

                    <label for="exampleInputEmail1">Jumlah Tersedia</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="namaproduk" name="jumlahtersedia" value="<?= $barangmasuk['jumlah'] ?>"
                        style="height:35px; margin-bottom:15px;">
                    <small id=" emailHelp" class="form-text text-muted"></small>

                    <label for="exampleInputEmail1">Jumlah Ditambahkan</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="namaproduk" name="jumlahditambahkan" style="height:35px; margin-bottom:15px;">
                    <small id=" emailHelp" class="form-text text-muted"></small>

                    <label for="exampleInputEmail1">Harga</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="namaproduk" name="harga" style="height:35px; margin-bottom:15px;">
                    <small id=" emailHelp" class="form-text text-muted"></small>

                    <a href="<?= base_url(); ?>kartustok/index" class="btn btn-primary"> Batal </a>
                    <a href="<?= base_url('kartustok/') ?>" class="btn btn-primary"> Simpan </a>

                </div>
            </div>
        </div>




    </div>
</body>

</html>