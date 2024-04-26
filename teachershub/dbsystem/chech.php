<?php
        if (isset($_POST['check_profile'])) {
            $student_id = $_POST['student_id'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "data";

            $conn = new mysqli("localhost","root", "", "data");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM student WHERE id='$id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div>";
                    echo "<p>Name: " . $row['STUD_NAME'] . "</p>";
                    echo "<p>COURSE: " . $row['STUD_COURSE'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "No student found with ID: " . $id;
            }
            $conn->close();
        }
        ?>