<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="main.js"></script>
</head>

<body>
    <div class="container">
        <h2>Barang Keluar</h2>
        <!-- <div style="float: right; margin: 5px 0 20px 0;">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" style="margin-bottom: 5px;" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            </form>
            <a href="<?= base_url(); ?>barangkeluar/tambahkan" class="btn btn-primary"> Tambahkan </a>
        </div> -->

        <div style="float: right; margin: 5px 0 20px 0;">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="" method="post">

                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" style="margin-bottom: 5px;" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            <a href="<?= base_url(); ?>barangkeluar/tambahkan" class="btn btn-primary"> Tambahkan </a>
        </div>
        <!-- Topbar Search
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
        <input name="addbarang" id="" class="btn btn-primary" type="button" value="Tambahkan" style="float: right; margin: 5px 0 20px 0;"> -->
        <table class="table table-striped table-hover table-bordered">
            <caption>Monthy Sales Report</caption>
            <thead>
                <tr>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Nama Toko</th>
                </tr>
            </thead>
            <tbody>

                <?php

                foreach ($barangkeluar as $bm) :

                    $namaproduk = $bm['namabarang'];

                    $jumlah = $bm['jumlahbarang'];

                    $satuan = $bm['satuanstok'];

                    $harga = $bm['hargabarang'];

                    $tglkeluar = $bm['tglkeluar'];

                    $namatoko = $bm['namaoutlet'];



                    ?>

                <tr>

                    <td><?php echo $namaproduk; ?> </td>

                    <td><?php echo $jumlah; ?> </td>

                    <td><?php echo $satuan; ?> </td>

                    <td><?php echo $harga; ?> </td>

                    <td><?php echo $tglkeluar; ?> </td>

                    <td><?php echo $namatoko; ?> </td>
                </tr>

                <?php endforeach; ?>

            </tbody>
        </table>


    </div>
</body>

</html> 