

<?php
	
	include('db.php');
	
	
	
		
			$conn = getConnection();
			$sql = "insert into Library values('".math3."','".jipk."','130')";
			mysqli_query($conn, $sql);
			//$row = mysqli_fetch_assoc($result);
			
			//$count = mysqli_num_rows($result);
			mysqli_close($conn);
		
		
		


?>
