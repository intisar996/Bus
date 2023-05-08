<?php
	

	     
    include('connect.php');
       
    
    $D_id  =$_POST['D_id'];
    $dname  =$_POST['dname'];
    $email  =$_POST['email'];
    $phone  =$_POST['phone'];
    $address  =$_POST['address'];
    $seq  =$_POST['seq'];
    $answer  =$_POST['answer'];
    $password  =$_POST['password'];
    $status='';
    
    
    $sql_u = "SELECT * FROM tbldriver WHERE D_id='$D_id'";
    $res_u = mysqli_query($con, $sql_u);
    if (mysqli_num_rows($res_u) > 0) {
    echo '<script type="text/javascript">'; 
    echo 'alert("User ID Is already taken.. Try Again!.");'; 
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
          
    
     $SQL="insert into tbldriver(D_id,dname,email,phone,address,seq,answer,password,status) values('$D_id','$dname','$email','$phone','$address','$seq','$answer','$password','$status')";
    
                                                         
    if ($con->query($SQL) === TRUE) {
        echo '<script type="text/javascript">'; 
        echo 'alert("Account Created Successfully.");'; 
        $URL="AddDriver.php";
        echo "location.href='$URL'";
        echo '</script>';
        
        
    } else {
      echo "Error: " . $SQL . "<br>" . $con->error;
    }
    $con->close();
    
    }
    
    ?>
    