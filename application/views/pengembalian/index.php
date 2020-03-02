<div class="container">

<?php if($this->session->flashdata('flash') ): ?>
    <div class="row mt-3">
        <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Pengembalian<strong> Success</strong> <?php echo $this->session->flashdata('flash');  ?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        </div>
    </div>

    <?php endif ; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>pengembalian/addpengembalian" class="btn btn-primary"><i class="fas fa-plus"></i>  Tambah Pengembalian</a>
            <a href="<?php echo base_url(); ?>laporanpdf/pengembalian" class=" btn  btn-primary "> <i class="fa fa-file "></i> Cetak Laporan</a>

        </div>
    </div>

    <!-- <div class="row mt-3">
        <div class="col-md-6"> -->
           <!-- <form action="<?php echo base_url(); ?>pengembalian/searchpengembalian" method="post">
                    <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data Pengembalian" name="katakuncipengembalian" >
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" ><i class="fas fa-search"></i> Search</button>
            </div>
            </div>

           </form>  -->
        <!-- </div>
    </div> -->

<div class="row mt-3">
    <div class="col-md-12">
    <h3>Daftar Data Pengembalian</h3>

    
        <table table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead >
                <tr>
                    <th scope="col">ID Pengembalian</th>
                    <th scope="col">Tanggal Pengembalian</th>
                    <th scope="col">Jumlah Pengembalian</th>
                    <th scope="col">Alasan Pengembalian</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Hapus</th>

                </tr>
            </thead>

            <tbody>
            <?php $no = $this->uri->segment('3') + 1;
                foreach ($pengembalian as $pgb) : ?>
            <tr>
                <td><?php echo $pgb->id_pengembalian ?></td>
                <td><?php echo $pgb->tgl_pengembalian ?></td>
                <td><?php echo $pgb->jumlah_pengembalian?></td>
                <td><?php echo $pgb->alasan_pengembalian?></td>
                <td><?php echo $pgb->nama_barang?></td>
                <td><?php echo $pgb->nama_supplier?></td>
                <!-- <td><?php echo print_r($pengembalian)?></td> -->
               
                
                
                <td>
                     <a href="<?php echo base_url(); ?>pengembalian/updatepengembalian/<?php echo $pgb->id_pengembalian; ?>" class="badge badge-success float-right" style=" padding-top: 10px;padding-right: 10px; padding-bottom: 10px;padding-left: 10px;"><i class="fas fa-edit"></i> Edit</a> <br><br>

                </td>
                <td>
                      <a href="<?php echo base_url(); ?>pengembalian/hapuspengembalian/<?php echo $pgb->id_pengembalian; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda yakin?'); " style="padding-top: 10px;padding-right: 10px; padding-bottom: 10px;padding-left: 10px;"><i class="fas fa-trash-alt"></i> Delete</a>
                   
                </td>
            </tr>
            <?php endforeach; ?> 
            </tbody>
             
        </table>
        <?php 
             echo $this->pagination->create_links();
            ?>
    
    
</div>

</div>