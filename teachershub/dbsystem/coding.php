<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <title>Profile</title>
</head>
<body style="font-family: 'Montserrat', sans-serif;
            background :black;
            background-size: cover;
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
			</style>"; echo "<table class='responstable' style='border-collapse: collapse; width: 100%; margin-top: 20px; color:white'>";
            echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>ID</th><td style='border: 1px solid #fff; padding: 10px;'>{$ids}</td></tr>";
            echo "</table>";
            echo "<table class='responstable' style='border-collapse: collapse; width: 100%; margin-top: 20px; color:white'>";
                echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Leetcode USER ID</th><td style='border: 1px solid #fff; padding: 10px;'>{$leetcode}</td></tr>";
                echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Hackerrank USER ID</th><td style='border: 1px solid #fff; padding: 10px;'>{$hackerrank}</td></tr>";
                echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Hackerearth USER ID</th><td style='border: 1px solid #fff; padding: 10px;'>{$hackerearth}</td></tr>";
                echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Codechef USER ID</th><td style='border: 1px solid #fff; padding: 10px;'>{$codechef}</td></tr>";
                echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Linkedin USER ID</th><td style='border: 1px solid #fff; padding: 10px;'>{$linkedin}</td></tr>";
                echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Github USER ID</th><td style='border: 1px solid #fff; padding: 10px;'>{$github}</td></tr>";
                echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Codeforce USER ID</th><td style='border: 1px solid #fff; padding: 10px;'>{$codeforce}</td></tr>";
                echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Codeninja USER ID</th><td style='border: 1px solid #fff; padding: 10px;'>{$codeninja}</td></tr>";
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
