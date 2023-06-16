<!-- ini nantinya menjadi menu login silahkan klik link ini : <a href="http://localhost:8081/semester%204/fp-pw-2023/fp-uas-pw/dashboard/admin/html/">Dashboard Admin</a> -->

<!DOCTYPE html>
<html>
<head>
	<title>Login - Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 
	<div class="kotak_login">
		<p class="tulisan_login">Welcome to Login Page</p>
 
		<form action="./cek_login.php" method="post">
			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">

			<center>
				<!-- <a class="link" href="https://www.malasngoding.com">kembali</a> -->
			</center>
		</form>
		
	</div>
 
 
</body>
</html>