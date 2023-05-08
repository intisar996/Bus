
<?php
//session start()
session_start();

//connection
include('connect.php');


$_SESSION['status']="Active";

//input
$UserID = mysqli_real_escape_string($con,$_POST['txtid']);
 
$query ="Select * FROM  tbladmin where aid='$UserID'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

$query1 ="Select * FROM  tbldriver where D_id='$UserID'";
$result1 = mysqli_query($con,$query1);
$num1 = mysqli_num_rows($result1);

$query2 ="Select * FROM  tbipassanger where pid='$UserID'";
$result2 = mysqli_query($con,$query2);
$num2 = mysqli_num_rows($result2);


//correct
if ($num>0)
{
session_start();
$adddname =$row["aid"];
$_SESSION['aid'] = $adddname;
header ("location:Admin_Forgot.php?aid=$UserID");

}else if ($num1>0)
{
session_start();
$adddname =$row["D_id"];
$_SESSION['D_id'] = $adddname;
header ("location:Driver_Forgot.php?D_id=$UserID");

}else if ($num2>0)
{
session_start();
$adddname =$row["pid"];
$_SESSION['pid'] = $adddname;
header ("location:Passenger_Forgot.php?pid=$UserID");

}
else {

 echo '<script type="text/javascript">'; 
echo 'alert("Your UserID Wrong");'; 
$URL="ForgetPassword.html";
echo "location.href='$URL'";
echo '</script>';
}



?>
