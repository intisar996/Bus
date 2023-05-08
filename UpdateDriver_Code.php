<?php
error_reporting(0);     
session_start();
include ("connect.php");
$D_id = $_GET['D_id'];
$dname  =$_POST['dname'];
$email  =$_POST['email'];
$phone  =$_POST['phone'];
$address  =$_POST['address'];


$query1= "update  tbldriver set dname='$dname',email='$email',phone='$phone',address='$address' where D_id='$D_id';";
    mysqli_query($con,$query1);
    echo '<script type="text/javascript">'; 
    echo 'alert(" Driver Account Updated Successfully.");'; 
    $URL="ListDriver.php";
    echo "location.href='$URL'";
    echo '</script>';


?>
