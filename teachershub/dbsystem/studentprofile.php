<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Student Profile</h2>
        <form action="" method="post">
            <label for="student_id">Enter Student ID:</label>
            <input type="text" id="student_id" name="student_id">
            <button type="submit" name="check_profile">Check Profile</button>
        </form>
        <?php
include 'config.php';
try
{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT STUD_ID, STUD_NAME, STUD_COURSE ,STUD_DEPT,STUD_CLASS,STUD_SECTION, STUD_BLOODGROUP, STUD_ADDRESS ,STUD_EMAIL FROM STUDENTS");
	$stmt->execute();
	$i = 0;
	
	echo "<br><center>";
	echo "<table class='responstable'>";
	echo "<tr>";
	echo "	<th>No.</th>";
	echo "	<th>ID</th>";
	echo "	<th>Name</th>";
	echo "	<th>Course</th>";
	echo "	<th>DEPARTMENT</th>";
	echo "	<th>CLASS</th>";
	echo "	<th>SECTION</th>";
	echo "	<th>BLOODGROUP</th>";	
	echo "	<th>ADDRESS</th>";
	echo "	<th>E-MAIL</th>";
	echo "</tr>";
	while ($row = $stmt->fetch())
	{  
		$ids = $row['STUD_ID'];
		$names = $row['STUD_NAME'];
		$course = $row['STUD_COURSE'];
		$dept = $row['STUD_DEPT'];
		$class = $row['STUD_CLASS'];
		$section = $row['STUD_SECTION'];
		$bloodgroup = $row['STUD_BLOODGROUP'];
		$address = $row['STUD_ADDRESS'];
		$email = $row['STUD_EMAIL'];

		echo "<tr>";
		echo "	<td>".($i+1)."</td>";
	 	echo "	<td><a href='search.php?id=$ids'>$ids</a></td>";
		echo "	<td>$names</td>";
		echo "	<td>$course</td>";
		echo "	<td>$dept</td>";
		echo "	<td>$class</td>";		
		echo "	<td>$section</td>";
		echo "	<td>$bloodgroup</td>";		
		echo "	<td>$address</td>";
		echo "	<td>$email</td>";
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


    </div>
    <script src="script.js"></script>
</body>
</html>
