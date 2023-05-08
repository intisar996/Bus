<?php
	

	     
    include('connect.php');
       
    
    $Bus_Name  =$_POST['Bus_Name'];
    $Capacity  =$_POST['Capacity'];
    $status='';
    
    
    $servername = "localhost";
    $dbname = "dbsbus";
    // Create connection
    $con = new mysqli($servername,"root","", $dbname);
    // Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }
          
    
     $SQL="insert into tblbus(Bus_Name,Capacity,status) values('$Bus_Name','$Capacity','$status')";
    
                                                         
    if ($con->query($SQL) === TRUE) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Bus Created Successfully.");'; 
        $URL="AddBus.php";
        echo "location.href='$URL'";
        echo '</script>';
        
        
    } else {
      echo "Error: " . $SQL . "<br>" . $con->error;
    }
    $con->close();
    
    
    
    ?>
    