<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <?php
		 //1. Connect to MySQL
		$x=mysqli_connect("localhost","root","12345678");
		
		//2. select db 
		mysqli_select_db($x,"student_info");
		$first_name=$_POST['fname'];
		$last_name=$_POST['lname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		//3. Query(insert)
		mysqli_query($x,"insert into register_info (First_name,Last_name,email,password) value ('$first_name','$last_name','$email','$password')");
		
		
		//.close connect 
		mysqli_close($x);
			
 ?>

</body>
</html>