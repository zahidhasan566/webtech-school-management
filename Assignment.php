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


<html>

<link href="style.css" rel="stylesheet">
<head>
    
    
	  
     <h1 align="center"> <img src="aiub.png" align="center" width="100" height="100" > </h1>
	    <h1 align="center" "> WELCOME <?php echo $data ; ?> </h1> 
	 <h4> <a href="logout.php"> <h4 align="right"> LOG OUT </h4> </a>
	
	 
  <body>
    
  <table border="1"  width="100%" style="color:blue">
  
  
  
    <tr>
           <td colspan="3">
		   <div class="nav">
            <ul>
         <li><a href="login.php"> HOME  &nbsp  </a>  </li>
         <li><a href="Syllabus.pdf"> DOWNLOAD SYLLABUS  &nbsp  </a></li>
		<li><a href="exam 2.docx"> DOWNLOAD EXAM SCHEDULE  &nbsp  </a></li>
		<li><a href="notes.php"> NOTES &nbsp  </a></li>
		<li>	<a href="Vote.php"> VOTE  &nbsp  </a></li>
		<li>	<a href="Attendance.php"> ATTENDANCE &nbsp  </a></li>
		<li><a href="Result.php"> RESULT &nbsp </a></li>
		<li>	<a href="Teacherinfo.php"> TEACHER INFORMATION &nbsp </a></li>
		<li><a href="Assignment.php"> UPLOAD ASSIGNMENT &nbsp </a></li>
			<ul>
			</div>
           </td>
		   
                  
          	  
		  
                 
 
    </tr>
	
	
		
    
	<tr height=500 >



	 
        <td width="30%">
		
		<div class="sidenav">
  
       <button class="dropdown-btn"> LIBRARY
       <i class="fa fa-caret-down"></i>
       </button>
     <div class="dropdown-container">
      <a href="Booksearch.php"> VIEW AVAILABLE BOOK   </a>
  
	
	  
	
	
	
	
	
	
  </div>

</div>
		
		<div class="sidenav2">
		
		 <button class="dropdown-btn">ACCOUNTS
       <i class="fa fa-caret-down"></i>
       </button>
     <div class="dropdown-container2">
    <a href="Financial.php"> FINANCIAL HISTORY  </a>
   <a href="Application.docx"> APPLICATION FOR LATEPAYMENT</a>
   <a href="Deleteaccount.php"> REQUEST TO DELETE ACCOUNT</a>
		
		</div>

</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<script>
		var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
		</script>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				
				
			 	
		
			
			
			 
			 
			 
			
		
				
				
				
			</li>
		    <li> <a href="Payment.php"> ONLINE PAYMENT</a>  </li>
           			 
			</ul>	   
			
		</td>
			
			
			
		<td>
		
		
		
	
		<h1> UPLOAD ASSIGNMENT </h1>
			  <form action="Assignment.php" method="post" enctype="multipart/form-data">
			
			 
			
		 
			 
			    
			   
			
			&nbsp &nbsp   Select file to upload:
             <input type="file" name="uploadfile"/> <br/>
			<input type="submit" name="submit" value="Submit"/>
			 </ul>
			
			  </form>
			
			<?php 
				
				if(isset($_POST['submit'])){
				$filedir = "upload/";
		$filepath = $filedir.$_FILES["uploadfile"]["name"];
		move_uploaded_file($_FILES['uploadfile']['tmp_name'], $filepath);
		
		
		
			if($_FILES['uploadfile']['size']> 0)
			{

				    echo "SUCCESFULLY UPLOADED"; 
				
			}
		
		    else
				{
					echo "Error";
				}
		
		
		
		
    $key2="2";
	$con = mysqli_connect('localhost', 'root', '', 'webtech');
		$sql = "insert into file values('$filepath','bangla','$id','5','')";
	
   

	
	$result = mysqli_query($con,$sql);
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				
				}
				
				
				
				
				
				
				
				
				
				
				
				
				

    
?>



	
	
	
	
	
	
	
	
	
	
	
	
	
	
         
			
			
		</td>
		  
		  
		  
        <td width="20%">
		        NOTICE
		         <ul>
			     <li> <a href="Notice.php"> 
				 
				 <?php
				 
				 	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	
      
           $sql="SELECT title  FROM `notice` WHERE noid='$id'";
	
	         $result = mysqli_query($con,$sql);

	
	$data ="";
	$data2 ="";
	$data3 ="";
	while($row = mysqli_fetch_assoc($result)){
	$data .='<div>'.$row['title'].'</div>';	
		  
	}
		
   echo $data;
				 
				 
				 
				 ?>
				 
				 </a> </li>
		         </ul>
	    </td>
  
  
  
  
    </tr>
   
  
  
  
    <tr >
            <td colspan="3" >
			
			         <h4> USEFUL LINKS </h4>
			         <a href="https://www.google.com/"> google   </a> &nbsp
			         <a href="https://www.yahoo.com/"> yahoo </a> 
			  
            </td>
    </tr>
  
  </table>
  </body>
</head>
</html>
<?php }else{
	header("location: login.php");
	//echo "fail";
} ?>



