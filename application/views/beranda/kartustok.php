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
        <h2>Kartu Stok</h2>
        <div style="float: right; margin: 5px 0 20px 0;">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                action="" method="post">

                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2" style="margin-bottom: 5px;" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            <a href="<?= base_url(); ?>kartustok/tambahkan" class="btn btn-primary"> Tambahkan </a>
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
            <?php if (empty($barangmasuk)) : ?>
            <div class="alert alert-danger" role="alert">
                Data Barang Masuk Tidak Ditemukan.
            </div>
            <?php endif; ?>
            <thead>
                <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Harga Supplier</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Nama Outlet</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php

                // if (is_array($barangmasuk) || is_object($barangmasuk)) {
                foreach ($barangmasuk as $bm) :
                    ?>

                <tr>
                    <td><?php echo $bm->kodebarang ?> </td>

                    <td><?php echo $bm->namabarang; ?> </td>

                    <td><?php echo $bm->jumlahbarang; ?> </td>

                    <td><?php echo $bm->satuanstok; ?> </td>

                    <td><?php echo $bm->hargajualstok; ?> </td>

                    <td><?php echo $bm->tglpengadaan; ?> </td>

                    <td><?php echo $bm->namaoutlet; ?> </td>

                    <td>

                        <center>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href=" <?= base_url('kartustok/get_plus/');
                                            echo $bm->kodebarang ?>" class="btn btn-success btn-sm">+</a>
                                <a href=" <?= base_url('kartustok/get_minus/');
                                            echo $bm->kodebarang ?>" class="btn btn-warning btn-sm">-</a>
                            </div>

                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>

                            <button type="button" class="btn btn-primary btn-sm">Refund</button>
                        </center>

                    </td>
                </tr>

                <?php endforeach; ?>

            </tbody>

            <!-- <center><?php echo anchor('kartustok/hapus/' . $u->id, 'Hapus'); ?> <center> -->
        </table>

        <?php 
        echo $this->pagination->create_links();
        ?>

        </button div>
</body>

</html>