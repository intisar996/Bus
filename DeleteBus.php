<?php
error_reporting(0);     
session_start();
include ("connect.php");
$Bus_id = $_GET['Bus_id'];


$query1= "update  tblbus set status='Deleted' where Bus_id='$Bus_id';";
    mysqli_query($con,$query1);
    echo '<script type="text/javascript">'; 
    echo 'alert("Bus deleted successfully.");'; 
    $URL="ListBus.php";
    echo "location.href='$URL'";
    echo '</script>';


?>
