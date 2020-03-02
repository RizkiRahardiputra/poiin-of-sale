    <div class="container">
        <!-- <h2>Tambah Barang Gudang</h2> -->
        <div style="float: right; margin: 5px 0 20px 0;">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                action="" method="post">
                <input type="hidden" name="barcode" value="<?php echo $barangmasuk['kodekartu']; ?>">
                <div class="input-group">

                </div>
            </form>
        </div>

        <div class="form-group col-md-4" style="float: right;">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">
                    <h2>Tambah Barang Gudang</h2>
                </div>
                
                <form action="<?php echo base_url('kartustok/penambahan/').$barangmasuk['kodekartu'] ;?>kartustok/prosesupdate" method="get">
                    <div class="card-body">

                        <label for="exampleInputEmail1">Kode Kartu</label>
                        <input type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="barcode" name="kodemasuk" value="<?= $barangmasuk['kodekartu'] ?>"
                            style="height:35px; margin-bottom:15px;" readonly>
                        <small id="emailHelp" class="form-text text-muted"></small>

                        <label for="exampleInputEmail1">Nama Barang</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="nama barang" name="namabarang" readonly value="<?= $barangmasuk['namabarang'] ?> "
                            style="height:35px; margin-bottom:15px;">
                        <small id=" emailHelp" class="form-text text-muted"></small>

                        <label for="exampleInputEmail1">Nama Outlet</label>
                        <input type="text" class="form-control" readonly id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="namaproduk" name="namaoutlet" value="<?= $barangmasuk['namaoutlet'] ?>"
                            style="height:35px; margin-bottom:15px;">
                        <small id=" emailHelp" class="form-text text-muted"></small>

                        <label for="exampleInputEmail1">Jumlah Tersedia</label>
                        <input type="text" class="form-control" readonly id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="namaproduk" name="jumlahbeli" value="<?= $barangmasuk['jumlahbarang'] ?>"
                            style="height:35px; margin-bottom:15px;">
                        <small id=" emailHelp" class="form-text text-muted"></small>
                        
                        <label for="exampleInputEmail1">Jumlah Masukan</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="jumlah" name="jumlahmasuk"
                            style="height:35px; margin-bottom:15px;">
                        <small id=" emailHelp" class="form-text text-muted"></small>

                        <label for="exampleInputEmail1">Harga</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Harga" name="harga"
                            style=" height:35px; margin-bottom:15px;">
                        <small id=" emailHelp" class="form-text text-muted"></small>

                        <input type="submit" class="btn btn-danger" value="Batal">
                        <input type="submit" class="btn btn-primary" value="Simpan">


                    </div>
                </form>
            </div>
        </div>

    </div>
