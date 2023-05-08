<?php
error_reporting(0);     
session_start();
include ("connect.php");
$Bus_id = $_GET['Bus_id'];
$Bus_Name  =$_POST['Bus_Name'];
$Capacity  =$_POST['Capacity'];
$phone  =$_POST['phone'];
$address  =$_POST['address'];



$query1= "update  tblbus set Bus_Name='$Bus_Name',Capacity='$Capacity' where Bus_id='$Bus_id';";
    mysqli_query($con,$query1);
    echo '<script type="text/javascript">'; 
    echo 'alert("Bus  Updated Successfully.");'; 
    $URL="ListBus.php";
    echo "location.href='$URL'";
    echo '</script>';


?>
