<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
</head>
<body>
	<center><h2>Halaman Login</h2></center>

	<form action="<?php echo site_url('login/cek'); ?>" method="post">	
		<table border="2" align="center">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		</table>
		<br>
			<center><input type="submit" name="login" value="LOGIN"></center>
	</form>
</body>
</html>