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
                                 <a class="nav-link" href="ListDriver.php">Back</a>
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
      <?php
include("connect.php");
$D_id= $_GET['D_id'];
$qryname = "select * from  tbldriver where D_id='$D_id' ";
$result= mysqli_query($con,$qryname);
$num = mysqli_num_rows($result);
 while($row = mysqli_fetch_assoc($result)) {

$D_id=$row["D_id"];
$dname=$row["dname"];
$email=$row["email"];
$phone=$row["phone"];
$address=$row["address"];
}
?>

       <br/> <br/> <br/> <br/> <br/><br/> <br/> <br/> <br/> <br/>
       <div class="back">
        <div class="container">
            <div class="row">
                <div class="Register">
                     <h1>Update Driver</h1>
                    <form action="UpdateDriver_Code.php?D_id=<?php echo $D_id ?>" method="post">
                        <table>
                            <tr>
                                <td><label for="">Civil ID</label>
                                    <input type="text" name="D_id" class="form-control"  maxlength="8" id="D_id"  value="<?php echo $D_id ?>" style="width:300px;height:45px;border-radius:20px;margin:auto;"  required>
                                    <div id="result" style="width: 300px"></div>				
                                  </td>
                                <td ><label for="">Driver Name</label>
                                    <input type="text" name="dname" class="form-control"  maxlength="50"   value="<?php echo $dname ?>" placeholder="Enter Driver Name" style="width:300px;height:45px;border-radius:20px;margin:auto;"  required>
                                  </td>
                            </tr>
                            <tr>
                                <td><label for="">Driver Email</label>
                                    <input type="email" name="email" class="form-control"  maxlength="35"  value="<?php echo $email ?>"  placeholder="Enter Driver Email" style="width:300px;height:45px;border-radius:20px;margin:auto;"  required>
                                  </td>
                                <td ><label for="">Driver Phone</label>
                                    <input type="text" name="phone" class="form-control"  maxlength="8"  value="<?php echo $phone ?>"  placeholder="Enter Driver Phone"  pattern="[7|9|2][0-9]{7}" required title="Please enter a phone number starting with 7, 9, or 2 and has a total of 8 digits" style="width:300px;height:45px;border-radius:20px;margin:auto;"  required>
                            </tr>
                      <tr>                  
                        <td> <label for="">Address</label>
                          <input type="text" name="address"  maxlength="25" class="form-control" value="<?php echo $address ?>" placeholder="Enter Driver  Address"   style="width:300px;height:45px;border-radius:20px;margin:auto;" required>
                        </td>
                    </tr>
                            <tr>
                              <td colspan="2">
                                <input type="submit" class="Submit_btn" value="Update">
                                <input type="reset" class="Cancel_btn" value="Reset">
                              </td>
                            </tr>
                        </table>
                     </form>
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

