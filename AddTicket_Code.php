<?php
	

	     
    include('connect.php');
       
    
    $Bus_id  =$_POST['Bus_id'];
    $D_id  =$_POST['D_id'];
    $T_date  =$_POST['T_date'];
    $T_time  =$_POST['T_time'];
    $available_ticket  =$_POST['available_ticket'];
    $price  =$_POST['price'];
    $bus_from  =$_POST['bus_from'];
    $bus_to  =$_POST['bus_to']; 
    $state  =$_POST['state']; 
    $Tstatus='0';

    
    $servername = "localhost";
    $dbname = "dbsbus";
    // Create connection
    $con = new mysqli($servername,"root","", $dbname);
    // Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }
          
    
     $SQL="insert into tblticket(Bus_id,D_id,T_date,T_time,available_ticket,price,state,bus_from,bus_to,Tstatus) values('$Bus_id','$D_id','$T_date','$T_time','$available_ticket','$price','$state','$bus_from','$bus_to','$Tstatus')";
    
                                                         
    if ($con->query($SQL) === TRUE) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Ticket Created Successfully.");'; 
        $URL="AddTicket.php";
        echo "location.href='$URL'";
        echo '</script>';
        
        
    } else {
      echo "Error: " . $SQL . "<br>" . $con->error;
    }
    $con->close();
    
    
    
    ?>
    