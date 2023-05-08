<?php
error_reporting(0);     
session_start();
include ("connect.php");
$Problem_id = $_GET['Problem_id'];
$Problem_status	='Repair';


$query1= "update  tblbusproblem set Problem_status='$Problem_status' where Problem_id='$Problem_id';";
    mysqli_query($con,$query1);
    echo '<script type="text/javascript">'; 
    echo 'alert("Updated Successfully.");'; 
    $URL="NewBusProblem.php";
    echo "location.href='$URL'";
    echo '</script>';


?>
