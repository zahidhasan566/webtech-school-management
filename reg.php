<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<form method="post" action="regcheck.php">
		
			<h1 align="center">REGISTRATION</h1>
			<table align= "center">
			<tr>
					<td align="left">NAME </td>
					<td>:</td>
					<td><input type="text" name="uname"></td>
				</tr>
				
				<tr>
					<td align="left">ID </td>
					<td>:</td>
					<td><input type="text" name="uid"></td>
				</tr>
				
				
					<tr>
					<td>GENDER </td>
					<td>:</td>
					<td><input type="radio" name="gender" value="male"checked >male 
	                    <input type="radio" name="gender" value="female">female 
					
					</td>
				</tr>
				
				
					<tr>
					<td>EMAIL </td>
					<td>:</td>
					<td><input type="text" name="mail"></td>
				</tr>
				
				
				<tr>
					<td>ADDRESS </td>
					<td>:</td>
					<td><input type="text" name="address"></td>
				</tr>
				
				
				<tr>
					<td>PASSWORD </td>
					<td>:</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td>RE-PASSWORD </td>
					<td>:</td>
					<td><input type="password" name="repass"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td align="right"><input type="submit" name="submit" value="Register"></td>
				</tr>
		
	</form>
</body>
</html>