<?php
	

	     
    include('connect.php');
       
    
    $pid  =$_POST['pid'];
    $pname  =$_POST['pname'];
    $pemail  =$_POST['pemail'];
    $pphone  =$_POST['pphone'];
    $Dob  =$_POST['Dob'];
    $paddress  =$_POST['paddress'];
    $seq  =$_POST['seq'];
    $ans  =$_POST['ans'];
    $password=$_POST['password'];
    
    
    $sql_u = "SELECT * FROM tbipassanger WHERE pid='$pid'";
    $res_u = mysqli_query($con, $sql_u);
    if (mysqli_num_rows($res_u) > 0) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Passenger ID Is already Have An Account.. Try Again!.");'; 
    $URL="AddDriver.html";
    echo "location.href='$URL'";
    echo '</script>';
               
    }
           
    else{
    
    $servername = "localhost";
    $dbname = "dbsbus";
    // Create connection
    $con = new mysqli($servername,"root","", $dbname);
    // Check connection
    if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
    }
          
    
     $SQL="insert into tbipassanger(pid,pname,pemail,pphone,Dob,paddress,seq,ans,password) values('$pid','$pname','$pemail','$pphone','$Dob','$paddress','$seq','$ans','$password')";
    
                                                         
    if ($con->query($SQL) === TRUE) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Passenger Account Created Successfully.");'; 
        $URL="login.html";
        echo "location.href='$URL'";
        echo '</script>';
        
        
    } else {
      echo "Error: " . $SQL . "<br>" . $con->error;
    }
    $con->close();
    
    }
    
    ?>
    