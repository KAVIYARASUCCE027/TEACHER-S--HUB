<?php
	require_once('auth.php');
?>
<html>
<head>
<link rel="shortcut icon" href="./images/dblogo.ico" />
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="./css/design.css">
<title>Update Data</title>
</head>
<body>
<div class="logo"></div>
<div class="design-block">
<center>
<h1>Update Student Data</h1>
<form action="update.php" method="get">
<input type="text" value="" placeholder="ID" name="id">
<button>Search</button>
</form>


<?php

include 'config.php';
if(isset($_GET["id"]))
{
	$ids = (isset($_GET['id']) ? $_GET['id'] : null);

	try
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT * FROM STUDENTS WHERE STUD_ID=?");
		$stmt->execute(array($ids));

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $id = $result['STUD_ID'];
  	$name = $result['STUD_NAME'];
  	$dob = $result['STUD_DOB'];
  	$phone = $result['STUD_PHONE'];
  	$ic = $result['STUD_IC'];
  	$course = $result['STUD_COURSE'];
	$dept = $result['STUD_DEPT'];
  	$class = $result['STUD_CLASS'];
  	$section = $result['STUD_SECTION'];
  	$bloodgroup = $result['STUD_BLOODGROUP'];
  	$address = $result['STUD_ADDRESS'];
  	$email= $result['STUD_EMAIL'];
  	$hobby = $result['HOBBY'];
  	$cutoff = $result['CUTOFF'];
  	$maths = $result['MATHS'];
  	$chemistry = $result['CHEMISTRY'];
  	$physics= $result['PHYSICS'];
  	$od = $result['OD'];
  	$present = $result['A_P'];
  	$absent = $result['A_A'];
  	$cgpa = $result['CGPA'];
  	$sgpa1= $result['FSGPA'];
	  $sgpa2= $result['SSGPA'];
	  $sgpa3= $result['STGPA'];
	  $sgpa4= $result['FOSGPA'];
	  $sgpa5= $result['FFSGPA'];
	  $sgpa6= $result['SIGPA'];
	  $sgpa7= $result['SEGPA'];
	  $sgpa8= $result['SEGPA'];
	  $asm1= $result['FASM'];	 
	   $asm2= $result['SASM'];
	  $asm3= $result['TASM'];
	  $asm4= $result['FOASM'];
	  $asm5= $result['FFASM'];
	  $leetcode = $result['LET'];
	  $hackerrank= $result['HR'];
	  $hackerearth= $result['HE'];
	  $codechef= $result['CC'];
	  $linkedin= $result['LN'];
	  $github= $result['GIT'];
	  $codeforce= $result['CF'];
	  $codeninja= $result['CN'];

		echo "
    <form action='update.php?id={$ids}' method='post'>
    <input disable type='text' placeholder='{$id}' name='id'>
    <input type='text' value='{$name}' placeholder='Name' name='name'>
    <input type='text' value='{$dob}' placeholder='Date of Birth (YYYY-MM-DD)' name='dob'>
    <input type='text' value='{$phone}' placeholder='Phone Number' name='phone'>
    <input type='text' value='{$ic}' placeholder='IC' name='ic'>
    <input type='text' value='{$course}' placeholder='Course' name='course'>
	<input type='text' value='{$dept}' placeholder='Department' name='Dept'>
    <input type='text' value='{$class}' placeholder='Class' name='Class'>
    <input type='text' value='{$section}' placeholder='Section' name='Section'>
    <input type='text' value='{$bloodgroup}' placeholder='Blood Group' name='Bloodgroup'>
    <input type='text' value='{$address}' placeholder='Address' name='Address'>
    <input type='text' value='{$email}' placeholder='E-mail' name='Email'>
	<input type='number' value='{$hobby}' placeholder='Hobby' name='Hobby'>
    <input type='number' value='{$cutoff}' placeholder='Cutoff' name='Cutoff'>
<input type='number' value='{$maths}' placeholder='Maths' name='Maths'>
<input type='number' value='{$physics}' placeholder='Physics' name='Physics'>
<input type='number' value='{$chemistry}' placeholder='Chemistry' name='Chemistry'>
<input type='number' value='{$od}' placeholder='OD' name='Od'>
<input type='number' value='{$present}' placeholder='Present' name='Present'>
<input type='number' value='{$absent}>' placeholder='Absent' name='Absent'>
<input type='number' value='{$cgpa}' placeholder='CGPA' name='Cgpa'>
<input type='number' value='{$sgpa1}' placeholder='SGPA1' name='Sfgpa'>
<input type='number' value='{$sgpa2}' placeholder='SGPA2' name='Ssgpa'>
<input type='number' value='{$sgpa3}' placeholder='SGPA3' name='Stgpa'>
<input type='number' value='{$sgpa4}' placeholder='SGPA4' name='Sfogpa'>
<input type='number' value='{$sgpa5}' placeholder='SGPA5' name='Sffgpa'>
<input type='number' value='{$sgpa6}' placeholder='SGPA6' name='Ssigpa'>
<input type='number' value='{$sgpa7}' placeholder='SGPA7' name='Ssegpa'>
<input type='number' value='{$sgpa8}' placeholder='SGPA8' name='Segpa'>
<input type='number' value='{$asm1}' placeholder='Assignment mark 1' name='Fasm'>
<input type='number' value='{$asm2}' placeholder='Assignment mark 2' name='Sasm'>
<input type='number' value='{$asm3}' placeholder='Assignment mark 3' name='Tasm'>
<input type='number' value='{$asm4}' placeholder='Assignment mark 4' name='Foasm'>
<input type='number' value='{$asm5}' placeholder='Assignment mark 5' name='Ffasm'>
<input type='text' value='<{$leetcode}' placeholder='Leetcode Link' name='Leetcode'>
<input type='text' value='{$hackerrank}' placeholder='Hackerrank Link' name='Hackerrank'>
<input type='text' value='{$hackerearth}' placeholder='Hackerearth Link' name='Hackerearth'>
<input type='text' value='{$codechef}' placeholder='Codechef Link' name='Codechef'>
<input type='text' value='{$linkedin}' placeholder='Linkedin Link' name='Linkedin'>
<input type='text' value='{$github}' placeholder='Github Link' name='Github'>
<input type='text' value='{$codeforce}' placeholder='Codeforce Link' name='Codeforce'>
<input type='text' value='{$codeninja}' placeholder='Codeninja Link' name='Codeninja'>


    <button name='update'>Update</button>
    </form>

    <form action='update.php?id={$ids}' method='post' enctype='multipart/form-data' >
    Choose an image to upload : <input type='file' name='fileToUpload' id='fileToUpload'>
    <button name='upimg'>Upload Image</button>
    </form>

    ";
	if(isset($_POST['update']))
    {
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$phone = $_POST['phone'];
		$ic = $_POST['ic'];
		$course =$_POST['course'];
		$dept = $_POST['Dept'];
  		$class = $_POST['Class'];
  		$section = $_POST['Section'];
  		$bloodgroup = $_POST['Bloodgroup'];
  		$address = $_POST['Address'];
  		$email= $_POST['Email'];
		$hobby = $_POST['HOBBY'];
		$cutoff = $_POST['CUTOFF'];
		$maths = $_POST['MATHS'];
		$chemistry = $_POST['CHEMISTRY'];
		$physics = $_POST['PHYSICS'];
		$od = $_POST['OD'];
		$present = $_POST['A_P'];
		$absent = $_POST['A_A'];
		$cgpa = $_POST['CGPA'];
		$sgpa1 = $_POST['FSGPA'];
		$sgpa2 = $_POST['SSGPA'];
		$sgpa3 = $_POST['STGPA'];
		$sgpa4 = $_POST['FOSGPA'];
		$sgpa5 = $_POST['FFSGPA'];
		$sgpa6 = $_POST['SIGPA'];
		$sgpa7 = $_POST['SEGPA'];
		$sgpa8 = $_POST['SEGPA'];
		
		$asm1 = $_POST['FASM'];
		$asm2 = $_POST['SASM'];
		$asm3 = $_POST['TASM'];
		$asm4 = $_POST['FOASM'];
		$asm5 = $_POST['FFASM'];
		$leetcode = $_POST['LET'];
		$hackerrank = $_POST['HR'];
		$hackerearth = $_POST['HE'];
		$codechef = $_POST['CC'];
		$linkedin = $_POST['LN'];
		$github = $_POST['GIT'];
		$codeforce = $_POST['CF'];
		$codeninja = $_POST['CN'];
		
		$stmt = $conn->prepare("UPDATE STUDENTS SET STUD_NAME=?, STUD_DOB=?, STUD_PHONE=?, STUD_IC=?,STUD_COURSE=?,STUD_DEPT=?,STUD_CLASS=?,STUD_SECTION=?,STUD_BLOODGROUP=?,STUD_ADDRESS=?,STUD_EMAIL=?, HOBBY=?, CUTOFF=?, MATHS=?, CHEMISTRY=?, PHYSICS=?, OD=?, A_P=?, A_A=?, CGPA=?, FSGPA=?, SSGPA=?, STGPA=?, FOSGPA=?, FFSGPA=?, SIGPA=?, SEGPA=?,FASM=?, SASM=?, TASM=?, FOASM=?, FFASM=?, LET=?, HR=?, HE=?, CC=?, LN=?, GIT=?, CF=?, CN=? WHERE STUD_ID=?");
		$stmt->execute(array($name,$dob,$phone,$ic,$course,$dep,$class,$section,$bloodgroup,$address,$email, $hobby, $cutoff, $maths, $chemistry, $physics, $od, $present, $absent, $cgpa, $sgpa1, $sgpa2, $sgpa3, $sgpa4, $sgpa5, $sgpa6, $sgpa7, $sgpa8, $asm1, $asm2, $asm3, $asm4, $asm5, $leetcode, $hackerrank, $hackerearth, $codechef, $linkedin, $github, $codeforce, $codeninja, $id));
		
      echo "<script>alert('Data updated.')</script>";
    }
	
	if(isset($_POST['upimg']))
	{
		include 'imgupdate.php';
	}


	}
	catch(PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;

	

echo "

<br><br>

<div class='back-but'>
<a href='search.php?id={$ids}'><button type='button'>Back</button></a><br>
</div>


";	
	
	
}


?>


</center>
</div>
</body>
</html>
