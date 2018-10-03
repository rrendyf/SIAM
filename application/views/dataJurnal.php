<!DOCTYPE html>
<html>
<head>
	<title>Jurnal</title>
</head>
<body>
	<h2>Jurnal</h2>

	<table border="1">
		<tr>
			<td>Judul</td>
			<td>Pengarang</td>
			<td>Tahun</td>
			<td>Abstrak</td>
			<td>Keyword</td>
			<td>File</td>
			<td>Aksi</td>
		</tr>
		<?php foreach ($dataJurnal as $Jurnal){ ?> <!-- mulai foreach -->
			<tr>
				<td><?php echo $Jurnal->Judul; ?></td>
				<td><?php echo $Jurnal->Pengarang; ?></td>
				<td><?php echo $Jurnal->Tahun; ?></td>
				<td><?php echo $Jurnal->Abstrak; ?></td>
				<td><?php echo $Jurnal->Keyword; ?></td>
				<td><a href="<?php echo base_url('upload/').$Jurnal->File;?>"><?php echo $Jurnal->File; ?></td>
				<td>
					<form action="<?php echo site_url('Jurnal/prosesHapus/'); ?>" method="post">
						<input type="Hidden" name="kdJurnal" value="<?php echo $Jurnal->kdJurnal ?>">
						<input type="Submit" name="hapus" value="Hapus">
					</form>
					<form action="<?php echo site_url('Jurnal/prosesEdit/<?php echo $Jurnal->kdJurnal ?>'); ?>" method="post">
						<input type="Hidden" name="kdJurnal" value="<?php echo $Jurnal->kdJurnal ?>">
						<input type="Submit" name="edit" value="Edit">
					</form>
				</td>
			</tr>
		<?php }?> <!-- tutup foreach -->

	</table>
	<br/>
	
	<a href="<?php echo site_url('Jurnal/tambahJurnal');?>">Add Jurnal</a>
	<a href=<?php echo base_url('index.php/login/logout') ?> role="button">Logout</a>
</body>
</html>