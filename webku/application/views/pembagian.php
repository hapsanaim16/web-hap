<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pembagian</title>
</head>
<body>
	<?php echo form_open('hitung/pembagian'); ?>
	<?php echo form_input('angka1', $angka1); ?> : 
	<?php echo form_input('angka2', $angka2); ?>
	<br>
	<?php echo form_submit('submit','Hitung'); ?>
	<?php echo form_close(); ?>
	<br>
	<h3>Hasil : <?php echo $hasil; ?></h3>
	<br>
	<?php echo anchor('hitung','Kembali') ?>
</body>
</html>