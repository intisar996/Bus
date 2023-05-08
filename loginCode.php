
<?php
//session start()
session_start();
//connection
include('connect.php');
$_SESSION['status']="Active";

//input
$UserID = mysqli_real_escape_string($con,$_POST['txtid']);
$Passw = mysqli_real_escape_string($con,$_POST['txtpword']); 
 
//Query
$query ="Select * FROM  tbladmin where aid='$UserID' AND password='$Passw'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

$query1 ="Select * FROM  tbldriver where D_id='$UserID' AND password='$Passw' and status!='Deleted'";
$result1 = mysqli_query($con,$query1);
$num1 = mysqli_num_rows($result1);

$query2 ="Select * FROM  tbipassanger where pid='$UserID' AND password='$Passw'";
$result2 = mysqli_query($con,$query2);
$num2 = mysqli_num_rows($result2);


//correct
	if ($num>0){
			//session variables
	   $_SESSION['txtid']=$UserID;
	   $_SESSION['aid']=$row['aid'];
	   header('location:AdminHomepage.php');
	   
}else if($num1 > 0) {
	session_start();
	$_SESSION['txtid']=$UserID;
	$_SESSION['D_id']=$row['D_id'];
	header("location:DriverHomePage.php");
}else if($num2 > 0) {
	session_start();
	$_SESSION['txtid']=$UserID;
	$_SESSION['pid']=$row['pid'];
	header("location:PassengerHomePage.php");
}
else

echo '<script type="text/javascript">'; 
echo 'alert("YOUR UserID OR PASSWORD WRONG");'; 
$URL="login.html";
echo "location.href='$URL'";
echo '</script>';

?>

