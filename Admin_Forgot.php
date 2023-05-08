

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
                                 <a class="nav-link" href="index.html">Home</a>
                             </li>
                                <li class="nav-item" >
                              <a class="nav-link" href="Contactus.html">Contact US</a>
                             </li>
                           </ul>
                            <div class="login_btn"><a href="login.html">Login</a></div>
                            <div class="SignUp_btn"><a href="register.html">Sing Up</a></div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-xl-6 col-lg-6 col-md-6 ">
                   <div class="text-bg">
                     <h1>Oman Bus Bookings</h1>
                     <span>Booking bus tickets made easy.</span>                    
                     <a  href="login.html">Booking Now</a>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 padding_lert2">
                 
                  <div class="text-img">
                     <figure><img src="images/header.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <?php
 include('connect.php');
 $UserID=$_GET['aid'];
 $q="select * from  tbladmin where aid='$UserID'";
 $result = mysqli_query($con,$q);
 while($row = mysqli_fetch_assoc($result)) {
 $seq=$row["seq"];
 
 }
 ?>
       <br/> <br/> <br/> <br/> <br/>
       <div class="container">
        <div class="row">
            <div class="design">
            <form action="<?php echo "AdminCheckAnswer.php?aid=$UserID";?>" method="post">
                    <table>
                        <tr>
                            <td colspan="2"><label for="">Security Question:</label>
                            <input type="text" name="seq"value="<?php echo $seq ?>" class="form-control form-control-lg"  readonly>
                              </td>
                        </tr>   
                        <tr>
                            <td colspan="2"><label for="">Answer:</label>
                            <input type="text" name="answer"  maxlength="25" class="form-control form-control-lg"  required>
                              </td>
                        </tr>      
                        <tr>
                          <td colspan="2">
                            <input type="submit" class="Submit_btn" value="Submit">
                            <input type="reset" class="Cancel_btn" value="Reset">
                          </td>
                        </tr>
                    </table>
                 </form>
            </div>
        </div>
       </div>
           
         <!-- end classified -->
 
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

