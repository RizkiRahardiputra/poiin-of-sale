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
        <h2>Tambah Barang Masuk</h2>
        <div style="float: right; margin: 5px 0 20px 0;">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="" method="post">
                <input type="hidden" name="barcode" value="<?= $barangmasuk['barcode']; ?>">
                <div style="float: right; margin: 5px 0 20px 0;">
                    <a href="<?= base_url(); ?>barangmasuk/index" class="btn btn-primary"> Batal </a>
                    <a href="" class="btn btn-primary"> Simpan </a>
                </div>

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

                        foreach ($barangmasuk as $bm) :
                            $namaproduk = $bm['namaproduk'];

                            $jumlah = $bm['jumlah'];

                            $satuan = $bm['satuan'];

                            $harga = $bm['harga'];

                            $tglmasuk = $bm['tglmasuk'];

                            $namatoko = $bm['namatoko'];
                            ?>



                        <tr>

                            <td><?php echo $namaproduk; ?> </td>

                            <td><?php echo $jumlah; ?> </td>
                            <!-- <td>
                                <input type="text" class="form-control form-control-user" id="email" name="jumlah">
                            </td> -->

                            <td><?php echo $satuan; ?> </td>
                            <td><?php echo $harga; ?> </td>


                            <!-- <td>
                                <input type="text" class="form-control form-control-user" id="email" name="harga">
                            </td> -->

                            <td><?php echo $tglmasuk; ?> </td>

                            <td><?php echo $namatoko; ?> </td>
                        </tr>

                        <?php endforeach; ?>

                    </tbody>


                </table>


        </div>
</body>

</ht m l> 