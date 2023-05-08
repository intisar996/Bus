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
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
                     <h1>Add Ticket Form</h1>
                    <form action="AddTicket_Code.php" method="post">
                        <table>
                            <tr>
                                <td><label for="">Bus Name</label>
                                <select id="Bus_id" name="Bus_id" class="form-control" placeholder="Enter Bus Name" required style="width:300px;height:45px;border-radius:20px;margin:auto;">
                                            <option value="">Select Bus Name </option>
                                            <?php
				                             include("connect.php");
				                             $query = "select*from  tblbus where status!='Deleted'";
				                             $result= mysqli_query($con,$query);
				                             $num   = mysqli_num_rows($result);  
				                             while($row = mysqli_fetch_assoc($result)) {
				                             $Bus_id =$row["Bus_id"];
				                            $Bus_Name =$row["Bus_Name"];
				                               echo "<option value='$Bus_id'>$Bus_Name</option>";
				                               }				  
		                                     ?>
                                        </select>			
                                  </td>
                                <td ><label for="">Driver Name</label>
                                <select id="D_id" name="D_id" class="form-control" required style="width:300px;height:45px;border-radius:20px;margin:auto;">
                                            <option value="">Select Driver Name </option>
                                            <?php
				                             include("connect.php");
				                             $query = "select*from  tbldriver where status!='Deleted'";
				                             $result= mysqli_query($con,$query);
				                             $num   = mysqli_num_rows($result);  
				                             while($row = mysqli_fetch_assoc($result)) {
				                             $D_id =$row["D_id"];
				                             $dname =$row["dname"];
				                               echo "<option value='$D_id'>$dname</option>";
				                               }				  
		                                     ?>
                                        </select>                                  </td>
                            </tr>
                            <tr>
                            <?php
                                $today = date('Y-m-d');
                                $min_date = date('Y-m-d', strtotime($today. ' + 1 days'));
                                ?>
                                <td><label for="">Ticket Date</label>
                                    <input type="date" name="T_date" class="form-control" min="<?php echo $min_date; ?>"  style="width:300px;height:45px;border-radius:20px;margin:auto;"  required>
                                  </td>
                                <td ><label for="">Ticket  Time</label>
                                    <input type="time" name="T_time" class="form-control"  style="width:300px;height:45px;border-radius:20px;margin:auto;"  required>
                            </tr>
                            <tr>
                            <td> <label for="">	Available Ticket</label>
                            <input type="number" name="available_ticket" class="form-control"  maxlength="2" style="width:300px;height:45px;border-radius:20px;margin:auto;"  required>
                          </td>
                          <td><label for="">Price</label>
                       <input type="text" name="price"  maxlength="4" class="form-control" placeholder="Enter Ticket Price"  pattern="\d+(\.\d{1,2})?"
                        title="Please enter a valid number with up to two decimal places" style="width:300px;height:45px;border-radius:20px;margin:auto;"  required>
                            </td>
                            </tr>

                            <tr>
                            <td> <label for="">State</label>
                            <input list="Statex" id="State"  placeholder="Select State Name" name="state" class="form-control"  style="width:300px;height:45px;border-radius:20px;margin:auto;"  required>
			 		                    <datalist id="Statex"> 
                                            <option value="Muscat">Muscat</option>
                                            <option value="Mutrah">Mutrah</option>
                                            <option value="Amerat">Amerat</option>
                                            <option value="Bausher">Bausher</option>
                                            <option value="Seeb">Seeb</option>
                                            <option value="Quriyat">Quriyat</option>
                                            <option value="Salalah">Salalah</option>
                                            <option value="Taqah">Taqah</option>
                                            <option value="Mirbat">Mirbat</option>
                                            <option value="Rakhyut">Rakhyut</option>
                                            <option value="Thumrait">Thumrait</option>
                                            <option value="Dhalkut">Dhalkut</option>
                                            <option value="Mazyounah">Mazyounah</option>
                                            <option value="Muqshin">Muqshin</option>
                                            <option value="Shaleem">Shaleem</option>
                                            <option value="Hallaniyat Islands">Hallaniyat Islands</option>
                                            <option value="Khasab">Khasab</option>
                                            <option value="Daba">Daba</option>
                                            <option value="Bukha">Bukha</option>
                                            <option value="Madha">Madha</option>
                                            <option value="Mahdha">Mahdha</option>
                                            <option value="Buraymi">Buraymi</option>
                                            <option value="al Sinainah">al Sinainah</option>
                                            <option value="Nizwa">Nizwa</option>
                                            <option value="Bahla">Bahla</option>
                                            <option value="Manah">Manah</option>
                                            <option value="al Hamra">al Hamra</option>
                                            <option value="Adam">Adam</option>
                                            <option value="Izki">Izki</option>
                                            <option value="Samail">Samail</option>
                                            <option value="Bidbid">Bidbid</option>
                                            <option value="Suhar">Suhar</option>
                                            <option value="Shinas">Shinas</option>
                                            <option value="Liwa">Liwa</option>
                                            <option value="Saham">Saham</option>
                                            <option value="Khabourah">Khabourah</option>
                                            <option value="Suwaiq">Suwaiq</option>
                                            <option value="Rustaq">Rustaq</option>
                                            <option value="Awabi">Awabi</option>
                                            <option value="Nakhl">Nakhl</option>
                                            <option value="Wadi al Maawil">Wadi al Maawil</option>
                                            <option value="Barka">Barka</option>
                                            <option value="Musanaah">Musanaah</option>
                                            <option value="Sur">Sur</option>
                                            <option value="al Kamil wal Wafi">al Kamil wal Wafi</option>
                                            <option value="Jaalan Bani Bu Hassan">Jaalan Bani Bu Hassan</option>
                                            <option value="Jaalan Bani  Bu Ali">Jaalan Bani  Bu Ali</option>
                                            <option value="Masirah">Masirah</option>
                                            <option value="Ibra">Ibra</option>
                                            <option value="Mudhaibi">Mudhaibi</option>
                                            <option value="Bidiyah">Bidiyah</option>
                                            <option value="Qabil">Qabil</option>
                                            <option value="Wadi Bani Khalid">Wadi Bani Khalid</option>
                                            <option value="Dima wal Taeen">Dima wal Taeen</option>
                                            <option value="Ibri">Ibri</option>
                                            <option value="Yanqul">Yanqul</option>
                                            <option value="Dhank">Dhank</option>
                                            <option value="Haima">Haima</option>
                                            <option value="Mahawt">Mahawt</option>
                                            <option value="Duqm">Duqm</option>
                                            <option value="al Jazer">al Jazer</option>
                                          </datalist>
                        </td>
                            </tr>
                      <tr>                  
                        <td> <label for="">From</label>
                          <input type="text" name="bus_from"  maxlength="35" class="form-control" placeholder="Enter From"   style="width:300px;height:45px;border-radius:20px;margin:auto;" required>
                        </td>
                        <td> <label for="">To</label>
                          <input type="text" name="bus_to"  maxlength="35" class="form-control" placeholder="Enter To"  style="width:300px;height:45px;border-radius:20px;margin:auto;" required>
                        </td>
                    </tr>
                            <tr>
                              <td colspan="2">
                                <input type="submit" class="Submit_btn" value="Add">
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

