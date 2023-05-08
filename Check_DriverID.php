<?php
 
  include('connect.php'); 
  if(isset($_POST['User_ID'])) {
    $User_ID = $_POST['User_ID'];
    $query = "SELECT count(*) as cnt FROM `tbldriver` WHERE D_id = '".$User_ID."'";
    $result = mysqli_query($con,$query); 
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    if(($row['cnt']== 0)) {
     r1:;
    } else {
     r2: echo '<span class="text-danger">Driver ID is already taken!</span>';
  }}

?>
