<?php
	session_start();
	include('db.php');
	if(isset($_REQUEST['submit']))
	{
		$pass = trim($_REQUEST['pass']);
		$id = trim($_REQUEST['uid']);
		
		if($id == ""){
			echo "Invalid or empty ID <br>";
		}else if($pass == ""){
			echo "Invalid or empty password";
		}
		
		
		
		
		
		
		if($pass!="" && $id!="")
		{
			$conn = getConnection();
			$sql ="select * from login where id='".$id."' and password='".$pass."'";
			//$sql =select *from login;
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
		
			$count = mysqli_num_rows($result);
			mysqli_close($conn);
	
			if($count > 0 )
			{
				$_SESSION['name'] = "abc";
				$_SESSION['id'] = $id;
				//$_SESSION['type'] = $row['type'];
				//$val=$row['type'];
			     
					header('location:schoolstudent.php');
				
				
			}
			else{
				echo "wrong username/password";
				
			 }
			
		}
		
	}
	else
	{    
         echo "fail logcheck ";
		header('location:login.php');
		//echo "s1";
		//not submit;
	}
?>
