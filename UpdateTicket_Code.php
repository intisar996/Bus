<?php
error_reporting(0);     
session_start();
include ("connect.php");
$Ticket_id = $_GET['Ticket_id'];
$Bus_id  =$_POST['Bus_id'];
$D_id  =$_POST['D_id'];
$T_date  =$_POST['T_date'];
$T_time  =$_POST['T_time'];
$available_ticket  =$_POST['available_ticket'];
$price  =$_POST['price'];
$bus_from  =$_POST['bus_from'];
$bus_to  =$_POST['bus_to'];

$query1= "update  tblticket set Bus_id='$Bus_id',D_id='$D_id',T_date='$T_date',T_time='$T_time',available_ticket='$available_ticket',price='$price',bus_from='$bus_from',bus_to='$bus_to' where Ticket_id='$Ticket_id';";
    mysqli_query($con,$query1);
    echo '<script type="text/javascript">'; 
    echo 'alert("Ticket Updated Successfully.");'; 
    $URL="ListTicket.php";
    echo "location.href='$URL'";
    echo '</script>';


?>
