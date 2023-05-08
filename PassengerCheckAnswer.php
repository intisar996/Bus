
<?php
//session start()
session_start();

$mans=$_POST["answer"];
$UserID=$_GET['pid'];

include ("connect.php");
$query = "select * from  tbipassanger where pid='$UserID'";
$result = mysqli_query($con,$query);
 while($row = mysqli_fetch_assoc($result)) {

$anss=$row["ans"];
$sq=$row["seq"];
}

if ($mans==$anss) {
    header("Location:PassengerNewPassword.php?pid=$UserID");
    
}else{
 echo '<script type="text/javascript">'; 
echo 'alert("The Answer is invalid. Please try again!");'; 
$URL="Passenger_Forgot.php?pid=$UserID";
echo "location.href='$URL'";
echo '</script>';
}



?>
