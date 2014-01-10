<!DOCTYPE html>
<html>
<head>

</style>
<meta http-equiv="refresh" content="2;url=./../index.php">
</head>
<body>
<h1 align="center" >Congratulation!</h1> <br>
<h2 align="center">Mail send successful!</h2>
<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	$dbc=mysqli_connect('localhost','root','root','ihkrqyiv_email')
		or die('Error connecting to MySQL server.');
	
	$query="INSERT INTO message(TIME,NAME,EMAIL,MESSAGE)".
		"VALUES(CURRENT_TIMESTAMP,'$name','$email','$message')";
	
	$result=mysqli_query($dbc,$query)
		or die("Error insert into table");
		
	mysqli_close($dbc);
?>
</body>
</html>