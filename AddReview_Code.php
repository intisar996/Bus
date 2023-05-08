<?php
	

	     
    include('connect.php');
       
    
    $pid  =$_POST['pid'];
    $Rdes  =$_POST['Rdes'];
    
    
    $servername = "localhost";
    $dbname = "dbsbus";
    // Create connection
    $con = new mysqli($servername,"root","", $dbname);
    // Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }
          
    
     $SQL="insert into review(pid,Rdes) values('$pid','$Rdes')";
    
                                                         
    if ($con->query($SQL) === TRUE) {
        echo '<script type="text/javascript">'; 
        echo 'alert("The Review Has been sent successfully");'; 
        $URL="PassengerHomePage.php";
        echo "location.href='$URL'";
        echo '</script>';
        
        
    } else {
      echo "Error: " . $SQL . "<br>" . $con->error;
    }
    $con->close();
    
    
    
    ?>
    