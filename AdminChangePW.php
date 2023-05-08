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
.Register{
  height: 500px;
}
.Register table {
    height: 368px;
}
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
       <div class="back">
        <div class="container">
            <div class="row">
                <div class="Register">
                     <h1 style="font-size:25px;font-weight:800" >Change Password</h1>
                     <hr>
                     <form   method="post" id="form2"   name="form2"  onsubmit="return validate(this);"  enctype="multipart/form-data"  action="Admin_ChangePasswordCode.php">
                    <table>
                        <tr>
                            <td colspan="2"><label for="">Current Password</label>
                            <input type="password" name="opwd"  maxlength="15" class="form-control" placeholder="Enter Your Current Password"  style="width:300px;height:45px;border-radius: 20px;margin:auto;" required>
                              </td>
                        </tr>
                      <tr>
                        <td colspan="2"> <label for="">New Password</label>
                        <input type="password" name="npwd"  id="npwd"  maxlength="15" class="form-control" placeholder="Enter Your New Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}" title="Please enter a password with at least 8 characters including at least one uppercase letter, one lowercase letter, one number, and one special character." style="width:300px;height:45px;border-radius: 20px;margin:auto;"  required>
                        </td>
                    </tr>
                      <tr>
                        <td colspan="2"> <label for="">Repeat Password</label>
                        <input type="password" name="nrpwd"  id="nrpwd" oninput="check(this)" maxlength="15" class="form-control" placeholder="Enter  Repeat Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}" title="Please enter a password with at least 8 characters including at least one uppercase letter, one lowercase letter, one number, and one special character." style="width:300px;height:45px;border-radius: 20px;margin:auto;"  required>
                        <p class="m-0 py-4"><a href="" class="text-muted"></a></p>
                    </td>
                    </tr>
                        <tr>
                          <td colspan="2">
                          <input type="submit" class="Submit_btn" value="Sing In">
                            <input type="reset" class="Cancel_btn" value="Reset">

                          </td>
                        </tr>
                    </table>
                 </form>
              </div>
              
        <br/><br/><br/><br/><br/>

 <!-- Check If New Password Match Repeat Password -->
 <script>
function check(input) {
  if (input.value !== document.getElementById('npwd').value) {
    input.setCustomValidity('must match New  Password');
  } else {
    input.setCustomValidity('');
  }
}
</script>
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

