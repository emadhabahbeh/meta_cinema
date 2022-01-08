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
		$email=$_POST['email'];
		$password=$_POST['password'];
		//3. Query(insert)
		mysqli_query($x,"insert into login_info (email,password) value ('$email','$password')");
		
		
		//.close connect 
		mysqli_close($x);
			
 ?>

</body>
</html>