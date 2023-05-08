<?php
	

	     
    include('connect.php');
       
    
    $Bus_id  =$_POST['Bus_id'];
    $D_id  =$_POST['D_id'];
    $Problem  =$_POST['Problem'];
    $Problem_status='New';
    
    
    $servername = "localhost";
    $dbname = "dbsbus";
    // Create connection
    $con = new mysqli($servername,"root","", $dbname);
    // Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }
          
    
     $SQL="insert into tblbusproblem(Bus_id,D_id,Problem,Problem_status) values('$Bus_id','$D_id','$Problem','$Problem_status')";
    
                                                         
    if ($con->query($SQL) === TRUE) {
        echo '<script type="text/javascript">'; 
        echo 'alert("The problem Has been sent successfully");'; 
        $URL="AddBusProblem.php";
        echo "location.href='$URL'";
        echo '</script>';
        
        
    } else {
      echo "Error: " . $SQL . "<br>" . $con->error;
    }
    $con->close();
    
    
    
    ?>
    