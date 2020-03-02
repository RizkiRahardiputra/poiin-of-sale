<div class="container">

        <div class="row mt-3">
            <div class="col-md-12">
                <div class="card">
            <div class="card-header">
                   Form Update Data supplier
        </div>
     <div class="card-body">
    
     <form action="" method="post">
          <input type="hidden" name="id_supplier" value="<?php echo $supplier['id_supplier']; ?>">
        <!-- <div class="form-group">
             <label for="id_supplier">ID supplier</label>
             <input type="text" name="id_supplier"class="form-control" id="id_supplier" value="<?php echo $supplier['id_supplier']; ?>" placeholder="Masukkan Kode supplier">
             <small  class="form-text text-danger"><?php echo form_error('id_supplier'); ?></small>
        </div> -->
        <div class="form-group">
             <label for="nama_supplier">Nama Supplier</label>
             <input type="text" name="nama_supplier" class="form-control" id="nama_supplier" value="<?php echo $supplier['nama_supplier']; ?>" placeholder="Masukkan Nama Supplier">
             <small  class="form-text text-danger"><?php echo form_error('nama_supplier'); ?></small>
        </div>
         <div class="form-group">
             <label for="telp_supplier">Telp. supplier</label>
             <input type="text" name="telp_supplier" class="form-control" id="telp_supplier" value="<?php echo $supplier['telp_supplier']; ?>" placeholder="Masukkan Telp supplier">
             <small  class="form-text text-danger"><?php echo form_error('telp_supplier'); ?></small>
        </div>
        <div class="form-group">
             <label for="email_supplier">Email supplier</label>
             <input type="text" name="email_supplier" class="form-control" id="email_supplier" value="<?php echo $supplier['email_supplier']; ?>" placeholder="Masukkan Email supplier">
             <small  class="form-text text-danger"><?php echo form_error('email_supplier'); ?></small>
        </div>
        
        <!-- <div class="form-group">
            <label for="kelasproduct">Kelas Product</label>
            <select class="form-control" id="kelasproduct" name="kelasproduct">
                 <?php foreach( $kelasproduct as $kls ) : ?>
                 <?php if($kls == $product['kelasproduct']) : ?>
            <option value="<?php echo $kls; ?>"selected><?php echo $kls; ?></option>
<?php else : ?>
<option value="<?php echo $kls; ?>"><?php echo $kls; ?></option>

<?php endif ?>
           
<?php endforeach; ?>
            </select>
  </div> -->
        <div class="form-group">
             <label for="alamat_supplier">Alamat Outlet</label>
             <input type="text" name="alamat_supplier" class="form-control" id="alamat_supplier" value="<?php echo $supplier['alamat_supplier']; ?>" placeholder="Masukkan Alamat Outlet">
             <small  class="form-text text-danger"><?php echo form_error('alamat_supplier'); ?></small>
        </div>
          <center>
          <a href="<?php echo base_url(); ?>supplier/index" class="btn btn-danger"><i class="fas fa-undo-alt"></i>  Batal</a>
        <button type="submit" name="updatesupplier" class="btn btn-primary"> <i class="fas fa-edit"></i> Edit Supplier</button>
        </center>
        </form>

       
         </div>
    </div>
        
   

    </div>
</div>
</div>