<?php
	session_start();

	if(isset($_REQUEST['submit']))
	{

		$id = trim($_REQUEST['uid']);
		$pass = trim($_REQUEST['pass']);
		
		if($id == ""){
			echo "Invalid or empty ID <br>";
		}else if($pass == ""){
			echo "Invalid or empty password";
		}
		else
		{
			$myfile = fopen('user.txt', 'r');
			$data = fread($myfile, filesize('user.txt'));
			$user = explode('|', $data);


			//if($_SESSION['id'] == $id && $_SESSION['pass'] == $pass){

		if(trim($user[0])==$id && trim($user[1])==$pass){

				//setcookie('my_first_cookie','xyz',time()+3600, '/');
				header('location: schoolstudent.php');
			}
			else
			{
				echo "invalid ID / Password.";
			}
		}

	}
	else
	{
		header('location: login.php');
		//echo "Invalid request!";
	}
?>
