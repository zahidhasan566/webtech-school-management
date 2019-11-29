<?php

	session_start();
	
	
	if(isset($_SESSION['name'])){
		  $id=$_SESSION['id'];



        echo "<br>";
	  echo " &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp SEARCH RESULT !!!" ;
	   echo "<br>";
	$key=$_POST['key'];
	//echo $key ;

	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select  bookname,authorname from Library where  bookname='".$key."'";
	$result = mysqli_query($con,$sql);
	$output='<ul class-"list-unstyled">';

	   
	
	
			
	$data ="";
	$data2 ="";
	
	while($row = mysqli_fetch_assoc($result)){
		//echo '<div>'.$row['bookname'].'</div>';
		$data .='<div >'.$row['bookname'].'</div>';
		$data2 .='<div>'.$row['authorname'].'</div>';
		//$output .='<li>'.$row['bookname'].'</li>';
	}
	
	if($data==NULL && $data2==NULL )
	{
		echo "<br>";
	echo "BOOK IS NOT FOUNDED";
	}
	else{
	//echo $data;
	echo  "bookname : " . $data . "<br>";
   
	echo  "authorname  : " . $data2 . "<br>";
	}
	}
	
	else{
	header("location: login.php");
	}
 ?>

	


