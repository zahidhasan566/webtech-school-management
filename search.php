<?php
	
	session_start();
	include('db.php');
	
	if(isset($_SESSION['name'])){
		  $id=$_SESSION['id'];
		  

	
	$key=$_POST['key'];
	//echo $key ;

	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql = "select  bookname,authorname from Library where bookname like '".$key."%'";
	$result = mysqli_query($con,$sql);
	$output='<ul class-"list-unstyled">';
	
	$data ="";
	$data2 ="";
	while($row = mysqli_fetch_assoc($result)){
	
		
		
		$data .= "<div style='border: 15% solid #000; background-color:white;text-align:right;
		width:30%;cursor:pointer' 
		onclick='abc(this.innerHTML)'>".$row['bookname']."</div>";
		
		
	}
	
	
	echo $data;
	//echo "bookname " . $data . "<br>";
	} 
	//echo "authorname " . $data2 . "<br>";
    else{
	header("location: login.php");
	//echo "fail";
} 

?>

<script type="text/javascript">

function loadValue(){
	       alert(found);

			//document.getElementById('search').value=data;
			//document.getElementById('result').innerHTML="";
		}
		</script>