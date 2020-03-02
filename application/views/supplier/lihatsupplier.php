<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
              Detail supplier
            </div>
            <div class="card-body">
              <h5 class="card-title"><b>Kode Supplier</b> <br><?php echo $supplier['kodesupplier']; ?></h5><br>
              <h5 class="card-subtitle mb-2 text-muted"><b>Nama Outlet</b> <br><?php echo $supplier['namaoutlet']; ?></h5><br>
              <p class="card-text"><b>Telp Supplier</b> <br><?php echo $supplier['telpsupplier']; ?></p><br>
              <p class="card-text"><b>Email Supplier</b> <br><?php echo $supplier['emailsupplier']; ?></p><br>
              <p class="card-text"><b>Nama Supplier</b> <br><?php echo $supplier['namasupplier']; ?></p><br>
              <p class="card-text"><b>Alamat Outlet</b> <br><?php echo $supplier['alamatoutlet']; ?></p><br>
              
              <!-- <p class="card-text"><?php echo $product['hargaproduct']; ?></p> -->
              <a href="<?php echo base_url(); ?>supplier" class="btn btn-primary">Kembali</a>
            </div>
          </div>

        </div>

    </div>
</div>