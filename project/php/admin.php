<?php
    error_reporting(E_ALL & ~E_NOTICE);
    require 'connection.php';
    require 'select.php';
    session_start();

    if(isset($_SESSION['Username'])){
        $user = $_SESSION['Username'];
        $lvl = $_SESSION['Level'];
    if($lvl!=1){
        header('Location: ../login.php');
    }
    //BABUSH!
    if(@$_POST['logout']){
        session_unset();
        session_destroy();
        header('Location: ../login.php');
        }
    }
    else{
        header('Location: ../login.php');
        die();

    }

                if(@$_POST['go']){
                $choose = @$_POST['room-edit'];
                $_SESSION['Room'] = $choose;

                if($choose==201){
                    header('Location: admin/201.php#roomtables');
                }
                if($choose==202){
                    header('Location: admin/202.php#roomtables');
                }
                if($choose==203){
                    header('Location: admin/203.php#roomtables');
                }
                if($choose==204){
                    header('Location: admin/204.php#roomtables');
                }
                if($choose==205){
                    header('Location: admin/205.php#roomtables');
                }
                if($choose==206){
                    header('Location: admin/206.php#roomtables');
                }
                if($choose==207){
                    header('Location: admin/207.php#roomtables');
                }
                if($choose==208){
                    header('Location: admin/208.php#roomtables');
                }
                if($choose==209){
                    header('Location: admin/209.php#roomtables');
                }
                if($choose==210){
                    header('Location: admin/210.php#roomtables');
                }
                if($choose==211){
                    header('Location: admin/211.php#roomtables');
                }
                if($choose==212){
                    header('Location: admin/212.php#roomtables');
                }
                if($choose==213){
                    header('Location: admin/213.php#roomtables');
                }
                if($choose==214){
                    header('Location: admin/214.php#roomtables');
                }
                if($choose==215){
                    header('Location: admin/215.php#roomtables');
                }
                if($choose==216){
                    header('Location: admin/216.php#roomtables');
                }
                if($choose==301){
                    header('Location: admin/301.php#roomtables');
                }
                if($choose==302){
                    header('Location: admin/302.php#roomtables');
                }
                if($choose==303){
                    header('Location: admin/303.php#roomtables');
                }
                if($choose==304){
                    header('Location: admin/304.php#roomtables');
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
    </style>
    <link rel="stylesheet" href="../css/schedule.css">
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/agency.css" rel="stylesheet">

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
                        <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#add">Add</a>
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

    <!-- Add Section -->
    <section id="add" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Add Schedule</h2>
                    <h3 class="section-subheading text-muted">Assign schedule to a room.</h3>
                </div>
            </div>

            <div class="row">
                <form method="POST" action="add.php">  
                <div class="form-group">
                    <div class="col-xs-4">
                        <select name="day" class="form-control" id="sel1">
                            <option><?php echo $day ?></option>
                        </select>
                    </div>
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
                        <select name="room" class="form-control" id="sel1">
                            <option><?php echo $room ?></option>
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
                        <select name="start" class="form-control" id="sel1">
                            <option>Choose Start Time</option>
                            <option value="73000">7:30:00am</option>
                            <option value="80000">8:00:00am</option>
                            <option value="83000">8:30:00am</option>
                            <option value="90000">9:00:00am</option>
                            <option value="93000">9:30:00am</option>
                            <option value="100000">10:00:00am</option>
                            <option value="103000">10:30:00am</option>
                            <option value="110000">11:00:00am</option>
                            <option value="113000">11:30:00am</option>
                            <option value="120000">12:00:00pm</option>
                            <option value="123000">12:30:00pm</option>
                            <option value="130000">1:00:00pm</option>
                            <option value="133000">1:30:00pm</option>
                            <option value="140000">2:00:00pm</option>
                            <option value="143000">2:30:00pm</option>
                            <option value="150000">3:00:00pm</option>
                            <option value="153000">3:30:00pm</option>
                            <option value="160000">4:00:00pm</option>
                            <option value="163000">4:30:00pm</option>
                            <option value="170000">5:00:00pm</option>
                            <option value="173000">5:30:00pm</option>
                            <option value="180000">6:00:00pm</option>
                            <option value="183000">6:30:00pm</option>
                            <option value="190000">7:00:00pm</option>
                            <option value="193000">7:30:00pm</option>
                            <option value="200000">8:00:00pm</option>
                            <option value="203000">8:30:00pm</option>
                            <option value="210000">9:00:00pm</option>
                            <option value="213000">9:30:00pm</option>
                        </select>
                    </div>
                    <div class="col-xs-4">
                        <select name="end" class="form-control" id="sel1">
                            <option>Choose End Time</option>
                            <option value="73000">7:30:00am</option>
                            <option value="80000">8:00:00am</option>
                            <option value="83000">8:30:00am</option>
                            <option value="90000">9:00:00am</option>
                            <option value="93000">9:30:00am</option>
                            <option value="100000">10:00:00am</option>
                            <option value="103000">10:30:00am</option>
                            <option value="110000">11:00:00am</option>
                            <option value="113000">11:30:00am</option>
                            <option value="120000">12:00:00pm</option>
                            <option value="123000">12:30:00pm</option>
                            <option value="130000">1:00:00pm</option>
                            <option value="133000">1:30:00pm</option>
                            <option value="140000">2:00:00pm</option>
                            <option value="143000">2:30:00pm</option>
                            <option value="150000">3:00:00pm</option>
                            <option value="153000">3:30:00pm</option>
                            <option value="160000">4:00:00pm</option>
                            <option value="163000">4:30:00pm</option>
                            <option value="170000">5:00:00pm</option>
                            <option value="173000">5:30:00pm</option>
                            <option value="180000">6:00:00pm</option>
                            <option value="183000">6:30:00pm</option>
                            <option value="190000">7:00:00pm</option>
                            <option value="193000">7:30:00pm</option>
                            <option value="200000">8:00:00pm</option>
                            <option value="203000">8:30:00pm</option>
                            <option value="210000">9:00:00pm</option>
                            <option value="213000">9:30:00pm</option>
                        </select>
                    </div>
                    <div class="col-xs-4">
                        <select name="yr" class="form-control" id="sel1">
                            <option><?php echo $yr ?></option>
                        </select>
                    </div>
                    <div class="col-xs-4">
                        <input type="submit" name="add" value="ADD" id="submit"></input>
                    </div>
                    <div class="col-xs-4">
                    </div>
                </form>                
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
                <form action="admin.php" method="POST">
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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>8:00am - 8:30am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>           
            <tr>
            <td>8:30am - 9:00am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>9:00am - 9:30am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>9:30am - 10:00am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>10:00am - 10:30am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>10:30am - 11:00am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>11:00am - 11:30am</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>11:30am - 12:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>12:00pm - 12:30pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>12:30pm - 1:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1:00pm - 1:30pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1:30pm - 2:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2:00pm - 2:30pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2:30pm - 3:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3:00pm - 3:30pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3:30pm - 4:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>4:00pm - 4:30pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>4:30pm - 5:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>5:00pm - 5:30pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>5:30pm - 6:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>6:00pm - 6:30pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>6:30pm - 7:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>7:00pm - 7:30pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>7:30pm - 8:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>8:00pm - 8:30pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>8:30pm - 9:00pm</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>                
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
                        <form method="POST" action="admin.php">
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
