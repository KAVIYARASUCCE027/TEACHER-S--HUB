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
<div class="design-block" style="padding: 20px; margin-top: 50px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
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
           
  
            echo "<table class='responstable' style='border-collapse: collapse; width: 100%; margin-top: 20px; background:black ; color: #fff;>";
            echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>ID</th><td style='border: 1px solid #fff; padding: 10px;'>{$ids}</td></tr>";
            echo "</table>";
            echo "<table class='responstable' style='border-collapse: collapse; width: 100%; margin-top: 20px; background:black ; color: #fff;'>";
            echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Internal mark 1</th><td style='border: 1px solid #fff; padding: 10px;'>10</td></tr>";
			echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Internal mark 2</th><td style='border: 1px solid #fff; padding: 10px;'>10</td></tr>";
			echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Internal mark 3</th><td style='border: 1px solid #fff; padding: 10px;'>10</td></tr>";
			echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Internal mark 4</th><td style='border: 1px solid #fff; padding: 10px;'>10</td></tr>";
			echo "<tr><th style='border: 1px solid #fff; padding: 10px;'>Internal mark 5</th><td style='border: 1px solid #fff; padding: 10px;'>10</td></tr>";
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
<div class="back-but">
	<a href="home.php"><button type="button">Back</button></a><br>
</div>
</center>
</div>
</body>
</html>

			