<?php
	require_once('auth.php');
?>
<html>
<head>
<link rel="shortcut icon" href="./images/dblogo.ico" />
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="./css/design.css">
<title>Delete Student Data</title>
</head>
<body>
<div class="logo"></div>
<div class="design-block">
<center>
<h1>Delete Student Data</h1>
<form action="delete.php" method="get">
<input type="text" value="" placeholder="ID" name="ids">
<button>Delete</button>
</form>


<?php

include 'config.php';
if(isset($_GET["ids"]))
{
	
	$ids = (isset($_GET["ids"]) ? $_GET["ids"] : null);
	
	try
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("DELETE FROM STUDENTS WHERE STUD_ID=?  ");
		$stmt->execute(array($ids));
		echo "<script>alert('Success! Data Deleted.')</script>";
		
		
	}	
	catch (PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
}


?>

<br><br>
<div class="back-but">
<a href="home.php"><button type="button">Back</button></a><br>
</div>
</center>
</div>
</body>
</html>