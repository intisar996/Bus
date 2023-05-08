
<?php
//session start()
session_start();

$mans=$_POST["answer"];
$UserID=$_GET['aid'];

include ("connect.php");
$query = "select * from  tbladmin where aid='$UserID'";
$result = mysqli_query($con,$query);
 while($row = mysqli_fetch_assoc($result)) {

$anss=$row["answer"];
$sq=$row["seq"];
}

if ($mans==$anss) {
    header("Location:AdminNewPassword.php?aid=$UserID");
    
}else{
 echo '<script type="text/javascript">'; 
echo 'alert("The Answer is invalid. Please try again!");'; 
$URL="Admin_Forgot.php?aid=$UserID";
echo "location.href='$URL'";
echo '</script>';
}



?>
