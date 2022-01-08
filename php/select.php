<!doctype>
<html>
<head>
<title>Print User Accounts</title>
</head>
<body>
<?php
$x=mysqli_connect("localhost","root","12345678");
mysqli_select_db($x ,"student_info");

$q="Select * from register_info ";//query
$r = mysqli_query($x,$q);//result query
mysqli_close($x);

print("<table border='1'>");

while($a=mysqli_fetch_row($r))

{
print("<tr>");
foreach($a as $i=>$v)
print("<th>$v</th>");
print("</tr>");
}
print("</table>");
?>
</form>
</body>
</html>