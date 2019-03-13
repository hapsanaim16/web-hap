<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view pengurus</title>
</head>
<body>
	<center>
		<h4><a href="<?php echo site_url('login/logout') ?>">LOGOUT</a></h4>
	</center>
	<?php echo form_open('pengurus/addpengurus'); ?>
	<table>
		<tr>
			<td>ID</td>
			<td><?php echo form_input('id'); ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo form_input('nama'); ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo form_input('alamat'); ?></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" value="L">Pria</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="radio" name="gender" value="P">Wanita</td>
		</tr>
		<tr>
			<td>Gaji</td>
			<td><?php echo form_input('gaji'); ?></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo form_submit('submit','Simpan'); ?><input type="reset" value="Clear"></td>
		</tr>
	</table>
	<?php echo form_close() ?>

	<hr>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Gender</th>
			<th>Gaji</th>
			<th>Aksi</th>
		</tr>
		<?php
		foreach ($data as $row) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['alamat']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['gaji']; ?></td>
				<td>
					<?php echo anchor('pengurus/editpengurus/'.$row['id'],'UBAH'); ?>
					 | 
					 <?php echo anchor('pengurus/delete/'.$row['id'],'HAPUS'); ?>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>