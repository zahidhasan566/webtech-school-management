<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<table width=100%>
	<tr>
	<td align="center"> <img src="aiub.png" width="200" height="200" > </td>
	</tr>
	</table>
</head>
<link href="style.css" rel="stylesheet">
<body>
	
	<form method="post" action="logcheck.php" >
		
					
			<h1 align="center">Login</h1>
			<table width=25% align="center" >
				
				<tr>
					<td width=20% align="left"><h4>ID </h4></td>
					<td width=7%><h4>:</h4></td>
					<td><input type="text" name="uid"></td>
					<td></td>
				</tr>
				<tr>
					<td width=20% align="left"><h4>PASSWORD </h4></td>
					<td width=7%><h4>:</h4></td>
					<td><input type="password" name="pass"></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>
					</td>
					
					<td width=50% align="left" > <input type="submit" name="submit" value="Login"></td>
						<td width=30% align="right"><a href="reg.php" >Register</a> </td>
				</tr>
			</table>

	</form>
</body>
</html>	