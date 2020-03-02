<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Data Transaksi</h1>
	<table border="1">
		<tr>
			<th>ID Produk</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
            <th>Total Harga</th>
			
		</tr>
		<?php 
		$no = $this->uri->segment('3') + 1;
		foreach($trans as $t){ 
		?>
		<tr>
			<td><?php echo $t->idprod ?></td>
			<td><?php echo $t->namaprod ?></td>
			<td><?php echo $t->jml ?></td>
			<td><?php echo $t->hrg ?></td>
			<td><?php echo $t->tothrg ?></td>
            <td>
            
            </td>

			<td>
            <form method="POST" action="<?php echo base_url()?>dtrans/edit?idprod=<?php echo $t->idprod?>">
            <input type="submit" name="edit" value="edit">
            </form>
			</td>
			<td>
            <form method="POST" action="<?php echo base_url()?>dtrans/hapus?idprod=<?php echo $t->idprod?>">
            <input type="submit" name="edit" value="hapus">
            </form>
			</td>
		</tr>
	<?php } ?>
	</table>
	<br/>
	<?php 
	echo $this->pagination->create_links();
	?>
</body>
</html>