<!DOCTYPE html>
<html>
<head>
	<title>Form Upload Jurnal</title>
</head>
<body>
	<h2>Form Upload Jurnal</h2>

	
	<?php echo form_open_multipart('Jurnal/prosesUpload');?>
		Judul : <input type="text" name="judul"> <br/><br/>
		Pengarang : <input type="text" name="pengarang"> <br/><br/>
		Tahun : <input type="text" name="tahun"> <br/><br/>
		Keyword : <input type="text" name="keyword"> <br/><br/>
		Abstrak : <input type="text" name="abstrak"> <br/><br/>
		File : <input type="File" name="file"> <br/><br/>

		<input type="submit" name="submit" value="Upload">
	</form>
</body>
</html>
