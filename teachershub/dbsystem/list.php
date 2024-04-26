<?php
	require_once('auth.php');
?>
<html>
<head>
<link rel="shortcut icon" href="./images/dblogo.ico" />
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="./css/design.css">
<link rel="stylesheet" type="text/css" href="./css/table.css">
<title>List Data</title>
</head>
<body>
<div class="logo"></div>
<div class="design-block">
<center>
<h1>List Data</h1>
<p>Note : Click on the ID to view detailed data</p>
<?php
include 'config.php';
try
{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT STUD_ID, STUD_NAME, STUD_COURSE,STUD_DEPT FROM STUDENTS");
	$stmt->execute();
	$i = 0;
	echo "<style>
	table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
	}
	th, td {
	padding: 5px;
	}
	</style>";
	echo "<br><center>";
	echo "<table class='responstable'>";
	echo "<tr>";
	echo "	<th>No.</th>";
	echo "	<th>ID</th>";
	echo "	<th>Name</th>";
	echo "	<th>Course</th>";
	echo "  <th>Profile</th>";
	/*echo "	<th>DEPARTMENT</th>";
	echo "	<th>CLASS</th>";
	echo "	<th>SECTION</th>";
	echo "	<th>BLOODGROUP</th>";	
	echo "	<th>ADDRESS</th>";
	echo "	<th>E-MAIL</th>";*/
	echo "</tr>";
	while ($row = $stmt->fetch())
	{
		$ids = $row['STUD_ID'];
		$names = $row['STUD_NAME'];
		$course = $row['STUD_COURSE'];
		/*$dept = $row['STUD_DEPT'];
		$class = $row['STUD_CLASS'];
		$section = $row['STUD_SECTION'];
		$bloodgroup = $row['STUD_BLOODGROUP'];
		$address = $row['STUD_ADDRESS'];
		$email = $row['STUD_EMAIL'];*/

		echo "<tr>";
		echo "	<td>".($i+1)."</td>";
	 	echo "	<td><a href='search.php?id=$ids'>$ids</a></td>";
		echo "	<td>$names</td>";
		echo "	<td>$course</td>";echo '<td>
		<a href="!DOCTYPE1.php?id=' . $f=$row['STUD_ID'] . '">' . $row["STUD_NAME"] . '</a></td>';


		/*echo "	<td>$dept</td>";
		echo "	<td>$class</td>";		
		echo "	<td>$section</td>";
		echo "	<td>$bloodgroup</td>";		
		echo "	<td>$address</td>";
		echo "	<td>$email</td>";*/
		echo "</tr>";
		$i++;
	}
	echo "</tr></table></center>";
}	
catch (PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}
$conn = null;
?>
<br><br>
<div class="back-but">
<a href="home.php"><button type="button">Back</button></a><br>
</div>
</center>
</div>
</body>
</html>