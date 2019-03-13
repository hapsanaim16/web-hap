<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $judul; ?>
	</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<br>
	<div class="container">
		<div class="panel panel-primary">
      	<div class="panel-heading"><h2><?php echo $isi; ?></h3></div>
		<table class="table table-bordered table-hover table-striped tablesorter">
			<tr class="danger">
				<td>NAMA</td>
				<td><?php echo $Nama; ?></td>
			</tr>
			<tr class="info">
				<td>ALAMAT</td>
				<td><?php echo $Alamat; ?></td>
			</tr>
			<tr class="warning">
				<td>JENIS KELAMIN</td>
				<td><?php echo $Jenis_Kelamin; ?></td>
			</tr>
			<tr class="success">
				<td>ASAL SEKOLAH</td>
				<td><?php echo $Asal_Sekolah; ?></td>
			</tr>
		</table>
	</div>
</body>
</html>