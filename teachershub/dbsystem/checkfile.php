<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <title>Profile</title>
</head>
<body style="font-family: 'Montserrat', sans-serif;
            background-size: cover;
            background :black;
            background-repeat: no-repeat;
            color: #fff;">
<div class="logo"></div>
<div class="design-block" style="padding: 20px; margin-top: 50px;  border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
    <center>
        <h1 style="text-align: center;">PROFILE</h1>

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
                    $od=$row['OD'];
                    $present= $row['A_P'];
                    $absent=$row['A_A'];
                    $cgpa = $row['CGPA'];
                    $sgpa1 = $row['SFGPA'];
                    $sgpa2 = $row['SSGPA'];
                    $sgpa3 = $row['STGPA'];
                    $sgpa4 = $row['SFOGPA'];
                    $sgpa5 = $row['SFFGPA'];
                    $sgpa6 = $row['SSIGPA'];
                    $sgpa7 = $row['SSEGPA'];
                    $sgpa8 = $row['SEGPA'];

                    echo "<br><center>";
                    echo "<div class='imgBorder' style=' border-radius: 50%; overflow: hidden; margin-bottom: 20px;'>";
                    $imagePath = "./images/userimg/noimage.jpg";
                    if(file_exists($imagePath)) {
                        echo "<img width=150px height=150px src='{$imagePath}'></img>";
                    } else {
                        echo "<img width=150px height=150px src='./images/userimg/noimage.jpg'></img>";
                    }echo "</div>";
                    echo "<table class='responstable' style='border-collapse: collapse; width: 100%; margin-top: 20px; background:black ; color: #fff;>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>ID</th><td style='border: 1px solid #fff; padding: 10px;'>{$ids}</td></tr>";
                    echo "</table>";
                    echo "<table class='responstable' style='border-collapse: collapse; width: 100%; margin-top: 20px; background-color: black; color: #fff;'>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>ID</th><td style='border: 1px solid #fff; padding: 10px;'>{$ids}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Name</th><td style='border: 1px solid #fff; padding: 10px;'>{$namas}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Date of Birth</th><td style='border: 1px solid #fff; padding: 10px;'>{$date}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Mobile Number</th><td style='border: 1px solid #fff; padding: 10px;'>{$telepon}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Register Number</th><td style='border: 1px solid #fff; padding: 10px;'>{$reg}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Course</th><td style='border: 1px solid #fff; padding: 10px;'>{$course}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Department</th><td style='border: 1px solid #fff; padding: 10px;'>{$dept}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Class</th><td style='border: 1px solid #fff; padding: 10px;'>{$class}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Section</th><td style='border: 1px solid #fff; padding: 10px;'>{$section}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Blood Group</th><td style='border: 1px solid #fff; padding: 10px;'>{$bloodgroup}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Address</th><td style='border: 1px solid #fff; padding: 10px;'>{$address}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Email</th><td style='border: 1px solid #fff; padding: 10px;'>{$email}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Hobby</th><td style='border: 1px solid #fff; padding: 10px;'>{$hobby}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Cutoff</th><td style='border: 1px solid #fff; padding: 10px;'>{$cutoff}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Maths</th><td style='border: 1px solid #fff; padding: 10px;'>{$maths}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Physics</th><td style='border: 1px solid #fff; padding: 10px;'>{$physics}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Chemistry</th><td style='border: 1px solid #fff; padding: 10px;'>{$chemistry}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>OD</th><td style='border: 1px solid #fff; padding: 10px;'>{$od}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Present</th><td style='border: 1px solid #fff; padding: 10px;'>{$present}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Absent</th><td style='border: 1px solid #fff; padding: 10px;'>{$absent}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>CGPA</th><td style='border: 1px solid #fff; padding: 10px;'>{$cgpa}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>SGPA1</th><td style='border: 1px solid #fff; padding: 10px;'>{$sgpa1}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>SGPA2</th><td style='border: 1px solid #fff; padding: 10px;'>{$sgpa2}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>SGPA3</th><td style='border: 1px solid #fff; padding: 10px;'>{$sgpa3}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>SGPA4</th><td style='border: 1px solid #fff; padding: 10px;'>{$sgpa4}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>SGPA5</th><td style='border: 1px solid #fff; padding: 10px;'>{$sgpa5}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>SGPA6</th><td style='border: 1px solid #fff; padding: 10px;'>{$sgpa6}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>SGPA7</th><td style='border: 1px solid #fff; padding: 10px;'>{$sgpa7}</td></tr>";
                    echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>SGPA8</th><td style='border: 1px solid #fff; padding: 10px;'>{$sgpa8}</td></tr>";
                    echo "</table>";
                    
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
        <div class="back-but" style="text-align: center; margin-top: 20px;">
            <a href="!DOCTYPE1.php"><button type="button" style="padding: 10px 20px; background-color: grey; border: none; border-radius: 5px; color: #fff; cursor: pointer;">Back</button></a><br>
        </div>
    </center>
</div>
</body>
</html>
