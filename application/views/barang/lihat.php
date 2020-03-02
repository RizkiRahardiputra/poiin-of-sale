<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
              Detail barang
            </div>
            <div class="card-body">
              <h5 class="card-title">Kode Barang<br><?php echo $barang['kodebarang']; ?></h5><br>
              <h6 class="card-subtitle mb-2 text-muted">Nama Barang<br><?php echo $barang['namabarang']; ?></h6><br>
              <p class="card-text">Kategori Barang<br><?php echo $barang['kategoribarang']; ?></p><br>
               <p class="card-text">Satuan Stok<br><?php echo $barang['satuanstok']; ?></p><br>
              <p class="card-text">Deskripsi<br><?php echo $barang['deskripsi']; ?></p><br>
              <!-- <p class="card-text">Kode Supplier<br><?php echo $barang['kodesupplier']; ?></p> -->
              <a href="<?php echo base_url(); ?>barang" class="btn btn-primary">Kembali</a>
            </div>
          </div>

        </div>

    </div>
</div>