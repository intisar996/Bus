<?php
 session_start();
 error_reporting(0);
 $UserID = $_SESSION['txtid'];
 
 include ("connect.php");
 $opwd = $_POST['opwd'];
 $npwd = $_POST['npwd'];
 $nrpwd = $_POST['nrpwd'];
 
 $query1 = "select * from  tbladmin where aid= '$UserID'";
 $result1 = mysqli_query($con,$query1);
  while($row = mysqli_fetch_assoc($result1)) {
 $password=$row["password"];
 }
         
 if($password == $opwd){
         
     
     $query1 = "update tbladmin set  password='$npwd' where  aid='$UserID'";
     mysqli_query($con,$query1);
     
        echo '<script type="text/javascript">'; 
        echo 'alert("Success! Your password has been updated");'; 
        $URL="AdminChangePW.php";
        echo "location.href='$URL'";
        echo '</script>';
    } 
    
    else {
        echo '<script type="text/javascript">'; 
        echo 'alert("Something went wrong and your password could not be updated");'; 
        $URL="AdminChangePW.php";
        echo "location.href='$URL'";
        echo '</script>';
    }
    ?>



