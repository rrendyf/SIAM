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
		</tr>
		<?php foreach ($dataJurnal as $Jurnal){ ?> <!-- mulai foreach -->
			<tr>
				<td><?php echo $Jurnal->Judul; ?></td>
				<td><?php echo $Jurnal->Pengarang; ?></td>
				<td><?php echo $Jurnal->Tahun; ?></td>
				<td><?php echo $Jurnal->Abstrak; ?></td>
				<td><?php echo $Jurnal->Keyword; ?></td>
				<td><a href="<?php echo base_url('upload/').$Jurnal->File;?>"><?php echo $Jurnal->File; ?></td>
			</tr>
		<?php }?> <!-- tutup foreach -->

	</table>
</body>
</html>