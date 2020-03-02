<div class="container">

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
            <div class="card-header">
                   Form Tambah Data supplier
        </div>
     <div class="card-body">
          
    
     <form action="" method="post">
        <div class="form-group">
             <label for="id_supplier">ID supplier</label>
             <input type="text" value="<?php echo set_value('id_supplier') ?>" name="id_supplier"class="form-control" id="id_supplier" placeholder="Masukkan ID supplier" >
             <small  class="form-text text-danger"><?php echo form_error('id_supplier'); ?></small>
        </div>

        <div class="form-group">
             <label for="nama_supplier">Nama supplier</label>
             <input type="text" value="<?php echo set_value('nama_supplier') ?>" name="nama_supplier" class="form-control" id="nama_supplier" placeholder="Masukkan Nama supplier">
             <small  class="form-text text-danger"><?php echo form_error('nama_supplier'); ?></small>
        </div>
        <!-- <div class="form-group">
             <label for="nama_supplier">Nama Supplier</label>
             <input type="text" name="nama_supplier" class="form-control" id="nama_supplier" placeholder="Masukkan Nama supplier">
             <small  class="form-text text-danger"><?php echo form_error('nama_supplier'); ?></small>
        </div> -->

        
          <div class="form-group">
             <label for="telp_supplier">Telp Supplier</label>
             <input type="text" name="telp_supplier" value="<?php echo set_value('telp_supplier') ?>" class="form-control" id="telp_supplier" placeholder="Masukkan Telp supplier">
             <small  class="form-text text-danger"><?php echo form_error('telp_supplier'); ?></small>
        </div>

         <div class="form-group">
             <label for="email_supplier">Email Supplier</label>
             <input type="text" name="email_supplier" value="<?php echo set_value('email_supplier') ?>" class="form-control" id="emailpsupplier" placeholder="Masukkan Email supplier">
             <small  class="form-text text-danger"><?php echo form_error('email_supplier'); ?></small>
        </div>
        
        <div class="form-group">
             <label for="alamat_supplier">Alamat supplier</label>
             <input type="text" name="alamat_supplier" value="<?php echo set_value('alamat_supplier') ?>" class="form-control" id="alamat_supplier" placeholder="Masukkan Alamat supplier">
             <small  class="form-text text-danger"><?php echo form_error('alamat_supplier'); ?></small>
        </div>
   <!--   <div class="form-group">
            <label for="kelasproduct">Kelas Product</label>
            <select class="form-control" id="kelasproduct" name="kelasproduct">
            <option value="FS">FS</option>
            <option value="SS">SS</option>
            <option value="ES">ES</option>
            </select>
  </div> -->
        
<center>

          <!-- <button type="submit" name="batalsupplier" class="btn btn-danger"><i class="fas fa-plus" onclick="goBack()"></i> Batal</button> -->
          <a href="<?php echo base_url(); ?>pengadaan/index" class="btn btn-danger"><i class="fas fa-undo-alt"></i>  Batal</a>
           <button type="submit" name="addsupplier" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Supplier</button>
</center>
        </form>
         </div>
    </div>
        
   

    </div>
</div>
</div>