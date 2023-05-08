<?php 
session_start();
include ("connect.php");
$UserID= $_SESSION['txtid'];
$qryname = "SELECT *  from  tbladmin where aid='$UserID'";
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
                                 <a class="nav-link" href="AdminHomepage.php">Home</a>
                             </li>
                               <li class="nav-item" href="#">
                                 <a class="nav-link" href="ManageDriver.php">Back</a>
                             </li>
                               <li class="nav-item" href="#">
                                 <a class="nav-link" href="logout.php">Logout</a>
                             </li>
                           </ul>
                            <div class="user" style="color:#ffffff;font-size:25px;font-weight:700">
                                <img src="images/user.png" alt="" srcset="" width="50px">
                                <?php
	                          $UserID= $_SESSION['txtid'];
	                          include ("connect.php");
	                          $qryname = "select * from  tbladmin where aid='$UserID' ";
	                          $result = mysqli_query($con,$qryname);
	                           while($rows = mysqli_fetch_assoc($result)) 
	                         { $name=$rows['aname'];
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

      <div class="content">
        <div class="container-fluid">
            <div class="search">
            <form action="Search_Driver.php" method="post">
                    <table class="tb-search">
                        <tr>
                            <td><input type="text" class="form-control" width="100" name="D_id"
                                    placeholder="Enter Driver ID" id="" style="width:300px;height:45px;padding:15px" required>
                            </td>
                            <td>
                                <input type="submit" value="Search" class="btn-search">
                                <a href="ListDriver.php"><input type="button" value="Clear"
                                        class="btn-Clear"></a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <br /><br />

       <div class="back">
        <div class="container">
            <div class="row">
                <div class="view">
                     <h1>List Drivers</h1>
            

    <?php
include('connect.php');

$D_id=$_POST['D_id'];
$q="select * from  tbldriver  where D_id='$D_id'  and status!='Deleted'";

$r=mysqli_query($con,$q);
$num=mysqli_num_rows($r);
if ($num > 0) {
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th> ID</th>';
    echo '<th> Name</th>';
    echo '<th> phone</th>';
    echo '<th> email</th>';
    echo '<th> Address</th>';
    echo '<th>Security Question</th>';
    echo '<th>Answer</th>';
    echo '<th colspan="2">Action</th>';
    echo '</tr></thead><tbody>';

	while($row = mysqli_fetch_assoc($r)) {
		$D_id=$row["D_id"];
		$dname=$row["dname"];
		$phone=$row["phone"];
		$email=$row["email"];
		$address=$row["address"];
		$seq=$row["seq"];
		$answer=$row["answer"];

        echo '<tr>';
        echo "<td>$D_id</td>";
        echo "<td>$dname</td>";
        echo "<td>$phone</td>";
        echo "<td>$email</td>";
        echo "<td>$address</td>";
        echo "<td>$seq</td>";
        echo "<td>$answer</td>";
        echo '<td><a href="UpdateDriver.php?D_id='.$D_id.'" class="btn-Update"><img src="images/update.png"></a></td>';
        echo "<td><a href='DeleteDriver.php?D_id=$D_id' class='btn-login' onclick='return confirm(\"Are you sure you want to Delete this Driver?\")'><img src='images/delete.png'></a></td>";
        echo '</tr>';
    }

    echo '</tbody></table>';


    echo '</ul>';
} else {
	echo "<center>No Driver Yet! <br>";
	echo "Click <a href='AdminHomepage.php'>here</a> To Back !</a></center>";
}
?>





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

