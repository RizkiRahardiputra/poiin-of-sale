<div class="container">

<?php if($this->session->flashdata('flash') ): ?>
    <div class="row mt-3">
        <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data pengadaan<strong> Success</strong> <?php echo $this->session->flashdata('flash');  ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        </div>
    </div>

    <?php endif ; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>pengadaan/addpengadaan" class="btn btn-primary"><i class="fas fa-plus"></i>  Tambah Pengadaan</a>
            <a href="<?php echo base_url(); ?>laporanpdf/pengadaan" class=" btn  btn-primary "> <i class="fa fa-file "></i> Cetak Laporan</a>

        </div>
    </div>

    <!-- <div class="row mt-3">
        <div class="col-md-6"> -->
           <!-- <form action="<?php echo base_url(); ?>pengadaan/searchpengadaan" method="post">
                    <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data Pengadaan" name="katakuncipengadaan" >
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" ><i class="fas fa-search"></i> Search</button>
            </div>
            </div>

           </form>  -->
        <!-- </div>
    </div> -->

<div class="row mt-3">
    <div class="col-md-12">
    <h3>Daftar Data Pengadaan</h3>

    
        <table table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">ID Pengadaan</th>
                    <th scope="col">Tanggal Pengadaan</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Jumlah Permintaan</th>
                    <th scope="col">Jumlah Beli</th>
                    <th scope="col">Harga Beli</th>
                     <th scope="col">Total</th>
                     <th scope="col">Edit</th>
                     <th scope="col">Delete</th>
                </tr>
                
            </thead>

            <tbody>
                <?php $no = $this->uri->segment('3') + 1;
                foreach ($pengadaan as $pgd) : ?>
            <tr>
                <td><?php echo $pgd->idpengadaan ?></td>
                <td><?php echo $pgd->tglpengadaan ?></td>
                <td><?php echo $pgd->nama_barang?></td>
                <td><?php echo $pgd->nama_supplier?></td>
                <td><?php echo $pgd->jumlah_permintaan?></td>
                <td><?php echo $pgd->jumlahbeli ?></td>
                <td><?php echo $pgd->hargabeli ?></td>
                <td><?php echo $pgd->total ?></td>
                <td>
                     <a href="<?php echo base_url(); ?>pengadaan/updatepengadaan/<?php echo $pgd->idpengadaan; ?>" class="badge badge-success float-right" style=" padding-top: 10px;padding-right: 10px; padding-bottom: 10px;padding-left: 10px;"><i class="fas fa-edit"></i> Edit</a> <br><br>

                </td>
                <td>
                      <a href="<?php echo base_url(); ?>pengadaan/hapuspengadaan/<?php echo $pgd->idpengadaan; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda yakin?'); " style="padding-top: 10px;padding-right: 10px; padding-bottom: 10px;padding-left: 10px;"><i class="fas fa-trash-alt"></i> Delete</a>
                   
                </td>
            </tr>
             <?php endforeach; ?> 
            </tbody>
             
            
        </table>
        


</div>