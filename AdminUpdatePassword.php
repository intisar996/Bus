
<?php
 
 session_start();
 $UserID=$_GET['aid'];
 $npwd = $_POST['npwd'];
 $_SESSION['aid'] = $UserID;

 include ("connect.php");	
 $query = "update tbladmin set password='$npwd' where aid='$UserID'";
 mysqli_query($con,$query);      
echo '<script type="text/javascript">'; 
echo 'alert("Your password has been successfully Updated!");'; 
$URL="login.html";
echo "location.href='$URL'";
echo '</script>';



    ?>
 
