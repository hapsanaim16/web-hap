<!DOCTYPE html>
<html>
<head>
	<title>view edit admin</title>
</head>
<body>
	<h2><?php echo $isi; ?></h2>
	<?php echo form_open('pengurus/edit_submit'); ?>
	<table>
		<?php foreach($data->result_array() as $row)
			{ ?>
				<tr>
					<td>Id</td>
					<td><input type="number" name="id" value="<?php echo $row['id']; ?>" readonly="yes"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?php echo form_input('username', $row['username']); ?></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><?php echo form_input('password', $row['password']) ?></td>
				</tr>
			<?php } ?>
	</table>
	<?php echo form_close(); ?>
</body>
</html>