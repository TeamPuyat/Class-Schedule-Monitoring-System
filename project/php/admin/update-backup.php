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
		$php = $_SESSION['Room'].'.php#roomtables';
	}
    if(isset($_GET['Day'])){
        $araw = $_GET['Day'];
        $start = $_GET['Time_start'];
        $day = "SELECT * FROM schedule_table where Room='$choose' AND Day='$araw' AND Time_start='$start'";
        $query = mysqli_query($db, $day);
        if($query){
            while($row=mysqli_fetch_array($query, MYSQLI_NUM)){
                $sec_1 = $row[4];
                $ins_1 = $row[5];
                $dep_1 = $row[6];
                $sc_1 = $row[7];
                $yr_1 = $row[8];
            }
        }
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
    }
    if(isset($_POST['update'])){
        $subj = $_POST['subj'];                         
        $sec = $_POST['sec'];
        $ins = $_POST['ins'];
        $dept = $_POST['dept'];
        $yr = $_POST['yr'];
            $sql = "UPDATE schedule_table SET (Subject_code='$subj',Section='$sec',Instructor='$ins',Dept='$dept',Year='$yr') where Room='$choose' AND Day='$araw'AND Time_start='$start'";
                
                if($db->query($sql)){
                    header("Location: $php");
                }
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
      margin-top: 10px;
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
    </style>	
	<link rel="stylesheet" href="../../css/style1.css">
    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="wrapper">
	<div class="container">
        <h1><?php echo $e ?></h1>
        <div class="row">
            <table id="table" cellpadding="2" border="1" class="table table-bordered">
                <th colspan="5" style="text-align: center">
                    <?php echo $araw ?> |
                    <?php echo $choose?> |
                    <?php echo $start?>
                </th>
                <tr>
                    <td><?php echo $sec_1 ?></td>
                    <td><?php echo $ins_1 ?></td>
                    <td><?php echo $dep_1 ?></td>
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