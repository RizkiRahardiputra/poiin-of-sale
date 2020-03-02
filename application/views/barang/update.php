<div class="container">

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
            <div class="card-header">
                   Form Update Data barang
        </div>
     <div class="card-body">
    
     <form action="" method="post">
          <input type="hidden" name="kode_barang" value="<?php echo $barang['kode_barang']; ?>">
        <!-- <div class="form-group">
             <label for="kode_barang">Kode barang</label>
             <input type="text" name="kode_barang"class="form-control" id="kode_barang" value="<?php echo $barang['kode_barang']; ?>" placeholder="Masukkan No barang">
             <small  class="form-text text-danger"><?php echo form_error('kode_barang'); ?></small>
        </div> -->

        <div class="form-group">
             <label for="nama_barang">Nama barang</label>
             <input type="text" name="nama_barang" class="form-control" id="nama_barang" value="<?php echo $barang['nama_barang']; ?>" placeholder="Masukkan Nama barang">
             <small  class="form-text text-danger"><?php echo form_error('nama_barang'); ?></small>
        </div>

        <div class="form-group">
             <label for="harga_jual">Harga Jual</label>
             <input type="text" name="harga_jual" value="<?php echo $barang['harga_jual']; ?>" class="form-control" id="harga_jual" placeholder="Masukkan Harga Jual">
             <small  class="form-text text-danger"><?php echo form_error('harga_jual'); ?></small>
        </div>

        <div class="form-group">
             <label for="jumlah_barang">Jumlah Barang</label>
             <input type="text" name="jumlah_barang" value="<?php echo $barang['jumlah_barang']; ?>" class="form-control" id="jumlah_barang" placeholder="Masukkan Jumlah Brang">
             <small  class="form-text text-danger"><?php echo form_error('jumlah_barang'); ?></small>
        </div>
       
        <div class="form-group">
             <label for="limitasi">Limitasi</label>
             <input type="text" name="limitasi"value="<?php echo $barang['limitasi']; ?>" class="form-control" id="limitasi" placeholder="Masukkan Limitasi Barang">
             <small  class="form-text text-danger"><?php echo form_error('limitasi'); ?></small>
        </div>

          <!-- <div class="form-group">
            <label for="namaoutlet">Nama Outlet</label>
            <select class="form-control" name="kodesupplier">
            <option >-Pilih-</option>
             <?php 

            $kodesupplier = $this->session->all_data;
            foreach ($kodesupplier as $key) { 
                echo "<option value='". $key->kodesupplier."'>".$key->kodesupplier." - ". $key->namaoutlet."</option>"; 
            }

        ?> 

        


            </select>
  </div> -->
<center>
<a href="<?php echo base_url(); ?>barang/index" class="btn btn-danger"><i class="fas fa-undo-alt"></i>  Batal</a>
        <button type="submit" name="update" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Barang</button>
        </center>
        </form>
         </div>
    </div>
        
   

    </div>
</div>
</div>