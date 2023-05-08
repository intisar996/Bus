
<?php
//session start()
session_start();

$mans=$_POST["answer"];
$UserID=$_GET['D_id'];

include ("connect.php");
$query = "select * from  tbldriver where D_id='$UserID'";
$result = mysqli_query($con,$query);
 while($row = mysqli_fetch_assoc($result)) {

$anss=$row["answer"];
$sq=$row["seq"];
}

if ($mans==$anss) {
    header("Location:DriverNewPassword.php?D_id=$UserID");
    
}else{
 echo '<script type="text/javascript">'; 
echo 'alert("The Answer is invalid. Please try again!");'; 
$URL="Driver_Forgot.php?D_id=$UserID";
echo "location.href='$URL'";
echo '</script>';
}



?>
