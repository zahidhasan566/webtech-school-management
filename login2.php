<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<table width=100%>
	<tr>
	<td align="center"> <img src="scl.png" width="200" height="200" > </td>
	</tr>
	</table>
</head>
<body>
	
	<form method="post" action="logcheck.php" >
		<fieldset> 
					
			<legend align="center"><h1>Login</h1></legend>
			<table width=25% align="center">
				
				<tr>
					<td width=20% align="left"><h4>ID </h4></td>
					<td width=7%><h4>:</h4></td>
					<td><input type="text" name="uid"></td>
					<td></td>
				</tr>
				<tr>
					<td width=20% align="left"><h4>Password </h4></td>
					<td width=7%><h4>:</h4></td>
					<td><input type="password" name="pass"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>
					</td>
					<td></td>
					<td width=30% align="left"><a href="reg.php" >Register</a>&nbsp<input type="submit" name="submit" value="Login"></td>
						
				</tr>
			</table>
	</fieldset>
	</form>
</body>
</html>	