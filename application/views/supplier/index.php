<div class="container">

<?php if($this->session->flashdata('flash') ): ?>
    <div class="row mt-3">
        <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data supplier<strong> Success</strong> <?php echo $this->session->flashdata('flash');  ?> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        </div>
    </div>

    <?php endif ; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>supplier/addsupplier" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Supplier</a>
            <a href="<?php echo base_url(); ?>laporanpdf/supplier" class="btn btn-primary"> <i class="fa fa-file"></i> Cetak Laporan</a>
        </div>
    </div>
    

    <!-- <div class="row mt-3">
        <div class="col-md-6"> -->
           <!-- <form action="<?php echo base_url(); ?>supplier/searchsupplier" method="post">
                    <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Nama Supplier" name="katakuncisupplier" >
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" ><i class="fas fa-search"></i> Search</button>
            </div>
            </div>

           </form>  -->
        <!-- </div>
    </div> -->

<div class="row mt-3">
    <div class="col-md-12">
    <h3>Daftar Supplier</h3>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID Supplier</th>
                <th>Nama Supplier</th>
                <th>Telp. Supplier</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                foreach ($supplier as $spl) : ?>
            <tr>
                <td><?php echo $spl->id_supplier ?></td>
                <td><?php echo $spl->nama_supplier ?></td>
                <td><?php echo $spl->telp_supplier ?></td>
                <td><?php echo $spl->email_supplier ?></td>
                <td><?php echo $spl->alamat_supplier?></td>
                <td>
                     <a href="<?php echo base_url(); ?>supplier/updatesupplier/<?php echo $spl->id_supplier; ?>" class="badge badge-success float-right" style=" padding-top: 10px;padding-right: 10px; padding-bottom: 10px;padding-left: 10px;"><i class="fas fa-edit"></i> Edit</a> <br><br>

                </td>
                <td>
                       <a href="<?php echo base_url(); ?>supplier/hapussupplier/<?php echo $spl->id_supplier; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda yakin?'); " style="padding-top: 10px;padding-right: 10px; padding-bottom: 10px;padding-left: 10px;"><i class="fas fa-trash-alt"></i> Delete</a> 
                </td>
            </tr>
             <?php endforeach; ?> 
        </tbody>

    </table>

  
        <!-- <ul class="list-group">
         <?php $no = $this->uri->segment('3') + 1;
          foreach ($supplier as $spl) : ?>
            <li class="list-group-item">
                <?php echo $spl->nama_supplier; ?> 
                <a href="<?php echo base_url(); ?>supplier/hapussupplier/<?php echo $spl->id_supplier; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda yakin?'); " style="padding-top: 10px;padding-right: 10px; padding-bottom: 10px;padding-left: 10px;"><i class="fas fa-trash-alt"></i> Delete</a> 
                
                <a href="<?php echo base_url(); ?>supplier/lihatsupplier/<?php echo $spl->id_supplier; ?>" class="badge badge-primary float-right" style="margin-right: 10px; padding-top: 10px;padding-right: 10px; padding-bottom: 10px;padding-left: 10px;"><i class="fas fa-info-circle"></i> Info</a>
                <a href="<?php echo base_url(); ?>supplier/updatesupplier/<?php echo $spl->id_supplier; ?>" class="badge badge-success float-right" style="margin-right: 10px; padding-top: 10px;padding-right: 10px; padding-bottom: 10px;padding-left: 10px;"><i class="fas fa-edit"></i> Edit</a>
            </li>
        <?php endforeach; ?>   
        </ul> <br> -->
        
          <!--  <?php 
             echo $this->pagination->create_links();
            ?> -->
         
  
    </div>
   
</div>

</div>
