<div class="container">

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
            <div class="card-header">
                   Form Update Data Pengadaan
        </div>
     <div class="card-body">
    
     <form action="<?= base_url('pengadaan/prosesUpdatePengadaan');?>" method="post">
          <input type="hidden" name="idpengadaan" value="<?php echo $pengadaan['idpengadaan']; ?>">
        <!-- <div class="form-group">
             <label for="idpengadaan">ID Pengadaan</label>
             <input type="text" name="idpengadaan"class="form-control" id="idpengadaan" value="<?php echo $pengadaan['idpengadaan']; ?>" placeholder="Masukkan ID Pengadaan">
             <small  class="form-text text-danger"><?php echo form_error('idpengadaan'); ?></small>
        </div> -->
        <!-- <div class="form-group">
             <label for="tglpengadaan">Tanggal Pengadaan</label>
             <input type="date" name="tglpengadaan" class="form-control" id="tglpengadaan" value=" <?php echo $pengadaan['tglpengadaan']; ?>" placeholder="Masukkan Tanggal Pengadaan">
             <small  class="form-text text-danger"><?php echo form_error('tglpengadaan'); ?></small>
        </div> -->
         <div class="form-group">
             <label for="jumlahbeli">Jumlah Beli </label>
             <input type="text" name="jumlahbeli" class="form-control" id="jumlahbeli" value="<?php echo $pengadaan['jumlahbeli']; ?>" placeholder="Masukkan Jumlah Beli">
             <small  class="form-text text-danger"><?php echo form_error('jumlahbeli'); ?></small>
        </div>
        <div class="form-group">
             <label for="hargabeli">Harga Beli</label>
             <input type="text" name="hargabeli" class="form-control" id="hargabeli" value="<?php echo $pengadaan['hargabeli']; ?>" placeholder="Masukkan Harga Beli">
             <small  class="form-text text-danger"><?php echo form_error('hargabeli'); ?></small>
        </div>
        <div class="form-group">
            <label for="id_permintaan">Jumlah Permintaan</label>
            <select class="form-control" name="id_permintaan">
            <option >-Pilih-</option>
            <?php  foreach ($permintaan as $key){ ?>
                    <option value="<?php echo $key->id_permintaan; ?>"><?php echo $key->id_permintaan; ?> - <?php echo $key->jumlah_permintaan; ?></option>"; 
            <?php } ?>
      


            </select>
  </div>
        
        <div class="form-group">
            <label for="kode_barang">Barang</label>
            <select class="form-control" name="kode_barang">
            <option >-Pilih-</option>
            <?php  foreach ($barang as $key){ ?>
                    <option value="<?php echo $key->kode_barang; ?>"><?php echo $key->kode_barang; ?> - <?php echo $key->nama_barang; ?></option>"; 
            <?php } ?>
      


            </select>
  </div>

  <div class="form-group">
            <label for="id_supplier">Supplier</label>
            <select class="form-control" name="id_supplier">
            <option >-Pilih-</option>
            <?php  foreach ($supplier as $key){ ?>
                    <option value="<?php echo $key->id_supplier; ?>"><?php echo $key->id_supplier; ?> - <?php echo $key->nama_supplier; ?></option>"; 
            <?php } ?>
      


            </select>
  </div>

        <center>
        <a href="<?php echo base_url(); ?>pengadaan/index" class="btn btn-danger"><i class="fas fa-undo-alt"></i>  Batal</a>
        <button type="submit" name="updatepengadaan" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Pengadaan</button>
        </center>

        </form>

       
         </div>
    </div>
        
   

    </div>
</div>
</div>