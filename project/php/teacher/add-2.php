<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
	require '../connection.php';
    if(isset($_SESSION['Username'])){
        $user = $_SESSION['Username'];
        $lvl = $_SESSION['Level'];
	if($lvl!=2){
		header('Location: ../../login.php');
	}
	}
	if(isset($_SESSION['Room'])){
		$php = $_SESSION['Room'].'.php';
	}
		   	if($_POST['add']){
		   		$day = $_POST['day'];
		   		$room = $_POST['room'];
		   		$subj = $_POST['subj'];		   			   		
		   		$sec = $_POST['sec'];
		   		$ins = $_POST['ins'];
		   		$dept = $_POST['dept'];
		   		$yr = $_POST['yr'];
		   		$start = $_POST['start'];
		   		$end = $_POST['end'];




		  	if($day!="Choose Day"&&$room!="Choose Room"&&$subj!="Choose Subject"&&$sec!="Choose Section"&&$ins!="Choose Instructor"&&$dept!="Choose Department"&&$yr!="Choose Year"&&$start!=0&&$end!=0){
		   		$sql = "SELECT * from schedule_table where Day='$day' and Room='$room'";
		   		$qry = mysqli_query($db,$sql);

		   		if($qry){
		   			while($row = mysqli_fetch_array($qry, MYSQLI_NUM)){
		   			$day1 = $row[0];
		   			$room1 = $row[1];
		   			$start1 = $row[2];
		   			$end1 = $row[3];
		   			$sec1 = $row[4];
		   			$ins1 = $row[5];
		   			$dept1 = $row[6];
		   			$subj1 = $row[7];
		   			$yr1 = $row[8];
		   			if(!(($start<$start1&&$end<=$start1) || ($start>=$end1&&$end>$end1)))
		   			{
		   				$temp=1;
		   				break;
		   			}

		   		}
		   		}
		   		if($temp!=1){
		   			$sql1 = "INSERT into schedule_table(Day,Room,Time_start,Time_end,Section,Instructor,Dept,Subject_code,Year) values ('$day','$room','$start','$end','$sec','$ins','$dept','$subj','$yr')";
		   			if($db->query($sql1)){
		   				$s = "Sucessfully Added!";
		   			}
		   		}
		   		else{
		   			$i = "Invalid input!";			
		   		}
		  		
		  	}
		  	else{
		  		$e = "There's unselected option(s)!";
		  	}		  	
		  }
		  if(@$_POST['return']){
		  	header("Location: $php");
		  }
?>
<html>
<head>
	<title>Add</title>
    <style type="text/css">
    form #submit {
      -webkit-appearance: none;
         -moz-appearance: none;
              appearance: none;
      outline: 0;
      background-color: #50b2a3;
      border: 0;
      margin-top: 10px;
      padding: 10px 15px;
      color: #fff;
      border-radius: 3px;
      width: 1140px;
      cursor: pointer;
      font-size: 18px;
      -webkit-transition-duration: 0.25s;
              transition-duration: 0.25s;
    }
    form #submit:hover {
      background-color: #9ad6c6;
    }        
    </style>	
	<link rel="stylesheet" href="../../css/style1.css">
    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/agency.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
	<div class="container">
		<h1><?php echo $s ?><?php echo $i ?><?php echo $e ?></h1>
		<form action="add-2.php" method="POST">
               <input type="submit" name="return" value="Return" id="submit"></input>
        </form>
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