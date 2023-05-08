
<?php
 
 session_start();
 $UserID=$_GET['pid'];
 $npwd = $_POST['npwd'];
 $_SESSION['pid'] = $UserID;

 include ("connect.php");	
 $query = "update tbipassanger set password='$npwd' where pid='$UserID'";
 mysqli_query($con,$query);      
echo '<script type="text/javascript">'; 
echo 'alert("Your password has been successfully Updated!");'; 
$URL="login.html";
echo "location.href='$URL'";
echo '</script>';



    ?>
 
