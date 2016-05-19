<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
require '../connection.php';
require '../select.php';
if(isset($_SESSION['Username'])){
    $user = $_SESSION['Username'];
    $lvl = $_SESSION['Level'];
if($lvl!=1){
	header('Location: ../../login.php');
}
}
if(isset($_SESSION['Room'])){
	$choose = $_SESSION['Room'];
    $day = $_SESSION['Day'];
	$php = $_SESSION['Room'].'.php#roomtables';
}
$sec_1 = $_SESSION['Section'];
$dept_1 = $_SESSION['Dept'];
$sc_1 = $_SESSION['Subject_code'];
$yr_1 = $_SESSION['Year'];
$ins_1 = $_SESSION['Instructor'];
$start = $_SESSION['Time_start'];

        if($start==73000){$start="7:30am";}
        if($start==80000){$start="8:00am";}
        if($start==83000){$start="8:30am";}
        if($start==90000){$start="9:00am";}
        if($start==93000){$start="9:30am";}
        if($start==100000){$start="10:00am";}
        if($start==103000){$start="10:30am";}
        if($start==110000){$start="11:00am";}
        if($start==113000){$start="11:30am";}
        if($start==120000){$start="12:00pm";}
        if($start==123000){$start="12:30pm";}
        if($start==130000){$start="1:00pm";}
        if($start==133000){$start="1:30pm";}
        if($start==140000){$start="2:00pm";}
        if($start==143000){$start="2:30pm";}
        if($start==150000){$start="3:00pm";}
        if($start==153000){$start="3:30pm";}
        if($start==160000){$start="4:00pm";}
        if($start==163000){$start="4:30pm";}
        if($start==170000){$start="5:00pm";}
        if($start==173000){$start="5:30pm";}
        if($start==180000){$start="6:00pm";}
        if($start==183000){$start="6:30pm";}
        if($start==190000){$start="7:00pm";}
        if($start==193000){$start="7:30pm";}
        if($start==200000){$start="8:00pm";}
        if($start==203000){$start="8:30pm";}
        if($start==210000){$start="9:00pm";}

$OldDept=$_SESSION['Dept'];
$OldIns=$_SESSION['Instructor'];
$OldSubj=$_SESSION['Subject_code'];
$OldYear=$_SESSION['Year'];
$OldSec=$_SESSION['Section'];

if(@$_POST['update']){
	$NewDept=$_POST['dept'];
	$NewIns=$_POST['ins'];
	$NewSubj=$_POST['subj'];
	$NewYear=$_POST['yr'];
	$NewSec=$_POST['sec'];
		  	if($NewSubj!="Choose Subject"&&$NewSec!="Choose Section"&&$NewIns!="Choose Instructor"&&$NewDept!="Choose Department"&&$NewYear!="Choose Year"){
	$UpdateQuery="UPDATE schedule_table 
					SET Section='$NewSec', Instructor='$NewIns', Dept='$NewDept', Subject_code='$NewSubj', Year='$NewYear'
				 WHERE Section='$OldSec' AND Instructor='$OldIns' AND Dept='$OldDept' AND Subject_code='$OldSubj' AND Year='$OldYear'";

	$query6_5=mysqli_query($db, $UpdateQuery);
	if($query6_5){
	header("Location: $php");
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
	<title>Update</title>
    <style type="text/css">
form #submit {
      -webkit-appearance: none;
         -moz-appearance: none;
              appearance: none;
      outline: 0;
      background-color: #fff;
      border: 0;
      padding: 10px 15px;
      color: #fff;
      border-radius: 3px;
      width: 150px;
      cursor: pointer;
      font-size: 18px;
      -webkit-transition-duration: 0.25s;
              transition-duration: 0.25s;
    }
form #submit:hover {
      background-color: #9ad6c6;
    }
form #submit1 {
      -webkit-appearance: none;
         -moz-appearance: none;
              appearance: none;
      outline: 0;
      background-color: #fff;
      border: 0;
      margin-top: -49px;
      padding: 10px 15px;
      color: #50b2a3;
      border-radius: 3px;
      width: 250px;
      cursor: pointer;
      font-size: 18px;
      -webkit-transition-duration: 0.25s;
              transition-duration: 0.25s;
    }
form #submit1:hover {
      background-color: #9ad6c6;
    }             
    </style>	
	<link rel="stylesheet" href="../../css/style1.css">
    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="wrapper">
	<div class="container">
		<h1><?php echo $e?></h1>
        <div class="row">
            <table id="table" cellpadding="2" border="1" class="table table-bordered">
                <th colspan="5" style="text-align: center">
                    <?php //echo $day ?> 
                    <?php echo $choose?> |
                    <?php echo $start?>
                </th>
                <tr>
                    <td><?php echo $sec_1 ?></td>
                    <td><?php echo $ins_1 ?></td>
                    <td><?php echo $dept_1 ?></td>
                    <td><?php echo $sc_1 ?></td>
                    <td><?php echo $yr_1 ?></td>
                </tr>
            </table>
        </div>
        <div class="row">
            <form action="update.php" method="POST">
                <div class="form-group">
                    <div class="col-xs-4">
                        <select name="dept" class="form-control" id="sel1">
                            <option><?php echo $dept ?></option>
                        </select>
                    </div>
                    <div class="col-xs-4">
                        <select name="ins" class="form-control" id="sel1">
                            <option><?php echo $ins ?></option>
                        </select>
                    </div>
                    <div class="col-xs-4">
                        <select name="subj" class="form-control" id="sel1">
                            <option><?php echo $subj?></option>
                        </select>
                    </div>
                    <div class="col-xs-4">
                        <select name="sec" class="form-control" id="sel1">
                            <option><?php echo $sec ?></option>
                        </select>
                    </div>
                    <div class="col-xs-4">
                        <select name="yr" class="form-control" id="sel1">
                            <option><?php echo $yr ?></option>
                        </select>
                    </div>
                </div>
                <input type="submit" value="Update" name="update" id="submit"></input>      
            </form>
            </div>
                    <form action="update.php" method="POST">
               <input type="submit" name="return" value="Return" id="submit1"></input>
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