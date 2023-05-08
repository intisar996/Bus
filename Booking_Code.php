<?php
session_start();
include("connect.php");
$pid= $_SESSION['txtid'];
$Ticket_id= $_GET['Ticket_id'];
$qryname = "select * from  tblticket where Ticket_id='$Ticket_id' ";
$result= mysqli_query($con,$qryname);
$num = mysqli_num_rows($result);
 while($row = mysqli_fetch_assoc($result)) {
$available_ticket=$row["available_ticket"];
$Bus_id=$row["Bus_id"];
$available_ticket=$row["available_ticket"];
$price=$row["price"];
}
    
$booking_date = date('Y-m-d');

$Number_ofTicket=$_GET["Number_ofTicket"];
$card_name=$_POST["card_name"];
$cardnum=$_POST["cardnum"];
$mode=$_POST["mode"];

$Total_Price =  $price *  $Number_ofTicket;




$New_available_ticket= $available_ticket - $Number_ofTicket ;

    
          
 $SQL="insert into tblpayment(Ticket_id,pid,booking_date,mode,card_name,cardnum,Number_ofTicket,Total_Price) values('$Ticket_id','$pid','$booking_date','$mode','$card_name','$cardnum','$Number_ofTicket','$Total_Price')";
 mysqli_query($con,$SQL);

 $query1= "update  tblticket set available_ticket='$New_available_ticket' where Ticket_id='$Ticket_id';";
 mysqli_query($con,$query1);

 echo '<script type="text/javascript">'; 
 echo 'alert("Ticket Booking Successfully.");'; 
 $URL="MyBooking.php";
 echo "location.href='$URL'";
 echo '</script>';


    
    ?>
    