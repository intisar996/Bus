
<?php
 
 session_start();
 $UserID=$_GET['D_id'];
 $npwd = $_POST['npwd'];
 $_SESSION['D_id'] = $UserID;

 include ("connect.php");	
 $query = "update tbldriver set password='$npwd' where D_id='$UserID'";
 mysqli_query($con,$query);      
echo '<script type="text/javascript">'; 
echo 'alert("Your password has been successfully Updated!");'; 
$URL="login.html";
echo "location.href='$URL'";
echo '</script>';



    ?>
 
