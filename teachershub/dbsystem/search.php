<?php
	require_once('auth.php');
?>
<html>
<head>
<link rel="shortcut icon" href="./images/dblogo.ico" />
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="./css/design.css">
<link rel="stylesheet" type="text/css" href="./css/table.css">
<title>Search Data</title>
</head>
<body>
<div class="logo"></div>
<div class="design-block">
<center>
<h1>Search Data</h1>
<form action="search.php" method="get">
<input type="text" value="" placeholder="ID" name="id">
<button>Search</button>
</form>

<?php
include 'config.php';

if(isset($_GET["id"])) {
	$id = (isset($_GET["id"]) ? $_GET["id"] : null);


	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT * FROM STUDENTS WHERE STUD_ID=?");
		$stmt->execute(array($id));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if($row) {
			$ids = $row['STUD_ID'];
			$namas = $row['STUD_NAME'];
			$date = date('d-m-Y', strtotime($row['STUD_DOB']));
			$telepon = $row['STUD_PHONE'];
			$reg = $row['STUD_IC'];
			$course = $row['STUD_COURSE'];
			$dept = $row['STUD_DEPT'];
			$class = $row['STUD_CLASS'];
			$section = $row['STUD_SECTION'];
			$bloodgroup = $row['STUD_BLOODGROUP'];
			$address = $row['STUD_ADDRESS'];
			$email = $row['STUD_EMAIL'];
			$hobby = $row['HOBBY'];
			$cutoff = $row['CUTOFF'];
			$maths = $row['MATHS'];
			$physics = $row['PHYSICS'];
			$chemistry = $row['CHEMISTRY'];
			$od = $row['OD'];
			$present = $row['A_P'];
			$absent = $row['A_A'];
			$cgpa = $row['CGPA'];
			$sgpa1 = $row['SFGPA'];
			$sgpa2 = $row['SSGPA'];
			$sgpa3 = $row['STGPA'];
			$sgpa4 = $row['SFOGPA'];
			$sgpa5 = $row['SFFGPA'];
			$sgpa6 = $row['SSIGPA'];
			$sgpa7 = $row['SSEGPA'];
			$sgpa8 = $row['SEGPA'];
			$asm1 = $row['FASM'];
			$asm2 = $row['SASM'];
			$asm3 = $row['TASM'];
			$asm4 = $row['FOASM'];
			$asm5 = $row['FFASM'];
			$leetcode = $row['leet'];
			$hackerrank = $row['HR'];
			$hackerearth = $row['HE'];
			$codechef = $row['CC'];
			$linkedin = $row['LN'];
			$github = $row['GT'];	
			$codeforce = $row['CF'];
			$codeninja = $row['CN'];
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
			echo "<div class='imgBorder'>";
			$imagePath = "./images/userimg/noimage.jpg";
			if(file_exists($imagePath)) {
				echo "<img width=150px height=150px src='{$imagePath}'></img>";
			} else {
				echo "<img width=150px height=150px src='./images/userimg/noimage.jpg'></img>";
			}
			echo "</div>";

			echo "<table class='responstable'>";
			echo "<tr><th>ID</th><td>{$ids}</td></tr>";
			echo "<tr><th>Name</th><td>{$namas}</td></tr>";
			echo "<tr><th>Date of Birth</th><td>{$date}</td></tr>";
			echo "<tr><th>Mobile Number</th><td>{$telepon}</td></tr>";
			echo "<tr><th>Register Number</th><td>{$reg}</td></tr>";
			echo "<tr><th>Course</th><td>{$course}</td></tr>";
			echo "<tr><th>Department</th><td>{$dept}</td></tr>";
			echo "<tr><th>Class</th><td>{$class}</td></tr>";
			echo "<tr><th>Section</th><td>{$section}</td></tr>";
			echo "<tr><th>Blood Group</th><td>{$bloodgroup}</td></tr>";
			echo "<tr><th>Address</th><td>{$address}</td></tr>";
			echo "<tr><th>Email</th><td>{$email}</td></tr>";
			echo "<tr><th>Hobby</th><td>{$hobby}</td></tr>";
			echo "<tr><th>Cutoff</th><td>{$cutoff}</td></tr>";
			echo "<tr><th>Maths</th><td>{$maths}</td></tr>";
			echo "<tr><th>Physics</th><td>{$physics}</td></tr>";
			echo "<tr><th>Chemistry</th><td>{$chemistry}</td></tr>";
			echo "<tr><th>OD</th><td>{$od}</td></tr>";
			echo "<tr><th>Present</th><td>{$present}</td></tr>";
			echo "<tr><th>Absent</th><td>{$absent}</td></tr>";
			echo "<tr><th>CGPA</th><td>{$cgpa}</td></tr>";
			echo "<tr><th>SGPA1</th><td>{$sgpa1}</td></tr>";
			echo "<tr><th>SGPA2</th><td>{$sgpa2}</td></tr>";
			echo "<tr><th>SGPA3</th><td>{$sgpa3}</td></tr>";
			echo "<tr><th>SGPA4</th><td>{$sgpa4}</td></tr>";
			echo "<tr><th>SGPA5</th><td>{$sgpa5}</td></tr>";
			echo "<tr><th>SGPA6</th><td>{$sgpa6}</td></tr>";
			echo "<tr><th>SGPA7</th><td>{$sgpa7}</td></tr>";
			echo "<tr><th>SGPA8</th><td>{$sgpa8}</td></tr>";
			echo "<tr><th>Assignment mark 1</th><td>{$asm1}</td></tr>";
			echo "<tr><th>Assignment mark 2</th><td>{$asm2}</td></tr>";
			echo "<tr><th>Assignment mark 3</th><td>{$asm3}</td></tr>";
			echo "<tr><th>Assignment mark 4</th><td>{$asm4}</td></tr>";
			echo "<tr><th>Assignment mark 5</th><td>{$asm5}</td></tr>";
			echo "<tr><th>Leetcode Link</th><td>{$leetcode}</td></tr>";
			echo "<tr><th>Hackerrank Link</th><td>{$hackerrank}</td></tr>";
			echo "<tr><th>Hackerearth Link</th><td>{$hackerearth}</td></tr>";
			echo "<tr><th>Codechef Link</th><td>{$codechef}</td></tr>";
			echo "<tr><th>Linkedin Link</th><td>{$linkedin}</td></tr>";
			echo "<tr><th>Github Link</th><td>{$github}</td></tr>";
			echo "<tr><th>Codeforce Link</th><td>{$codeforce}</td></tr>";
			echo "<tr><th>Codeninja Link</th><td>{$codeninja}</td></tr>";
			echo "</table>";

			echo "<br><a href='update.php?id={$id}'><button type='button'>Update Data</button></a><br>";
		} else {
			echo "<p>No data found for the given ID.</p>";
		}
	} catch (PDOException $e) {
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
