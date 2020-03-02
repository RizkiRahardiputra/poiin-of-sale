<div class="container">

<?php if($this->session->flashdata('flash') ): ?>
    <div class="row mt-3">
        <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data supplier<strong> Success</strong> <?php echo $this->session->flashdata('flash');  ?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        </div>
    </div>

    <?php endif ; ?>

   <!--  <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>supplier/addsupplier" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Supplier</a>
        </div>
    </div> -->

    <!-- <div class="row mt-3">
        <div class="col-md-6">
           <form action="<?php echo base_url(); ?>supplier/searchsupplier" method="post">
                    <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Nama Supplier" name="katakuncisupplier" >
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" ><i class="fas fa-search"></i> Search</button>
            </div>
            </div>

           </form> 
        </div>
    </div> -->

<div class="row mt-3">
    <div class="col-md-12">
    <h3>Daftar Supplier</h3>

    
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">ID Supplier</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Telp Supplier</th>
                    <th scope="col">Email Supplier</th>
                    
                    <th scope="col">Alamat Supplier</th>
                    <th scope="col">Tanggal Ubah</th>
                    
                </tr>
                
            </thead>

            <tbody>
                <?php $no = $this->uri->segment('3') + 1;
                foreach ($historydatasupplier as $hpl) : ?>
            <tr>
                <td><?php echo $hpl->id_supplier ?></td>
                <td><?php echo $hpl->nama_supplier ?></td>
                <td><?php echo $hpl->telp_supplier ?></td>
                <td><?php echo $hpl->email_supplier ?></td>
                
                <td><?php echo $hpl->alamat_supplier ?></td>
                <td><?php echo $hpl->tgl_ubah ?></td>
              
            </tr>
             <?php endforeach; ?> 
            </tbody>
             
            
        </table>
        <?php 
             echo $this->pagination->create_links();
            ?>  
         
        
   
   


</div>

 
