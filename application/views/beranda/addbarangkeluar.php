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
        <h2>Tambah Barang Keluar</h2>
        <div style="float: right; margin: 5px 0 20px 0;">
            <a href="<?= base_url(); ?>barangkeluar/index" class="btn btn-primary"> Batal </a>
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

                foreach ($barangkeluar as $bm) :

                    $namaproduk = $bm['namaproduk'];



                    $satuan = $bm['satuan'];



                    $tglkeluar = $bm['tglkeluar'];

                    $namatoko = $bm['namatoko'];



                    ?>

                <tr>

                    <td><?php echo $namaproduk; ?> </td>

                    <td>
                        <input type="text" class="form-control form-control-user" id="email" name="jumlah2">
                    </td>

                    <td><?php echo $satuan; ?> </td>

                    <td>
                        <input type="text" class="form-control form-control-user" id="email" name="harga">
                    </td>

                    <td><?php echo $tglkeluar; ?> </td>

                    <td><?php echo $namatoko; ?> </td>
                </tr>

                <?php endforeach; ?>

            </tbody>


        </table>

    </div>
</body>

</html> 