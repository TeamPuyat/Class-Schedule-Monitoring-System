<?php
$h = "localhost";
    	$u = "root";
    	$p = "";
    	$d = "elective";

    	session_start();

    	$room=$_SESSION['Room'];

    	 $link = mysql_connect ($h, $u, $p, $d) or die ("Could not connect to database, try again later");
mysql_select_db($d,$link);

require('fpdf.php');

$pdf=new FPDF(); //constructor



$pdf->AddPage('P','LEGAL');
$pdf->SetFont('Times','B',14);

$pdf->SetTitle('SCHEDULE');
$pdf->Ln(5);
$pdf->Cell(0,5,'SOUTHERN LUZON STATE UNIVERSITY',0,1,'C');
$pdf->Cell(0,5,'COLLEGE OF ENGINEERING',0,1,'C');

$ROOM=$_SESSION['Room'];
$pdf->Cell(0,5,$ROOM,0,0,'C');
$pdf->Ln(10);

$query = "SELECT * FROM day_table ORDER BY day_id ASC"; 
 $result = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($result)){
$day = $row['Day'];
$pdf->SetFont('Times','',15);
$pdf->SetTextColor('225');
$pdf->Cell(60,5,$day,0,1,'L',true);

$query_1 = "SELECT * FROM schedule_table WHERE schedule_table.Room='$ROOM' AND Day='$day'"; 
 $result_1 = mysql_query($query_1) or die(mysql_error());
while($row_1 = mysql_fetch_array($result_1)){
$start = $row_1['Time_start'];
$end = $row_1['Time_end'];
$sec = $row_1['Section'];
$prof = $row_1['Instructor'];
$dept = $row_1['Dept'];
$code = $row_1['Subject_code'];
$year = $row_1['Year'];

$pdf->SetFont('Times','',10);
//$pdf->Ln(10);

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

        if($end==73000){$end="7:30am";}
        if($end==80000){$end="8:00am";}
        if($end==83000){$end="8:30am";}
        if($end==90000){$end="9:00am";}
        if($end==93000){$end="9:30am";}
        if($end==100000){$end="10:00am";}
        if($end==103000){$end="10:30am";}
        if($end==110000){$end="11:00am";}
        if($end==113000){$end="11:30am";}
        if($end==120000){$end="12:00pm";}
        if($end==123000){$end="12:30pm";}
        if($end==130000){$end="1:00pm";}
        if($end==133000){$end="1:30pm";}
        if($end==140000){$end="2:00pm";}
        if($end==143000){$end="2:30pm";}
        if($end==150000){$end="3:00pm";}
        if($end==153000){$end="3:30pm";}
        if($end==160000){$end="4:00pm";}
        if($end==163000){$end="4:30pm";}
        if($end==170000){$end="5:00pm";}
        if($end==173000){$end="5:30pm";}
        if($end==180000){$end="6:00pm";}
        if($end==183000){$end="6:30pm";}
        if($end==190000){$end="7:00pm";}
        if($end==193000){$end="7:30pm";}
        if($end==200000){$end="8:00pm";}
        if($end==203000){$end="8:30pm";}
        if($end==210000){$end="9:00pm";}
        
$pdf->SetTextColor('225');
$pdf->SetTextColor('0');
$pdf->Cell(20,5,$start,0,0,'L');
$pdf->Cell(20,5,$end,0,0,'L');
$pdf->Cell(20,5,$code,0,0,'L');
$pdf->Cell(30,5,$year,0,0,'L');
$pdf->Cell(20,5,$sec,0,0,'L');
$pdf->Cell(20,5,$dept,0,0,'L');
$pdf->Cell(40,5,$prof,0,1,'L');
}
}
$pdf->Output();
?>