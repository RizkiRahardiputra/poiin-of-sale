<div class="container center">

<div class="row mt-3">
        
    <div class="col-md-12">     
        <div class="card">
                
    <div class="card-header">
           Form Tambah Data Pengadaan Barang

</div>
<div class="card-body">

<form action="<?= base_url('pengadaan/prosesAddPengadaan');?>" method="post">
<!-- <div class="form-group">
     <label for="idpengadaan">ID barang</label>
     <input type="text" name="idpengadaan"class="form-control" id="idpengadaan" placeholder="Masukkan Kode barang">
     <small  class="form-text text-danger"><?php echo form_error('idpengadaan'); ?></small>
</div> -->
                <!-- <div class="form-group">
                <label for="tglpengadaan">Tanggal pengadaan</label>
                <input type="date" name="tglpengadaan" value="<?php echo set_value('tglpengadaan') ?>" class="form-control" id="tglpengadaan" placeholder="Tgl Pengadaan">
                <small  class="form-text text-danger"><?php echo form_error('tglpengadaan'); ?></small>
                </div> -->
                <div class="form-group">
                        <label for="id_supplier">Supplier</label>
                        <select class="form-control" name="id_supplier">
                        <option >-Pilih-</option>
                        <?php  foreach ($supplier as $key){ ?>
                                <option value="<?php echo $key->id_supplier; ?>"><?php echo $key->id_supplier; ?> - <?php echo $key->nama_supplier; ?></option>"; 
                        <?php } ?>
                        <small  class="form-text text-danger"><?php echo form_error('id_supplier'); ?></small>



                        </select>
                </div>

                <div class="form-group">
                        <label for="kode_barang">Barang</label>
                        <select class="form-control" name="kode_barang">
                        <option >-Pilih-</option>
                        <?php  foreach ($barang as $key){ ?>
                                <option value="<?php echo $key->kode_barang; ?>"><?php echo $key->kode_barang; ?> - <?php echo $key->nama_barang; ?></option>"; 
                        <?php } ?>
                        <small  class="form-text text-danger"><?php echo form_error('kode_supplier'); ?></small>



                        </select>
                </div>

                <div class="form-group">
                        <label for="id_permintaan">Jumlah Permintaan</label>
                        <select class="form-control" name="id_permintaan">
                        <option >-Pilih-</option>
                        <?php  foreach ($permintaan as $key){ ?>
                                <option value="<?php echo $key->id_permintaan; ?>"><?php echo $key->id_permintaan; ?> - <?php echo $key->jumlah_permintaan; ?></option>"; 
                        <?php } ?>
                        <small  class="form-text text-danger"><?php echo form_error('id_permintaan'); ?></small>



                        </select>
                </div>

 

                <div class="form-group">
                <label for="jumlahbeli">Jumlah Beli</label>
                <input type="text" name="jumlahbeli" value="<?php echo set_value('jumlahbeli') ?>" class="form-control" id="jumlahbeli" placeholder="Masukkan Jumlah Beli">
                <small  class="form-text text-danger"><?php echo form_error('jumlahbeli'); ?></small>
                </div>

                <div class="form-group">
                <label for="hargabeli">Harga Beli</label>
                <input type="text" name="hargabeli" value="<?php echo set_value('hargabeli') ?>" class="form-control" id="hargabeli" placeholder="Masukkan Harga Beli">
                <small  class="form-text text-danger"><?php echo form_error('hargabeli'); ?></small>
                </div>


    

<center>
<a href="<?php echo base_url(); ?>pengadaan/index" class="btn btn-danger"><i class="fas fa-undo-alt"></i>  Batal</a>
<button type="submit" name="addpengadaan" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Pengadaan</button>
</center>
</form>
 </div>
</div>



</div>
</div>
</div>