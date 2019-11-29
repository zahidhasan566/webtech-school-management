<?php
	session_start();

	if(isset($_REQUEST['submit']))
	{

		$id = trim($_REQUEST['uid']);
		$pass = trim($_REQUEST['pass']);
		$repass = trim($_REQUEST['repass']);
	     $name=trim($_REQUEST['uname']);
	    $email=trim($_REQUEST['mail']);
	    $gen=$_REQUEST['gender'];
		$add=$_REQUEST['address'];
		$len=strlen($name);
	
		
		if($id == "" || $id<0 )
		{
			echo "invalid id ";
		}
		else if($name == "" || $len <2 )
		{
			echo "invalid name or not fill up the requirement";
		}
		
		else if($pass == "")
		{
			echo "invalid or empty password";
		}
		else if($email == "")
		{
			echo " empty mail";
		}
		else if(strpos($email, '@') == false)
		{
			echo "  mail should be in correct form ";
		}
		else if($gen == "")
		{
			echo " empty gen";
		}
		else if($add == "")
		{
			echo " empty Address";
		}
		else
		{
			
			if($pass == $repass)
			{

				$data = $id."|".$pass;

				$myfile = fopen('user.txt', 'w');
				fwrite($myfile, $data);
				fclose($myfile);
				//$_SESSION['id'] = $id;
                // $_SESSION['pass'] = $pass;
				 
				header('location: login.php');
			}
			else
			{
				echo "password and repassword error!";
			}			
		}

	}
	else
	{
		header('location: login.php');
		//echo "Invalid request!";
	}

?>
