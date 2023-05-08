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
                                 <a class="nav-link" href="ManageBus.php">Back</a>
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
            <form action="Search_Bus.php" method="post">
                    <table class="tb-search">
                        <tr>
                            <td><input type="text" class="form-control" width="100" name="Bus_Name"
                                    placeholder="Enter Bus Name" id="" style="width:300px;height:45px;padding:15px">
                            </td>
                            <td>
                                <input type="submit" value="Search" class="btn-search">
                                <a href="ListBus.php"><input type="button" value="Clear"
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
                     <h1>List Buses</h1>
            

    <?php
include('connect.php');

$Bus_Name=$_POST['Bus_Name'];
$q="select * from  tblbus where status='' and Bus_Name='$Bus_Name'";

$r=mysqli_query($con,$q);
$num=mysqli_num_rows($r);
if ($num > 0) {
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th> Bus ID</th>';
    echo '<th> Bus Name</th>';
    echo '<th> Capacity</th>';
    echo '<th colspan="2">Action</th>';
    echo '</tr></thead><tbody>';

	while($row = mysqli_fetch_assoc($r)) {
		$Bus_id=$row["Bus_id"];
		$Bus_Name=$row["Bus_Name"];
		$Capacity=$row["Capacity"];


        echo '<tr>';
        echo "<td>$Bus_id</td>";
        echo "<td>$Bus_Name</td>";
        echo "<td>$Capacity</td>";
        echo '<td><a href="UpdateBus.php?Bus_id='.$Bus_id.'" class="btn-Update"><img src="images/update.png" width="60px"></a></td>';
        echo "<td><a href='DeleteBus.php?Bus_id=$Bus_id' class='btn-login' onclick='return confirm(\"Are you sure you want to Delete this Bus?\")'><img src='images/delete.png' width='60px'></a></td>";
        echo '</tr>';
    }

    echo '</tbody></table>';


} else {
	echo "<center>No Bus Yet! <br>";
	echo "Click <a href='AdminHomepage.php'>here</a> To Back !</a></center>";
}
?>





                </div>
            </div>
           </div>
       </div>
 
     <br/><br/><br/><br/><br/><br/><br/><br/>

       <!--Check UserID  start -->
       <script>
        $(document).ready(function () {
          $('#D_id').on('blur', function () {
            var User_ID = $(this).val().trim();
            if (User_ID != '') {
              $.ajax({
                url: 'Check_DriverID.php',
                type: 'post',
                data: { User_ID: User_ID },
                success: function (cnt) {
                  $('#result').html(cnt);
                }
              });
            }     });
        });
      </script>
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

