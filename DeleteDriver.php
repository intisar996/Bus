<?php
error_reporting(0);     
session_start();
include ("connect.php");
$D_id = $_GET['D_id'];


$query1= "update  tbldriver set status='Deleted' where D_id='$D_id';";
    mysqli_query($con,$query1);
    echo '<script type="text/javascript">'; 
    echo 'alert("Driver deleted successfully.");'; 
    $URL="ListDriver.php";
    echo "location.href='$URL'";
    echo '</script>';


?>
