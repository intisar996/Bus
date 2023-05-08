<?php 
session_start();
include ("connect.php");
$UserID= $_SESSION['txtid'];
$qryname = "SELECT *  from  tbldriver where D_id='$UserID'";
$result = mysqli_query($con, $qryname);
if (mysqli_num_rows($result) == 0) {
  header("location:login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Oman Bus Bookings</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
   </head>
   <style>

</style>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html">Oman Bus Bookings</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                               <li class="nav-item" href="#">
                                 <a class="nav-link" href="DriverHomePage.php">Home</a>
                             </li>
                               <li class="nav-item" href="#">
                                 <a class="nav-link" href="logout.php">Logout</a>
                             </li>
                           </ul>
                            <div class="user" style="color:#ffffff;font-size:25px;font-weight:700">
                                <img src="images/user.png" alt="" srcset="" width="50px">
                                <?php
	                          $D_id= $_SESSION['txtid'];
	                          include ("connect.php");
	                          $qryname = "select * from  tbldriver where D_id='$D_id' ";
	                          $result = mysqli_query($con,$qryname);
	                           while($rows = mysqli_fetch_assoc($result)) 
	                         { $name=$rows['dname'];
                              echo"$name";
                             }
	                        ?> 
                            </div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <br/> <br/> <br/> <br/> <br/><br/> <br/> <br/> <br/> <br/>

       <div class="back">
        <div class="container">
            <div class="row">
                <div class="view">
                     <h1>List Problem</h1>
            
    <?php
include('connect.php');
$pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
$records_per_page = 15;
$offset = ($pageno - 1) * $records_per_page;

$query_count = "SELECT COUNT(*) AS total FROM tblbusproblem ";
$result_count = mysqli_query($con, $query_count);
$row_count = mysqli_fetch_assoc($result_count);
$total_records = $row_count['total'];
$total_pages = ceil($total_records / $records_per_page);

$today = date('Y-m-d');
$q="select * from  tblbusproblem P,tblbus B where  P.Bus_id=B.Bus_id  and P.D_id='$UserID'";

$r=mysqli_query($con,$q);
$num=mysqli_num_rows($r);
if ($num > 0) {
   echo '<table class="table table-striped">';
   echo '<thead>';
   echo '<tr>';
   echo '<th> Bus Name</th>';
   echo '<th> Driver ID</th>';
   echo '<th> Problem</th>';
   echo '<th> Status</th>';
   echo '</tr></thead><tbody>';

  while($row = mysqli_fetch_assoc($r)) {
     $Bus_Name =$row["Bus_Name"];
     $D_id=$row["D_id"];
     $Problem=$row["Problem"];
     $Problem_status=$row["Problem_status"];


       echo '<tr>';
       echo "<td>$Bus_Name</td>";
       echo "<td>$D_id</td>";
       echo "<td>$Problem</td>";
       echo "<td>$Problem_status</td>";
       echo '</tr>';
    }

    echo '</tbody></table>';

    // Pagination
    $prev_disabled = ($pageno <= 1) ? 'disabled' : '';
    $next_disabled = ($pageno >= $total_pages) ? 'disabled' : '';

    echo '<ul class="pagination">';
    if ($pageno > 1) {
        $prev_page = $pageno - 1;
        echo '<li><a href="?pageno='.$prev_page.'" class="'.$prev_disabled.'">Prev</a></li>';
    }

    for($i = 1; $i <= $total_pages; $i++) {
        if ($pageno == $i) {
            // Current page
            echo '<li class="active"><span>'.$i.'</span></li>';
        } else {
            // Other pages
            echo '<li><a href="?pageno='.$i.'">'.$i.'</a></li>';
        }
    }

    if ($pageno < $total_pages) {
        $next_page = $pageno + 1;
        echo '<li><a href="?pageno='.$next_page.'" class="'.$next_disabled.'">Next</a></li>';
    }

    echo '</ul>';
} else {
	echo "<center>No Ticket Yet! <br>";
	echo "Click <a href='DriverHomePage.php'>here</a> To Back !</a></center>";
}
?>





                </div>
                </div>
            </div>
           </div>
       </div>
 
     <br/><br/><br/><br/><br/><br/><br/><br/>

    
      <!--  footer -->
      <footer >
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="cont">
                        <h3>Oman Bus Bookings
                        </h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2023 All Rights Reserved. by Oman Bus Bookings</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
   </body>
</html>

