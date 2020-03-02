<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
              Detail Pengadaan
            </div>
            <div class="card-body">
              <h5 class="card-title"><b>ID Pengadaan</b> <br><?php echo $pengadaan['idpengadaan']; ?></h5><br>
              <h5 class="card-subtitle mb-2 text-muted"><b>Tanggal Pengadaan</b> <br><?php echo $pengadaan['tglpengadaan']; ?></h5><br>
              <p class="card-text"><b>Jumlah Beli</b> <br><?php echo $pengadaan['jumlahbeli']; ?></p><br>
              <p class="card-text"><b>Harga Beli</b> <br><?php echo $pengadaan['hargabeli']; ?></p><br>
              <p class="card-text"><b>Kode Barang</b> <br><?php echo $pengadaan['kodebarang']; ?> </p><br>
              
              <p class="card-text"><b>Jenis Supplier</b> <br><?php echo $pengadaan['fkodesupplier']; ?> </p><br>
              <a href="<?php echo base_url(); ?>pengadaan" class="btn btn-primary">Kembali</a>
            </div>
          </div>

        </div>

    </div>
</div>