<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view admin</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/materialize.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>js/materialize.css">

	<style type="text/css">
	tr {
		border: none; 	
	}
	</style>

</head>
<body>

	<center>
		<br><br><br><br><br><br>


	<?php echo form_open('admin/addadmin'); ?>

	<h2>Tabel Admin</h2>
	<br>
	<div class="container">
	<table>
	<tr>
			<td>Id</td>
			<td><?php echo form_input('id'); ?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><?php echo form_input('username'); ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><?php echo form_input('password'); ?></td>
		</tr>
		<tr>
			<td></td>
			<td><a class="waves-effect waves-light btn"><?php echo form_submit('submit','Simpan'); ?></a>                                                         <input class="waves-effect waves-light btn" type="reset" value="Clear"></td>
		</tr>
		</table>

		<?php echo form_close() ?>

	<hr>
	
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Aksi</th>
		</tr>
		<?php
		foreach ($data as $row) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['password']; ?></td>
				<td>
					<?php echo anchor('admin/editadmin/'.$row['id'],'UBAH'); ?>
					 | 
					 <?php echo anchor('admin/delete/'.$row['id'],'HAPUS'); ?>
				</td>
			</tr>
		<?php } ?>
	</table>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>

	</center>

</body>
</html>