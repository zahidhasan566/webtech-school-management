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
			
			<h1> Votes </h1>
			
			
			<?php
 
        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql1 = "SELECT COUNT(`male`) as `mcount` FROM poll WHERE male=1";
        $sql2 = "SELECT COUNT(`female`) as `fcount` FROM poll WHERE female=1";
        $sql3 = "SELECT COUNT(`other`) as `ocount` FROM poll WHERE other=1";

        $result1 = mysqli_query($con, $sql1);
        $result2 = mysqli_query($con, $sql2);
        $result3 = mysqli_query($con, $sql3);

        $data1 = mysqli_fetch_array($result1);
        $data2 = mysqli_fetch_array($result2);
        $data3 = mysqli_fetch_array($result3);
        
?>


  


    
  <form method="post" action="pollcheck.php">
  	 <table>
	 <h1> CLASS CAPTAIN SELECTION !!!  </h1>
        <tr> 
          <td>VOTE FOR  ANIK  <br><br> </td>
          <td>:<br><br></td>
          <td><?php echo $data1['mcount']; ?><br><br></td>
        </tr>
        <tr>
          <td>VOTE FOR  ONISHA <br><br></td>
          <td>:<br><br></td>
          <td><?php echo $data2['fcount']; ?><br><br></td>
        </tr>
        <tr>
          <td>VOTE FOR ANOTHER <br><br></td>
          <td>:<br><br></td>
          <td><?php echo $data3['ocount']; ?><br><br></td>
        </tr>

        <tr>
          <td>Gender<br><br></td>
          <td>:<br><br></td>
          <td>
          
              <input type="radio" name="poll" value="male">ANIK
              <input type="radio" name="poll" value="female">ONISHA
              <input type="radio" name="poll" value="other">OTHER 
              <br><br>
          </td>
        </tr>


        
          <td></td>
          <td></td> 
          <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
      </table><br>
      
  </form>


			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			 
		
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



