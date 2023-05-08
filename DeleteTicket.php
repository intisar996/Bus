<?php
// error_reporting(0);     
session_start();
include ("connect.php");
$Ticket_id = $_GET['Ticket_id'];


$query1= "update  tblticket set Tstatus='1' where Ticket_id='$Ticket_id';";
 mysqli_query($con,$query1);


    echo '<script type="text/javascript">'; 
    echo 'alert("Ticket deleted successfully.");'; 
    $URL="ListTicket.php";
    echo "location.href='$URL'";
    echo '</script>';


?>
