<div class="container">

<?php if($this->session->flashdata('flash') ): ?>
    <div class="row mt-3">
        <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data barang<strong> Success</strong> <?php echo $this->session->flashdata('flash');  ?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        </div>
    </div>

    <?php endif ; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>barang/addbarang" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah barang</a>
        </div>
    </div>

    <!-- <div class="row mt-3">
        <div class="col-md-6"> -->
           <!-- <form action="<?php echo base_url(); ?>barang/search" method="post">
                    <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Nama barang" name="katakuncibarang" >
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" ><i class="fas fa-search"></i> Search</button>
            </div>
            </div>

           </form>  -->
        <!-- </div>
    </div> -->

<div class="row mt-3">
    <div class="col-md-12">
    <h3>Daftar Barang</h3>
    
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead >
                <tr >
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Limitasis</th>
                    <th scope="col">Edit </th>
                    <th scope="col">Delete </th>
                </tr>
                
            </thead>

            <tbody>
                <?php 
                foreach ($barang as $brg) : ?>
            <tr>
                <td><?php echo $brg->kode_barang ?></td>
                <td><?php echo $brg->nama_barang ?></td>
                <td><?php echo $brg->harga_jual ?></td>
                <td><?php echo $brg->jumlah_barang ?></td>
                <td><?php echo $brg->limitasi ?></td>
                <td>
                      <a href="<?php echo base_url('barang/update/').$brg->kode_barang; ?>" class="badge badge-success float-right" style=" padding-top: 10px;padding-right: 10px; padding-bottom: 10px;padding-left: 10px;"><i class="fas fa-edit"></i> Edit</a>
                </td>
                <td>
                     <a href="<?php echo base_url(); ?>barang/hapus/<?php echo $brg->kode_barang; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda yakin?'); " style="padding-top: 10px;padding-right: 10px; padding-bottom: 10px;padding-left: 10px;"><i class="fas fa-trash-alt"></i> Delete</a> 
                </td>
            </tr>
             <?php endforeach; ?> 
            </tbody>
             
            
        </table>
       
</div>