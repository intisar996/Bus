<?php 
session_start();
include ("connect.php");
$UserID= $_SESSION['txtid'];
$qryname = "SELECT *  from  tbipassanger where pid='$UserID'";
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
.invoice-box {
  max-width: 800px;
  margin: auto;
  padding: 30px;
  border: 1px solid #eee;
  box-shadow: 0 0 10px rgba(0, 0, 0, .15);
  font-size: 16px;
  line-height: 24px;
  font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
  color: #555;
}

.invoice-box table {
  width: 100%;
  line-height: inherit;
  text-align: left;
}

.invoice-box table td {
  padding: 5px;
  vertical-align: top;
}

.invoice-box table tr td:nth-child(n+2) {
  text-align: right;
}

.invoice-box table tr.top table td {
  padding-bottom: 20px;
}

.invoice-box table tr.top table td.title {
  font-size: 45px;
  line-height: 45px;
  color: #333;
}

.invoice-box table tr.information table td {
  padding-bottom: 40px;
}

.invoice-box table tr.heading td {
  background: #eee;
  border-bottom: 1px solid #ddd;
  font-weight: bold;
}

.invoice-box table tr.details td {
  padding-bottom: 20px;
}

.invoice-box table tr.item td{
  border-bottom: 1px solid #eee;
}

.invoice-box table tr.item.last td {
  border-bottom: none;
}

.invoice-box table tr.item input {
  padding-left: 5px;
}

.invoice-box table tr.item td:first-child input {
  margin-left: -5px;
  width: 100%;
}

.invoice-box table tr.total td:nth-child(2) {
  border-top: 2px solid #eee;
  font-weight: bold;
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
                                 <a class="nav-link" href="PassengerHomePage.php">Home</a>
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
	                          $qryname = "select * from  tbipassanger where pid='$UserID' ";
	                          $result = mysqli_query($con,$qryname);
	                           while($rows = mysqli_fetch_assoc($result)) 
	                         { $name=$rows['pname'];
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
                     <h1>My Booking</h1>
            
    <?php
include('connect.php');


$today = date('Y-m-d');
$q="select * from  tblpayment P, tblticket T, tblbus B,tbldriver D,tbipassanger I  where  P.Ticket_id=T.Ticket_id and T.Bus_id=B.Bus_id and T.D_id=D.D_id and P.pid='$UserID' and I.pid=P.pid order by P.booking_date";
$r=mysqli_query($con,$q);
$num=mysqli_num_rows($r);


	while($row = mysqli_fetch_assoc($r)) {
		$Ticket_id =$row["Ticket_id"];
		$Bus_Name=$row["Bus_Name"];
		$dname=$row["dname"];
		$T_date=$row["T_date"];
		$T_time=$row["T_time"];
		$Number_ofTicket=$row["Number_ofTicket"];
		$Total_Price=$row["Total_Price"];
		$bus_from=$row["bus_from"];
		$bus_to=$row["bus_to"];
		$pid=$row["pid"];
		$pname=$row["pname"];
		$pemail=$row["pemail"];
		$pphone=$row["pphone"];
		$mode=$row["mode"];
		$price=$row["price"];
		$booking_date=$row["booking_date"];

    }
?>


          
<div class="invoice-box">
  <table cellpadding="0" cellspacing="0">
    <tr class="top">
      <td colspan="4">
        <table>
          <tr>
            <td  colspan="2">
            <h1 align="center">Oman Bus Bookings</h1>
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <tr class="information">
      <td colspan="4">
        <table>
          <tr>
            <td>
              Oman, Shinas.<br> Office Number:+968 25417852
            </td>

            <td>
              Email: OmanBusBookings@Gmail.com <br>
              Office Number:+968 23654178
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <tr class="heading">
      <td colspan="4">
        Payment Information
      </td>
    </tr>

    <tr class="details">
      <td  colspan="4">
       Payment Mode :<?php echo $mode ?>
      </td>
    </tr>

    <tr class="heading">
      <td colspan="4">
        Ticket Information
      </td>
    </tr>

    <tr class="item">
      <td colspan="2">
      Ticket ID : <?php echo $Ticket_id ?>
      </td>

      <td colspan="2">
      Ticket Date : <?php echo $T_date ?>
      </td>
    </tr>

    <tr class="item">
      <td colspan="2" >
      Ticket Time : <?php echo $T_time ?>
      </td>

      <td  colspan="2">
      Ticket Price : <?php echo $price ?>.OMR
      </td>
    </tr>
    <tr class="item">
      <td colspan="4" >
      Number Of Tickets : <?php echo $Number_ofTicket ?>
      </td>
    </tr>

    <tr class="item">
      <td colspan="2">
      Bus Name : <?php echo $Bus_Name ?>
      </td>

      <td colspan="2">
      Driver Name : <?php echo $dname ?>
      </td>
    </tr>
    <tr class="item">
      <td colspan="2">
      Starting station : <?php echo $bus_from ?>
      </td>

      <td colspan="2">
      Ending station : <?php echo $bus_to ?>
      </td>
    </tr>
    <tr class="item">
      <td colspan="4">
      Booking Date : <?php echo $booking_date ?>
      </td>
    </tr>
    <tr class="heading">
      <td colspan="4">
      Passenger Information
      </td>
    </tr>

    <tr class="item">
      <td colspan="2">
      Passenger ID : <?php echo $pid ?>
      </td>

      <td colspan="2">
      Passenger Name : <?php echo $pname ?>
      </td>
    </tr>

    <tr class="item">
      <td colspan="2" >
      Passenger Phone : <?php echo $pphone ?>
      </td>

      <td  colspan="2">
      Passenger Email : <?php echo $pemail ?>
      </td>
    </tr>

    <tr>
      <td colspan="4">
        <button class="btn-add-row">Total Price</button>
      </td>
    </tr>

    <tr class="total">
      <td colspan="3"></td>

      <td>
        Total: <?php echo $Total_Price ?>.OMR
      </td>
    </tr>
  </table>
</div>
                </div>
            </div>
           </div>
       </div>
 
     <br/><br/><br/>
     <button onclick="window.print()" class="btn-Clear" style="display:block; margin: 0 auto;">Print</button>
     <br/><br/><br/><br/><br/>

    
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

