<div class="container center">

<div class="row mt-3">
        
    <div class="col-md-12">     
        <div class="card">
                
    <div class="card-header">
           Form Tambah Data Pengembalian Barang

</div>
<div class="card-body">

<form action="<?= base_url('pengembalian/prosesAddPengembalian');?>" method="post">
<!-- <div class="form-group">
     <label for="idpengadaan">ID barang</label>
     <input type="text" name="idpengadaan"class="form-control" id="idpengadaan" placeholder="Masukkan Kode barang">
     <small  class="form-text text-danger"><?php echo form_error('id_pengembalian'); ?></small>
</div> -->
                <!-- <div class="form-group">
                <label for="tglpengadaan">Tanggal Pengembalian</label>
                <input type="date" name="tgl_pengembalian" class="form-control" id="tgl_pengembalian" placeholder="Tanggal Pengembalian">
                <small  class="form-text text-danger"><?php echo form_error('tgl_pengembalian'); ?></small>
                </div> -->
                <div class="form-group">
                <label for="jumlah_pengembalian">Jumlah Pengembalian</label>
                <input type="text" value="<?php echo set_value('jumlah_pengembalian') ?>" name="jumlah_pengembalian" class="form-control" id="jumlah_pengembalian" placeholder="Masukkan Jumlah Pengembalian">
                <small  class="form-text text-danger"><?php echo form_error('jumlah_pengembalian'); ?></small>
                </div>
                <div class="form-group">
                <label for="alasan_pengembalian">Alasan Pengembalian</label>
                <textarea name="alasan_pengembalian" value="<?php echo set_value('alasan_pengembalian') ?>" class="form-control" id="alasan_pengembalian" placeholder="Masukkan Alasan Pengembalian" rows="5"></textarea>
                
                <small  class="form-text text-danger"><?php echo form_error('alasan_pengembalian'); ?></small>
                </div>
                


                <!-- <div class="form-group">
                        <label for="id_supplier">Barang</label>
                        <select class="form-control" name="kode_barang">
                        <option >-Pilih-</option>
                        <?php  foreach ($barang as $key){ ?>
                                <option value="<?php echo $key->idpengadaan; ?>"><?php echo $key->idpengadaan; ?> - <?php echo $key->nama_barang; ?></option>"; 
                        <?php } ?>
                


                        </select>
                </div> -->

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
                        <label for="idsupplier">Supplier</label>
                        <select class="form-control" name="id_supplier">
                        <option >-Pilih-</option>
                        <?php  foreach ($supplier as $key){ ?>
                                <option value="<?php echo $key->id_supplier; ?>"><?php echo $key->id_supplier; ?> - <?php echo $key->nama_supplier; ?></option>"; 
                        <?php } ?>
                


                        </select>
                </div>
                <!-- <div class="form-group">
                        <label for="id_supplier">Supplier</label>
                        <select class="form-control" name="id_supplier">
                        <option >-Pilih-</option>
                        <?php  foreach ($supplier as $key){ ?>
                                <option value="<?php echo $key->id_supplier; ?>"><?php echo $key->id_supplier; ?> - <?php echo $key->nama_supplier; ?></option>"; 
                        <?php } ?> -->
                


                        </select>
                </div>

 

                

    

<center>
<a href="<?php echo base_url(); ?>pengembalian/index" class="btn btn-danger"><i class="fas fa-undo-alt"></i>  Batal</a>
<button type="submit" name="addpengembalian" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Pengadaan</button>
</center>
</form>
 </div>
</div>



</div>
</div>
</div>