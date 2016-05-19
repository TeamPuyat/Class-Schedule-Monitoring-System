<?php
	require 'connection.php';
			//Select for day
			$qry = "SELECT * FROM day_table"; 
	   		$result = mysqli_query($db, $qry);
	   		$day= "Choose Day";
	   		while($row = mysqli_fetch_array($result)){
	   			$day = $day."<option>$row[0]</option>";
	   		}
	   		//Select for dept
			$qry1 = "SELECT * FROM dept_table"; 
	   		$result1 = mysqli_query($db, $qry1);
	   		$dept= "Choose Department";
	   		while($row = mysqli_fetch_array($result1)){
	   			$dept = $dept."<option>$row[0]</option>";
	   		}
	   		//Select for dept
			$qry1_1 = "SELECT * FROM schedule_table"; 
	   		$result1_1 = mysqli_query($db, $qry1_1);
	   		$dept_1= "Choose Department";
	   		while($row = mysqli_fetch_array($result1_1)){
	   			$dept_1 = $dept_1."<option>$row[6]</option>";
	   		}	   		
	   		//Select for instructor
			$qry2 = "SELECT * FROM instructor_table"; 
	   		$result2 = mysqli_query($db, $qry2);
	   		$ins= "Choose Instructor";
	   		while($row = mysqli_fetch_array($result2)){
	   			$ins = $ins."<option>$row[0]</option>";
	   		}
	   		//select for section
			$qry3 = "SELECT * FROM section_table"; 
	   		$result3 = mysqli_query($db, $qry3);
	   		$sec= "Choose Section";
	   		while($row = mysqli_fetch_array($result3)){
	   			$sec = $sec."<option>$row[0]</option>";
	   		}
	   		//select for subject
			$qry4 = "SELECT * FROM subject_table"; 
	   		$result4 = mysqli_query($db, $qry4);
	   		$subj = "Choose Subject";
	   		while($row = mysqli_fetch_array($result4)){
	   			$subj = $subj."<option>$row[0]</option>";
	   		}
	   		//select for time
			$qry5 = "SELECT * FROM time_table"; 
	   		$result5 = mysqli_query($db, $qry5);
	   		$time= "Choose Start Time";
	   		$time1= "Choose End Time";
	   		while($row = mysqli_fetch_array($result5)){
	   			$time = $time."<option>$row[0]</option>";
	   			$time1 = $time1."<option>$row[0]</option>";
	   		}
	   		//select for year
			$qry6 = "SELECT * FROM year_table"; 
	   		$result6 = mysqli_query($db, $qry6);
	   		$yr= "Choose Year";
	   		while($row = mysqli_fetch_array($result6)){
	   			$yr = $yr."<option>$row[0]</option>";
	   		}
			//SELECTION FOR ROOM
			$qry7 = "SELECT * FROM room_table"; 
		   	$result7 = mysqli_query($db, $qry7);
		   	$room= "Choose Room";
		   		while($row = mysqli_fetch_array($result7)){
		   			$room = $room."<option>$row[0]</option>";
		  	}
?>