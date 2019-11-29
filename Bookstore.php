 
<html>
<head>

   <h1 align="center"> <img src="aiub.png" align="center" width="100" height="100" > </h1>
	   <h1 align="center"> WELCOME STUDENT </h1>
	 <h4> <a href="logout.php"> <h4 align="right"> LOG OUT </h4> </a>
  <body>
  
  <table border="1"  width="100%" style="color:green">
  
  
  
    <tr>
           <td colspan="3">
             <a href="login.php"> HOME    </a>&nbsp 
            <a href="Syllabus.pdf"> DOWNLOAD SYLLABUS    </a>&nbsp
			<a href="exam 2.docx"> DOWNLOAD EXAM SCHEDULE    </a>&nbsp
			<a href="notes.php"> NOTES   </a>&nbsp
			<a href="Vote.php"> VOTE    </a>&nbsp
			<a href="Attendance.php"> ATTENDANCE   </a>&nbsp
			<a href="Result.php"> RESULT  </a>&nbsp
			<a href="Teacherinfo.php"> TEACHER INFORMATION </a>&nbsp
			<a href="Assignment.php"> UPLOAD ASSIGNMENT    </a> 
           </td>			 
                  
          	  
		  
                 
 
    </tr>
	
	
		
    
	<tr height=500 >



	 
        <td width="30%">
			   
		      
			   
             <li > LIBRARY 
             <ul>
			 <li> <a href="Booksearch.php"> VIEW AVAILABLE BOOK   </a> </li>
			 </ul>
		     </li>
				
				
				
			<li> ACCOUNTS 
		     <ul>
			 <li> <a href="Financial.php"> FINANCIAL HISTORY  </a></li>
			 </ul>
				
			<ul>
			<li><a href="Application.docx"> APPLICATION FOR LATEPAYMENT </a> </li>
			</ul>
				
			<ul>
			<li><a href="Deleteaccount.php"> REQUEST TO DELETE ACCOUNT</a> </li>
			</ul>
				
			
			</li>
		   <li> <a href="Payment.php"> ONLINE PAYMENT</a>  </li>
           			 
			   
			
		</td>
			
			
			
		<td>
			
			<?php 
                    if(isset($_REQUEST['submit'])){
                      $result= $_POST['search'];
                   $result= strtolower($result);

                 if ($result=="spiderman")
                    {

                echo " THE BOOK IS AVAILABLE ";
                     }
              else if ($result=="amazon")
               {
                echo " THE BOOK IS AVAILABLE ";
                   }
              else if ($result=="sports")
              {
          echo " THE BOOK IS AVAILABLE ";
                   }
              else if ($result=="sports")
            {
            echo " THE BOOK IS AVAILABLE ";
              }
            else if ($result=="wikipedia")
           {
             echo " THE BOOK IS AVAILABLE ";
            }
            else if ($result=="story")
             {
                 echo " THE BOOK IS AVAILABLE ";
               }
           else if ($result=="thakumarjhuli")
            {
             echo " THE BOOK IS AVAILABLE ";
                 }

             else
            {
            echo "No results found for this search";
              }
             }
             else
            {
	          header('location: schoolstudent.php');
              }
            ?>
		</td>
		  
		  
		  
        <td width="20%">
		        NOTICE
		         <ul>
			     <li> <a href="Notice.php"> ENTRY RULES </a> </li>
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