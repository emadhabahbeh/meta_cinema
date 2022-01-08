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
		$newpass=$_POST['newpass'];
		//3. Query(update)
		mysqli_query($x,"update login_info set password = '$newpass' where email = '$email' and password = '$password'");
		
		
		//.close connect 
		mysqli_close($x);
			
 ?>

</body>
</html>