<?php
    require_once('auth.php');
?>
<html>
<head>
    <link rel="shortcut icon" href="./images/dblogo.ico">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./css/design.css">
    <title>Add Student Data</title>
</head>
<body>
    <div class="logo"></div>
    <div class="design-block">
        <center>
            <h1>Add Student Data</h1>
            <form action="add.php" method="post" enctype="multipart/form-data">
                <input type="text" value="" placeholder="ID" name="id">
                <input type="text" value="" placeholder="Name" name="name">
                <input type="text" value="" placeholder="Date of Birth (YYYY-MM-DD)" name="dob">
                <input type="text" value="" placeholder="Phone Number" name="phone">
                <input type="text" value="" placeholder="IC" name="ic">
                <input type="text" value="" placeholder="Course" name="course">
                <input type="text" value="" placeholder="Dept" name="Dept">
                <input type="text" value="" placeholder="Class" name="Class">
                <input type="text" value="" placeholder="Section" name="Section">
                <input type="text" value="" placeholder="Bloodgroup" name="Bloodgroup">
                <input type="text" value="" placeholder="Address" name="Address">
                <input type="text" value="" placeholder="Email" name="Email">
                <input type="number" value="" placeholder="Hobby" name="Hobby">
                <input type="number" value="" placeholder="Cutoff" name="Cutoff">
                <input type="number" value="" placeholder="Maths" name="Maths">
                <input type="number" value="" placeholder="Physics" name="Physics">
                <input type="number" value="" placeholder="Chemistry" name="Chemistry">
                <input type="number" value="" placeholder="OD" name="Od">
                <input type="number" value="" placeholder="Present" name="Present">
                <input type="number" value="" placeholder="Absent" name="Absent">
                <input type="number" value="" placeholder="CGPA" name="Cgpa">
                <input type="number" value="" placeholder="SGPA1" name="Sfgpa">
                <input type="number" value="" placeholder="SGPA2" name="Ssgpa">
                <input type="number" value="" placeholder="SGPA3" name="Stgpa">
                <input type="number" value="" placeholder="SGPA4" name="Sfogpa">
                <input type="number" value="" placeholder="SGPA5" name="Sffgpa">
                <input type="number" value="" placeholder="SGPA6" name="Ssigpa">
                <input type="number" value="" placeholder="SGPA7" name="Ssegpa">
                <input type="number" value="" placeholder="SGPA8" name="Segpa">
                <input type="number" value="" placeholder="Assignment mark 1" name="Fasm">
                <input type="number" value="" placeholder="Assignment mark 2" name="Sasm">
                <input type="number" value="" placeholder="Assignment mark 3" name="Tasm">
                <input type="number" value="" placeholder="Assignment mark 4" name="Foasm">
                <input type="number" value="" placeholder="Assignment mark 5" name="Ffasm">
                <input type="text" value="" placeholder="Leetcode Link" name="Leetcode">
                <input type="text" value="" placeholder="Hackerrank Link" name="Hackerrank">
                <input type="text" value="" placeholder="Hackerearth Link" name="Hackerearth">
                <input type="text" value="" placeholder="Codechef Link" name="Codechef">
                <input type="text" value="" placeholder="Linkedin Link" name="Linkedin">
                <input type="text" value="" placeholder="Github Link" name="Github">
                <input type="text" value="" placeholder="Codeforce Link" name="Codeforce">
                <input type="text" value="" placeholder="Codeninja Link" name="Codeninja">
                Choose an image to upload : <input type="file" name="fileToUpload" id="fileToUpload">
                <button type="submit">Submit Data</button>
            </form>

            <?php
                include 'config.php';

                if(isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["dob"]) && isset($_POST["phone"]) && 
                    isset($_POST["ic"]) && isset($_POST["course"]) && isset($_POST["Dept"]) && isset($_POST["Class"]) && 
                    isset($_POST["Section"]) && isset($_POST["Bloodgroup"]) && isset($_POST["Address"]) && isset($_POST["Email"]) && 
                    isset($_POST["Hobby"]) && isset($_POST["Cutoff"]) && isset($_POST["Maths"]) && isset($_POST["Physics"]) && 
                    isset($_POST["Chemistry"]) && isset($_POST["Od"]) && isset($_POST["Present"]) && isset($_POST["Absent"]) && 
                    isset($_POST["Cgpa"]) && isset($_POST["Sfgpa"]) && isset($_POST["Ssgpa"])&& isset($_POST["Stgpa"]) && 
                    isset($_POST["Sfogpa"]) && isset($_POST["Sffgpa"]) && isset($_POST["Ssigpa"]) && isset($_POST["Ssegpa"]) && 
                    isset($_POST["Segpa"])  && isset($_POST["Fasm"]) && isset($_POST["Sasm"]) && 
                    isset($_POST["Tasm"]) && isset($_POST["Foasm"]) && isset($_POST["Ffasm"]) && isset($_POST["Leetcode"]) && 
                    isset($_POST["Hackerrank"]) && isset($_POST["Hackerearth"]) && isset($_POST["Codechef"]) && isset($_POST["Linkedin"]) && 
                    isset($_POST["Github"]) && isset($_POST["Codeforce"]) && isset($_POST["Codeninja"]))
                {
                    try
                    {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $stmt = $conn->prepare("INSERT INTO STUDENTS VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                        $stmt->execute(array($_POST["id"], $_POST["name"], $_POST["dob"], $_POST["phone"],
                        $_POST["ic"], $_POST["course"], $_POST["Dept"], $_POST["Class"], $_POST["Section"], 
                        $_POST["Bloodgroup"], $_POST["Address"], $_POST["Email"], $_POST["Hobby"], $_POST["Cutoff"],
                        $_POST["Maths"], $_POST["Physics"], $_POST["Chemistry"], $_POST["Od"], $_POST["Present"],
                        $_POST["Absent"], $_POST["Cgpa"], $_POST["Sfgpa"], $_POST["Ssgpa"], $_POST["Stgpa"],
                        $_POST["Sfogpa"], $_POST["Sffgpa"], $_POST["Ssigpa"], $_POST["Ssegpa"], $_POST["Segpa"],
                        $_POST["Fasm"], $_POST["Sasm"], $_POST["Tasm"], $_POST["Foasm"], $_POST["Ffasm"], 
                        $_POST["Leetcode"], $_POST["Hackerrank"], $_POST["Hackerearth"], $_POST["Codechef"], 
                        $_POST["Linkedin"], $_POST["Github"], $_POST["Codeforce"], $_POST["Codeninja"]));

                        echo "<script>alert('Success! Data Inserted.')</script>";
                    }
                    catch(PDOException $e)
                    {
                        echo "Insertion failed: " . $e->getMessage();
                    }
                    $conn = null;
                    include 'imgup.php';
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
