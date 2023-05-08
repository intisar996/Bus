<?php
error_reporting(0);     
session_start();
include ("connect.php");
$UserID= $_SESSION['txtid'];
$aname  =$_POST['aname'];
$email  =$_POST['email'];
$phone  =$_POST['phone'];
$address  =$_POST['address'];


$query1= "update  tbladmin set aname='$aname',email='$email',phone='$phone'  where aid='$UserID';";
    mysqli_query($con,$query1);
    echo '<script type="text/javascript">'; 
    echo 'alert("Your Profile Updated Successfully.");'; 
    $URL="UpdateProfile.php";
    echo "location.href='$URL'";
    echo '</script>';


?>
