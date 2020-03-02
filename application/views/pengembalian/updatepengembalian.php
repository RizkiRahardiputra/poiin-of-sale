<div class="container">

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
            <div class="card-header">
                   Form Update Data Pengembalian
        </div>
     <div class="card-body">
    
     <form action="<?= base_url('pengembalian/prosesUpdatePengembalian');?>" method="post">
          <input type="hidden" name="id_pengembalian" value="<?php echo $pengembalian['id_pengembalian']; ?>">
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
             <label for="jumlah_pengembalian">Jumlah Pemgembalian </label>
             <input type="text" name="jumlah_pengembalian" value="<?php echo $pengembalian['jumlah_pengembalian']; ?>" class="form-control" id="jumlah_pengembalian"  placeholder="Masukkan Jumlah Pengembalian">
             <small  class="form-text text-danger"><?php echo form_error('jumlah_pengembalian'); ?></small>
        </div>
        <div class="form-group">
                <label for="alasan_pengembalian">Alasan Pengembalian</label>
                <textarea name="alasan_pengembalian" class="form-control" id="alasan_pengembalian" placeholder="Masukkan Alasan Pengembalian" rows="5"><?php echo $pengembalian['alasan_pengembalian']; ?></textarea>
                
                <small  class="form-text text-danger"><?php echo form_error('alasan_pengembalian'); ?></small>
                </div>
                <div class="form-group">
                        <label for="idpengadaan">Barang</label>
                        <select class="form-control" name="idpengadaan">
                        <option >-Pilih-</option>
                        <?php  foreach ($pengadaan as $key){ ?>
                                <option value="<?php echo $key->idpengadaan
                                ; ?>"><?php echo $key->idpengadaan; ?> - <?php echo $key->nama_barang; ?></option>"; 
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
        <a href="<?php echo base_url(); ?>pengembalian/index" class="btn btn-danger"><i class="fas fa-undo-alt"></i>  Batal</a>
        <button type="submit" name="updatepengembalian" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Pengadaan</button>
        </center>

        </form>

       
         </div>
    </div>
        
   

    </div>
</div>
</div>