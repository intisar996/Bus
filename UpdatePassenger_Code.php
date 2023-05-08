<?php
error_reporting(0);     
session_start();
include ("connect.php");
$pid = $_SESSION['txtid'];
$pname  =$_POST['pname'];
$pphone  =$_POST['pphone'];
$pemail  =$_POST['pemail'];
$paddress  =$_POST['paddress'];


$query1= "update  tbipassanger set pname='$pname',pphone='$pphone',pemail='$pemail',paddress='$paddress' where pid='$pid';";
    mysqli_query($con,$query1);
    echo '<script type="text/javascript">'; 
    echo 'alert(" Your Profile Updated Successfully.");'; 
    $URL="PassengerUpdateProfile.php";
    echo "location.href='$URL'";
    echo '</script>';


?>
