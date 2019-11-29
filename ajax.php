<?php
	session_start();
	include('db.php');
	
	if(isset($_SESSION['name'])){
		  $id=$_SESSION['id'];
		  
		  
	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	
      
$sql="SELECT name  FROM `student` WHERE StudentId='$id'";
	
	$result = mysqli_query($con,$sql);

	
	$data ="";
	$data2 ="";
	$data3 ="";
	while($row = mysqli_fetch_assoc($result)){
	$data .='<div>'.$row['name'].'</div>';	
		  
	}
		  
	  
		  
		  
		  
		  
?>







<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
</head>
<body>

	<center>
		<div>
			  <h1>   &nbsp  Book Search</h1> 
 
       &nbsp &nbsp <label>Enter Book Name  </label>

			<input type="text" id='search' name="" onkeyup="loadData()" >
			<input type="button"  name="button" value="Search" onclick="loadValue2()">

		</div>
		
		
		
		<div id="result" >
			
		</div>
		
		<div id="book">
			
		</div>
		

	</center>

	<script type="text/javascript">
		
		function loadData(){

			var xmlHttp = new XMLHttpRequest();

			xmlHttp.open('POST', 'search.php', true);
			xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			var abc = "key="+document.getElementById('search').value;
			xmlHttp.send(abc);

			xmlHttp.onreadystatechange = function(){

				if(this.readyState == 4 && this.status==200)
				{
					//alert(this.responseText);
					document.getElementById('result').innerHTML =this.responseText;
					//alert(this.responseText);
				}
			}

		}

		function loadValue(data){

			document.getElementById('search').value=data;
			document.getElementById('result').innerHTML="";
		}
		
		function loadValue2(){

			var xmlHttp = new XMLHttpRequest();

			xmlHttp.open('POST', 'searchbook.php', true);
			xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			var abc = "key="+document.getElementById('search').value;
			xmlHttp.send(abc);

			xmlHttp.onreadystatechange = function(){

				if(this.readyState == 4 && this.status==200)
				{
					//alert(this.responseText);
					document.getElementById('book').innerHTML =this.responseText;
					//alert(this.responseText);
				}
			}

		}
		function abc(data){
	document.getElementById('search').value = data;
	document.getElementById('result').innerHTML ="";	
	//document.getElementById('result').style.display ="none";	
}


	</script>
</body>
</html>

<?php }else{
	header("location: login.php");
	//echo "fail";
} ?>
