<?php

session_start();
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_MEMBER_USER']);
unset($_SESSION['SESS_MEMBER_PASS']);

?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<link rel="stylesheet" href="styles.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body {

    display: flex;
    justify-content: center;
    align-items: center;  
    height: 100vh;  
    background: grey  no-repeat;
}
.container{
    background: rgb(15, 15, 15);
    width: 350px;
    height: 500px;
    border-radius: 20px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    color: white;
    padding: 2em;
}


.heading{
    font-size: 2em;
    margin-bottom: 0.5em;
}
.box {
    margin: 0.2em 0;
}
.container .box p{
    color: rgba(255, 255, 255, 0.781);
}
.container .box div{
    position: relative;
    width: 100%;
    height: 40px;
    margin: 0.5em 0;
}
.container .box input{
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgb(19, 19, 19);
    color: white;
    border: none;
    outline: none;
    padding-left: 0.8em;
    border-radius: 10px;
    transition: all .4s
}

.container .box input:focus::placeholder{
    color: white;
}
.container .box div::before{
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 102%;
    height: 110%;
    border-radius: 10px;
    background: linear-gradient(to right, #ff416c, #ff4b2b);
}
.loginBtn{
    width: 102%;
    height: 40px;
    border: none;
    border-radius: 10px;
    margin: 0.5em 0;
    transform: translate(-1%);
    cursor: pointer;
    color: white;
    background: linear-gradient(to right, #ff416c, #ff4b2b);
    transition: all .4s;
}

.loginBtn:hover{
    transform: translate(-1%, 5%);
    box-shadow: 0 0 10px #ff416d65;
}
.text{
    font-size: 0.8em;
    margin-top: 0.5em;
    text-align: center;
    color: rgba(255, 255, 255, 0.623);
}
.text a{
    color: rgba(255, 255, 255, 0.911);
}
</style>

</head>
<body>
<div class="container">
	
<form action="index.php" method="post">
    <h2 class="heading">Teacher Hub Login</h2>

    <div class="box">
        <p>Username</p>
        <div>
            <input type="text" placeholder="Enter your username" id="username" name="user" >
        </div>
    </div>
    <div class="box">
        <p>Password</p>
        <div>
            <input type="password" placeholder="Enter your password" name="pass">
        </div>
    </div>
    <button class="loginBtn">Login</button>
    </form>

</div>
</body>



<?php

$user = (isset($_POST["user"]) ? $_POST["user"] : null);
$pass = (isset($_POST["pass"]) ? $_POST["pass"] : null);

include 'config.php';

if(isset($_POST["user"]) && isset($_POST["pass"]))
{

	try
	{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname" , $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT ID, USERNAME, PASSWORD FROM LOGIN");

		$stmt->execute();

		
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		$i = $result['ID'];
		$u = $result['USERNAME'];
		$p = $result['PASSWORD'];

		if($user == $u && $pass == $p)
		{
			session_regenerate_id();
			$_SESSION['SESS_MEMBER_ID'] = $i;
			$_SESSION['SESS_MEMBER_USER'] = $u;
			$_SESSION['SESS_MEMBER_PASS'] = $p;
			session_write_close();
			header("location: home.php");
			exit();
		}
		else
		{
			session_write_close();
			header("location: index.php");
			exit();
		}

	}
	catch(PDOException $e)
	{
		echo "Connection failed : " . $e->getMessage();
	}

	$conn = null;
}

?>

</body>
</html>
