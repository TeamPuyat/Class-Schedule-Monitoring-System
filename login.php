<?php
	error_reporting(E_ALL & ~E_NOTICE);

	require 'php/connection.php';
	session_start();

	if(isset($_POST['log'])){
	$username = @$_POST['username'];
	$password = @$_POST['password'];

	if($username!="" && $password !=""){

	$sql = "SELECT Username, Password, Level from login_table WHERE Username='$username' LIMIT 1";
	$query = mysqli_query($db, $sql);

		if ($query) {
			$row = mysqli_fetch_array($query);
			$user = $row['Username'];
			$pwd =  $row['Password'];
			$lvl = $row['Level'];
		}
		if($username == $user && $password == $pwd){
			$_SESSION['Username'] = $user;
			$_SESSION['Level'] = $lvl;

			if($lvl==1){
				header('Location: php/admin.php');
			}
			if($lvl==2){
				header('Location: php/teacher.php');
			}
		}
		elseif($username == $user && $password != $pwd){
			$w="Wrong Password!";
		}
		else{
			$a="Username doesn't exist!";			
		}
	}
	else{
		$p="Please enter the fields!";	
	}
	}
	if(@$_POST['student']){
	$username = student;
	$password = 1;

	$sql = "SELECT Username, Password, Level from login_table WHERE Username='$username' LIMIT 1";
	$query = mysqli_query($db, $sql);

		if ($query) {
			$row = mysqli_fetch_array($query);
			$user = $row['Username'];
			$pwd =  $row['Password'];
			$lvl = $row['Level'];
		}
		if($username == $user && $password == $pwd){
			$_SESSION['Username'] = $user;
			$_SESSION['Level'] = $lvl;

			header('Location: php/student.php');
		}		
	}
?>

<html>
<head>
	<title>Log-In</title>
	      <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div class="wrapper">
	<div class="container">
		<h1>Class Schedule Monitoring System</h1>
		
		<form class="form" method="POST" action="login.php">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" id="submit" value="Login" name="log">
			<input type="submit" id="submit" value="Student?" name="student">
		</form>
		<?php echo $w.$a.$p?>
	</div>
        <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <span class="copyright">Copyright &copy; Team PUYAT 2016</span>
                </div>
            </div>
        </div>
    </footer>	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

</body>
</html>