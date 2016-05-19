<?php
    error_reporting(E_ALL & ~E_NOTICE);
    require '../connection.php';
    require '../select.php';
    session_start();
    if(isset($_SESSION['Username'])){
        $user = $_SESSION['Username'];
        $lvl = $_SESSION['Level'];
    if($lvl!=3){
        header('Location: ../../login.php');
    }
    //BABUSH!
    if(@$_POST['logout']){
        session_unset();
        session_destroy();
        header('Location: ../../login.php');
        }
    }
    else{
        header('Location: ../../login.php');
        die();

    }
    
    if(isset($_SESSION['Room'])){
    $choose = $_SESSION['Room'];
    }
        $day1 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='73000'";
        $query1=mysqli_query($db, $day1);
            if($query1){
                while($row1 = mysqli_fetch_array($query1, MYSQLI_NUM)){
                    $a1 = $row1[3]-$row1[2];
                    if($a1==30000){
                        $haha1 = "rowspan=6";
                    }
                    if($a1==20000){
                        $haha1 = "rowspan=4";
                    }
                    if($a1==13000||$a1==17000){
                        $haha1 = "rowspan=3";
                    }
                    if($a1==10000){
                        $haha1 = "rowspan=2";
                    }
                    $sec1 = $row1[4];
                    $ins1 = $row1[5];
                    $dep1 = $row1[6];
                    $sc1 = $row1[7];
                    $yr1 = $row1[8];
                    if($row1[2]==73000){
                        $td1="<td $haha1>$sec1<br>$ins1<br>$dep1<br>$sc1<br>$yr1</td>";
                        break;
                    }
                }
            }
        $day1_1 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='80000'";
        $query1_1=mysqli_query($db, $day1_1);
            if($query1_1){
                while($row1_1 = mysqli_fetch_array($query1_1, MYSQLI_NUM)){
                    $a1_1 = $row1_1[3]-$row1_1[2];
                    if($a1_1==30000){
                        $haha1_1 = "rowspan=6";
                    }
                    if($a1_1==20000){
                        $haha1_1= "rowspan=4";
                    }
                    if($a1_1==13000||$a1_1==170000){
                        $haha1_1 = "rowspan=3";
                    }
                    if($a1_1==10000){
                        $haha1_1 = "rowspan=2";
                    }
                    $sec1_1 = $row1_1[4];
                    $ins1_1 = $row1_1[5];
                    $dep1_1 = $row1_1[6];
                    $sc1_1 = $row1_1[7];
                    $yr1_1 = $row1_1[8];
                    if($row1_1[2]==80000){
                        $td1_1="<td $haha1_1>$sec1_1<br>$ins1_1<br>$dep1_1<br>$sc1_1<br>$yr1_1</td>";
                        break;
                    }
                }
            }
        $day1_2 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='83000'";
        $query1_2=mysqli_query($db, $day1_2);
            if($query1_2){
                while($row1_2 = mysqli_fetch_array($query1_2, MYSQLI_NUM)){
                    $a1_2 = $row1_2[3]-$row1_2[2];
                    if($a1_2==30000){
                        $haha1_2 = "rowspan=6";
                    }
                    if($a1_2==20000){
                        $haha1_2= "rowspan=4";
                    }
                    if($a1_2==13000||$a1_2==17000){
                        $haha1_2 = "rowspan=3";
                    }
                    if($a1_2==10000){
                        $haha1_2 = "rowspan=2";
                    }
                    $sec1_2 = $row1_2[4];
                    $ins1_2 = $row1_2[5];
                    $dep1_2 = $row1_2[6];
                    $sc1_2 = $row1_2[7];
                    $yr1_2 = $row1_2[8];
                    if($row1_2[2]==83000){
                        $td1_2="<td $haha1_2>$sec1_2<br>$ins1_2<br>$dep1_2<br>$sc1_2<br>$yr1_2</td>";
                        break;
                    }
                }
            }
        $day1_3 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='90000'";
        $query1_3=mysqli_query($db, $day1_3);
            if($query1_3){
                while($row1_3 = mysqli_fetch_array($query1_3, MYSQLI_NUM)){
                    $a1_3 = $row1_3[3]-$row1_3[2];
                    if($a1_3==30000){
                        $haha1_3 = "rowspan=6";
                    }
                    if($a1_3==20000){
                        $haha1_3= "rowspan=4";
                    }
                    if($a1_3==13000||$a1_3==17000){
                        $haha1_3 = "rowspan=3";
                    }
                    if($a1_3==10000){
                        $haha1_3 = "rowspan=2";
                    }
                    $sec1_3 = $row1_3[4];
                    $ins1_3 = $row1_3[5];
                    $dep1_3 = $row1_3[6];
                    $sc1_3 = $row1_3[7];
                    $yr1_3 = $row1_3[8];
                    if($row1_3[2]==90000){
                        $td1_3="<td $haha1_3>$sec1_3<br>$ins1_3<br>$dep1_3<br>$sc1_3<br>$yr1_3</td>";
                        break;
                    }
                }
            }
        $day1_4 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='93000'";
        $query1_4=mysqli_query($db, $day1_4);
            if($query1_4){
                while($row1_4 = mysqli_fetch_array($query1_4, MYSQLI_NUM)){
                    $a1_4 = $row1_4[3]-$row1_4[2];
                    if($a1_4==30000){
                        $haha1_4 = "rowspan=6";
                    }
                    if($a1_4==20000){
                        $haha1_4= "rowspan=4";
                    }
                    if($a1_4==13000||$a1_4==17000){
                        $haha1_4 = "rowspan=3";
                    }
                    if($a1_4==10000){
                        $haha1_4 = "rowspan=2";
                    }                    
                    $sec1_4 = $row1_4[4];
                    $ins1_4 = $row1_4[5];
                    $dep1_4 = $row1_4[6];
                    $sc1_4 = $row1_4[7];
                    $yr1_4 = $row1_4[8];
                    if($row1_4[2]==93000){
                        $td1_4="<td $haha1_4>$sec1_4<br>$ins1_4<br>$dep1_4<br>$sc1_4<br>$yr1_4</td>";
                        break;
                    }
                }
            }
        $day1_5 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='100000'";
        $query1_5=mysqli_query($db, $day1_5);
            if($query1_5){
                while($row1_5 = mysqli_fetch_array($query1_5, MYSQLI_NUM)){
                    $a1_5 = $row1_5[3]-$row1_5[2];
                    if($a1_5==30000){
                        $haha1_5 = "rowspan=6";
                    }
                    if($a1_5==20000){
                        $haha1_5= "rowspan=4";
                    }
                    if($a1_5==13000){
                        $haha1_5 = "rowspan=3";
                    }
                    if($a1_5==10000){
                        $haha1_5 = "rowspan=2";
                    }
                    $sec1_5 = $row1_5[4];
                    $ins1_5 = $row1_5[5];
                    $dep1_5 = $row1_5[6];
                    $sc1_5 = $row1_5[7];
                    $yr1_5 = $row1_5[8];
                    if($row1_5[2]==100000){
                        $td1_5="<td $haha1_5>$sec1_5<br>$ins1_5<br>$dep1_5<br>$sc1_5<br>$yr1_5</td>";
                        break;
                    }
                }
            }
        $day1_6 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='103000'";
        $query1_6=mysqli_query($db, $day1_6);
            if($query1_6){
                while($row1_6 = mysqli_fetch_array($query1_6, MYSQLI_NUM)){
                    $a1_6 = $row1_6[3]-$row1_6[2];
                    if($a1_6==30000){
                        $haha1_6 = "rowspan=6";
                    }
                    if($a1_6==20000){
                        $haha1_6= "rowspan=4";
                    }
                    if($a1_6==13000){
                        $haha1_6 = "rowspan=3";
                    }
                    if($a1_6==10000){
                        $haha1_6 = "rowspan=2";
                    }
                    $sec1_6 = $row1_6[4];
                    $ins1_6 = $row1_6[5];
                    $dep1_6 = $row1_6[6];
                    $sc1_6 = $row1_6[7];
                    $yr1_6 = $row1_6[8];
                    if($row1_6[2]==103000){
                        $td1_6="<td $haha1_6>$sec1_6<br>$ins1_6<br>$dep1_6<br>$sc1_6<br>$yr1_6</td>";
                        break;
                    }
                }
            }
        $day1_7 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='110000'";
        $query1_7=mysqli_query($db, $day1_7);
            if($query1_7){
                while($row1_7 = mysqli_fetch_array($query1_7, MYSQLI_NUM)){
                    $a1_7 = $row1_7[3]-$row1_7[2];
                    if($a1_7==30000){
                        $haha1_7 = "rowspan=6";
                    }
                    if($a1_7==20000){
                        $haha1_7= "rowspan=4";
                    }
                    if($a1_7==13000){
                        $haha1_7 = "rowspan=3";
                    }
                    if($a1_7==10000){
                        $haha1_7 = "rowspan=2";
                    }
                    $sec1_7 = $row1_7[4];
                    $ins1_7 = $row1_7[5];
                    $dep1_7 = $row1_7[6];
                    $sc1_7 = $row1_7[7];
                    $yr1_7 = $row1_7[8];
                    if($row1_7[2]==110000){
                        $td1_7="<td $haha1_7>$sec1_7<br>$ins1_7<br>$dep1_7<br>$sc1_7<br>$yr1_7</td>";
                        break;
                    }
                }
            }
        $day1_8 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='113000'";
        $query1_8=mysqli_query($db, $day1_8);
            if($query1_8){
                while($row1_8 = mysqli_fetch_array($query1_8, MYSQLI_NUM)){
                    $a1_8 = $row1_8[3]-$row1_8[2];
                    if($a1_8==30000){
                        $haha1_8 = "rowspan=6";
                    }
                    if($a1_8==20000){
                        $haha1_8= "rowspan=4";
                    }
                    if($a1_8==13000){
                        $haha1_8 = "rowspan=3";
                    }
                    if($a1_8==10000){
                        $haha1_8 = "rowspan=2";
                    }
                    $sec1_8 = $row1_8[4];
                    $ins1_8 = $row1_8[5];
                    $dep1_8 = $row1_8[6];
                    $sc1_8 = $row1_8[7];
                    $yr1_8 = $row1_8[8];
                    if($row1_8[2]==113000){
                        $td1_8="<td $haha1_8>$sec1_8<br>$ins1_8<br>$dep1_8<br>$sc1_8<br>$yr1_8</td>";
                        break;
                    }
                }
            }
       $day1_9 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='120000'";
        $query1_9=mysqli_query($db, $day1_9);
            if($query1_9){
                while($row1_9 = mysqli_fetch_array($query1_9, MYSQLI_NUM)){
                    $a1_9 = $row1_9[3]-$row1_9[2];
                    if($a1_9==30000){
                        $haha1_9 = "rowspan=6";
                    }
                    if($a1_9==20000){
                        $haha1_9= "rowspan=4";
                    }
                    if($a1_9==13000){
                        $haha1_9 = "rowspan=3";
                    }
                    if($a1_9==10000){
                        $haha1_9 = "rowspan=2";
                    }
                    $sec1_9 = $row1_9[4];
                    $ins1_9 = $row1_9[5];
                    $dep1_9 = $row1_9[6];
                    $sc1_9 = $row1_9[7];
                    $yr1_9 = $row1_9[8];
                    if($row1_9[2]==120000){
                        $td1_9="<td $haha1_9>$sec1_9<br>$ins1_9<br>$dep1_9<br>$sc1_9<br>$yr1_9</td>";
                        break;
                    }
                }
            }
       $day1_10 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='123000'";
        $query1_10=mysqli_query($db, $day1_10);
            if($query1_10){
                while($row1_10 = mysqli_fetch_array($query1_10, MYSQLI_NUM)){
                    $a1_10 = $row1_10[3]-$row1_10[2];
                    if($a1_10==30000){
                        $haha1_10 = "rowspan=6";
                    }
                    if($a1_10==20000){
                        $haha1_10= "rowspan=4";
                    }
                    if($a1_10==13000){
                        $haha1_10 = "rowspan=3";
                    }
                    if($a1_10==10000){
                        $haha1_10 = "rowspan=2";
                    }
                    $sec1_10 = $row1_10[4];
                    $ins1_10 = $row1_10[5];
                    $dep1_10 = $row1_10[6];
                    $sc1_10 = $row1_10[7];
                    $yr1_10 = $row1_10[8];
                    if($row1_10[2]==123000){
                        $td1_10="<td $haha1_10>$sec1_10<br>$ins1_10<br>$dep1_10<br>$sc1_10<br>$yr1_10</td>";
                        break;
                    }
                }
            }
       $day1_11 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='130000'";
        $query1_11=mysqli_query($db, $day1_11);
            if($query1_11){
                while($row1_11 = mysqli_fetch_array($query1_11, MYSQLI_NUM)){
                    $a1_11 = $row1_11[3]-$row1_11[2];
                    if($a1_11==30000){
                        $haha1_11 = "rowspan=6";
                    }
                    if($a1_11==20000){
                        $haha1_11= "rowspan=4";
                    }
                    if($a1_11==13000){
                        $haha1_11 = "rowspan=3";
                    }
                    if($a1_11==10000){
                        $haha1_11 = "rowspan=2";
                    }
                    $sec1_11 = $row1_11[4];
                    $ins1_11 = $row1_11[5];
                    $dep1_11 = $row1_11[6];
                    $sc1_11 = $row1_11[7];
                    $yr1_11 = $row1_11[8];
                    if($row1_11[2]==130000){
                        $td1_11="<td $haha1_11>$sec1_11<br>$ins1_11<br>$dep1_11<br>$sc1_11<br>$yr1_11</td>";
                        break;
                    }
                }
            }
       $day1_12 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='133000'";
        $query1_12=mysqli_query($db, $day1_12);
            if($query1_12){
                while($row1_12 = mysqli_fetch_array($query1_12, MYSQLI_NUM)){
                    $a1_12 = $row1_12[3]-$row1_12[2];
                    if($a1_12==30000){
                        $haha1_12 = "rowspan=6";
                    }
                    if($a1_12==20000){
                        $haha1_12= "rowspan=4";
                    }
                    if($a1_12==13000){
                        $haha1_12 = "rowspan=3";
                    }
                    if($a1_12==10000){
                        $haha1_12 = "rowspan=2";
                    }
                    $sec1_12 = $row1_12[4];
                    $ins1_12 = $row1_12[5];
                    $dep1_12 = $row1_12[6];
                    $sc1_12 = $row1_12[7];
                    $yr1_12 = $row1_12[8];
                    if($row1_12[2]==133000){
                        $td1_12="<td $haha1_12>$sec1_12<br>$ins1_12<br>$dep1_12<br>$sc1_12<br>$yr1_12</td>";
                        break;
                    }
                }
            }
       $day1_13 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='140000'";
        $query1_13=mysqli_query($db, $day1_13);
            if($query1_13){
                while($row1_13 = mysqli_fetch_array($query1_13, MYSQLI_NUM)){
                    $a1_13 = $row1_13[3]-$row1_13[2];
                    if($a1_13==30000){
                        $haha1_13 = "rowspan=6";
                    }
                    if($a1_13==20000){
                        $haha1_13= "rowspan=4";
                    }
                    if($a1_13==13000){
                        $haha1_13 = "rowspan=3";
                    }
                    if($a1_13==10000){
                        $haha1_13 = "rowspan=2";
                    }
                    $sec1_13 = $row1_13[4];
                    $ins1_13 = $row1_13[5];
                    $dep1_13 = $row1_13[6];
                    $sc1_13 = $row1_13[7];
                    $yr1_13 = $row1_13[8];
                    if($row1_13[2]==140000){
                        $td1_13="<td $haha1_13>$sec1_13<br>$ins1_13<br>$dep1_13<br>$sc1_13<br>$yr1_13</td>";
                        break;
                    }
                }
            }
       $day1_14 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='143000'";
        $query1_14=mysqli_query($db, $day1_14);
            if($query1_14){
                while($row1_14 = mysqli_fetch_array($query1_14, MYSQLI_NUM)){
                    $a1_14 = $row1_14[3]-$row1_14[2];
                    if($a1_14==30000){
                        $haha1_14 = "rowspan=6";
                    }
                    if($a1_14==20000){
                        $haha1_14= "rowspan=4";
                    }
                    if($a1_14==13000){
                        $haha1_14 = "rowspan=3";
                    }
                    if($a1_14==10000){
                        $haha1_14 = "rowspan=2";
                    }
                    $sec1_14 = $row1_14[4];
                    $ins1_14 = $row1_14[5];
                    $dep1_14 = $row1_14[6];
                    $sc1_14 = $row1_14[7];
                    $yr1_14 = $row1_14[8];
                    if($row1_14[2]==143000){
                        $td1_14="<td $haha1_14>$sec1_14<br>$ins1_14<br>$dep1_14<br>$sc1_14<br>$yr1_14</td>";
                        break;
                    }
                }
            }
       $day1_15 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='150000'";
        $query1_15=mysqli_query($db, $day1_15);
            if($query1_15){
                while($row1_15 = mysqli_fetch_array($query1_15, MYSQLI_NUM)){
                    $a1_15 = $row1_15[3]-$row1_15[2];
                    if($a1_15==30000){
                        $haha1_15 = "rowspan=6";
                    }
                    if($a1_15==20000){
                        $haha1_15= "rowspan=4";
                    }
                    if($a1_15==13000){
                        $haha1_15 = "rowspan=3";
                    }
                    if($a1_15==10000){
                        $haha1_15 = "rowspan=2";
                    }
                    $sec1_15 = $row1_15[4];
                    $ins1_15 = $row1_15[5];
                    $dep1_15 = $row1_15[6];
                    $sc1_15 = $row1_15[7];
                    $yr1_15 = $row1_15[8];
                    if($row1_15[2]==150000){
                        $td1_15="<td $haha1_15>$sec1_15<br>$ins1_15<br>$dep1_15<br>$sc1_15<br>$yr1_15</td>";
                        break;
                    }
                }
            }
       $day1_16 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='153000'";
        $query1_16=mysqli_query($db, $day1_16);
            if($query1_16){
                while($row1_16 = mysqli_fetch_array($query1_16, MYSQLI_NUM)){
                    $a1_16 = $row1_16[3]-$row1_16[2];
                    if($a1_16==30000){
                        $haha1_16 = "rowspan=6";
                    }
                    if($a1_16==20000){
                        $haha1_16= "rowspan=4";
                    }
                    if($a1_16==13000){
                        $haha1_16 = "rowspan=3";
                    }
                    if($a1_16==10000){
                        $haha1_16 = "rowspan=2";
                    }
                    $sec1_16 = $row1_16[4];
                    $ins1_16 = $row1_16[5];
                    $dep1_16 = $row1_16[6];
                    $sc1_16 = $row1_16[7];
                    $yr1_16 = $row1_16[8];
                    if($row1_16[2]==153000){
                        $td1_16="<td $haha1_16>$sec1_16<br>$ins1_16<br>$dep1_16<br>$sc1_16<br>$yr1_16</td>";
                        break;
                    }
                }
            }
       $day1_17 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='160000'";
        $query1_17=mysqli_query($db, $day1_17);
            if($query1_17){
                while($row1_17 = mysqli_fetch_array($query1_17, MYSQLI_NUM)){
                    $a1_17 = $row1_17[3]-$row1_17[2];
                    if($a1_17==30000){
                        $haha1_17 = "rowspan=6";
                    }
                    if($a1_17==20000){
                        $haha1_17= "rowspan=4";
                    }
                    if($a1_17==13000){
                        $haha1_17 = "rowspan=3";
                    }
                    if($a1_17==10000){
                        $haha1_17 = "rowspan=2";
                    }
                    $sec1_17 = $row1_17[4];
                    $ins1_17 = $row1_17[5];
                    $dep1_17 = $row1_17[6];
                    $sc1_17 = $row1_17[7];
                    $yr1_17 = $row1_17[8];
                    if($row1_17[2]==160000){
                        $td1_17="<td $haha1_17>$sec1_17<br>$ins1_17<br>$dep1_17<br>$sc1_17<br>$yr1_17</td>";
                        break;
                    }
                }
            }
       $day1_18 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='163000'";
        $query1_18=mysqli_query($db, $day1_18);
            if($query1_18){
                while($row1_18 = mysqli_fetch_array($query1_18, MYSQLI_NUM)){
                    $a1_18 = $row1_18[3]-$row1_18[2];
                    if($a1_18==30000){
                        $haha1_18 = "rowspan=6";
                    }
                    if($a1_18==20000){
                        $haha1_18= "rowspan=4";
                    }
                    if($a1_18==13000){
                        $haha1_18 = "rowspan=3";
                    }
                    if($a1_18==10000){
                        $haha1_18 = "rowspan=2";
                    }
                    $sec1_18 = $row1_18[4];
                    $ins1_18 = $row1_18[5];
                    $dep1_18 = $row1_18[6];
                    $sc1_18 = $row1_18[7];
                    $yr1_18 = $row1_18[8];
                    if($row1_18[2]==163000){
                        $td1_18="<td $haha1_18>$sec1_18<br>$ins1_18<br>$dep1_18<br>$sc1_18<br>$yr1_18</td>";
                        break;
                    }
                }
            }
       $day1_19 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='170000'";
        $query1_19=mysqli_query($db, $day1_19);
            if($query1_19){
                while($row1_19 = mysqli_fetch_array($query1_19, MYSQLI_NUM)){
                    $a1_19 = $row1_19[3]-$row1_19[2];
                    if($a1_19==30000){
                        $haha1_19 = "rowspan=6";
                    }
                    if($a1_19==20000){
                        $haha1_19= "rowspan=4";
                    }
                    if($a1_19==13000){
                        $haha1_19 = "rowspan=3";
                    }
                    if($a1_19==10000){
                        $haha1_19 = "rowspan=2";
                    }
                    $sec1_19 = $row1_19[4];
                    $ins1_19 = $row1_19[5];
                    $dep1_19 = $row1_19[6];
                    $sc1_19 = $row1_19[7];
                    $yr1_19 = $row1_19[8];
                    if($row1_19[2]==170000){
                        $td1_19="<td $haha1_19>$sec1_19<br>$ins1_19<br>$dep1_19<br>$sc1_19<br>$yr1_19</td>";
                        break;
                    }
                }
            }
       $day1_20 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='173000'";
        $query1_20=mysqli_query($db, $day1_20);
            if($query1_20){
                while($row1_20 = mysqli_fetch_array($query1_20, MYSQLI_NUM)){
                    $a1_20 = $row1_20[3]-$row1_20[2];
                    if($a1_20==30000){
                        $haha1_20 = "rowspan=6";
                    }
                    if($a1_20==20000){
                        $haha1_20= "rowspan=4";
                    }
                    if($a1_20==13000){
                        $haha1_20 = "rowspan=3";
                    }
                    if($a1_20==10000){
                        $haha1_20 = "rowspan=2";
                    }
                    $sec1_20 = $row1_20[4];
                    $ins1_20 = $row1_20[5];
                    $dep1_20 = $row1_20[6];
                    $sc1_20 = $row1_20[7];
                    $yr1_20 = $row1_20[8];
                    if($row1_20[2]==173000){
                        $td1_20="<td $haha1_20>$sec1_20<br>$ins1_20<br>$dep1_20<br>$sc1_20<br>$yr1_20</td>";
                        break;
                    }
                }
            }
       $day1_21 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='180000'";
        $query1_21=mysqli_query($db, $day1_21);
            if($query1_21){
                while($row1_21 = mysqli_fetch_array($query1_21, MYSQLI_NUM)){
                    $a1_21 = $row1_21[3]-$row1_21[2];
                    if($a1_21==30000){
                        $haha1_21 = "rowspan=6";
                    }
                    if($a1_21==20000){
                        $haha1_21= "rowspan=4";
                    }
                    if($a1_21==13000){
                        $haha1_21 = "rowspan=3";
                    }
                    if($a1_21==10000){
                        $haha1_21 = "rowspan=2";
                    }
                    $sec1_21 = $row1_21[4];
                    $ins1_21 = $row1_21[5];
                    $dep1_21 = $row1_21[6];
                    $sc1_21 = $row1_21[7];
                    $yr1_21 = $row1_21[8];
                    if($row1_21[2]==180000){
                        $td1_21="<td $haha1_21>$sec1_21<br>$ins1_21<br>$dep1_21<br>$sc1_21<br>$yr1_21</td>";
                        break;
                    }
                }
            }
       $day1_22 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='183000'";
        $query1_22=mysqli_query($db, $day1_22);
            if($query1_22){
                while($row1_22 = mysqli_fetch_array($query1_22, MYSQLI_NUM)){
                    $a1_22 = $row1_22[3]-$row1_22[2];
                    if($a1_22==30000){
                        $haha1_22 = "rowspan=6";
                    }
                    if($a1_22==20000){
                        $haha1_22= "rowspan=4";
                    }
                    if($a1_22==13000){
                        $haha1_22 = "rowspan=3";
                    }
                    if($a1_22==10000){
                        $haha1_22 = "rowspan=2";
                    }
                    $sec1_22 = $row1_22[4];
                    $ins1_22 = $row1_22[5];
                    $dep1_22 = $row1_22[6];
                    $sc1_22 = $row1_22[7];
                    $yr1_22 = $row1_22[8];
                    if($row1_22[2]==183000){
                        $td1_22="<td $haha1_22>$sec1_22<br>$ins1_22<br>$dep1_22<br>$sc1_22<br>$yr1_22</td>";
                        break;
                    }
                }
            }
       $day1_23 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='190000'";
        $query1_23=mysqli_query($db, $day1_23);
            if($query1_23){
                while($row1_23 = mysqli_fetch_array($query1_23, MYSQLI_NUM)){
                    $a1_23 = $row1_23[3]-$row1_23[2];
                    if($a1_23==30000){
                        $haha1_23 = "rowspan=6";
                    }
                    if($a1_23==20000){
                        $haha1_23= "rowspan=4";
                    }
                    if($a1_23==13000){
                        $haha1_23 = "rowspan=3";
                    }
                    if($a1_23==10000){
                        $haha1_23 = "rowspan=2";
                    }
                    $sec1_23 = $row1_23[4];
                    $ins1_23 = $row1_23[5];
                    $dep1_23 = $row1_23[6];
                    $sc1_23 = $row1_23[7];
                    $yr1_23 = $row1_23[8];
                    if($row1_23[2]==190000){
                        $td1_23="<td $haha1_23>$sec1_23<br>$ins1_23<br>$dep1_23<br>$sc1_23<br>$yr1_23</td>";
                        break;
                    }
                }
            }
       $day1_24 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='193000'";
        $query1_24=mysqli_query($db, $day1_24);
            if($query1_24){
                while($row1_24 = mysqli_fetch_array($query1_24, MYSQLI_NUM)){
                    $a1_24 = $row1_24[3]-$row1_24[2];
                    if($a1_24==30000){
                        $haha1_24 = "rowspan=6";
                    }
                    if($a1_24==20000){
                        $haha1_24= "rowspan=4";
                    }
                    if($a1_24==13000){
                        $haha1_24 = "rowspan=3";
                    }
                    if($a1_24==10000){
                        $haha1_24 = "rowspan=2";
                    }
                    $sec1_24 = $row1_24[4];
                    $ins1_24 = $row1_24[5];
                    $dep1_24 = $row1_24[6];
                    $sc1_24 = $row1_24[7];
                    $yr1_24 = $row1_24[8];
                    if($row1_24[2]==193000){
                        $td1_24="<td $haha1_24>$sec1_24<br>$ins1_24<br>$dep1_24<br>$sc1_24<br>$yr1_24</td>";
                        break;
                    }
                }
            }
       $day1_25 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='200000'";
        $query1_25=mysqli_query($db, $day1_25);
            if($query1_25){
                while($row1_25 = mysqli_fetch_array($query1_25, MYSQLI_NUM)){
                    $a1_25 = $row1_25[3]-$row1_25[2];
                    if($a1_25==30000){
                        $haha1_25 = "rowspan=6";
                    }
                    if($a1_25==20000){
                        $haha1_25= "rowspan=4";
                    }
                    if($a1_25==13000){
                        $haha1_25 = "rowspan=3";
                    }
                    if($a1_25==10000){
                        $haha1_25 = "rowspan=2";
                    }
                    $sec1_25 = $row1_25[4];
                    $ins1_25 = $row1_25[5];
                    $dep1_25 = $row1_25[6];
                    $sc1_25 = $row1_25[7];
                    $yr1_25 = $row1_25[8];
                    if($row1_25[2]==200000){
                        $td1_25="<td $haha1_25>$sec1_25<br>$ins1_25<br>$dep1_25<br>$sc1_25<br>$yr1_25</td>";
                        break;
                    }
                }
            }
       $day1_26 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Monday' AND Time_start='203000'";
        $query1_26=mysqli_query($db, $day1_26);
            if($query1_26){
                while($row1_26 = mysqli_fetch_array($query1_26, MYSQLI_NUM)){
                    $a1_26 = $row1_26[3]-$row1_26[2];
                    if($a1_26==30000){
                        $haha1_26 = "rowspan=6";
                    }
                    if($a1_26==20000){
                        $haha1_26= "rowspan=4";
                    }
                    if($a1_26==13000){
                        $haha1_26 = "rowspan=3";
                    }
                    if($a1_26==10000){
                        $haha1_26 = "rowspan=2";
                    }
                    $sec1_26 = $row1_26[4];
                    $ins1_26 = $row1_26[5];
                    $dep1_26 = $row1_26[6];
                    $sc1_26 = $row1_26[7];
                    $yr1_26 = $row1_26[8];
                    if($row1_26[2]==203000){
                        $td1_26="<td $haha1_26>$sec1_26<br>$ins1_26<br>$dep1_26<br>$sc1_26<br>$yr1_26</td>";
                        break;
                    }
                }
            }

            //Tuesday
        $day2 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='73000'";
        $query2=mysqli_query($db, $day2);
            if($query2){
                while($row2 = mysqli_fetch_array($query2, MYSQLI_NUM)){
                    $a2 = $row2[3]-$row2[2];
                    if($a2==30000){
                        $haha2 = "rowspan=6";
                    }
                    if($a2==20000){
                        $haha2 = "rowspan=4";
                    }
                    if($a2==13000){
                        $haha2 = "rowspan=3";
                    }
                    if($a2==10000){
                        $haha2 = "rowspan=2";
                    }
                    $sec2 = $row2[4];
                    $ins2 = $row2[5];
                    $dep2 = $row2[6];
                    $sc2 = $row2[7];
                    $yr2 = $row2[8];
                    if($row2[2]==73000){
                        $td2="<td $haha2>$sec2<br>$ins2<br>$dep2<br>$sc2<br>$yr2</td>";
                        break;
                    }
                }
            }
        $day2_1 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='80000'";
        $query2_1=mysqli_query($db, $day2_1);
            if($query2_1){
                while($row2_1 = mysqli_fetch_array($query2_1, MYSQLI_NUM)){
                    $a2_1 = $row2_1[3]-$row2_1[2];
                    if($a2_1==30000){
                        $haha2_1 = "rowspan=6";
                    }
                    if($a2_1==20000){
                        $haha2_1= "rowspan=4";
                    }
                    if($a2_1==13000){
                        $haha2_1 = "rowspan=3";
                    }
                    if($a2_1==10000){
                        $haha2_1 = "rowspan=2";
                    }
                    $sec2_1 = $row2_1[4];
                    $ins2_1 = $row2_1[5];
                    $dep2_1 = $row2_1[6];
                    $sc2_1 = $row2_1[7];
                    $yr2_1 = $row2_1[8];
                    if($row2_1[2]==80000){
                        $td2_1="<td $haha2_1>$sec2_1<br>$ins2_1<br>$dep2_1<br>$sc2_1<br>$yr2_1</td>";
                        break;
                    }
                }
            }
        $day2_2 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='83000'";
        $query2_2=mysqli_query($db, $day2_2);
            if($query2_2){
                while($row2_2 = mysqli_fetch_array($query2_2, MYSQLI_NUM)){
                    $a2_2 = $row2_2[3]-$row2_2[2];
                    if($a2_2==30000){
                        $haha2_2 = "rowspan=6";
                    }
                    if($a2_2==20000){
                        $haha2_2= "rowspan=4";
                    }
                    if($a2_2==13000){
                        $haha2_2 = "rowspan=3";
                    }
                    if($a2_2==10000){
                        $haha2_2 = "rowspan=2";
                    }
                    $sec2_2 = $row2_2[4];
                    $ins2_2 = $row2_2[5];
                    $dep2_2 = $row2_2[6];
                    $sc2_2 = $row2_2[7];
                    $yr2_2 = $row2_2[8];
                    if($row2_2[2]==83000){
                        $td2_2="<td $haha2_2>$sec2_2<br>$ins2_2<br>$dep2_2<br>$sc2_2<br>$yr2_2</td>";
                        break;
                    }
                }
            }
        $day2_3 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='90000'";
        $query2_3=mysqli_query($db, $day2_3);
            if($query2_3){
                while($row2_3 = mysqli_fetch_array($query2_3, MYSQLI_NUM)){
                    $a2_3 = $row2_3[3]-$row2_3[2];
                    if($a2_3==30000){
                        $haha2_3 = "rowspan=6";
                    }
                    if($a2_3==20000){
                        $haha2_3= "rowspan=4";
                    }
                    if($a2_3==13000||$a2_3==17000){
                        $haha2_3 = "rowspan=3";
                    }
                    if($a2_3==10000){
                        $haha2_3 = "rowspan=2";
                    }
                    $sec2_3 = $row2_3[4];
                    $ins2_3 = $row2_3[5];
                    $dep2_3 = $row2_3[6];
                    $sc2_3 = $row2_3[7];
                    $yr2_3 = $row2_3[8];
                    if($row2_3[2]==90000){
                        $td2_3="<td $haha2_3>$sec2_3<br>$ins2_3<br>$dep2_3<br>$sc2_3<br>$yr2_3</td>";
                        break;
                    }
                }
            }
        $day2_4 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='93000'";
        $query2_4=mysqli_query($db, $day2_4);
            if($query2_4){
                while($row2_4 = mysqli_fetch_array($query2_4, MYSQLI_NUM)){
                    $a2_4 = $row2_4[3]-$row2_4[2];
                    if($a2_4==30000){
                        $haha2_4 = "rowspan=6";
                    }
                    if($a2_4==20000){
                        $haha2_4= "rowspan=4";
                    }
                    if($a2_4==13000||$a2_4==17000){
                        $haha2_4 = "rowspan=3";
                    }
                    if($a2_4==10000){
                        $haha2_4 = "rowspan=2";
                    }                    
                    $sec2_4 = $row2_4[4];
                    $ins2_4 = $row2_4[5];
                    $dep2_4 = $row2_4[6];
                    $sc2_4 = $row2_4[7];
                    $yr2_4 = $row2_4[8];
                    if($row2_4[2]==93000){
                        $td2_4="<td $haha2_4>$sec2_4<br>$ins2_4<br>$dep2_4<br>$sc2_4<br>$yr2_4</td>";
                        break;
                    }
                }
            }
        $day2_5 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='100000'";
        $query2_5=mysqli_query($db, $day2_5);
            if($query2_5){
                while($row2_5 = mysqli_fetch_array($query2_5, MYSQLI_NUM)){
                    $a2_5 = $row2_5[3]-$row2_5[2];
                    if($a2_5==30000){
                        $haha2_5 = "rowspan=6";
                    }
                    if($a2_5==20000){
                        $haha2_5= "rowspan=4";
                    }
                    if($a2_5==13000){
                        $haha2_5 = "rowspan=3";
                    }
                    if($a2_5==10000){
                        $haha2_5 = "rowspan=2";
                    }
                    $sec2_5 = $row2_5[4];
                    $ins2_5 = $row2_5[5];
                    $dep2_5 = $row2_5[6];
                    $sc2_5 = $row2_5[7];
                    $yr2_5 = $row2_5[8];
                    if($row2_5[2]==100000){
                        $td2_5="<td $haha2_5>$sec2_5<br>$ins2_5<br>$dep2_5<br>$sc2_5<br>$yr2_5</td>";
                        break;
                    }
                }
            }
        $day2_6 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='103000'";
        $query2_6=mysqli_query($db, $day2_6);
            if($query2_6){
                while($row2_6 = mysqli_fetch_array($query2_6, MYSQLI_NUM)){
                    $a2_6 = $row2_6[3]-$row2_6[2];
                    if($a2_6==30000){
                        $haha2_6 = "rowspan=6";
                    }
                    if($a2_6==20000){
                        $haha2_6= "rowspan=4";
                    }
                    if($a2_6==13000){
                        $haha2_6 = "rowspan=3";
                    }
                    if($a2_6==10000){
                        $haha2_6 = "rowspan=2";
                    }
                    $sec2_6 = $row2_6[4];
                    $ins2_6 = $row2_6[5];
                    $dep2_6 = $row2_6[6];
                    $sc2_6 = $row2_6[7];
                    $yr2_6 = $row2_6[8];
                    if($row2_6[2]==103000){
                        $td2_6="<td $haha2_6>$sec2_6<br>$ins2_6<br>$dep2_6<br>$sc2_6<br>$yr2_6</td>";
                        break;
                    }
                }
            }
        $day2_7 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='110000'";
        $query2_7=mysqli_query($db, $day2_7);
            if($query2_7){
                while($row2_7 = mysqli_fetch_array($query2_7, MYSQLI_NUM)){
                    $a2_7 = $row2_7[3]-$row2_7[2];
                    if($a2_7==30000){
                        $haha2_7 = "rowspan=6";
                    }
                    if($a2_7==20000){
                        $haha2_7= "rowspan=4";
                    }
                    if($a2_7==13000){
                        $haha2_7 = "rowspan=3";
                    }
                    if($a2_7==10000){
                        $haha2_7 = "rowspan=2";
                    }
                    $sec2_7 = $row2_7[4];
                    $ins2_7 = $row2_7[5];
                    $dep2_7 = $row2_7[6];
                    $sc2_7 = $row2_7[7];
                    $yr2_7 = $row2_7[8];
                    if($row2_7[2]==110000){
                        $td2_7="<td $haha2_7>$sec2_7<br>$ins2_7<br>$dep2_7<br>$sc2_7<br>$yr2_7</td>";
                        break;
                    }
                }
            }
        $day2_8 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='113000'";
        $query2_8=mysqli_query($db, $day2_8);
            if($query2_8){
                while($row2_8 = mysqli_fetch_array($query2_8, MYSQLI_NUM)){
                    $a2_8 = $row2_8[3]-$row2_8[2];
                    if($a2_8==30000){
                        $haha2_8 = "rowspan=6";
                    }
                    if($a2_8==20000){
                        $haha2_8= "rowspan=4";
                    }
                    if($a2_8==13000){
                        $haha2_8 = "rowspan=3";
                    }
                    if($a2_8==10000){
                        $haha2_8 = "rowspan=2";
                    }
                    $sec2_8 = $row2_8[4];
                    $ins2_8 = $row2_8[5];
                    $dep2_8 = $row2_8[6];
                    $sc2_8 = $row2_8[7];
                    $yr2_8 = $row2_8[8];
                    if($row2_8[2]==113000){
                        $td2_8="<td $haha2_8>$sec2_8<br>$ins2_8<br>$dep2_8<br>$sc2_8<br>$yr2_8</td>";
                        break;
                    }
                }
            }
       $day2_9 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='120000'";
        $query2_9=mysqli_query($db, $day2_9);
            if($query2_9){
                while($row2_9 = mysqli_fetch_array($query2_9, MYSQLI_NUM)){
                    $a2_9 = $row2_9[3]-$row2_9[2];
                    if($a2_9==30000){
                        $haha2_9 = "rowspan=6";
                    }
                    if($a2_9==20000){
                        $haha2_9= "rowspan=4";
                    }
                    if($a2_9==13000){
                        $haha2_9 = "rowspan=3";
                    }
                    if($a2_9==10000){
                        $haha2_9 = "rowspan=2";
                    }
                    $sec2_9 = $row2_9[4];
                    $ins2_9 = $row2_9[5];
                    $dep2_9 = $row2_9[6];
                    $sc2_9 = $row2_9[7];
                    $yr2_9 = $row2_9[8];
                    if($row2_9[2]==120000){
                        $td2_9="<td $haha2_9>$sec2_9<br>$ins2_9<br>$dep2_9<br>$sc2_9<br>$yr2_9</td>";
                        break;
                    }
                }
            }
       $day2_10 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='123000'";
        $query2_10=mysqli_query($db, $day2_10);
            if($query2_10){
                while($row2_10 = mysqli_fetch_array($query2_10, MYSQLI_NUM)){
                    $a2_10 = $row2_10[3]-$row2_10[2];
                    if($a2_10==30000){
                        $haha2_10 = "rowspan=6";
                    }
                    if($a2_10==20000){
                        $haha2_10= "rowspan=4";
                    }
                    if($a2_10==13000){
                        $haha2_10 = "rowspan=3";
                    }
                    if($a2_10==10000){
                        $haha2_10 = "rowspan=2";
                    }
                    $sec2_10 = $row2_10[4];
                    $ins2_10 = $row2_10[5];
                    $dep2_10 = $row2_10[6];
                    $sc2_10 = $row2_10[7];
                    $yr2_10 = $row2_10[8];
                    if($row2_10[2]==123000){
                        $td2_10="<td $haha2_10>$sec2_10<br>$ins2_10<br>$dep2_10<br>$sc2_10<br>$yr2_10</td>";
                        break;
                    }
                }
            }
       $day2_11 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='130000'";
        $query2_11=mysqli_query($db, $day2_11);
            if($query2_11){
                while($row2_11 = mysqli_fetch_array($query2_11, MYSQLI_NUM)){
                    $a2_11 = $row2_11[3]-$row2_11[2];
                    if($a2_11==30000){
                        $haha2_11 = "rowspan=6";
                    }
                    if($a2_11==20000){
                        $haha2_11= "rowspan=4";
                    }
                    if($a2_11==13000){
                        $haha2_11 = "rowspan=3";
                    }
                    if($a2_11==10000){
                        $haha2_11 = "rowspan=2";
                    }
                    $sec2_11 = $row2_11[4];
                    $ins2_11 = $row2_11[5];
                    $dep2_11 = $row2_11[6];
                    $sc2_11 = $row2_11[7];
                    $yr2_11 = $row2_11[8];
                    if($row2_11[2]==130000){
                        $td2_11="<td $haha2_11>$sec2_11<br>$ins2_11<br>$dep2_11<br>$sc2_11<br>$yr2_11</td>";
                        break;
                    }
                }
            }
       $day2_12 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='133000'";
        $query2_12=mysqli_query($db, $day2_12);
            if($query2_12){
                while($row2_12 = mysqli_fetch_array($query2_12, MYSQLI_NUM)){
                    $a2_12 = $row2_12[3]-$row2_12[2];
                    if($a2_12==30000){
                        $haha2_12 = "rowspan=6";
                    }
                    if($a2_12==20000){
                        $haha2_12= "rowspan=4";
                    }
                    if($a2_12==13000){
                        $haha2_12 = "rowspan=3";
                    }
                    if($a2_12==10000){
                        $haha2_12 = "rowspan=2";
                    }
                    $sec2_12 = $row2_12[4];
                    $ins2_12 = $row2_12[5];
                    $dep2_12 = $row2_12[6];
                    $sc2_12 = $row2_12[7];
                    $yr2_12 = $row2_12[8];
                    if($row2_12[2]==133000){
                        $td2_12="<td $haha2_12>$sec2_12<br>$ins2_12<br>$dep2_12<br>$sc2_12<br>$yr2_12</td>";
                        break;
                    }
                }
            }
       $day2_13 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='140000'";
        $query2_13=mysqli_query($db, $day2_13);
            if($query2_13){
                while($row2_13 = mysqli_fetch_array($query2_13, MYSQLI_NUM)){
                    $a2_13 = $row2_13[3]-$row2_13[2];
                    if($a2_13==30000){
                        $haha2_13 = "rowspan=6";
                    }
                    if($a2_13==20000){
                        $haha2_13= "rowspan=4";
                    }
                    if($a2_13==13000){
                        $haha2_13 = "rowspan=3";
                    }
                    if($a2_13==10000){
                        $haha2_13 = "rowspan=2";
                    }
                    $sec2_13 = $row2_13[4];
                    $ins2_13 = $row2_13[5];
                    $dep2_13 = $row2_13[6];
                    $sc2_13 = $row2_13[7];
                    $yr2_13 = $row2_13[8];
                    if($row2_13[2]==140000){
                        $td2_13="<td $haha2_13>$sec2_13<br>$ins2_13<br>$dep2_13<br>$sc2_13<br>$yr2_13</td>";
                        break;
                    }
                }
            }
       $day2_14 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='143000'";
        $query2_14=mysqli_query($db, $day2_14);
            if($query2_14){
                while($row2_14 = mysqli_fetch_array($query2_14, MYSQLI_NUM)){
                    $a2_14 = $row2_14[3]-$row2_14[2];
                    if($a2_14==30000){
                        $haha2_14 = "rowspan=6";
                    }
                    if($a2_14==20000){
                        $haha2_14= "rowspan=4";
                    }
                    if($a2_14==13000){
                        $haha2_14 = "rowspan=3";
                    }
                    if($a2_14==10000){
                        $haha2_14 = "rowspan=2";
                    }
                    $sec2_14 = $row2_14[4];
                    $ins2_14 = $row2_14[5];
                    $dep2_14 = $row2_14[6];
                    $sc2_14 = $row2_14[7];
                    $yr2_14 = $row2_14[8];
                    if($row2_14[2]==143000){
                        $td2_14="<td $haha2_14>$sec2_14<br>$ins2_14<br>$dep2_14<br>$sc2_14<br>$yr2_14</td>";
                        break;
                    }
                }
            }
       $day2_15 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='150000'";
        $query2_15=mysqli_query($db, $day2_15);
            if($query2_15){
                while($row2_15 = mysqli_fetch_array($query2_15, MYSQLI_NUM)){
                    $a2_15 = $row2_15[3]-$row2_15[2];
                    if($a2_15==30000){
                        $haha2_15 = "rowspan=6";
                    }
                    if($a2_15==20000){
                        $haha2_15= "rowspan=4";
                    }
                    if($a2_15==13000){
                        $haha2_15 = "rowspan=3";
                    }
                    if($a2_15==10000){
                        $haha2_15 = "rowspan=2";
                    }
                    $sec2_15 = $row2_15[4];
                    $ins2_15 = $row2_15[5];
                    $dep2_15 = $row2_15[6];
                    $sc2_15 = $row2_15[7];
                    $yr2_15 = $row2_15[8];
                    if($row2_15[2]==150000){
                        $td2_15="<td $haha2_15>$sec2_15<br>$ins2_15<br>$dep2_15<br>$sc2_15<br>$yr2_15</td>";
                        break;
                    }
                }
            }
       $day2_16 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='153000'";
        $query2_16=mysqli_query($db, $day2_16);
            if($query2_16){
                while($row2_16 = mysqli_fetch_array($query2_16, MYSQLI_NUM)){
                    $a2_16 = $row2_16[3]-$row2_16[2];
                    if($a2_16==30000){
                        $haha2_16 = "rowspan=6";
                    }
                    if($a2_16==20000){
                        $haha2_16= "rowspan=4";
                    }
                    if($a2_16==13000){
                        $haha2_16 = "rowspan=3";
                    }
                    if($a2_16==10000){
                        $haha2_16 = "rowspan=2";
                    }
                    $sec2_16 = $row2_16[4];
                    $ins2_16 = $row2_16[5];
                    $dep2_16 = $row2_16[6];
                    $sc2_16 = $row2_16[7];
                    $yr2_16 = $row2_16[8];
                    if($row2_16[2]==153000){
                        $td2_16="<td $haha2_16>$sec2_16<br>$ins2_16<br>$dep2_16<br>$sc2_16<br>$yr2_16</td>";
                        break;
                    }
                }
            }
       $day2_17 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='160000'";
        $query2_17=mysqli_query($db, $day2_17);
            if($query2_17){
                while($row2_17 = mysqli_fetch_array($query2_17, MYSQLI_NUM)){
                    $a2_17 = $row2_17[3]-$row2_17[2];
                    if($a2_17==30000){
                        $haha2_17 = "rowspan=6";
                    }
                    if($a2_17==20000){
                        $haha2_17= "rowspan=4";
                    }
                    if($a2_17==13000){
                        $haha2_17 = "rowspan=3";
                    }
                    if($a2_17==10000){
                        $haha2_17 = "rowspan=2";
                    }
                    $sec2_17 = $row2_17[4];
                    $ins2_17 = $row2_17[5];
                    $dep2_17 = $row2_17[6];
                    $sc2_17 = $row2_17[7];
                    $yr2_17 = $row2_17[8];
                    if($row2_17[2]==160000){
                        $td2_17="<td $haha2_17>$sec2_17<br>$ins2_17<br>$dep2_17<br>$sc2_17<br>$yr2_17</td>";
                        break;
                    }
                }
            }
       $day2_18 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='163000'";
        $query2_18=mysqli_query($db, $day2_18);
            if($query2_18){
                while($row2_18 = mysqli_fetch_array($query2_18, MYSQLI_NUM)){
                    $a2_18 = $row2_18[3]-$row2_18[2];
                    if($a2_18==30000){
                        $haha2_18 = "rowspan=6";
                    }
                    if($a2_18==20000){
                        $haha2_18= "rowspan=4";
                    }
                    if($a2_18==13000){
                        $haha2_18 = "rowspan=3";
                    }
                    if($a2_18==10000){
                        $haha2_18 = "rowspan=2";
                    }
                    $sec2_18 = $row2_18[4];
                    $ins2_18 = $row2_18[5];
                    $dep2_18 = $row2_18[6];
                    $sc2_18 = $row2_18[7];
                    $yr2_18 = $row2_18[8];
                    if($row2_18[2]==163000){
                        $td2_18="<td $haha2_18>$sec2_18<br>$ins2_18<br>$dep2_18<br>$sc2_18<br>$yr2_18</td>";
                        break;
                    }
                }
            }
       $day2_19 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='170000'";
        $query2_19=mysqli_query($db, $day2_19);
            if($query2_19){
                while($row2_19 = mysqli_fetch_array($query2_19, MYSQLI_NUM)){
                    $a2_19 = $row2_19[3]-$row2_19[2];
                    if($a2_19==30000){
                        $haha2_19 = "rowspan=6";
                    }
                    if($a2_19==20000){
                        $haha2_19= "rowspan=4";
                    }
                    if($a2_19==13000){
                        $haha2_19 = "rowspan=3";
                    }
                    if($a2_19==10000){
                        $haha2_19 = "rowspan=2";
                    }
                    $sec2_19 = $row2_19[4];
                    $ins2_19 = $row2_19[5];
                    $dep2_19 = $row2_19[6];
                    $sc2_19 = $row2_19[7];
                    $yr2_19 = $row2_19[8];
                    if($row2_19[2]==170000){
                        $td2_19="<td $haha2_19>$sec2_19<br>$ins2_19<br>$dep2_19<br>$sc2_19<br>$yr2_19</td>";
                        break;
                    }
                }
            }
       $day2_20 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='173000'";
        $query2_20=mysqli_query($db, $day2_20);
            if($query2_20){
                while($row2_20 = mysqli_fetch_array($query2_20, MYSQLI_NUM)){
                    $a2_20 = $row2_20[3]-$row2_20[2];
                    if($a2_20==30000){
                        $haha2_20 = "rowspan=6";
                    }
                    if($a2_20==20000){
                        $haha2_20= "rowspan=4";
                    }
                    if($a2_20==13000){
                        $haha2_20 = "rowspan=3";
                    }
                    if($a2_20==10000){
                        $haha2_20 = "rowspan=2";
                    }
                    $sec2_20 = $row2_20[4];
                    $ins2_20 = $row2_20[5];
                    $dep2_20 = $row2_20[6];
                    $sc2_20 = $row2_20[7];
                    $yr2_20 = $row2_20[8];
                    if($row2_20[2]==173000){
                        $td2_20="<td $haha2_20>$sec2_20<br>$ins2_20<br>$dep2_20<br>$sc2_20<br>$yr2_20</td>";
                        break;
                    }
                }
            }
       $day2_21 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='180000'";
        $query2_21=mysqli_query($db, $day2_21);
            if($query2_21){
                while($row2_21 = mysqli_fetch_array($query2_21, MYSQLI_NUM)){
                    $a2_21 = $row2_21[3]-$row2_21[2];
                    if($a2_21==30000){
                        $haha2_21 = "rowspan=6";
                    }
                    if($a2_21==20000){
                        $haha2_21= "rowspan=4";
                    }
                    if($a2_21==13000){
                        $haha2_21 = "rowspan=3";
                    }
                    if($a2_21==10000){
                        $haha2_21 = "rowspan=2";
                    }
                    $sec2_21 = $row2_21[4];
                    $ins2_21 = $row2_21[5];
                    $dep2_21 = $row2_21[6];
                    $sc2_21 = $row2_21[7];
                    $yr2_21 = $row2_21[8];
                    if($row2_21[2]==180000){
                        $td2_21="<td $haha2_21>$sec2_21<br>$ins2_21<br>$dep2_21<br>$sc2_21<br>$yr2_21</td>";
                        break;
                    }
                }
            }
       $day2_22 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='183000'";
        $query2_22=mysqli_query($db, $day2_22);
            if($query2_22){
                while($row2_22 = mysqli_fetch_array($query2_22, MYSQLI_NUM)){
                    $a2_22 = $row2_22[3]-$row2_22[2];
                    if($a2_22==30000){
                        $haha2_22 = "rowspan=6";
                    }
                    if($a2_22==20000){
                        $haha2_22= "rowspan=4";
                    }
                    if($a2_22==13000){
                        $haha2_22 = "rowspan=3";
                    }
                    if($a2_22==10000){
                        $haha2_22 = "rowspan=2";
                    }
                    $sec2_22 = $row2_22[4];
                    $ins2_22 = $row2_22[5];
                    $dep2_22 = $row2_22[6];
                    $sc2_22 = $row2_22[7];
                    $yr2_22 = $row2_22[8];
                    if($row2_22[2]==183000){
                        $td2_22="<td $haha2_22>$sec2_22<br>$ins2_22<br>$dep2_22<br>$sc2_22<br>$yr2_22</td>";
                        break;
                    }
                }
            }
       $day2_23 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='190000'";
        $query2_23=mysqli_query($db, $day2_23);
            if($query2_23){
                while($row2_23 = mysqli_fetch_array($query2_23, MYSQLI_NUM)){
                    $a2_23 = $row2_23[3]-$row2_23[2];
                    if($a2_23==30000){
                        $haha2_23 = "rowspan=6";
                    }
                    if($a2_23==20000){
                        $haha2_23= "rowspan=4";
                    }
                    if($a2_23==13000){
                        $haha2_23 = "rowspan=3";
                    }
                    if($a2_23==10000){
                        $haha2_23 = "rowspan=2";
                    }
                    $sec2_23 = $row2_23[4];
                    $ins2_23 = $row2_23[5];
                    $dep2_23 = $row2_23[6];
                    $sc2_23 = $row2_23[7];
                    $yr2_23 = $row2_23[8];
                    if($row2_23[2]==190000){
                        $td2_23="<td $haha2_23>$sec2_23<br>$ins2_23<br>$dep2_23<br>$sc2_23<br>$yr2_23</td>";
                        break;
                    }
                }
            }
       $day2_24 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='193000'";
        $query2_24=mysqli_query($db, $day2_24);
            if($query2_24){
                while($row2_24 = mysqli_fetch_array($query2_24, MYSQLI_NUM)){
                    $a2_24 = $row2_24[3]-$row2_24[2];
                    if($a2_24==30000){
                        $haha2_24 = "rowspan=6";
                    }
                    if($a2_24==20000){
                        $haha2_24= "rowspan=4";
                    }
                    if($a2_24==13000){
                        $haha2_24 = "rowspan=3";
                    }
                    if($a2_24==10000){
                        $haha2_24 = "rowspan=2";
                    }
                    $sec2_24 = $row2_24[4];
                    $ins2_24 = $row2_24[5];
                    $dep2_24 = $row2_24[6];
                    $sc2_24 = $row2_24[7];
                    $yr2_24 = $row2_24[8];
                    if($row2_24[2]==193000){
                        $td2_24="<td $haha2_24>$sec2_24<br>$ins2_24<br>$dep2_24<br>$sc2_24<br>$yr2_24</td>";
                        break;
                    }
                }
            }
       $day2_25 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='200000'";
        $query2_25=mysqli_query($db, $day2_25);
            if($query2_25){
                while($row2_25 = mysqli_fetch_array($query2_25, MYSQLI_NUM)){
                    $a2_25 = $row2_25[3]-$row2_25[2];
                    if($a2_25==30000){
                        $haha2_25 = "rowspan=6";
                    }
                    if($a2_25==20000){
                        $haha2_25= "rowspan=4";
                    }
                    if($a2_25==13000){
                        $haha2_25 = "rowspan=3";
                    }
                    if($a2_25==10000){
                        $haha2_25 = "rowspan=2";
                    }
                    $sec2_25 = $row2_25[4];
                    $ins2_25 = $row2_25[5];
                    $dep2_25 = $row2_25[6];
                    $sc2_25 = $row2_25[7];
                    $yr2_25 = $row2_25[8];
                    if($row2_25[2]==200000){
                        $td2_25="<td $haha2_25>$sec2_25<br>$ins2_25<br>$dep2_25<br>$sc2_25<br>$yr2_25</td>";
                        break;
                    }
                }
            }
       $day2_26 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Tuesday' AND Time_start='203000'";
        $query2_26=mysqli_query($db, $day2_26);
            if($query2_26){
                while($row2_26 = mysqli_fetch_array($query2_26, MYSQLI_NUM)){
                    $a2_26 = $row2_26[3]-$row2_26[2];
                    if($a2_26==30000){
                        $haha2_26 = "rowspan=6";
                    }
                    if($a2_26==20000){
                        $haha2_26= "rowspan=4";
                    }
                    if($a2_26==13000){
                        $haha2_26 = "rowspan=3";
                    }
                    if($a2_26==10000){
                        $haha2_26 = "rowspan=2";
                    }
                    $sec2_26 = $row2_26[4];
                    $ins2_26 = $row2_26[5];
                    $dep2_26 = $row2_26[6];
                    $sc2_26 = $row2_26[7];
                    $yr2_26 = $row2_26[8];
                    if($row2_26[2]==203000){
                        $td2_26="<td $haha2_26>$sec2_26<br>$ins2_26<br>$dep2_26<br>$sc2_26<br>$yr2_26</td>";
                        break;
                    }
                }
            }

            //Wednesday
        $day3 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='73000'";
        $query3=mysqli_query($db, $day3);
            if($query3){
                while($row3 = mysqli_fetch_array($query3, MYSQLI_NUM)){
                    $a3 = $row3[3]-$row3[2];
                    if($a3==30000){
                        $haha3 = "rowspan=6";
                    }
                    if($a3==20000){
                        $haha3 = "rowspan=4";
                    }
                    if($a3==13000){
                        $haha3 = "rowspan=3";
                    }
                    if($a3==10000){
                        $haha3 = "rowspan=2";
                    }
                    $sec3 = $row3[4];
                    $ins3 = $row3[5];
                    $dep3 = $row3[6];
                    $sc3 = $row3[7];
                    $yr3 = $row3[8];
                    if($row3[2]==73000){
                        $td3="<td $haha3>$sec3<br>$ins3<br>$dep3<br>$sc3<br>$yr3</td>";
                        break;
                    }
                }
            }
        $day3_1 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='80000'";
        $query3_1=mysqli_query($db, $day3_1);
            if($query3_1){
                while($row3_1 = mysqli_fetch_array($query3_1, MYSQLI_NUM)){
                    $a3_1 = $row3_1[3]-$row3_1[2];
                    if($a3_1==30000){
                        $haha3_1 = "rowspan=6";
                    }
                    if($a3_1==20000){
                        $haha3_1= "rowspan=4";
                    }
                    if($a3_1==13000){
                        $haha3_1 = "rowspan=3";
                    }
                    if($a3_1==10000){
                        $haha3_1 = "rowspan=2";
                    }
                    $sec3_1 = $row3_1[4];
                    $ins3_1 = $row3_1[5];
                    $dep3_1 = $row3_1[6];
                    $sc3_1 = $row3_1[7];
                    $yr3_1 = $row3_1[8];
                    if($row3_1[2]==80000){
                        $td3_1="<td $haha3_1>$sec3_1<br>$ins3_1<br>$dep3_1<br>$sc3_1<br>$yr3_1</td>";
                        break;
                    }
                }
            }
        $day3_2 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='83000'";
        $query3_2=mysqli_query($db, $day3_2);
            if($query3_2){
                while($row3_2 = mysqli_fetch_array($query3_2, MYSQLI_NUM)){
                    $a3_2 = $row3_2[3]-$row3_2[2];
                    if($a3_2==30000){
                        $haha3_2 = "rowspan=6";
                    }
                    if($a3_2==20000){
                        $haha3_2= "rowspan=4";
                    }
                    if($a3_2==13000){
                        $haha3_2 = "rowspan=3";
                    }
                    if($a3_2==10000){
                        $haha3_2 = "rowspan=2";
                    }
                    $sec3_2 = $row3_2[4];
                    $ins3_2 = $row3_2[5];
                    $dep3_2 = $row3_2[6];
                    $sc3_2 = $row3_2[7];
                    $yr3_2 = $row3_2[8];
                    if($row3_2[2]==83000){
                        $td3_2="<td $haha3_2>$sec3_2<br>$ins3_2<br>$dep3_2<br>$sc3_2<br>$yr3_2</td>";
                        break;
                    }
                }
            }
        $day3_3 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='90000'";
        $query3_3=mysqli_query($db, $day3_3);
            if($query3_3){
                while($row3_3 = mysqli_fetch_array($query3_3, MYSQLI_NUM)){
                    $a3_3 = $row3_3[3]-$row3_3[2];
                    if($a3_3==30000){
                        $haha3_3 = "rowspan=6";
                    }
                    if($a3_3==20000){
                        $haha3_3= "rowspan=4";
                    }
                    if($a3_3==13000||$a3_3==17000){
                        $haha3_3 = "rowspan=3";
                    }
                    if($a3_3==10000){
                        $haha3_3 = "rowspan=2";
                    }
                    $sec3_3 = $row3_3[4];
                    $ins3_3 = $row3_3[5];
                    $dep3_3 = $row3_3[6];
                    $sc3_3 = $row3_3[7];
                    $yr3_3 = $row3_3[8];
                    if($row3_3[2]==90000){
                        $td3_3="<td $haha3_3>$sec3_3<br>$ins3_3<br>$dep3_3<br>$sc3_3<br>$yr3_3</td>";
                        break;
                    }
                }
            }
        $day3_4 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='93000'";
        $query3_4=mysqli_query($db, $day3_4);
            if($query3_4){
                while($row3_4 = mysqli_fetch_array($query3_4, MYSQLI_NUM)){
                    $a3_4 = $row3_4[3]-$row3_4[2];
                    if($a3_4==30000){
                        $haha3_4 = "rowspan=6";
                    }
                    if($a3_4==20000){
                        $haha3_4= "rowspan=4";
                    }
                    if($a3_4==13000||$a3_4==17000){
                        $haha3_4 = "rowspan=3";
                    }
                    if($a3_4==10000){
                        $haha3_4 = "rowspan=2";
                    }                    
                    $sec3_4 = $row3_4[4];
                    $ins3_4 = $row3_4[5];
                    $dep3_4 = $row3_4[6];
                    $sc3_4 = $row3_4[7];
                    $yr3_4 = $row3_4[8];
                    if($row3_4[2]==93000){
                        $td3_4="<td $haha3_4>$sec3_4<br>$ins3_4<br>$dep3_4<br>$sc3_4<br>$yr3_4</td>";
                        break;
                    }
                }
            }
        $day3_5 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='100000'";
        $query3_5=mysqli_query($db, $day3_5);
            if($query3_5){
                while($row3_5 = mysqli_fetch_array($query3_5, MYSQLI_NUM)){
                    $a3_5 = $row3_5[3]-$row3_5[2];
                    if($a3_5==30000){
                        $haha3_5 = "rowspan=6";
                    }
                    if($a3_5==20000){
                        $haha3_5= "rowspan=4";
                    }
                    if($a3_5==13000){
                        $haha3_5 = "rowspan=3";
                    }
                    if($a3_5==10000){
                        $haha3_5 = "rowspan=2";
                    }
                    $sec3_5 = $row3_5[4];
                    $ins3_5 = $row3_5[5];
                    $dep3_5 = $row3_5[6];
                    $sc3_5 = $row3_5[7];
                    $yr3_5 = $row3_5[8];
                    if($row3_5[2]==100000){
                        $td3_5="<td $haha3_5>$sec3_5<br>$ins3_5<br>$dep3_5<br>$sc3_5<br>$yr3_5</td>";
                        break;
                    }
                }
            }
        $day3_6 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='103000'";
        $query3_6=mysqli_query($db, $day3_6);
            if($query3_6){
                while($row3_6 = mysqli_fetch_array($query3_6, MYSQLI_NUM)){
                    $a3_6 = $row3_6[3]-$row3_6[2];
                    if($a3_6==30000){
                        $haha3_6 = "rowspan=6";
                    }
                    if($a3_6==20000){
                        $haha3_6= "rowspan=4";
                    }
                    if($a3_6==13000){
                        $haha3_6 = "rowspan=3";
                    }
                    if($a3_6==10000){
                        $haha3_6 = "rowspan=2";
                    }
                    $sec3_6 = $row3_6[4];
                    $ins3_6 = $row3_6[5];
                    $dep3_6 = $row3_6[6];
                    $sc3_6 = $row3_6[7];
                    $yr3_6 = $row3_6[8];
                    if($row3_6[2]==103000){
                        $td3_6="<td $haha3_6>$sec3_6<br>$ins3_6<br>$dep3_6<br>$sc3_6<br>$yr3_6</td>";
                        break;
                    }
                }
            }
        $day3_7 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='110000'";
        $query3_7=mysqli_query($db, $day3_7);
            if($query3_7){
                while($row3_7 = mysqli_fetch_array($query3_7, MYSQLI_NUM)){
                    $a3_7 = $row3_7[3]-$row3_7[2];
                    if($a3_7==30000){
                        $haha3_7 = "rowspan=6";
                    }
                    if($a3_7==20000){
                        $haha3_7= "rowspan=4";
                    }
                    if($a3_7==13000){
                        $haha3_7 = "rowspan=3";
                    }
                    if($a3_7==10000){
                        $haha3_7 = "rowspan=2";
                    }
                    $sec3_7 = $row3_7[4];
                    $ins3_7 = $row3_7[5];
                    $dep3_7 = $row3_7[6];
                    $sc3_7 = $row3_7[7];
                    $yr3_7 = $row3_7[8];
                    if($row3_7[2]==110000){
                        $td3_7="<td $haha3_7>$sec3_7<br>$ins3_7<br>$dep3_7<br>$sc3_7<br>$yr3_7</td>";
                        break;
                    }
                }
            }
        $day3_8 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='113000'";
        $query3_8=mysqli_query($db, $day3_8);
            if($query3_8){
                while($row3_8 = mysqli_fetch_array($query3_8, MYSQLI_NUM)){
                    $a3_8 = $row3_8[3]-$row3_8[2];
                    if($a3_8==30000){
                        $haha3_8 = "rowspan=6";
                    }
                    if($a3_8==20000){
                        $haha3_8= "rowspan=4";
                    }
                    if($a3_8==13000){
                        $haha3_8 = "rowspan=3";
                    }
                    if($a3_8==10000){
                        $haha3_8 = "rowspan=2";
                    }
                    $sec3_8 = $row3_8[4];
                    $ins3_8 = $row3_8[5];
                    $dep3_8 = $row3_8[6];
                    $sc3_8 = $row3_8[7];
                    $yr3_8 = $row3_8[8];
                    if($row3_8[2]==113000){
                        $td3_8="<td $haha3_8>$sec3_8<br>$ins3_8<br>$dep3_8<br>$sc3_8<br>$yr3_8</td>";
                        break;
                    }
                }
            }
       $day3_9 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='120000'";
        $query3_9=mysqli_query($db, $day3_9);
            if($query3_9){
                while($row3_9 = mysqli_fetch_array($query3_9, MYSQLI_NUM)){
                    $a3_9 = $row3_9[3]-$row3_9[2];
                    if($a3_9==30000){
                        $haha3_9 = "rowspan=6";
                    }
                    if($a3_9==20000){
                        $haha3_9= "rowspan=4";
                    }
                    if($a3_9==13000){
                        $haha3_9 = "rowspan=3";
                    }
                    if($a3_9==10000){
                        $haha3_9 = "rowspan=2";
                    }
                    $sec3_9 = $row3_9[4];
                    $ins3_9 = $row3_9[5];
                    $dep3_9 = $row3_9[6];
                    $sc3_9 = $row3_9[7];
                    $yr3_9 = $row3_9[8];
                    if($row3_9[2]==120000){
                        $td3_9="<td $haha3_9>$sec3_9<br>$ins3_9<br>$dep3_9<br>$sc3_9<br>$yr3_9</td>";
                        break;
                    }
                }
            }
       $day3_10 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='123000'";
        $query3_10=mysqli_query($db, $day3_10);
            if($query3_10){
                while($row3_10 = mysqli_fetch_array($query3_10, MYSQLI_NUM)){
                    $a3_10 = $row3_10[3]-$row3_10[2];
                    if($a3_10==30000){
                        $haha3_10 = "rowspan=6";
                    }
                    if($a3_10==20000){
                        $haha3_10= "rowspan=4";
                    }
                    if($a3_10==13000){
                        $haha3_10 = "rowspan=3";
                    }
                    if($a3_10==10000){
                        $haha3_10 = "rowspan=2";
                    }
                    $sec3_10 = $row3_10[4];
                    $ins3_10 = $row3_10[5];
                    $dep3_10 = $row3_10[6];
                    $sc3_10 = $row3_10[7];
                    $yr3_10 = $row3_10[8];
                    if($row3_10[2]==123000){
                        $td3_10="<td $haha3_10>$sec3_10<br>$ins3_10<br>$dep3_10<br>$sc3_10<br>$yr3_10</td>";
                        break;
                    }
                }
            }
       $day3_11 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='130000'";
        $query3_11=mysqli_query($db, $day3_11);
            if($query3_11){
                while($row3_11 = mysqli_fetch_array($query3_11, MYSQLI_NUM)){
                    $a3_11 = $row3_11[3]-$row3_11[2];
                    if($a3_11==30000){
                        $haha3_11 = "rowspan=6";
                    }
                    if($a3_11==20000){
                        $haha3_11= "rowspan=4";
                    }
                    if($a3_11==13000){
                        $haha3_11 = "rowspan=3";
                    }
                    if($a3_11==10000){
                        $haha3_11 = "rowspan=2";
                    }
                    $sec3_11 = $row3_11[4];
                    $ins3_11 = $row3_11[5];
                    $dep3_11 = $row3_11[6];
                    $sc3_11 = $row3_11[7];
                    $yr3_11 = $row3_11[8];
                    if($row3_11[2]==130000){
                        $td3_11="<td $haha3_11>$sec3_11<br>$ins3_11<br>$dep3_11<br>$sc3_11<br>$yr3_11</td>";
                        break;
                    }
                }
            }
       $day3_12 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='133000'";
        $query3_12=mysqli_query($db, $day3_12);
            if($query3_12){
                while($row3_12 = mysqli_fetch_array($query3_12, MYSQLI_NUM)){
                    $a3_12 = $row3_12[3]-$row3_12[2];
                    if($a3_12==30000){
                        $haha3_12 = "rowspan=6";
                    }
                    if($a3_12==20000){
                        $haha3_12= "rowspan=4";
                    }
                    if($a3_12==13000){
                        $haha3_12 = "rowspan=3";
                    }
                    if($a3_12==10000){
                        $haha3_12 = "rowspan=2";
                    }
                    $sec3_12 = $row3_12[4];
                    $ins3_12 = $row3_12[5];
                    $dep3_12 = $row3_12[6];
                    $sc3_12 = $row3_12[7];
                    $yr3_12 = $row3_12[8];
                    if($row3_12[2]==133000){
                        $td3_12="<td $haha3_12>$sec3_12<br>$ins3_12<br>$dep3_12<br>$sc3_12<br>$yr3_12</td>";
                        break;
                    }
                }
            }
       $day3_13 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='140000'";
        $query3_13=mysqli_query($db, $day3_13);
            if($query3_13){
                while($row3_13 = mysqli_fetch_array($query3_13, MYSQLI_NUM)){
                    $a3_13 = $row3_13[3]-$row3_13[2];
                    if($a3_13==30000){
                        $haha3_13 = "rowspan=6";
                    }
                    if($a3_13==20000){
                        $haha3_13= "rowspan=4";
                    }
                    if($a3_13==13000){
                        $haha3_13 = "rowspan=3";
                    }
                    if($a3_13==10000){
                        $haha3_13 = "rowspan=2";
                    }
                    $sec3_13 = $row3_13[4];
                    $ins3_13 = $row3_13[5];
                    $dep3_13 = $row3_13[6];
                    $sc3_13 = $row3_13[7];
                    $yr3_13 = $row3_13[8];
                    if($row3_13[2]==140000){
                        $td3_13="<td $haha3_13>$sec3_13<br>$ins3_13<br>$dep3_13<br>$sc3_13<br>$yr3_13</td>";
                        break;
                    }
                }
            }
       $day3_14 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='143000'";
        $query3_14=mysqli_query($db, $day3_14);
            if($query3_14){
                while($row3_14 = mysqli_fetch_array($query3_14, MYSQLI_NUM)){
                    $a3_14 = $row3_14[3]-$row3_14[2];
                    if($a3_14==30000){
                        $haha3_14 = "rowspan=6";
                    }
                    if($a3_14==20000){
                        $haha3_14= "rowspan=4";
                    }
                    if($a3_14==13000){
                        $haha3_14 = "rowspan=3";
                    }
                    if($a3_14==10000){
                        $haha3_14 = "rowspan=2";
                    }
                    $sec3_14 = $row3_14[4];
                    $ins3_14 = $row3_14[5];
                    $dep3_14 = $row3_14[6];
                    $sc3_14 = $row3_14[7];
                    $yr3_14 = $row3_14[8];
                    if($row3_14[2]==143000){
                        $td3_14="<td $haha3_14>$sec3_14<br>$ins3_14<br>$dep3_14<br>$sc3_14<br>$yr3_14</td>";
                        break;
                    }
                }
            }
       $day3_15 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='150000'";
        $query3_15=mysqli_query($db, $day3_15);
            if($query3_15){
                while($row3_15 = mysqli_fetch_array($query3_15, MYSQLI_NUM)){
                    $a3_15 = $row3_15[3]-$row3_15[2];
                    if($a3_15==30000){
                        $haha3_15 = "rowspan=6";
                    }
                    if($a3_15==20000){
                        $haha3_15= "rowspan=4";
                    }
                    if($a3_15==13000){
                        $haha3_15 = "rowspan=3";
                    }
                    if($a3_15==10000){
                        $haha3_15 = "rowspan=2";
                    }
                    $sec3_15 = $row3_15[4];
                    $ins3_15 = $row3_15[5];
                    $dep3_15 = $row3_15[6];
                    $sc3_15 = $row3_15[7];
                    $yr3_15 = $row3_15[8];
                    if($row3_15[2]==150000){
                        $td3_15="<td $haha3_15>$sec3_15<br>$ins3_15<br>$dep3_15<br>$sc3_15<br>$yr3_15</td>";
                        break;
                    }
                }
            }
       $day3_16 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='153000'";
        $query3_16=mysqli_query($db, $day3_16);
            if($query3_16){
                while($row3_16 = mysqli_fetch_array($query3_16, MYSQLI_NUM)){
                    $a3_16 = $row3_16[3]-$row3_16[2];
                    if($a3_16==30000){
                        $haha3_16 = "rowspan=6";
                    }
                    if($a3_16==20000){
                        $haha3_16= "rowspan=4";
                    }
                    if($a3_16==13000){
                        $haha3_16 = "rowspan=3";
                    }
                    if($a3_16==10000){
                        $haha3_16 = "rowspan=2";
                    }
                    $sec3_16 = $row3_16[4];
                    $ins3_16 = $row3_16[5];
                    $dep3_16 = $row3_16[6];
                    $sc3_16 = $row3_16[7];
                    $yr3_16 = $row3_16[8];
                    if($row3_16[2]==153000){
                        $td3_16="<td $haha3_16>$sec3_16<br>$ins3_16<br>$dep3_16<br>$sc3_16<br>$yr3_16</td>";
                        break;
                    }
                }
            }
       $day3_17 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='160000'";
        $query3_17=mysqli_query($db, $day3_17);
            if($query3_17){
                while($row3_17 = mysqli_fetch_array($query3_17, MYSQLI_NUM)){
                    $a3_17 = $row3_17[3]-$row3_17[2];
                    if($a3_17==30000){
                        $haha3_17 = "rowspan=6";
                    }
                    if($a3_17==20000){
                        $haha3_17= "rowspan=4";
                    }
                    if($a3_17==13000){
                        $haha3_17 = "rowspan=3";
                    }
                    if($a3_17==10000){
                        $haha3_17 = "rowspan=2";
                    }
                    $sec3_17 = $row3_17[4];
                    $ins3_17 = $row3_17[5];
                    $dep3_17 = $row3_17[6];
                    $sc3_17 = $row3_17[7];
                    $yr3_17 = $row3_17[8];
                    if($row3_17[2]==160000){
                        $td3_17="<td $haha3_17>$sec3_17<br>$ins3_17<br>$dep3_17<br>$sc3_17<br>$yr3_17</td>";
                        break;
                    }
                }
            }
       $day3_18 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='163000'";
        $query3_18=mysqli_query($db, $day3_18);
            if($query3_18){
                while($row3_18 = mysqli_fetch_array($query3_18, MYSQLI_NUM)){
                    $a3_18 = $row3_18[3]-$row3_18[2];
                    if($a3_18==30000){
                        $haha3_18 = "rowspan=6";
                    }
                    if($a3_18==20000){
                        $haha3_18= "rowspan=4";
                    }
                    if($a3_18==13000){
                        $haha3_18 = "rowspan=3";
                    }
                    if($a3_18==10000){
                        $haha3_18 = "rowspan=2";
                    }
                    $sec3_18 = $row3_18[4];
                    $ins3_18 = $row3_18[5];
                    $dep3_18 = $row3_18[6];
                    $sc3_18 = $row3_18[7];
                    $yr3_18 = $row3_18[8];
                    if($row3_18[2]==163000){
                        $td3_18="<td $haha3_18>$sec3_18<br>$ins3_18<br>$dep3_18<br>$sc3_18<br>$yr3_18</td>";
                        break;
                    }
                }
            }
       $day3_19 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='170000'";
        $query3_19=mysqli_query($db, $day3_19);
            if($query3_19){
                while($row3_19 = mysqli_fetch_array($query3_19, MYSQLI_NUM)){
                    $a3_19 = $row3_19[3]-$row3_19[2];
                    if($a3_19==30000){
                        $haha3_19 = "rowspan=6";
                    }
                    if($a3_19==20000){
                        $haha3_19= "rowspan=4";
                    }
                    if($a3_19==13000){
                        $haha3_19 = "rowspan=3";
                    }
                    if($a3_19==10000){
                        $haha3_19 = "rowspan=2";
                    }
                    $sec3_19 = $row3_19[4];
                    $ins3_19 = $row3_19[5];
                    $dep3_19 = $row3_19[6];
                    $sc3_19 = $row3_19[7];
                    $yr3_19 = $row3_19[8];
                    if($row3_19[2]==170000){
                        $td3_19="<td $haha3_19>$sec3_19<br>$ins3_19<br>$dep3_19<br>$sc3_19<br>$yr3_19</td>";
                        break;
                    }
                }
            }
       $day3_20 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='173000'";
        $query3_20=mysqli_query($db, $day3_20);
            if($query3_20){
                while($row3_20 = mysqli_fetch_array($query3_20, MYSQLI_NUM)){
                    $a3_20 = $row3_20[3]-$row3_20[2];
                    if($a3_20==30000){
                        $haha3_20 = "rowspan=6";
                    }
                    if($a3_20==20000){
                        $haha3_20= "rowspan=4";
                    }
                    if($a3_20==13000){
                        $haha3_20 = "rowspan=3";
                    }
                    if($a3_20==10000){
                        $haha3_20 = "rowspan=2";
                    }
                    $sec3_20 = $row3_20[4];
                    $ins3_20 = $row3_20[5];
                    $dep3_20 = $row3_20[6];
                    $sc3_20 = $row3_20[7];
                    $yr3_20 = $row3_20[8];
                    if($row3_20[2]==173000){
                        $td3_20="<td $haha3_20>$sec3_20<br>$ins3_20<br>$dep3_20<br>$sc3_20<br>$yr3_20</td>";
                        break;
                    }
                }
            }
       $day3_21 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='180000'";
        $query3_21=mysqli_query($db, $day3_21);
            if($query3_21){
                while($row3_21 = mysqli_fetch_array($query3_21, MYSQLI_NUM)){
                    $a3_21 = $row3_21[3]-$row3_21[2];
                    if($a3_21==30000){
                        $haha3_21 = "rowspan=6";
                    }
                    if($a3_21==20000){
                        $haha3_21= "rowspan=4";
                    }
                    if($a3_21==13000){
                        $haha3_21 = "rowspan=3";
                    }
                    if($a3_21==10000){
                        $haha3_21 = "rowspan=2";
                    }
                    $sec3_21 = $row3_21[4];
                    $ins3_21 = $row3_21[5];
                    $dep3_21 = $row3_21[6];
                    $sc3_21 = $row3_21[7];
                    $yr3_21 = $row3_21[8];
                    if($row3_21[2]==180000){
                        $td3_21="<td $haha3_21>$sec3_21<br>$ins3_21<br>$dep3_21<br>$sc3_21<br>$yr3_21</td>";
                        break;
                    }
                }
            }
       $day3_22 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='183000'";
        $query3_22=mysqli_query($db, $day3_22);
            if($query3_22){
                while($row3_22 = mysqli_fetch_array($query3_22, MYSQLI_NUM)){
                    $a3_22 = $row3_22[3]-$row3_22[2];
                    if($a3_22==30000){
                        $haha3_22 = "rowspan=6";
                    }
                    if($a3_22==20000){
                        $haha3_22= "rowspan=4";
                    }
                    if($a3_22==13000){
                        $haha3_22 = "rowspan=3";
                    }
                    if($a3_22==10000){
                        $haha3_22 = "rowspan=2";
                    }
                    $sec3_22 = $row3_22[4];
                    $ins3_22 = $row3_22[5];
                    $dep3_22 = $row3_22[6];
                    $sc3_22 = $row3_22[7];
                    $yr3_22 = $row3_22[8];
                    if($row3_22[2]==183000){
                        $td3_22="<td $haha3_22>$sec3_22<br>$ins3_22<br>$dep3_22<br>$sc3_22<br>$yr3_22</td>";
                        break;
                    }
                }
            }
       $day3_23 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='190000'";
        $query3_23=mysqli_query($db, $day3_23);
            if($query3_23){
                while($row3_23 = mysqli_fetch_array($query3_23, MYSQLI_NUM)){
                    $a3_23 = $row3_23[3]-$row3_23[2];
                    if($a3_23==30000){
                        $haha3_23 = "rowspan=6";
                    }
                    if($a3_23==20000){
                        $haha3_23= "rowspan=4";
                    }
                    if($a3_23==13000){
                        $haha3_23 = "rowspan=3";
                    }
                    if($a3_23==10000){
                        $haha3_23 = "rowspan=2";
                    }
                    $sec3_23 = $row3_23[4];
                    $ins3_23 = $row3_23[5];
                    $dep3_23 = $row3_23[6];
                    $sc3_23 = $row3_23[7];
                    $yr3_23 = $row3_23[8];
                    if($row3_23[2]==190000){
                        $td3_23="<td $haha3_23>$sec3_23<br>$ins3_23<br>$dep3_23<br>$sc3_23<br>$yr3_23</td>";
                        break;
                    }
                }
            }
       $day3_24 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='193000'";
        $query3_24=mysqli_query($db, $day3_24);
            if($query3_24){
                while($row3_24 = mysqli_fetch_array($query3_24, MYSQLI_NUM)){
                    $a3_24 = $row3_24[3]-$row3_24[2];
                    if($a3_24==30000){
                        $haha3_24 = "rowspan=6";
                    }
                    if($a3_24==20000){
                        $haha3_24= "rowspan=4";
                    }
                    if($a3_24==13000){
                        $haha3_24 = "rowspan=3";
                    }
                    if($a3_24==10000){
                        $haha3_24 = "rowspan=2";
                    }
                    $sec3_24 = $row3_24[4];
                    $ins3_24 = $row3_24[5];
                    $dep3_24 = $row3_24[6];
                    $sc3_24 = $row3_24[7];
                    $yr3_24 = $row3_24[8];
                    if($row3_24[2]==193000){
                        $td3_24="<td $haha3_24>$sec3_24<br>$ins3_24<br>$dep3_24<br>$sc3_24<br>$yr3_24</td>";
                        break;
                    }
                }
            }
       $day3_25 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='200000'";
        $query3_25=mysqli_query($db, $day3_25);
            if($query3_25){
                while($row3_25 = mysqli_fetch_array($query3_25, MYSQLI_NUM)){
                    $a3_25 = $row3_25[3]-$row3_25[2];
                    if($a3_25==30000){
                        $haha3_25 = "rowspan=6";
                    }
                    if($a3_25==20000){
                        $haha3_25= "rowspan=4";
                    }
                    if($a3_25==13000){
                        $haha3_25 = "rowspan=3";
                    }
                    if($a3_25==10000){
                        $haha3_25 = "rowspan=2";
                    }
                    $sec3_25 = $row3_25[4];
                    $ins3_25 = $row3_25[5];
                    $dep3_25 = $row3_25[6];
                    $sc3_25 = $row3_25[7];
                    $yr3_25 = $row3_25[8];
                    if($row3_25[2]==200000){
                        $td3_25="<td $haha3_25>$sec3_25<br>$ins3_25<br>$dep3_25<br>$sc3_25<br>$yr3_25</td>";
                        break;
                    }
                }
            }
       $day3_26 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Wednesday' AND Time_start='203000'";
        $query3_26=mysqli_query($db, $day3_26);
            if($query3_26){
                while($row3_26 = mysqli_fetch_array($query3_26, MYSQLI_NUM)){
                    $a3_26 = $row3_26[3]-$row3_26[2];
                    if($a3_26==30000){
                        $haha3_26 = "rowspan=6";
                    }
                    if($a3_26==20000){
                        $haha3_26= "rowspan=4";
                    }
                    if($a3_26==13000){
                        $haha3_26 = "rowspan=3";
                    }
                    if($a3_26==10000){
                        $haha3_26 = "rowspan=2";
                    }
                    $sec3_26 = $row3_26[4];
                    $ins3_26 = $row3_26[5];
                    $dep3_26 = $row3_26[6];
                    $sc3_26 = $row3_26[7];
                    $yr3_26 = $row3_26[8];
                    if($row3_26[2]==203000){
                        $td3_26="<td $haha3_26>$sec3_26<br>$ins3_26<br>$dep3_26<br>$sc3_26<br>$yr3_26</td>";
                        break;
                    }
                }
            }

            //Thursday
        $day4 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='73000'";
        $query4=mysqli_query($db, $day4);
            if($query4){
                while($row4 = mysqli_fetch_array($query4, MYSQLI_NUM)){
                    $a4 = $row4[3]-$row4[2];
                    if($a4==30000){
                        $haha4 = "rowspan=6";
                    }
                    if($a4==20000){
                        $haha4 = "rowspan=4";
                    }
                    if($a4==13000){
                        $haha4 = "rowspan=3";
                    }
                    if($a4==10000){
                        $haha4 = "rowspan=2";
                    }
                    $sec4 = $row4[4];
                    $ins4 = $row4[5];
                    $dep4 = $row4[6];
                    $sc4 = $row4[7];
                    $yr4 = $row4[8];
                    if($row4[2]==73000){
                        $td4="<td $haha4>$sec4<br>$ins4<br>$dep4<br>$sc4<br>$yr4</td>";
                        break;
                    }
                }
            }
        $day4_1 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='80000'";
        $query4_1=mysqli_query($db, $day4_1);
            if($query4_1){
                while($row4_1 = mysqli_fetch_array($query4_1, MYSQLI_NUM)){
                    $a4_1 = $row4_1[3]-$row4_1[2];
                    if($a4_1==30000){
                        $haha4_1 = "rowspan=6";
                    }
                    if($a4_1==20000){
                        $haha4_1= "rowspan=4";
                    }
                    if($a4_1==13000){
                        $haha4_1 = "rowspan=3";
                    }
                    if($a4_1==10000){
                        $haha4_1 = "rowspan=2";
                    }
                    $sec4_1 = $row4_1[4];
                    $ins4_1 = $row4_1[5];
                    $dep4_1 = $row4_1[6];
                    $sc4_1 = $row4_1[7];
                    $yr4_1 = $row4_1[8];
                    if($row4_1[2]==80000){
                        $td4_1="<td $haha4_1>$sec4_1<br>$ins4_1<br>$dep4_1<br>$sc4_1<br>$yr4_1</td>";
                        break;
                    }
                }
            }
        $day4_2 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='83000'";
        $query4_2=mysqli_query($db, $day4_2);
            if($query4_2){
                while($row4_2 = mysqli_fetch_array($query4_2, MYSQLI_NUM)){
                    $a4_2 = $row4_2[3]-$row4_2[2];
                    if($a4_2==30000){
                        $haha4_2 = "rowspan=6";
                    }
                    if($a4_2==20000){
                        $haha4_2= "rowspan=4";
                    }
                    if($a4_2==13000){
                        $haha4_2 = "rowspan=3";
                    }
                    if($a4_2==10000){
                        $haha4_2 = "rowspan=2";
                    }
                    $sec4_2 = $row4_2[4];
                    $ins4_2 = $row4_2[5];
                    $dep4_2 = $row4_2[6];
                    $sc4_2 = $row4_2[7];
                    $yr4_2 = $row4_2[8];
                    if($row4_2[2]==83000){
                        $td4_2="<td $haha4_2>$sec4_2<br>$ins4_2<br>$dep4_2<br>$sc4_2<br>$yr4_2</td>";
                        break;
                    }
                }
            }
        $day4_3 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='90000'";
        $query4_3=mysqli_query($db, $day4_3);
            if($query4_3){
                while($row4_3 = mysqli_fetch_array($query4_3, MYSQLI_NUM)){
                    $a4_3 = $row4_3[3]-$row4_3[2];
                    if($a4_3==30000){
                        $haha4_3 = "rowspan=6";
                    }
                    if($a4_3==20000){
                        $haha4_3= "rowspan=4";
                    }
                    if($a4_3==13000||$a4_3==17000){
                        $haha4_3 = "rowspan=3";
                    }
                    if($a4_3==10000){
                        $haha4_3 = "rowspan=2";
                    }
                    $sec4_3 = $row4_3[4];
                    $ins4_3 = $row4_3[5];
                    $dep4_3 = $row4_3[6];
                    $sc4_3 = $row4_3[7];
                    $yr4_3 = $row4_3[8];
                    if($row4_3[2]==90000){
                        $td4_3="<td $haha4_3>$sec4_3<br>$ins4_3<br>$dep4_3<br>$sc4_3<br>$yr4_3</td>";
                        break;
                    }
                }
            }
        $day4_4 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='93000'";
        $query4_4=mysqli_query($db, $day4_4);
            if($query4_4){
                while($row4_4 = mysqli_fetch_array($query4_4, MYSQLI_NUM)){
                    $a4_4 = $row4_4[3]-$row4_4[2];
                    if($a4_4==30000){
                        $haha4_4 = "rowspan=6";
                    }
                    if($a4_4==20000){
                        $haha4_4= "rowspan=4";
                    }
                    if($a4_4==13000||$a4_4==17000){
                        $haha4_4 = "rowspan=3";
                    }
                    if($a4_4==10000){
                        $haha4_4 = "rowspan=2";
                    }                    
                    $sec4_4 = $row4_4[4];
                    $ins4_4 = $row4_4[5];
                    $dep4_4 = $row4_4[6];
                    $sc4_4 = $row4_4[7];
                    $yr4_4 = $row4_4[8];
                    if($row4_4[2]==93000){
                        $td4_4="<td $haha4_4>$sec4_4<br>$ins4_4<br>$dep4_4<br>$sc4_4<br>$yr4_4</td>";
                        break;
                    }
                }
            }
        $day4_5 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='100000'";
        $query4_5=mysqli_query($db, $day4_5);
            if($query4_5){
                while($row4_5 = mysqli_fetch_array($query4_5, MYSQLI_NUM)){
                    $a4_5 = $row4_5[3]-$row4_5[2];
                    if($a4_5==30000){
                        $haha4_5 = "rowspan=6";
                    }
                    if($a4_5==20000){
                        $haha4_5= "rowspan=4";
                    }
                    if($a4_5==13000){
                        $haha4_5 = "rowspan=3";
                    }
                    if($a4_5==10000){
                        $haha4_5 = "rowspan=2";
                    }
                    $sec4_5 = $row4_5[4];
                    $ins4_5 = $row4_5[5];
                    $dep4_5 = $row4_5[6];
                    $sc4_5 = $row4_5[7];
                    $yr4_5 = $row4_5[8];
                    if($row4_5[2]==100000){
                        $td4_5="<td $haha4_5>$sec4_5<br>$ins4_5<br>$dep4_5<br>$sc4_5<br>$yr4_5</td>";
                        break;
                    }
                }
            }
        $day4_6 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='103000'";
        $query4_6=mysqli_query($db, $day4_6);
            if($query4_6){
                while($row4_6 = mysqli_fetch_array($query4_6, MYSQLI_NUM)){
                    $a4_6 = $row4_6[3]-$row4_6[2];
                    if($a4_6==30000){
                        $haha4_6 = "rowspan=6";
                    }
                    if($a4_6==20000){
                        $haha4_6= "rowspan=4";
                    }
                    if($a4_6==13000){
                        $haha4_6 = "rowspan=3";
                    }
                    if($a4_6==10000){
                        $haha4_6 = "rowspan=2";
                    }
                    $sec4_6 = $row4_6[4];
                    $ins4_6 = $row4_6[5];
                    $dep4_6 = $row4_6[6];
                    $sc4_6 = $row4_6[7];
                    $yr4_6 = $row4_6[8];
                    if($row4_6[2]==103000){
                        $td4_6="<td $haha4_6>$sec4_6<br>$ins4_6<br>$dep4_6<br>$sc4_6<br>$yr4_6</td>";
                        break;
                    }
                }
            }
        $day4_7 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='110000'";
        $query4_7=mysqli_query($db, $day4_7);
            if($query4_7){
                while($row4_7 = mysqli_fetch_array($query4_7, MYSQLI_NUM)){
                    $a4_7 = $row4_7[3]-$row4_7[2];
                    if($a4_7==30000){
                        $haha4_7 = "rowspan=6";
                    }
                    if($a4_7==20000){
                        $haha4_7= "rowspan=4";
                    }
                    if($a4_7==13000){
                        $haha4_7 = "rowspan=3";
                    }
                    if($a4_7==10000){
                        $haha4_7 = "rowspan=2";
                    }
                    $sec4_7 = $row4_7[4];
                    $ins4_7 = $row4_7[5];
                    $dep4_7 = $row4_7[6];
                    $sc4_7 = $row4_7[7];
                    $yr4_7 = $row4_7[8];
                    if($row4_7[2]==110000){
                        $td4_7="<td $haha4_7>$sec4_7<br>$ins4_7<br>$dep4_7<br>$sc4_7<br>$yr4_7</td>";
                        break;
                    }
                }
            }
        $day4_8 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='113000'";
        $query4_8=mysqli_query($db, $day4_8);
            if($query4_8){
                while($row4_8 = mysqli_fetch_array($query4_8, MYSQLI_NUM)){
                    $a4_8 = $row4_8[3]-$row4_8[2];
                    if($a4_8==30000){
                        $haha4_8 = "rowspan=6";
                    }
                    if($a4_8==20000){
                        $haha4_8= "rowspan=4";
                    }
                    if($a4_8==13000){
                        $haha4_8 = "rowspan=3";
                    }
                    if($a4_8==10000){
                        $haha4_8 = "rowspan=2";
                    }
                    $sec4_8 = $row4_8[4];
                    $ins4_8 = $row4_8[5];
                    $dep4_8 = $row4_8[6];
                    $sc4_8 = $row4_8[7];
                    $yr4_8 = $row4_8[8];
                    if($row4_8[2]==113000){
                        $td4_8="<td $haha4_8>$sec4_8<br>$ins4_8<br>$dep4_8<br>$sc4_8<br>$yr4_8</td>";
                        break;
                    }
                }
            }
       $day4_9 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='120000'";
        $query4_9=mysqli_query($db, $day4_9);
            if($query4_9){
                while($row4_9 = mysqli_fetch_array($query4_9, MYSQLI_NUM)){
                    $a4_9 = $row4_9[3]-$row4_9[2];
                    if($a4_9==30000){
                        $haha4_9 = "rowspan=6";
                    }
                    if($a4_9==20000){
                        $haha4_9= "rowspan=4";
                    }
                    if($a4_9==13000){
                        $haha4_9 = "rowspan=3";
                    }
                    if($a4_9==10000){
                        $haha4_9 = "rowspan=2";
                    }
                    $sec4_9 = $row4_9[4];
                    $ins4_9 = $row4_9[5];
                    $dep4_9 = $row4_9[6];
                    $sc4_9 = $row4_9[7];
                    $yr4_9 = $row4_9[8];
                    if($row4_9[2]==120000){
                        $td4_9="<td $haha4_9>$sec4_9<br>$ins4_9<br>$dep4_9<br>$sc4_9<br>$yr4_9</td>";
                        break;
                    }
                }
            }
       $day4_10 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='123000'";
        $query4_10=mysqli_query($db, $day4_10);
            if($query4_10){
                while($row4_10 = mysqli_fetch_array($query4_10, MYSQLI_NUM)){
                    $a4_10 = $row4_10[3]-$row4_10[2];
                    if($a4_10==30000){
                        $haha4_10 = "rowspan=6";
                    }
                    if($a4_10==20000){
                        $haha4_10= "rowspan=4";
                    }
                    if($a4_10==13000){
                        $haha4_10 = "rowspan=3";
                    }
                    if($a4_10==10000){
                        $haha4_10 = "rowspan=2";
                    }
                    $sec4_10 = $row4_10[4];
                    $ins4_10 = $row4_10[5];
                    $dep4_10 = $row4_10[6];
                    $sc4_10 = $row4_10[7];
                    $yr4_10 = $row4_10[8];
                    if($row4_10[2]==123000){
                        $td4_10="<td $haha4_10>$sec4_10<br>$ins4_10<br>$dep4_10<br>$sc4_10<br>$yr4_10</td>";
                        break;
                    }
                }
            }
       $day4_11 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='130000'";
        $query4_11=mysqli_query($db, $day4_11);
            if($query4_11){
                while($row4_11 = mysqli_fetch_array($query4_11, MYSQLI_NUM)){
                    $a4_11 = $row4_11[3]-$row4_11[2];
                    if($a4_11==30000){
                        $haha4_11 = "rowspan=6";
                    }
                    if($a4_11==20000){
                        $haha4_11= "rowspan=4";
                    }
                    if($a4_11==13000){
                        $haha4_11 = "rowspan=3";
                    }
                    if($a4_11==10000){
                        $haha4_11 = "rowspan=2";
                    }
                    $sec4_11 = $row4_11[4];
                    $ins4_11 = $row4_11[5];
                    $dep4_11 = $row4_11[6];
                    $sc4_11 = $row4_11[7];
                    $yr4_11 = $row4_11[8];
                    if($row4_11[2]==130000){
                        $td4_11="<td $haha4_11>$sec4_11<br>$ins4_11<br>$dep4_11<br>$sc4_11<br>$yr4_11</td>";
                        break;
                    }
                }
            }
       $day4_12 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='133000'";
        $query4_12=mysqli_query($db, $day4_12);
            if($query4_12){
                while($row4_12 = mysqli_fetch_array($query4_12, MYSQLI_NUM)){
                    $a4_12 = $row4_12[3]-$row4_12[2];
                    if($a4_12==30000){
                        $haha4_12 = "rowspan=6";
                    }
                    if($a4_12==20000){
                        $haha4_12= "rowspan=4";
                    }
                    if($a4_12==13000){
                        $haha4_12 = "rowspan=3";
                    }
                    if($a4_12==10000){
                        $haha4_12 = "rowspan=2";
                    }
                    $sec4_12 = $row4_12[4];
                    $ins4_12 = $row4_12[5];
                    $dep4_12 = $row4_12[6];
                    $sc4_12 = $row4_12[7];
                    $yr4_12 = $row4_12[8];
                    if($row4_12[2]==133000){
                        $td4_12="<td $haha4_12>$sec4_12<br>$ins4_12<br>$dep4_12<br>$sc4_12<br>$yr4_12</td>";
                        break;
                    }
                }
            }
       $day4_13 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='140000'";
        $query4_13=mysqli_query($db, $day4_13);
            if($query4_13){
                while($row4_13 = mysqli_fetch_array($query4_13, MYSQLI_NUM)){
                    $a4_13 = $row4_13[3]-$row4_13[2];
                    if($a4_13==30000){
                        $haha4_13 = "rowspan=6";
                    }
                    if($a4_13==20000){
                        $haha4_13= "rowspan=4";
                    }
                    if($a4_13==13000){
                        $haha4_13 = "rowspan=3";
                    }
                    if($a4_13==10000){
                        $haha4_13 = "rowspan=2";
                    }
                    $sec4_13 = $row4_13[4];
                    $ins4_13 = $row4_13[5];
                    $dep4_13 = $row4_13[6];
                    $sc4_13 = $row4_13[7];
                    $yr4_13 = $row4_13[8];
                    if($row4_13[2]==140000){
                        $td4_13="<td $haha4_13>$sec4_13<br>$ins4_13<br>$dep4_13<br>$sc4_13<br>$yr4_13</td>";
                        break;
                    }
                }
            }
       $day4_14 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='143000'";
        $query4_14=mysqli_query($db, $day4_14);
            if($query4_14){
                while($row4_14 = mysqli_fetch_array($query4_14, MYSQLI_NUM)){
                    $a4_14 = $row4_14[3]-$row4_14[2];
                    if($a4_14==30000){
                        $haha4_14 = "rowspan=6";
                    }
                    if($a4_14==20000){
                        $haha4_14= "rowspan=4";
                    }
                    if($a4_14==13000){
                        $haha4_14 = "rowspan=3";
                    }
                    if($a4_14==10000){
                        $haha4_14 = "rowspan=2";
                    }
                    $sec4_14 = $row4_14[4];
                    $ins4_14 = $row4_14[5];
                    $dep4_14 = $row4_14[6];
                    $sc4_14 = $row4_14[7];
                    $yr4_14 = $row4_14[8];
                    if($row4_14[2]==143000){
                        $td4_14="<td $haha4_14>$sec4_14<br>$ins4_14<br>$dep4_14<br>$sc4_14<br>$yr4_14</td>";
                        break;
                    }
                }
            }
       $day4_15 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='150000'";
        $query4_15=mysqli_query($db, $day4_15);
            if($query4_15){
                while($row4_15 = mysqli_fetch_array($query4_15, MYSQLI_NUM)){
                    $a4_15 = $row4_15[3]-$row4_15[2];
                    if($a4_15==30000){
                        $haha4_15 = "rowspan=6";
                    }
                    if($a4_15==20000){
                        $haha4_15= "rowspan=4";
                    }
                    if($a4_15==13000){
                        $haha4_15 = "rowspan=3";
                    }
                    if($a4_15==10000){
                        $haha4_15 = "rowspan=2";
                    }
                    $sec4_15 = $row4_15[4];
                    $ins4_15 = $row4_15[5];
                    $dep4_15 = $row4_15[6];
                    $sc4_15 = $row4_15[7];
                    $yr4_15 = $row4_15[8];
                    if($row4_15[2]==150000){
                        $td4_15="<td $haha4_15>$sec4_15<br>$ins4_15<br>$dep4_15<br>$sc4_15<br>$yr4_15</td>";
                        break;
                    }
                }
            }
       $day4_16 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='153000'";
        $query4_16=mysqli_query($db, $day4_16);
            if($query4_16){
                while($row4_16 = mysqli_fetch_array($query4_16, MYSQLI_NUM)){
                    $a4_16 = $row4_16[3]-$row4_16[2];
                    if($a4_16==30000){
                        $haha4_16 = "rowspan=6";
                    }
                    if($a4_16==20000){
                        $haha4_16= "rowspan=4";
                    }
                    if($a4_16==13000){
                        $haha4_16 = "rowspan=3";
                    }
                    if($a4_16==10000){
                        $haha4_16 = "rowspan=2";
                    }
                    $sec4_16 = $row4_16[4];
                    $ins4_16 = $row4_16[5];
                    $dep4_16 = $row4_16[6];
                    $sc4_16 = $row4_16[7];
                    $yr4_16 = $row4_16[8];
                    if($row4_16[2]==153000){
                        $td4_16="<td $haha4_16>$sec4_16<br>$ins4_16<br>$dep4_16<br>$sc4_16<br>$yr4_16</td>";
                        break;
                    }
                }
            }
       $day4_17 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='160000'";
        $query4_17=mysqli_query($db, $day4_17);
            if($query4_17){
                while($row4_17 = mysqli_fetch_array($query4_17, MYSQLI_NUM)){
                    $a4_17 = $row4_17[3]-$row4_17[2];
                    if($a4_17==30000){
                        $haha4_17 = "rowspan=6";
                    }
                    if($a4_17==20000){
                        $haha4_17= "rowspan=4";
                    }
                    if($a4_17==13000){
                        $haha4_17 = "rowspan=3";
                    }
                    if($a4_17==10000){
                        $haha4_17 = "rowspan=2";
                    }
                    $sec4_17 = $row4_17[4];
                    $ins4_17 = $row4_17[5];
                    $dep4_17 = $row4_17[6];
                    $sc4_17 = $row4_17[7];
                    $yr4_17 = $row4_17[8];
                    if($row4_17[2]==160000){
                        $td4_17="<td $haha4_17>$sec4_17<br>$ins4_17<br>$dep4_17<br>$sc4_17<br>$yr4_17</td>";
                        break;
                    }
                }
            }
       $day4_18 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='163000'";
        $query4_18=mysqli_query($db, $day4_18);
            if($query4_18){
                while($row4_18 = mysqli_fetch_array($query4_18, MYSQLI_NUM)){
                    $a4_18 = $row4_18[3]-$row4_18[2];
                    if($a4_18==30000){
                        $haha4_18 = "rowspan=6";
                    }
                    if($a4_18==20000){
                        $haha4_18= "rowspan=4";
                    }
                    if($a4_18==13000){
                        $haha4_18 = "rowspan=3";
                    }
                    if($a4_18==10000){
                        $haha4_18 = "rowspan=2";
                    }
                    $sec4_18 = $row4_18[4];
                    $ins4_18 = $row4_18[5];
                    $dep4_18 = $row4_18[6];
                    $sc4_18 = $row4_18[7];
                    $yr4_18 = $row4_18[8];
                    if($row4_18[2]==163000){
                        $td4_18="<td $haha4_18>$sec4_18<br>$ins4_18<br>$dep4_18<br>$sc4_18<br>$yr4_18</td>";
                        break;
                    }
                }
            }
       $day4_19 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='170000'";
        $query4_19=mysqli_query($db, $day4_19);
            if($query4_19){
                while($row4_19 = mysqli_fetch_array($query4_19, MYSQLI_NUM)){
                    $a4_19 = $row4_19[3]-$row4_19[2];
                    if($a4_19==30000){
                        $haha4_19 = "rowspan=6";
                    }
                    if($a4_19==20000){
                        $haha4_19= "rowspan=4";
                    }
                    if($a4_19==13000){
                        $haha4_19 = "rowspan=3";
                    }
                    if($a4_19==10000){
                        $haha4_19 = "rowspan=2";
                    }
                    $sec4_19 = $row4_19[4];
                    $ins4_19 = $row4_19[5];
                    $dep4_19 = $row4_19[6];
                    $sc4_19 = $row4_19[7];
                    $yr4_19 = $row4_19[8];
                    if($row4_19[2]==170000){
                        $td4_19="<td $haha4_19>$sec4_19<br>$ins4_19<br>$dep4_19<br>$sc4_19<br>$yr4_19</td>";
                        break;
                    }
                }
            }
       $day4_20 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='173000'";
        $query4_20=mysqli_query($db, $day4_20);
            if($query4_20){
                while($row4_20 = mysqli_fetch_array($query4_20, MYSQLI_NUM)){
                    $a4_20 = $row4_20[3]-$row4_20[2];
                    if($a4_20==30000){
                        $haha4_20 = "rowspan=6";
                    }
                    if($a4_20==20000){
                        $haha4_20= "rowspan=4";
                    }
                    if($a4_20==13000){
                        $haha4_20 = "rowspan=3";
                    }
                    if($a4_20==10000){
                        $haha4_20 = "rowspan=2";
                    }
                    $sec4_20 = $row4_20[4];
                    $ins4_20 = $row4_20[5];
                    $dep4_20 = $row4_20[6];
                    $sc4_20 = $row4_20[7];
                    $yr4_20 = $row4_20[8];
                    if($row4_20[2]==173000){
                        $td4_20="<td $haha4_20>$sec4_20<br>$ins4_20<br>$dep4_20<br>$sc4_20<br>$yr4_20</td>";
                        break;
                    }
                }
            }
       $day4_21 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='180000'";
        $query4_21=mysqli_query($db, $day4_21);
            if($query4_21){
                while($row4_21 = mysqli_fetch_array($query4_21, MYSQLI_NUM)){
                    $a4_21 = $row4_21[3]-$row4_21[2];
                    if($a4_21==30000){
                        $haha4_21 = "rowspan=6";
                    }
                    if($a4_21==20000){
                        $haha4_21= "rowspan=4";
                    }
                    if($a4_21==13000){
                        $haha4_21 = "rowspan=3";
                    }
                    if($a4_21==10000){
                        $haha4_21 = "rowspan=2";
                    }
                    $sec4_21 = $row4_21[4];
                    $ins4_21 = $row4_21[5];
                    $dep4_21 = $row4_21[6];
                    $sc4_21 = $row4_21[7];
                    $yr4_21 = $row4_21[8];
                    if($row4_21[2]==180000){
                        $td4_21="<td $haha4_21>$sec4_21<br>$ins4_21<br>$dep4_21<br>$sc4_21<br>$yr4_21</td>";
                        break;
                    }
                }
            }
       $day4_22 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='183000'";
        $query4_22=mysqli_query($db, $day4_22);
            if($query4_22){
                while($row4_22 = mysqli_fetch_array($query4_22, MYSQLI_NUM)){
                    $a4_22 = $row4_22[3]-$row4_22[2];
                    if($a4_22==30000){
                        $haha4_22 = "rowspan=6";
                    }
                    if($a4_22==20000){
                        $haha4_22= "rowspan=4";
                    }
                    if($a4_22==13000){
                        $haha4_22 = "rowspan=3";
                    }
                    if($a4_22==10000){
                        $haha4_22 = "rowspan=2";
                    }
                    $sec4_22 = $row4_22[4];
                    $ins4_22 = $row4_22[5];
                    $dep4_22 = $row4_22[6];
                    $sc4_22 = $row4_22[7];
                    $yr4_22 = $row4_22[8];
                    if($row4_22[2]==183000){
                        $td4_22="<td $haha4_22>$sec4_22<br>$ins4_22<br>$dep4_22<br>$sc4_22<br>$yr4_22</td>";
                        break;
                    }
                }
            }
       $day4_23 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='190000'";
        $query4_23=mysqli_query($db, $day4_23);
            if($query4_23){
                while($row4_23 = mysqli_fetch_array($query4_23, MYSQLI_NUM)){
                    $a4_23 = $row4_23[3]-$row4_23[2];
                    if($a4_23==30000){
                        $haha4_23 = "rowspan=6";
                    }
                    if($a4_23==20000){
                        $haha4_23= "rowspan=4";
                    }
                    if($a4_23==13000){
                        $haha4_23 = "rowspan=3";
                    }
                    if($a4_23==10000){
                        $haha4_23 = "rowspan=2";
                    }
                    $sec4_23 = $row4_23[4];
                    $ins4_23 = $row4_23[5];
                    $dep4_23 = $row4_23[6];
                    $sc4_23 = $row4_23[7];
                    $yr4_23 = $row4_23[8];
                    if($row4_23[2]==190000){
                        $td4_23="<td $haha4_23>$sec4_23<br>$ins4_23<br>$dep4_23<br>$sc4_23<br>$yr4_23</td>";
                        break;
                    }
                }
            }
       $day4_24 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='193000'";
        $query4_24=mysqli_query($db, $day4_24);
            if($query4_24){
                while($row4_24 = mysqli_fetch_array($query4_24, MYSQLI_NUM)){
                    $a4_24 = $row4_24[3]-$row4_24[2];
                    if($a4_24==30000){
                        $haha4_24 = "rowspan=6";
                    }
                    if($a4_24==20000){
                        $haha4_24= "rowspan=4";
                    }
                    if($a4_24==13000){
                        $haha4_24 = "rowspan=3";
                    }
                    if($a4_24==10000){
                        $haha4_24 = "rowspan=2";
                    }
                    $sec4_24 = $row4_24[4];
                    $ins4_24 = $row4_24[5];
                    $dep4_24 = $row4_24[6];
                    $sc4_24 = $row4_24[7];
                    $yr4_24 = $row4_24[8];
                    if($row4_24[2]==193000){
                        $td4_24="<td $haha4_24>$sec4_24<br>$ins4_24<br>$dep4_24<br>$sc4_24<br>$yr4_24</td>";
                        break;
                    }
                }
            }
       $day4_25 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='200000'";
        $query4_25=mysqli_query($db, $day4_25);
            if($query4_25){
                while($row4_25 = mysqli_fetch_array($query4_25, MYSQLI_NUM)){
                    $a4_25 = $row4_25[3]-$row4_25[2];
                    if($a4_25==30000){
                        $haha4_25 = "rowspan=6";
                    }
                    if($a4_25==20000){
                        $haha4_25= "rowspan=4";
                    }
                    if($a4_25==13000){
                        $haha4_25 = "rowspan=3";
                    }
                    if($a4_25==10000){
                        $haha4_25 = "rowspan=2";
                    }
                    $sec4_25 = $row4_25[4];
                    $ins4_25 = $row4_25[5];
                    $dep4_25 = $row4_25[6];
                    $sc4_25 = $row4_25[7];
                    $yr4_25 = $row4_25[8];
                    if($row4_25[2]==200000){
                        $td4_25="<td $haha4_25>$sec4_25<br>$ins4_25<br>$dep4_25<br>$sc4_25<br>$yr4_25</td>";
                        break;
                    }
                }
            }
       $day4_26 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Thursday' AND Time_start='203000'";
        $query4_26=mysqli_query($db, $day4_26);
            if($query4_26){
                while($row4_26 = mysqli_fetch_array($query4_26, MYSQLI_NUM)){
                    $a4_26 = $row4_26[3]-$row4_26[2];
                    if($a4_26==30000){
                        $haha4_26 = "rowspan=6";
                    }
                    if($a4_26==20000){
                        $haha4_26= "rowspan=4";
                    }
                    if($a4_26==13000){
                        $haha4_26 = "rowspan=3";
                    }
                    if($a4_26==10000){
                        $haha4_26 = "rowspan=2";
                    }
                    $sec4_26 = $row4_26[4];
                    $ins4_26 = $row4_26[5];
                    $dep4_26 = $row4_26[6];
                    $sc4_26 = $row4_26[7];
                    $yr4_26 = $row4_26[8];
                    if($row4_26[2]==203000){
                        $td4_26="<td $haha4_26>$sec4_26<br>$ins4_26<br>$dep4_26<br>$sc4_26<br>$yr4_26</td>";
                        break;
                    }
                }
            }

            //Friday

        $day5 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='73000'";
        $query5=mysqli_query($db, $day5);
            if($query5){
                while($row5 = mysqli_fetch_array($query5, MYSQLI_NUM)){
                    $a5 = $row5[3]-$row5[2];
                    if($a5==30000){
                        $haha5 = "rowspan=6";
                    }
                    if($a5==20000){
                        $haha5 = "rowspan=4";
                    }
                    if($a5==13000){
                        $haha5 = "rowspan=3";
                    }
                    if($a5==10000){
                        $haha5 = "rowspan=2";
                    }
                    $sec5 = $row5[4];
                    $ins5 = $row5[5];
                    $dep5 = $row5[6];
                    $sc5 = $row5[7];
                    $yr5 = $row5[8];
                    if($row5[2]==73000){
                        $td5="<td $haha5>$sec5<br>$ins5<br>$dep5<br>$sc5<br>$yr5</td>";
                        break;
                    }
                }
            }
        $day5_1 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='80000'";
        $query5_1=mysqli_query($db, $day5_1);
            if($query5_1){
                while($row5_1 = mysqli_fetch_array($query5_1, MYSQLI_NUM)){
                    $a5_1 = $row5_1[3]-$row5_1[2];
                    if($a5_1==30000){
                        $haha5_1 = "rowspan=6";
                    }
                    if($a5_1==20000){
                        $haha5_1= "rowspan=4";
                    }
                    if($a5_1==13000){
                        $haha5_1 = "rowspan=3";
                    }
                    if($a5_1==10000){
                        $haha5_1 = "rowspan=2";
                    }
                    $sec5_1 = $row5_1[4];
                    $ins5_1 = $row5_1[5];
                    $dep5_1 = $row5_1[6];
                    $sc5_1 = $row5_1[7];
                    $yr5_1 = $row5_1[8];
                    if($row5_1[2]==80000){
                        $td5_1="<td $haha5_1>$sec5_1<br>$ins5_1<br>$dep5_1<br>$sc5_1<br>$yr5_1</td>";
                        break;
                    }
                }
            }
        $day5_2 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='83000'";
        $query5_2=mysqli_query($db, $day5_2);
            if($query5_2){
                while($row5_2 = mysqli_fetch_array($query5_2, MYSQLI_NUM)){
                    $a5_2 = $row5_2[3]-$row5_2[2];
                    if($a5_2==30000){
                        $haha5_2 = "rowspan=6";
                    }
                    if($a5_2==20000){
                        $haha5_2= "rowspan=4";
                    }
                    if($a5_2==13000){
                        $haha5_2 = "rowspan=3";
                    }
                    if($a5_2==10000){
                        $haha5_2 = "rowspan=2";
                    }
                    $sec5_2 = $row5_2[4];
                    $ins5_2 = $row5_2[5];
                    $dep5_2 = $row5_2[6];
                    $sc5_2 = $row5_2[7];
                    $yr5_2 = $row5_2[8];
                    if($row5_2[2]==83000){
                        $td5_2="<td $haha5_2>$sec5_2<br>$ins5_2<br>$dep5_2<br>$sc5_2<br>$yr5_2</td>";
                        break;
                    }
                }
            }
        $day5_3 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='90000'";
        $query5_3=mysqli_query($db, $day5_3);
            if($query5_3){
                while($row5_3 = mysqli_fetch_array($query5_3, MYSQLI_NUM)){
                    $a5_3 = $row5_3[3]-$row5_3[2];
                    if($a5_3==30000){
                        $haha5_3 = "rowspan=6";
                    }
                    if($a5_3==20000){
                        $haha5_3= "rowspan=4";
                    }
                    if($a5_3==13000||$a5_3==17000){
                        $haha5_3 = "rowspan=3";
                    }
                    if($a5_3==10000){
                        $haha5_3 = "rowspan=2";
                    }
                    $sec5_3 = $row5_3[4];
                    $ins5_3 = $row5_3[5];
                    $dep5_3 = $row5_3[6];
                    $sc5_3 = $row5_3[7];
                    $yr5_3 = $row5_3[8];
                    if($row5_3[2]==90000){
                        $td5_3="<td $haha5_3>$sec5_3<br>$ins5_3<br>$dep5_3<br>$sc5_3<br>$yr5_3</td>";
                        break;
                    }
                }
            }
        $day5_4 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='93000'";
        $query5_4=mysqli_query($db, $day5_4);
            if($query5_4){
                while($row5_4 = mysqli_fetch_array($query5_4, MYSQLI_NUM)){
                    $a5_4 = $row5_4[3]-$row5_4[2];
                    if($a5_4==30000){
                        $haha5_4 = "rowspan=6";
                    }
                    if($a5_4==20000){
                        $haha5_4= "rowspan=4";
                    }
                    if($a5_4==13000||$a5_4==17000){
                        $haha5_4 = "rowspan=3";
                    }
                    if($a5_4==10000){
                        $haha5_4 = "rowspan=2";
                    }                    
                    $sec5_4 = $row5_4[4];
                    $ins5_4 = $row5_4[5];
                    $dep5_4 = $row5_4[6];
                    $sc5_4 = $row5_4[7];
                    $yr5_4 = $row5_4[8];
                    if($row5_4[2]==93000){
                        $td5_4="<td $haha5_4>$sec5_4<br>$ins5_4<br>$dep5_4<br>$sc5_4<br>$yr5_4</td>";
                        break;
                    }
                }
            }
        $day5_5 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='100000'";
        $query5_5=mysqli_query($db, $day5_5);
            if($query5_5){
                while($row5_5 = mysqli_fetch_array($query5_5, MYSQLI_NUM)){
                    $a5_5 = $row5_5[3]-$row5_5[2];
                    if($a5_5==30000){
                        $haha5_5 = "rowspan=6";
                    }
                    if($a5_5==20000){
                        $haha5_5= "rowspan=4";
                    }
                    if($a5_5==13000){
                        $haha5_5 = "rowspan=3";
                    }
                    if($a5_5==10000){
                        $haha5_5 = "rowspan=2";
                    }
                    $sec5_5 = $row5_5[4];
                    $ins5_5 = $row5_5[5];
                    $dep5_5 = $row5_5[6];
                    $sc5_5 = $row5_5[7];
                    $yr5_5 = $row5_5[8];
                    if($row5_5[2]==100000){
                        $td5_5="<td $haha5_5>$sec5_5<br>$ins5_5<br>$dep5_5<br>$sc5_5<br>$yr5_5</td>";
                        break;
                    }
                }
            }
        $day5_6 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='103000'";
        $query5_6=mysqli_query($db, $day5_6);
            if($query5_6){
                while($row5_6 = mysqli_fetch_array($query5_6, MYSQLI_NUM)){
                    $a5_6 = $row5_6[3]-$row5_6[2];
                    if($a5_6==30000){
                        $haha5_6 = "rowspan=6";
                    }
                    if($a5_6==20000){
                        $haha5_6= "rowspan=4";
                    }
                    if($a5_6==13000){
                        $haha5_6 = "rowspan=3";
                    }
                    if($a5_6==10000){
                        $haha5_6 = "rowspan=2";
                    }
                    $sec5_6 = $row5_6[4];
                    $ins5_6 = $row5_6[5];
                    $dep5_6 = $row5_6[6];
                    $sc5_6 = $row5_6[7];
                    $yr5_6 = $row5_6[8];
                    if($row5_6[2]==103000){
                        $td5_6="<td $haha5_6>$sec5_6<br>$ins5_6<br>$dep5_6<br>$sc5_6<br>$yr5_6</td>";
                        break;
                    }
                }
            }
        $day5_7 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='110000'";
        $query5_7=mysqli_query($db, $day5_7);
            if($query5_7){
                while($row5_7 = mysqli_fetch_array($query5_7, MYSQLI_NUM)){
                    $a5_7 = $row5_7[3]-$row5_7[2];
                    if($a5_7==30000){
                        $haha5_7 = "rowspan=6";
                    }
                    if($a5_7==20000){
                        $haha5_7= "rowspan=4";
                    }
                    if($a5_7==13000){
                        $haha5_7 = "rowspan=3";
                    }
                    if($a5_7==10000){
                        $haha5_7 = "rowspan=2";
                    }
                    $sec5_7 = $row5_7[4];
                    $ins5_7 = $row5_7[5];
                    $dep5_7 = $row5_7[6];
                    $sc5_7 = $row5_7[7];
                    $yr5_7 = $row5_7[8];
                    if($row5_7[2]==110000){
                        $td5_7="<td $haha5_7>$sec5_7<br>$ins5_7<br>$dep5_7<br>$sc5_7<br>$yr5_7</td>";
                        break;
                    }
                }
            }
        $day5_8 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='113000'";
        $query5_8=mysqli_query($db, $day5_8);
            if($query5_8){
                while($row5_8 = mysqli_fetch_array($query5_8, MYSQLI_NUM)){
                    $a5_8 = $row5_8[3]-$row5_8[2];
                    if($a5_8==30000){
                        $haha5_8 = "rowspan=6";
                    }
                    if($a5_8==20000){
                        $haha5_8= "rowspan=4";
                    }
                    if($a5_8==13000){
                        $haha5_8 = "rowspan=3";
                    }
                    if($a5_8==10000){
                        $haha5_8 = "rowspan=2";
                    }
                    $sec5_8 = $row5_8[4];
                    $ins5_8 = $row5_8[5];
                    $dep5_8 = $row5_8[6];
                    $sc5_8 = $row5_8[7];
                    $yr5_8 = $row5_8[8];
                    if($row5_8[2]==113000){
                        $td5_8="<td $haha5_8>$sec5_8<br>$ins5_8<br>$dep5_8<br>$sc5_8<br>$yr5_8</td>";
                        break;
                    }
                }
            }
       $day5_9 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='120000'";
        $query5_9=mysqli_query($db, $day5_9);
            if($query5_9){
                while($row5_9 = mysqli_fetch_array($query5_9, MYSQLI_NUM)){
                    $a5_9 = $row5_9[3]-$row5_9[2];
                    if($a5_9==30000){
                        $haha5_9 = "rowspan=6";
                    }
                    if($a5_9==20000){
                        $haha5_9= "rowspan=4";
                    }
                    if($a5_9==13000){
                        $haha5_9 = "rowspan=3";
                    }
                    if($a5_9==10000){
                        $haha5_9 = "rowspan=2";
                    }
                    $sec5_9 = $row5_9[4];
                    $ins5_9 = $row5_9[5];
                    $dep5_9 = $row5_9[6];
                    $sc5_9 = $row5_9[7];
                    $yr5_9 = $row5_9[8];
                    if($row5_9[2]==120000){
                        $td5_9="<td $haha5_9>$sec5_9<br>$ins5_9<br>$dep5_9<br>$sc5_9<br>$yr5_9</td>";
                        break;
                    }
                }
            }
       $day5_10 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='123000'";
        $query5_10=mysqli_query($db, $day5_10);
            if($query5_10){
                while($row5_10 = mysqli_fetch_array($query5_10, MYSQLI_NUM)){
                    $a5_10 = $row5_10[3]-$row5_10[2];
                    if($a5_10==30000){
                        $haha5_10 = "rowspan=6";
                    }
                    if($a5_10==20000){
                        $haha5_10= "rowspan=4";
                    }
                    if($a5_10==13000){
                        $haha5_10 = "rowspan=3";
                    }
                    if($a5_10==10000){
                        $haha5_10 = "rowspan=2";
                    }
                    $sec5_10 = $row5_10[4];
                    $ins5_10 = $row5_10[5];
                    $dep5_10 = $row5_10[6];
                    $sc5_10 = $row5_10[7];
                    $yr5_10 = $row5_10[8];
                    if($row5_10[2]==123000){
                        $td5_10="<td $haha5_10>$sec5_10<br>$ins5_10<br>$dep5_10<br>$sc5_10<br>$yr5_10</td>";
                        break;
                    }
                }
            }
       $day5_11 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='130000'";
        $query5_11=mysqli_query($db, $day5_11);
            if($query5_11){
                while($row5_11 = mysqli_fetch_array($query5_11, MYSQLI_NUM)){
                    $a5_11 = $row5_11[3]-$row5_11[2];
                    if($a5_11==30000){
                        $haha5_11 = "rowspan=6";
                    }
                    if($a5_11==20000){
                        $haha5_11= "rowspan=4";
                    }
                    if($a5_11==13000){
                        $haha5_11 = "rowspan=3";
                    }
                    if($a5_11==10000){
                        $haha5_11 = "rowspan=2";
                    }
                    $sec5_11 = $row5_11[4];
                    $ins5_11 = $row5_11[5];
                    $dep5_11 = $row5_11[6];
                    $sc5_11 = $row5_11[7];
                    $yr5_11 = $row5_11[8];
                    if($row5_11[2]==130000){
                        $td5_11="<td $haha5_11>$sec5_11<br>$ins5_11<br>$dep5_11<br>$sc5_11<br>$yr5_11</td>";
                        break;
                    }
                }
            }
       $day5_12 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='133000'";
        $query5_12=mysqli_query($db, $day5_12);
            if($query5_12){
                while($row5_12 = mysqli_fetch_array($query5_12, MYSQLI_NUM)){
                    $a5_12 = $row5_12[3]-$row5_12[2];
                    if($a5_12==30000){
                        $haha5_12 = "rowspan=6";
                    }
                    if($a5_12==20000){
                        $haha5_12= "rowspan=4";
                    }
                    if($a5_12==13000){
                        $haha5_12 = "rowspan=3";
                    }
                    if($a5_12==10000){
                        $haha5_12 = "rowspan=2";
                    }
                    $sec5_12 = $row5_12[4];
                    $ins5_12 = $row5_12[5];
                    $dep5_12 = $row5_12[6];
                    $sc5_12 = $row5_12[7];
                    $yr5_12 = $row5_12[8];
                    if($row5_12[2]==133000){
                        $td5_12="<td $haha5_12>$sec5_12<br>$ins5_12<br>$dep5_12<br>$sc5_12<br>$yr5_12</td>";
                        break;
                    }
                }
            }
       $day5_13 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='140000'";
        $query5_13=mysqli_query($db, $day5_13);
            if($query5_13){
                while($row5_13 = mysqli_fetch_array($query5_13, MYSQLI_NUM)){
                    $a5_13 = $row5_13[3]-$row5_13[2];
                    if($a5_13==30000){
                        $haha5_13 = "rowspan=6";
                    }
                    if($a5_13==20000){
                        $haha5_13= "rowspan=4";
                    }
                    if($a5_13==13000){
                        $haha5_13 = "rowspan=3";
                    }
                    if($a5_13==10000){
                        $haha5_13 = "rowspan=2";
                    }
                    $sec5_13 = $row5_13[4];
                    $ins5_13 = $row5_13[5];
                    $dep5_13 = $row5_13[6];
                    $sc5_13 = $row5_13[7];
                    $yr5_13 = $row5_13[8];
                    if($row5_13[2]==140000){
                        $td5_13="<td $haha5_13>$sec5_13<br>$ins5_13<br>$dep5_13<br>$sc5_13<br>$yr5_13</td>";
                        break;
                    }
                }
            }
       $day5_14 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='143000'";
        $query5_14=mysqli_query($db, $day5_14);
            if($query5_14){
                while($row5_14 = mysqli_fetch_array($query5_14, MYSQLI_NUM)){
                    $a5_14 = $row5_14[3]-$row5_14[2];
                    if($a5_14==30000){
                        $haha5_14 = "rowspan=6";
                    }
                    if($a5_14==20000){
                        $haha5_14= "rowspan=4";
                    }
                    if($a5_14==13000){
                        $haha5_14 = "rowspan=3";
                    }
                    if($a5_14==10000){
                        $haha5_14 = "rowspan=2";
                    }
                    $sec5_14 = $row5_14[4];
                    $ins5_14 = $row5_14[5];
                    $dep5_14 = $row5_14[6];
                    $sc5_14 = $row5_14[7];
                    $yr5_14 = $row5_14[8];
                    if($row5_14[2]==143000){
                        $td5_14="<td $haha5_14>$sec5_14<br>$ins5_14<br>$dep5_14<br>$sc5_14<br>$yr5_14</td>";
                        break;
                    }
                }
            }
       $day5_15 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='150000'";
        $query5_15=mysqli_query($db, $day5_15);
            if($query5_15){
                while($row5_15 = mysqli_fetch_array($query5_15, MYSQLI_NUM)){
                    $a5_15 = $row5_15[3]-$row5_15[2];
                    if($a5_15==30000){
                        $haha5_15 = "rowspan=6";
                    }
                    if($a5_15==20000){
                        $haha5_15= "rowspan=4";
                    }
                    if($a5_15==13000){
                        $haha5_15 = "rowspan=3";
                    }
                    if($a5_15==10000){
                        $haha5_15 = "rowspan=2";
                    }
                    $sec5_15 = $row5_15[4];
                    $ins5_15 = $row5_15[5];
                    $dep5_15 = $row5_15[6];
                    $sc5_15 = $row5_15[7];
                    $yr5_15 = $row5_15[8];
                    if($row5_15[2]==150000){
                        $td5_15="<td $haha5_15>$sec5_15<br>$ins5_15<br>$dep5_15<br>$sc5_15<br>$yr5_15</td>";
                        break;
                    }
                }
            }
       $day5_16 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='153000'";
        $query5_16=mysqli_query($db, $day5_16);
            if($query5_16){
                while($row5_16 = mysqli_fetch_array($query5_16, MYSQLI_NUM)){
                    $a5_16 = $row5_16[3]-$row5_16[2];
                    if($a5_16==30000){
                        $haha5_16 = "rowspan=6";
                    }
                    if($a5_16==20000){
                        $haha5_16= "rowspan=4";
                    }
                    if($a5_16==13000){
                        $haha5_16 = "rowspan=3";
                    }
                    if($a5_16==10000){
                        $haha5_16 = "rowspan=2";
                    }
                    $sec5_16 = $row5_16[4];
                    $ins5_16 = $row5_16[5];
                    $dep5_16 = $row5_16[6];
                    $sc5_16 = $row5_16[7];
                    $yr5_16 = $row5_16[8];
                    if($row5_16[2]==153000){
                        $td5_16="<td $haha5_16>$sec5_16<br>$ins5_16<br>$dep5_16<br>$sc5_16<br>$yr5_16</td>";
                        break;
                    }
                }
            }
       $day5_17 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='160000'";
        $query5_17=mysqli_query($db, $day5_17);
            if($query5_17){
                while($row5_17 = mysqli_fetch_array($query5_17, MYSQLI_NUM)){
                    $a5_17 = $row5_17[3]-$row5_17[2];
                    if($a5_17==30000){
                        $haha5_17 = "rowspan=6";
                    }
                    if($a5_17==20000){
                        $haha5_17= "rowspan=4";
                    }
                    if($a5_17==13000){
                        $haha5_17 = "rowspan=3";
                    }
                    if($a5_17==10000){
                        $haha5_17 = "rowspan=2";
                    }
                    $sec5_17 = $row5_17[4];
                    $ins5_17 = $row5_17[5];
                    $dep5_17 = $row5_17[6];
                    $sc5_17 = $row5_17[7];
                    $yr5_17 = $row5_17[8];
                    if($row5_17[2]==160000){
                        $td5_17="<td $haha5_17>$sec5_17<br>$ins5_17<br>$dep5_17<br>$sc5_17<br>$yr5_17</td>";
                        break;
                    }
                }
            }
       $day5_18 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='163000'";
        $query5_18=mysqli_query($db, $day5_18);
            if($query5_18){
                while($row5_18 = mysqli_fetch_array($query5_18, MYSQLI_NUM)){
                    $a5_18 = $row5_18[3]-$row5_18[2];
                    if($a5_18==30000){
                        $haha5_18 = "rowspan=6";
                    }
                    if($a5_18==20000){
                        $haha5_18= "rowspan=4";
                    }
                    if($a5_18==13000){
                        $haha5_18 = "rowspan=3";
                    }
                    if($a5_18==10000){
                        $haha5_18 = "rowspan=2";
                    }
                    $sec5_18 = $row5_18[4];
                    $ins5_18 = $row5_18[5];
                    $dep5_18 = $row5_18[6];
                    $sc5_18 = $row5_18[7];
                    $yr5_18 = $row5_18[8];
                    if($row5_18[2]==163000){
                        $td5_18="<td $haha5_18>$sec5_18<br>$ins5_18<br>$dep5_18<br>$sc5_18<br>$yr5_18</td>";
                        break;
                    }
                }
            }
       $day5_19 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='170000'";
        $query5_19=mysqli_query($db, $day5_19);
            if($query5_19){
                while($row5_19 = mysqli_fetch_array($query5_19, MYSQLI_NUM)){
                    $a5_19 = $row5_19[3]-$row5_19[2];
                    if($a5_19==30000){
                        $haha5_19 = "rowspan=6";
                    }
                    if($a5_19==20000){
                        $haha5_19= "rowspan=4";
                    }
                    if($a5_19==13000){
                        $haha5_19 = "rowspan=3";
                    }
                    if($a5_19==10000){
                        $haha5_19 = "rowspan=2";
                    }
                    $sec5_19 = $row5_19[4];
                    $ins5_19 = $row5_19[5];
                    $dep5_19 = $row5_19[6];
                    $sc5_19 = $row5_19[7];
                    $yr5_19 = $row5_19[8];
                    if($row5_19[2]==170000){
                        $td5_19="<td $haha5_19>$sec5_19<br>$ins5_19<br>$dep5_19<br>$sc5_19<br>$yr5_19</td>";
                        break;
                    }
                }
            }
       $day5_20 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='173000'";
        $query5_20=mysqli_query($db, $day5_20);
            if($query5_20){
                while($row5_20 = mysqli_fetch_array($query5_20, MYSQLI_NUM)){
                    $a5_20 = $row5_20[3]-$row5_20[2];
                    if($a5_20==30000){
                        $haha5_20 = "rowspan=6";
                    }
                    if($a5_20==20000){
                        $haha5_20= "rowspan=4";
                    }
                    if($a5_20==13000){
                        $haha5_20 = "rowspan=3";
                    }
                    if($a5_20==10000){
                        $haha5_20 = "rowspan=2";
                    }
                    $sec5_20 = $row5_20[4];
                    $ins5_20 = $row5_20[5];
                    $dep5_20 = $row5_20[6];
                    $sc5_20 = $row5_20[7];
                    $yr5_20 = $row5_20[8];
                    if($row5_20[2]==173000){
                        $td5_20="<td $haha5_20>$sec5_20<br>$ins5_20<br>$dep5_20<br>$sc5_20<br>$yr5_20</td>";
                        break;
                    }
                }
            }
       $day5_21 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='180000'";
        $query5_21=mysqli_query($db, $day5_21);
            if($query5_21){
                while($row5_21 = mysqli_fetch_array($query5_21, MYSQLI_NUM)){
                    $a5_21 = $row5_21[3]-$row5_21[2];
                    if($a5_21==30000){
                        $haha5_21 = "rowspan=6";
                    }
                    if($a5_21==20000){
                        $haha5_21= "rowspan=4";
                    }
                    if($a5_21==13000){
                        $haha5_21 = "rowspan=3";
                    }
                    if($a5_21==10000){
                        $haha5_21 = "rowspan=2";
                    }
                    $sec5_21 = $row5_21[4];
                    $ins5_21 = $row5_21[5];
                    $dep5_21 = $row5_21[6];
                    $sc5_21 = $row5_21[7];
                    $yr5_21 = $row5_21[8];
                    if($row5_21[2]==180000){
                        $td5_21="<td $haha5_21>$sec5_21<br>$ins5_21<br>$dep5_21<br>$sc5_21<br>$yr5_21</td>";
                        break;
                    }
                }
            }
       $day5_22 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='183000'";
        $query5_22=mysqli_query($db, $day5_22);
            if($query5_22){
                while($row5_22 = mysqli_fetch_array($query5_22, MYSQLI_NUM)){
                    $a5_22 = $row5_22[3]-$row5_22[2];
                    if($a5_22==30000){
                        $haha5_22 = "rowspan=6";
                    }
                    if($a5_22==20000){
                        $haha5_22= "rowspan=4";
                    }
                    if($a5_22==13000){
                        $haha5_22 = "rowspan=3";
                    }
                    if($a5_22==10000){
                        $haha5_22 = "rowspan=2";
                    }
                    $sec5_22 = $row5_22[4];
                    $ins5_22 = $row5_22[5];
                    $dep5_22 = $row5_22[6];
                    $sc5_22 = $row5_22[7];
                    $yr5_22 = $row5_22[8];
                    if($row5_22[2]==183000){
                        $td5_22="<td $haha5_22>$sec5_22<br>$ins5_22<br>$dep5_22<br>$sc5_22<br>$yr5_22</td>";
                        break;
                    }
                }
            }
       $day5_23 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='190000'";
        $query5_23=mysqli_query($db, $day5_23);
            if($query5_23){
                while($row5_23 = mysqli_fetch_array($query5_23, MYSQLI_NUM)){
                    $a5_23 = $row5_23[3]-$row5_23[2];
                    if($a5_23==30000){
                        $haha5_23 = "rowspan=6";
                    }
                    if($a5_23==20000){
                        $haha5_23= "rowspan=4";
                    }
                    if($a5_23==13000){
                        $haha5_23 = "rowspan=3";
                    }
                    if($a5_23==10000){
                        $haha5_23 = "rowspan=2";
                    }
                    $sec5_23 = $row5_23[4];
                    $ins5_23 = $row5_23[5];
                    $dep5_23 = $row5_23[6];
                    $sc5_23 = $row5_23[7];
                    $yr5_23 = $row5_23[8];
                    if($row5_23[2]==190000){
                        $td5_23="<td $haha5_23>$sec5_23<br>$ins5_23<br>$dep5_23<br>$sc5_23<br>$yr5_23</td>";
                        break;
                    }
                }
            }
       $day5_24 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='193000'";
        $query5_24=mysqli_query($db, $day5_24);
            if($query5_24){
                while($row5_24 = mysqli_fetch_array($query5_24, MYSQLI_NUM)){
                    $a5_24 = $row5_24[3]-$row5_24[2];
                    if($a5_24==30000){
                        $haha5_24 = "rowspan=6";
                    }
                    if($a5_24==20000){
                        $haha5_24= "rowspan=4";
                    }
                    if($a5_24==13000){
                        $haha5_24 = "rowspan=3";
                    }
                    if($a5_24==10000){
                        $haha5_24 = "rowspan=2";
                    }
                    $sec5_24 = $row5_24[4];
                    $ins5_24 = $row5_24[5];
                    $dep5_24 = $row5_24[6];
                    $sc5_24 = $row5_24[7];
                    $yr5_24 = $row5_24[8];
                    if($row5_24[2]==193000){
                        $td5_24="<td $haha5_24>$sec5_24<br>$ins5_24<br>$dep5_24<br>$sc5_24<br>$yr5_24</td>";
                        break;
                    }
                }
            }
       $day5_25 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='200000'";
        $query5_25=mysqli_query($db, $day5_25);
            if($query5_25){
                while($row5_25 = mysqli_fetch_array($query5_25, MYSQLI_NUM)){
                    $a5_25 = $row5_25[3]-$row5_25[2];
                    if($a5_25==30000){
                        $haha5_25 = "rowspan=6";
                    }
                    if($a5_25==20000){
                        $haha5_25= "rowspan=4";
                    }
                    if($a5_25==13000){
                        $haha5_25 = "rowspan=3";
                    }
                    if($a5_25==10000){
                        $haha5_25 = "rowspan=2";
                    }
                    $sec5_25 = $row5_25[4];
                    $ins5_25 = $row5_25[5];
                    $dep5_25 = $row5_25[6];
                    $sc5_25 = $row5_25[7];
                    $yr5_25 = $row5_25[8];
                    if($row5_25[2]==200000){
                        $td5_25="<td $haha5_25>$sec5_25<br>$ins5_25<br>$dep5_25<br>$sc5_25<br>$yr5_25</td>";
                        break;
                    }
                }
            }
       $day5_26 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Friday' AND Time_start='203000'";
        $query5_26=mysqli_query($db, $day5_26);
            if($query5_26){
                while($row5_26 = mysqli_fetch_array($query5_26, MYSQLI_NUM)){
                    $a5_26 = $row5_26[3]-$row5_26[2];
                    if($a5_26==30000){
                        $haha5_26 = "rowspan=6";
                    }
                    if($a5_26==20000){
                        $haha5_26= "rowspan=4";
                    }
                    if($a5_26==13000){
                        $haha5_26 = "rowspan=3";
                    }
                    if($a5_26==10000){
                        $haha5_26 = "rowspan=2";
                    }
                    $sec5_26 = $row5_26[4];
                    $ins5_26 = $row5_26[5];
                    $dep5_26 = $row5_26[6];
                    $sc5_26 = $row5_26[7];
                    $yr5_26 = $row5_26[8];
                    if($row5_26[2]==203000){
                        $td5_26="<td $haha5_26>$sec5_26<br>$ins5_26<br>$dep5_26<br>$sc5_26<br>$yr5_26</td>";
                        break;
                    }
                }
            }

            //Saturday
        $day6 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='73000'";
        $query6=mysqli_query($db, $day6);
            if($query6){
                while($row6 = mysqli_fetch_array($query6, MYSQLI_NUM)){
                    $a6 = $row6[3]-$row6[2];
                    if($a6==30000){
                        $haha6 = "rowspan=6";
                    }
                    if($a6==20000){
                        $haha6 = "rowspan=4";
                    }
                    if($a6==13000){
                        $haha6 = "rowspan=3";
                    }
                    if($a6==10000){
                        $haha6 = "rowspan=2";
                    }
                    $sec6 = $row6[4];
                    $ins6 = $row6[5];
                    $dep6 = $row6[6];
                    $sc6 = $row6[7];
                    $yr6 = $row6[8];
                    if($row6[2]==73000){
                        $td6="<td $haha6>$sec6<br>$ins6<br>$dep6<br>$sc6<br>$yr6</td>";
                        break;
                    }
                }
            }
        $day6_1 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='80000'";
        $query6_1=mysqli_query($db, $day6_1);
            if($query6_1){
                while($row6_1 = mysqli_fetch_array($query6_1, MYSQLI_NUM)){
                    $a6_1 = $row6_1[3]-$row6_1[2];
                    if($a6_1==30000){
                        $haha6_1 = "rowspan=6";
                    }
                    if($a6_1==20000){
                        $haha6_1= "rowspan=4";
                    }
                    if($a6_1==13000){
                        $haha6_1 = "rowspan=3";
                    }
                    if($a6_1==10000){
                        $haha6_1 = "rowspan=2";
                    }
                    $sec6_1 = $row6_1[4];
                    $ins6_1 = $row6_1[5];
                    $dep6_1 = $row6_1[6];
                    $sc6_1 = $row6_1[7];
                    $yr6_1 = $row6_1[8];
                    if($row6_1[2]==80000){
                        $td6_1="<td $haha6_1>$sec6_1<br>$ins6_1<br>$dep6_1<br>$sc6_1<br>$yr6_1</td>";
                        break;
                    }
                }
            }
        $day6_2 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='83000'";
        $query6_2=mysqli_query($db, $day6_2);
            if($query6_2){
                while($row6_2 = mysqli_fetch_array($query6_2, MYSQLI_NUM)){
                    $a6_2 = $row6_2[3]-$row6_2[2];
                    if($a6_2==30000){
                        $haha6_2 = "rowspan=6";
                    }
                    if($a6_2==20000){
                        $haha6_2= "rowspan=4";
                    }
                    if($a6_2==13000){
                        $haha6_2 = "rowspan=3";
                    }
                    if($a6_2==10000){
                        $haha6_2 = "rowspan=2";
                    }
                    $sec6_2 = $row6_2[4];
                    $ins6_2 = $row6_2[5];
                    $dep6_2 = $row6_2[6];
                    $sc6_2 = $row6_2[7];
                    $yr6_2 = $row6_2[8];
                    if($row6_2[2]==83000){
                        $td6_2="<td $haha6_2>$sec6_2<br>$ins6_2<br>$dep6_2<br>$sc6_2<br>$yr6_2</td>";
                        break;
                    }
                }
            }
        $day6_3 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='90000'";
        $query6_3=mysqli_query($db, $day6_3);
            if($query6_3){
                while($row6_3 = mysqli_fetch_array($query6_3, MYSQLI_NUM)){
                    $a6_3 = $row6_3[3]-$row6_3[2];
                    if($a6_3==30000){
                        $haha6_3 = "rowspan=6";
                    }
                    if($a6_3==20000){
                        $haha6_3= "rowspan=4";
                    }
                    if($a6_3==13000||$a6_3==17000){
                        $haha6_3 = "rowspan=3";
                    }
                    if($a6_3==10000){
                        $haha6_3 = "rowspan=2";
                    }
                    $sec6_3 = $row6_3[4];
                    $ins6_3 = $row6_3[5];
                    $dep6_3 = $row6_3[6];
                    $sc6_3 = $row6_3[7];
                    $yr6_3 = $row6_3[8];
                    if($row6_3[2]==90000){
                        $td6_3="<td $haha6_3>$sec6_3<br>$ins6_3<br>$dep6_3<br>$sc6_3<br>$yr6_3</td>";
                        break;
                    }
                }
            }
        $day6_4 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='93000'";
        $query6_4=mysqli_query($db, $day6_4);
            if($query6_4){
                while($row6_4 = mysqli_fetch_array($query6_4, MYSQLI_NUM)){
                    $a6_4 = $row6_4[3]-$row6_4[2];
                    if($a6_4==30000){
                        $haha6_4 = "rowspan=6";
                    }
                    if($a6_4==20000){
                        $haha6_4= "rowspan=4";
                    }
                    if($a6_4==13000||$a6_4==17000){
                        $haha6_4 = "rowspan=3";
                    }
                    if($a6_4==10000){
                        $haha6_4 = "rowspan=2";
                    }                    
                    $sec6_4 = $row6_4[4];
                    $ins6_4 = $row6_4[5];
                    $dep6_4 = $row6_4[6];
                    $sc6_4 = $row6_4[7];
                    $yr6_4 = $row6_4[8];
                    if($row6_4[2]==93000){
                        $td6_4="<td $haha6_4>$sec6_4<br>$ins6_4<br>$dep6_4<br>$sc6_4<br>$yr6_4</td>";
                        break;
                    }
                }
            }
        $day6_5 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='100000'";
        $query6_5=mysqli_query($db, $day6_5);
            if($query6_5){
                while($row6_5 = mysqli_fetch_array($query6_5, MYSQLI_NUM)){
                    $a6_5 = $row6_5[3]-$row6_5[2];
                    if($a6_5==30000){
                        $haha6_5 = "rowspan=6";
                    }
                    if($a6_5==20000){
                        $haha6_5= "rowspan=4";
                    }
                    if($a6_5==13000){
                        $haha6_5 = "rowspan=3";
                    }
                    if($a6_5==10000){
                        $haha6_5 = "rowspan=2";
                    }
                    $sec6_5 = $row6_5[4];
                    $ins6_5 = $row6_5[5];
                    $dep6_5 = $row6_5[6];
                    $sc6_5 = $row6_5[7];
                    $yr6_5 = $row6_5[8];
                    if($row6_5[2]==100000){
                        $td6_5="<td $haha6_5>$sec6_5<br>$ins6_5<br>$dep6_5<br>$sc6_5<br>$yr6_5</td>";
                        break;
                    }
                }
            }
        $day6_6 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='103000'";
        $query6_6=mysqli_query($db, $day6_6);
            if($query6_6){
                while($row6_6 = mysqli_fetch_array($query6_6, MYSQLI_NUM)){
                    $a6_6 = $row6_6[3]-$row6_6[2];
                    if($a6_6==30000){
                        $haha6_6 = "rowspan=6";
                    }
                    if($a6_6==20000){
                        $haha6_6= "rowspan=4";
                    }
                    if($a6_6==13000){
                        $haha6_6 = "rowspan=3";
                    }
                    if($a6_6==10000){
                        $haha6_6 = "rowspan=2";
                    }
                    $sec6_6 = $row6_6[4];
                    $ins6_6 = $row6_6[5];
                    $dep6_6 = $row6_6[6];
                    $sc6_6 = $row6_6[7];
                    $yr6_6 = $row6_6[8];
                    if($row6_6[2]==103000){
                        $td6_6="<td $haha6_6>$sec6_6<br>$ins6_6<br>$dep6_6<br>$sc6_6<br>$yr6_6</td>";
                        break;
                    }
                }
            }
        $day6_7 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='110000'";
        $query6_7=mysqli_query($db, $day6_7);
            if($query6_7){
                while($row6_7 = mysqli_fetch_array($query6_7, MYSQLI_NUM)){
                    $a6_7 = $row6_7[3]-$row6_7[2];
                    if($a6_7==30000){
                        $haha6_7 = "rowspan=6";
                    }
                    if($a6_7==20000){
                        $haha6_7= "rowspan=4";
                    }
                    if($a6_7==13000){
                        $haha6_7 = "rowspan=3";
                    }
                    if($a6_7==10000){
                        $haha6_7 = "rowspan=2";
                    }
                    $sec6_7 = $row6_7[4];
                    $ins6_7 = $row6_7[5];
                    $dep6_7 = $row6_7[6];
                    $sc6_7 = $row6_7[7];
                    $yr6_7 = $row6_7[8];
                    if($row6_7[2]==110000){
                        $td6_7="<td $haha6_7>$sec6_7<br>$ins6_7<br>$dep6_7<br>$sc6_7<br>$yr6_7</td>";
                        break;
                    }
                }
            }
        $day6_8 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='113000'";
        $query6_8=mysqli_query($db, $day6_8);
            if($query6_8){
                while($row6_8 = mysqli_fetch_array($query6_8, MYSQLI_NUM)){
                    $a6_8 = $row6_8[3]-$row6_8[2];
                    if($a6_8==30000){
                        $haha6_8 = "rowspan=6";
                    }
                    if($a6_8==20000){
                        $haha6_8= "rowspan=4";
                    }
                    if($a6_8==13000){
                        $haha6_8 = "rowspan=3";
                    }
                    if($a6_8==10000){
                        $haha6_8 = "rowspan=2";
                    }
                    $sec6_8 = $row6_8[4];
                    $ins6_8 = $row6_8[5];
                    $dep6_8 = $row6_8[6];
                    $sc6_8 = $row6_8[7];
                    $yr6_8 = $row6_8[8];
                    if($row6_8[2]==113000){
                        $td6_8="<td $haha6_8>$sec6_8<br>$ins6_8<br>$dep6_8<br>$sc6_8<br>$yr6_8</td>";
                        break;
                    }
                }
            }
       $day6_9 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='120000'";
        $query6_9=mysqli_query($db, $day6_9);
            if($query6_9){
                while($row6_9 = mysqli_fetch_array($query6_9, MYSQLI_NUM)){
                    $a6_9 = $row6_9[3]-$row6_9[2];
                    if($a6_9==30000){
                        $haha6_9 = "rowspan=6";
                    }
                    if($a6_9==20000){
                        $haha6_9= "rowspan=4";
                    }
                    if($a6_9==13000){
                        $haha6_9 = "rowspan=3";
                    }
                    if($a6_9==10000){
                        $haha6_9 = "rowspan=2";
                    }
                    $sec6_9 = $row6_9[4];
                    $ins6_9 = $row6_9[5];
                    $dep6_9 = $row6_9[6];
                    $sc6_9 = $row6_9[7];
                    $yr6_9 = $row6_9[8];
                    if($row6_9[2]==120000){
                        $td6_9="<td $haha6_9>$sec6_9<br>$ins6_9<br>$dep6_9<br>$sc6_9<br>$yr6_9</td>";
                        break;
                    }
                }
            }
       $day6_10 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='123000'";
        $query6_10=mysqli_query($db, $day6_10);
            if($query6_10){
                while($row6_10 = mysqli_fetch_array($query6_10, MYSQLI_NUM)){
                    $a6_10 = $row6_10[3]-$row6_10[2];
                    if($a6_10==30000){
                        $haha6_10 = "rowspan=6";
                    }
                    if($a6_10==20000){
                        $haha6_10= "rowspan=4";
                    }
                    if($a6_10==13000){
                        $haha6_10 = "rowspan=3";
                    }
                    if($a6_10==10000){
                        $haha6_10 = "rowspan=2";
                    }
                    $sec6_10 = $row6_10[4];
                    $ins6_10 = $row6_10[5];
                    $dep6_10 = $row6_10[6];
                    $sc6_10 = $row6_10[7];
                    $yr6_10 = $row6_10[8];
                    if($row6_10[2]==123000){
                        $td6_10="<td $haha6_10>$sec6_10<br>$ins6_10<br>$dep6_10<br>$sc6_10<br>$yr6_10</td>";
                        break;
                    }
                }
            }
       $day6_11 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='130000'";
        $query6_11=mysqli_query($db, $day6_11);
            if($query6_11){
                while($row6_11 = mysqli_fetch_array($query6_11, MYSQLI_NUM)){
                    $a6_11 = $row6_11[3]-$row6_11[2];
                    if($a6_11==30000){
                        $haha6_11 = "rowspan=6";
                    }
                    if($a6_11==20000){
                        $haha6_11= "rowspan=4";
                    }
                    if($a6_11==13000){
                        $haha6_11 = "rowspan=3";
                    }
                    if($a6_11==10000){
                        $haha6_11 = "rowspan=2";
                    }
                    $sec6_11 = $row6_11[4];
                    $ins6_11 = $row6_11[5];
                    $dep6_11 = $row6_11[6];
                    $sc6_11 = $row6_11[7];
                    $yr6_11 = $row6_11[8];
                    if($row6_11[2]==130000){
                        $td6_11="<td $haha6_11>$sec6_11<br>$ins6_11<br>$dep6_11<br>$sc6_11<br>$yr6_11</td>";
                        break;
                    }
                }
            }
       $day6_12 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='133000'";
        $query6_12=mysqli_query($db, $day6_12);
            if($query6_12){
                while($row6_12 = mysqli_fetch_array($query6_12, MYSQLI_NUM)){
                    $a6_12 = $row6_12[3]-$row6_12[2];
                    if($a6_12==30000){
                        $haha6_12 = "rowspan=6";
                    }
                    if($a6_12==20000){
                        $haha6_12= "rowspan=4";
                    }
                    if($a6_12==13000){
                        $haha6_12 = "rowspan=3";
                    }
                    if($a6_12==10000){
                        $haha6_12 = "rowspan=2";
                    }
                    $sec6_12 = $row6_12[4];
                    $ins6_12 = $row6_12[5];
                    $dep6_12 = $row6_12[6];
                    $sc6_12 = $row6_12[7];
                    $yr6_12 = $row6_12[8];
                    if($row6_12[2]==133000){
                        $td6_12="<td $haha6_12>$sec6_12<br>$ins6_12<br>$dep6_12<br>$sc6_12<br>$yr6_12</td>";
                        break;
                    }
                }
            }
       $day6_13 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='140000'";
        $query6_13=mysqli_query($db, $day6_13);
            if($query6_13){
                while($row6_13 = mysqli_fetch_array($query6_13, MYSQLI_NUM)){
                    $a6_13 = $row6_13[3]-$row6_13[2];
                    if($a6_13==30000){
                        $haha6_13 = "rowspan=6";
                    }
                    if($a6_13==20000){
                        $haha6_13= "rowspan=4";
                    }
                    if($a6_13==13000){
                        $haha6_13 = "rowspan=3";
                    }
                    if($a6_13==10000){
                        $haha6_13 = "rowspan=2";
                    }
                    $sec6_13 = $row6_13[4];
                    $ins6_13 = $row6_13[5];
                    $dep6_13 = $row6_13[6];
                    $sc6_13 = $row6_13[7];
                    $yr6_13 = $row6_13[8];
                    if($row6_13[2]==140000){
                        $td6_13="<td $haha6_13>$sec6_13<br>$ins6_13<br>$dep6_13<br>$sc6_13<br>$yr6_13</td>";
                        break;
                    }
                }
            }
       $day6_14 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='143000'";
        $query6_14=mysqli_query($db, $day6_14);
            if($query6_14){
                while($row6_14 = mysqli_fetch_array($query6_14, MYSQLI_NUM)){
                    $a6_14 = $row6_14[3]-$row6_14[2];
                    if($a6_14==30000){
                        $haha6_14 = "rowspan=6";
                    }
                    if($a6_14==20000){
                        $haha6_14= "rowspan=4";
                    }
                    if($a6_14==13000){
                        $haha6_14 = "rowspan=3";
                    }
                    if($a6_14==10000){
                        $haha6_14 = "rowspan=2";
                    }
                    $sec6_14 = $row6_14[4];
                    $ins6_14 = $row6_14[5];
                    $dep6_14 = $row6_14[6];
                    $sc6_14 = $row6_14[7];
                    $yr6_14 = $row6_14[8];
                    if($row6_14[2]==143000){
                        $td6_14="<td $haha6_14>$sec6_14<br>$ins6_14<br>$dep6_14<br>$sc6_14<br>$yr6_14</td>";
                        break;
                    }
                }
            }
       $day6_15 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='150000'";
        $query6_15=mysqli_query($db, $day6_15);
            if($query6_15){
                while($row6_15 = mysqli_fetch_array($query6_15, MYSQLI_NUM)){
                    $a6_15 = $row6_15[3]-$row6_15[2];
                    if($a6_15==30000){
                        $haha6_15 = "rowspan=6";
                    }
                    if($a6_15==20000){
                        $haha6_15= "rowspan=4";
                    }
                    if($a6_15==13000){
                        $haha6_15 = "rowspan=3";
                    }
                    if($a6_15==10000){
                        $haha6_15 = "rowspan=2";
                    }
                    $sec6_15 = $row6_15[4];
                    $ins6_15 = $row6_15[5];
                    $dep6_15 = $row6_15[6];
                    $sc6_15 = $row6_15[7];
                    $yr6_15 = $row6_15[8];
                    if($row6_15[2]==150000){
                        $td6_15="<td $haha6_15>$sec6_15<br>$ins6_15<br>$dep6_15<br>$sc6_15<br>$yr6_15</td>";
                        break;
                    }
                }
            }
       $day6_16 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='153000'";
        $query6_16=mysqli_query($db, $day6_16);
            if($query6_16){
                while($row6_16 = mysqli_fetch_array($query6_16, MYSQLI_NUM)){
                    $a6_16 = $row6_16[3]-$row6_16[2];
                    if($a6_16==30000){
                        $haha6_16 = "rowspan=6";
                    }
                    if($a6_16==20000){
                        $haha6_16= "rowspan=4";
                    }
                    if($a6_16==13000){
                        $haha6_16 = "rowspan=3";
                    }
                    if($a6_16==10000){
                        $haha6_16 = "rowspan=2";
                    }
                    $sec6_16 = $row6_16[4];
                    $ins6_16 = $row6_16[5];
                    $dep6_16 = $row6_16[6];
                    $sc6_16 = $row6_16[7];
                    $yr6_16 = $row6_16[8];
                    if($row6_16[2]==153000){
                        $td6_16="<td $haha6_16>$sec6_16<br>$ins6_16<br>$dep6_16<br>$sc6_16<br>$yr6_16</td>";
                        break;
                    }
                }
            }
       $day6_17 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='160000'";
        $query6_17=mysqli_query($db, $day6_17);
            if($query6_17){
                while($row6_17 = mysqli_fetch_array($query6_17, MYSQLI_NUM)){
                    $a6_17 = $row6_17[3]-$row6_17[2];
                    if($a6_17==30000){
                        $haha6_17 = "rowspan=6";
                    }
                    if($a6_17==20000){
                        $haha6_17= "rowspan=4";
                    }
                    if($a6_17==13000){
                        $haha6_17 = "rowspan=3";
                    }
                    if($a6_17==10000){
                        $haha6_17 = "rowspan=2";
                    }
                    $sec6_17 = $row6_17[4];
                    $ins6_17 = $row6_17[5];
                    $dep6_17 = $row6_17[6];
                    $sc6_17 = $row6_17[7];
                    $yr6_17 = $row6_17[8];
                    if($row6_17[2]==160000){
                        $td6_17="<td $haha6_17>$sec6_17<br>$ins6_17<br>$dep6_17<br>$sc6_17<br>$yr6_17</td>";
                        break;
                    }
                }
            }
       $day6_18 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='163000'";
        $query6_18=mysqli_query($db, $day6_18);
            if($query6_18){
                while($row6_18 = mysqli_fetch_array($query6_18, MYSQLI_NUM)){
                    $a6_18 = $row6_18[3]-$row6_18[2];
                    if($a6_18==30000){
                        $haha6_18 = "rowspan=6";
                    }
                    if($a6_18==20000){
                        $haha6_18= "rowspan=4";
                    }
                    if($a6_18==13000){
                        $haha6_18 = "rowspan=3";
                    }
                    if($a6_18==10000){
                        $haha6_18 = "rowspan=2";
                    }
                    $sec6_18 = $row6_18[4];
                    $ins6_18 = $row6_18[5];
                    $dep6_18 = $row6_18[6];
                    $sc6_18 = $row6_18[7];
                    $yr6_18 = $row6_18[8];
                    if($row6_18[2]==163000){
                        $td6_18="<td $haha6_18>$sec6_18<br>$ins6_18<br>$dep6_18<br>$sc6_18<br>$yr6_18</td>";
                        break;
                    }
                }
            }
       $day6_19 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='170000'";
        $query6_19=mysqli_query($db, $day6_19);
            if($query6_19){
                while($row6_19 = mysqli_fetch_array($query6_19, MYSQLI_NUM)){
                    $a6_19 = $row6_19[3]-$row6_19[2];
                    if($a6_19==30000){
                        $haha6_19 = "rowspan=6";
                    }
                    if($a6_19==20000){
                        $haha6_19= "rowspan=4";
                    }
                    if($a6_19==13000){
                        $haha6_19 = "rowspan=3";
                    }
                    if($a6_19==10000){
                        $haha6_19 = "rowspan=2";
                    }
                    $sec6_19 = $row6_19[4];
                    $ins6_19 = $row6_19[5];
                    $dep6_19 = $row6_19[6];
                    $sc6_19 = $row6_19[7];
                    $yr6_19 = $row6_19[8];
                    if($row6_19[2]==170000){
                        $td6_19="<td $haha6_19>$sec6_19<br>$ins6_19<br>$dep6_19<br>$sc6_19<br>$yr6_19</td>";
                        break;
                    }
                }
            }
       $day6_20 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='173000'";
        $query6_20=mysqli_query($db, $day6_20);
            if($query6_20){
                while($row6_20 = mysqli_fetch_array($query6_20, MYSQLI_NUM)){
                    $a6_20 = $row6_20[3]-$row6_20[2];
                    if($a6_20==30000){
                        $haha6_20 = "rowspan=6";
                    }
                    if($a6_20==20000){
                        $haha6_20= "rowspan=4";
                    }
                    if($a6_20==13000){
                        $haha6_20 = "rowspan=3";
                    }
                    if($a6_20==10000){
                        $haha6_20 = "rowspan=2";
                    }
                    $sec6_20 = $row6_20[4];
                    $ins6_20 = $row6_20[5];
                    $dep6_20 = $row6_20[6];
                    $sc6_20 = $row6_20[7];
                    $yr6_20 = $row6_20[8];
                    if($row6_20[2]==173000){
                        $td6_20="<td $haha6_20>$sec6_20<br>$ins6_20<br>$dep6_20<br>$sc6_20<br>$yr6_20</td>";
                        break;
                    }
                }
            }
       $day6_21 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='180000'";
        $query6_21=mysqli_query($db, $day6_21);
            if($query6_21){
                while($row6_21 = mysqli_fetch_array($query6_21, MYSQLI_NUM)){
                    $a6_21 = $row6_21[3]-$row6_21[2];
                    if($a6_21==30000){
                        $haha6_21 = "rowspan=6";
                    }
                    if($a6_21==20000){
                        $haha6_21= "rowspan=4";
                    }
                    if($a6_21==13000){
                        $haha6_21 = "rowspan=3";
                    }
                    if($a6_21==10000){
                        $haha6_21 = "rowspan=2";
                    }
                    $sec6_21 = $row6_21[4];
                    $ins6_21 = $row6_21[5];
                    $dep6_21 = $row6_21[6];
                    $sc6_21 = $row6_21[7];
                    $yr6_21 = $row6_21[8];
                    if($row6_21[2]==180000){
                        $td6_21="<td $haha6_21>$sec6_21<br>$ins6_21<br>$dep6_21<br>$sc6_21<br>$yr6_21</td>";
                        break;
                    }
                }
            }
       $day6_22 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='183000'";
        $query6_22=mysqli_query($db, $day6_22);
            if($query6_22){
                while($row6_22 = mysqli_fetch_array($query6_22, MYSQLI_NUM)){
                    $a6_22 = $row6_22[3]-$row6_22[2];
                    if($a6_22==30000){
                        $haha6_22 = "rowspan=6";
                    }
                    if($a6_22==20000){
                        $haha6_22= "rowspan=4";
                    }
                    if($a6_22==13000){
                        $haha6_22 = "rowspan=3";
                    }
                    if($a6_22==10000){
                        $haha6_22 = "rowspan=2";
                    }
                    $sec6_22 = $row6_22[4];
                    $ins6_22 = $row6_22[5];
                    $dep6_22 = $row6_22[6];
                    $sc6_22 = $row6_22[7];
                    $yr6_22 = $row6_22[8];
                    if($row6_22[2]==183000){
                        $td6_22="<td $haha6_22>$sec6_22<br>$ins6_22<br>$dep6_22<br>$sc6_22<br>$yr6_22</td>";
                        break;
                    }
                }
            }
       $day6_23 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='190000'";
        $query6_23=mysqli_query($db, $day6_23);
            if($query6_23){
                while($row6_23 = mysqli_fetch_array($query6_23, MYSQLI_NUM)){
                    $a6_23 = $row6_23[3]-$row6_23[2];
                    if($a6_23==30000){
                        $haha6_23 = "rowspan=6";
                    }
                    if($a6_23==20000){
                        $haha6_23= "rowspan=4";
                    }
                    if($a6_23==13000){
                        $haha6_23 = "rowspan=3";
                    }
                    if($a6_23==10000){
                        $haha6_23 = "rowspan=2";
                    }
                    $sec6_23 = $row6_23[4];
                    $ins6_23 = $row6_23[5];
                    $dep6_23 = $row6_23[6];
                    $sc6_23 = $row6_23[7];
                    $yr6_23 = $row6_23[8];
                    if($row6_23[2]==190000){
                        $td6_23="<td $haha6_23>$sec6_23<br>$ins6_23<br>$dep6_23<br>$sc6_23<br>$yr6_23</td>";
                        break;
                    }
                }
            }
       $day6_24 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='193000'";
        $query6_24=mysqli_query($db, $day6_24);
            if($query6_24){
                while($row6_24 = mysqli_fetch_array($query6_24, MYSQLI_NUM)){
                    $a6_24 = $row6_24[3]-$row6_24[2];
                    if($a6_24==30000){
                        $haha6_24 = "rowspan=6";
                    }
                    if($a6_24==20000){
                        $haha6_24= "rowspan=4";
                    }
                    if($a6_24==13000){
                        $haha6_24 = "rowspan=3";
                    }
                    if($a6_24==10000){
                        $haha6_24 = "rowspan=2";
                    }
                    $sec6_24 = $row6_24[4];
                    $ins6_24 = $row6_24[5];
                    $dep6_24 = $row6_24[6];
                    $sc6_24 = $row6_24[7];
                    $yr6_24 = $row6_24[8];
                    if($row6_24[2]==193000){
                        $td6_24="<td $haha6_24>$sec6_24<br>$ins6_24<br>$dep6_24<br>$sc6_24<br>$yr6_24</td>";
                        break;
                    }
                }
            }
       $day6_25 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='200000'";
        $query6_25=mysqli_query($db, $day6_25);
            if($query6_25){
                while($row6_25 = mysqli_fetch_array($query6_25, MYSQLI_NUM)){
                    $a6_25 = $row6_25[3]-$row6_25[2];
                    if($a6_25==30000){
                        $haha6_25 = "rowspan=6";
                    }
                    if($a6_25==20000){
                        $haha6_25= "rowspan=4";
                    }
                    if($a6_25==13000){
                        $haha6_25 = "rowspan=3";
                    }
                    if($a6_25==10000){
                        $haha6_25 = "rowspan=2";
                    }
                    $sec6_25 = $row6_25[4];
                    $ins6_25 = $row6_25[5];
                    $dep6_25 = $row6_25[6];
                    $sc6_25 = $row6_25[7];
                    $yr6_25 = $row6_25[8];
                    if($row6_25[2]==200000){
                        $td6_25="<td $haha6_25>$sec6_25<br>$ins6_25<br>$dep6_25<br>$sc6_25<br>$yr6_25</td>";
                        break;
                    }
                }
            }
       $day6_26 = "SELECT * FROM schedule_table where Room='$choose' AND Day='Saturday' AND Time_start='203000'";
        $query6_26=mysqli_query($db, $day6_26);
            if($query6_26){
                while($row6_26 = mysqli_fetch_array($query6_26, MYSQLI_NUM)){
                    $a6_26 = $row6_26[3]-$row6_26[2];
                    if($a6_26==30000){
                        $haha6_26 = "rowspan=6";
                    }
                    if($a6_26==20000){
                        $haha6_26= "rowspan=4";
                    }
                    if($a6_26==13000){
                        $haha6_26 = "rowspan=3";
                    }
                    if($a6_26==10000){
                        $haha6_26 = "rowspan=2";
                    }
                    $sec6_26 = $row6_26[4];
                    $ins6_26 = $row6_26[5];
                    $dep6_26 = $row6_26[6];
                    $sc6_26 = $row6_26[7];
                    $yr6_26 = $row6_26[8];
                    if($row6_26[2]==203000){
                        $td6_26="<td $haha6_26>$sec6_26<br>$ins6_26<br>$dep6_26<br>$sc6_26<br>$yr6_26</td>";
                        break;
                    }
                }
            }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Class Schedule Monitoring</title>

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
    form #submit1{
      -webkit-appearance: none;
         -moz-appearance: none;
              appearance: none;
      outline: 0;
      background-color: #fff;
      border: 0;
      margin-top: 10px;
      padding: 10px 15px;
      color: #50b2a3;
      border-radius: 3px;
      width: 140px;
      cursor: pointer;
      font-size: 18px;
      -webkit-transition-duration: 0.25s;
              transition-duration: 0.25s;
    }
    form #submit1:hover {
      background-color: #9ad6c6;
    }
    form #submit2{
      -webkit-appearance: none;
         -moz-appearance: none;
              appearance: none;
      outline: 0;
      background-color: #50b2a3;
      border: 0;
      margin-left: 220px;
      padding: 10px 15px;
      color: #fff;
      border-radius: 3px;
      width: 140px;
      cursor: pointer;
      font-size: 18px;
      -webkit-transition-duration: 0.25s;
              transition-duration: 0.25s;
    }
    form #submit2:hover {
      background-color: #9ad6c6;
    }
    </style>
    <link rel="stylesheet" href="../../css/schedule.css">
    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Class Schedule Monitoring System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../student.php#home">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#roomtables">Room Tables</a>
                    </li>       
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our SYSTEM!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#home" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Home Section -->
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Class Schedule Monitoring System</h2>
                    <h3 class="section-subheading text-muted">Monitors class assignment of different classroom of the College of Engineering<br>together with the corresponding instructor, subject, secion and time.</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Tables Section -->
    <section id="roomtables">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Room Tables</h2>
                    <h3 class="section-subheading text-muted">Viewing of schedule assignment on the rooms of College of Engineering.</h3>
                </div>
            </div>
            <div class="row">
            <table id="table" cellpadding="2" border="1" class="table table-bordered">
            <th>
            <form action="../student.php" method="POST">
                <select name="room-edit" class="form-control" id="sel1">
                    <option><?php echo $room?></option>
                </select>
                <input type="submit" value="Go" name="go" id="submit1"></input>  
            </form>
            </th>
            <th>MONDAY</th>
            <th>TUESDAY</th>
            <th>WEDNESDAY</th>
            <th>THURSDAY</th>
            <th>FRIDAY</th>
            <th>SATURDAY</th>
            <tr>
                <td>7:30am - 8:00am</td>
                <?php echo $td1 ?>
                <?php echo $td2 ?>
                <?php echo $td3 ?>
                <?php echo $td4 ?>
                <?php echo $td5 ?>
                <?php echo $td6 ?>
            </tr>
            <tr>
                <td>8:00am - 8:30am</td>
                <?php echo $td1_1 ?>
                <?php echo $td2_1 ?>
                <?php echo $td3_1 ?>
                <?php echo $td4_1 ?>
                <?php echo $td5_1 ?>
                <?php echo $td6_1 ?>
            </tr>           
            <tr>
            <td>8:30am - 9:00am</td>
                <?php echo $td1_2 ?>
                <?php echo $td2_2 ?>
                <?php echo $td3_2 ?>
                <?php echo $td4_2 ?>
                <?php echo $td5_2 ?>
                <?php echo $td6_2 ?>
            </tr>
            <tr>
                <td>9:00am - 9:30am</td>
                <?php echo $td1_3 ?>
                <?php echo $td2_3 ?>
                <?php echo $td3_3 ?>
                <?php echo $td4_3 ?>
                <?php echo $td5_3 ?>
                <?php echo $td6_3 ?>
            </tr>
            <tr>
                <td>9:30am - 10:00am</td>
                <?php echo $td1_4 ?>
                <?php echo $td2_4 ?>
                <?php echo $td3_4 ?>
                <?php echo $td4_4 ?>
                <?php echo $td5_4 ?>
                <?php echo $td6_4 ?>
            </tr>
            <tr>
                <td>10:00am - 10:30am</td>
                <?php echo $td1_5 ?>
                <?php echo $td2_5 ?>
                <?php echo $td3_5 ?>
                <?php echo $td4_5 ?>
                <?php echo $td5_5 ?>
                <?php echo $td6_5 ?>
            </tr>
            <tr>
                <td>10:30am - 11:00am</td>
                <?php echo $td1_6 ?>
                <?php echo $td2_6 ?>
                <?php echo $td3_6 ?>
                <?php echo $td4_6 ?>
                <?php echo $td5_6 ?>
                <?php echo $td6_6 ?>
            </tr>
            <tr>
                <td>11:00am - 11:30am</td>
                <?php echo $td1_7 ?>
                <?php echo $td2_7 ?>
                <?php echo $td3_7 ?>
                <?php echo $td4_7 ?>
                <?php echo $td5_7 ?>
                <?php echo $td6_7 ?>
            </tr>
            <tr>
                <td>11:30am - 12:00pm</td>
                <?php echo $td1_8 ?>
                <?php echo $td2_8 ?>
                <?php echo $td3_8 ?>
                <?php echo $td4_8 ?>
                <?php echo $td5_8 ?>
                <?php echo $td6_8 ?>
            </tr>
            <tr>
                <td>12:00pm - 12:30pm</td>
                <?php echo $td1_9 ?>
                <?php echo $td2_9 ?>
                <?php echo $td3_9 ?>
                <?php echo $td4_9 ?>
                <?php echo $td5_9 ?>
                <?php echo $td6_9 ?>
            </tr>
            <tr>
                <td>12:30pm - 1:00pm</td>
                <?php echo $td1_10 ?>
                <?php echo $td2_10 ?>
                <?php echo $td3_10 ?>
                <?php echo $td4_10 ?>
                <?php echo $td5_10 ?>
                <?php echo $td6_10 ?>
            </tr>
            <tr>
                <td>1:00pm - 1:30pm</td>
                <?php echo $td1_11 ?>
                <?php echo $td2_11 ?>
                <?php echo $td3_11 ?>
                <?php echo $td4_11 ?>
                <?php echo $td5_11 ?>
                <?php echo $td6_11 ?>
            </tr>
            <tr>
                <td>1:30pm - 2:00pm</td>
                <?php echo $td1_12 ?>
                <?php echo $td2_12 ?>
                <?php echo $td3_12 ?>
                <?php echo $td4_12 ?>
                <?php echo $td5_12 ?>
                <?php echo $td6_12 ?>
            </tr>
            <tr>
                <td>2:00pm - 2:30pm</td>
                <?php echo $td1_13 ?>
                <?php echo $td2_13 ?>
                <?php echo $td3_13 ?>
                <?php echo $td4_13 ?>
                <?php echo $td5_13 ?>
                <?php echo $td6_13 ?>
            </tr>
            <tr>
                <td>2:30pm - 3:00pm</td>
                <?php echo $td1_14 ?>
                <?php echo $td2_14 ?>
                <?php echo $td3_14 ?>
                <?php echo $td4_14 ?>
                <?php echo $td5_14 ?>
                <?php echo $td6_14 ?>
            </tr>
            <tr>
                <td>3:00pm - 3:30pm</td>
                <?php echo $td1_15 ?>
                <?php echo $td2_15 ?>
                <?php echo $td3_15 ?>
                <?php echo $td4_15 ?>
                <?php echo $td5_15 ?>
                <?php echo $td6_15 ?>
            </tr>
            <tr>
                <td>3:30pm - 4:00pm</td>
                <?php echo $td1_16 ?>
                <?php echo $td2_16 ?>
                <?php echo $td3_16 ?>
                <?php echo $td4_16 ?>
                <?php echo $td5_16 ?>
                <?php echo $td6_16 ?>
            </tr>
            <tr>
                <td>4:00pm - 4:30pm</td>
                <?php echo $td1_17 ?>
                <?php echo $td2_17 ?>
                <?php echo $td3_17 ?>
                <?php echo $td4_17 ?>
                <?php echo $td5_17 ?>
                <?php echo $td6_17 ?>
            </tr>
            <tr>
                <td>4:30pm - 5:00pm</td>
                <?php echo $td1_18 ?>
                <?php echo $td2_18 ?>
                <?php echo $td3_18 ?>
                <?php echo $td4_18 ?>
                <?php echo $td5_18 ?>
                <?php echo $td6_18 ?>
            </tr>
            <tr>
                <td>5:00pm - 5:30pm</td>
                <?php echo $td1_19 ?>
                <?php echo $td2_19 ?>
                <?php echo $td3_19 ?>
                <?php echo $td4_19 ?>
                <?php echo $td5_19 ?>
                <?php echo $td6_19 ?>
            </tr>
            <tr>
                <td>5:30pm - 6:00pm</td>
                <?php echo $td1_20 ?>
                <?php echo $td2_20 ?>
                <?php echo $td3_20 ?>
                <?php echo $td4_20 ?>
                <?php echo $td5_20 ?>
                <?php echo $td6_20 ?>
            </tr>
            <tr>
                <td>6:00pm - 6:30pm</td>
                <?php echo $td1_21 ?>
                <?php echo $td2_21 ?>
                <?php echo $td3_21 ?>
                <?php echo $td4_21 ?>
                <?php echo $td5_21 ?>
                <?php echo $td6_21 ?>
            </tr>
            <tr>
                <td>6:30pm - 7:00pm</td>
                <?php echo $td1_22 ?>
                <?php echo $td2_22 ?>
                <?php echo $td3_22 ?>
                <?php echo $td4_22 ?>
                <?php echo $td5_22 ?>
                <?php echo $td6_22 ?>
            </tr>
            <tr>
                <td>7:00pm - 7:30pm</td>
                <?php echo $td1_23 ?>
                <?php echo $td2_23 ?>
                <?php echo $td3_23 ?>
                <?php echo $td4_23 ?>
                <?php echo $td5_23 ?>
                <?php echo $td6_23 ?>
            </tr>
            <tr>
                <td>7:30pm - 8:00pm</td>
                <?php echo $td1_24 ?>
                <?php echo $td2_24 ?>
                <?php echo $td3_24 ?>
                <?php echo $td4_24 ?>
                <?php echo $td5_24 ?>
                <?php echo $td6_24 ?>
            </tr>
            <tr>
                <td>8:00pm - 8:30pm</td>
                <?php echo $td1_25 ?>
                <?php echo $td2_25 ?>
                <?php echo $td3_25 ?>
                <?php echo $td4_25 ?>
                <?php echo $td5_25 ?>
                <?php echo $td6_25 ?>
            </tr>
            <tr>
                <td>8:30pm - 9:00pm</td>
                <?php echo $td1_26 ?>
                <?php echo $td2_26 ?>
                <?php echo $td3_26 ?>
                <?php echo $td4_26 ?>
                <?php echo $td5_26 ?>
                <?php echo $td6_26 ?>
            </tr>
        </table>                
            </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
            <form action="export.php" method="POST">
                <input type="submit" value="Export" name="ex" id="submit2"></input>
            </form>
            </div>
        </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Team PUYAT 2016</span>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                        <li>
                        <form method="POST" action="../student.php">
                            <input type="submit" name="logout" value="Log-out" />
                        </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/agency.js"></script>

</body>

</html>
