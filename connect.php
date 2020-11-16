<?php

   /* $emailAddress=$_POST['emailAddress'];
    $password=$_POST['password'];

//database connection
    $conn =new mysqli('localhost','root','','login');
    if($conn->connect_error)
    {

    	die('connection Failed: '.$conn->connect_error);
    
    }
    else{
    	$stmt=$conn->prepare("insert into loginpage (emailAddress,password)
    		values(?,?)");
    	$stmt->bind_param("ss",$emailAddress,$password);
    	$stmt->execute();
    	echo "Successfully logged in";  
    	$stmt->close();
    	$conn->close(); }*/

    	$emailAddress= filter_layout(INPUT_POST,"emailAddress");
    	$password= filter_layout(INPUT_POST,"password");
    	if (!empty($emailAddress)) {
    		if (!empty($password)) {

    		# code...
    		$host= "localhost";
    		$dbemailAddress="root";
    		$dbpassword ="";
    		$dbname="youtube";

    		//connection
    		$conn = new mysqli($host,$dbemailAddress,$dbpassword,$dbname);


    		if (mysqli_connect_error()) {


    			# code...

    			die('connect_error('.mysqli_connect_errno().')'

    			.mysqli_connect_error());
    		} else {
    			# code...
    			$sql="INSERT INTO account (emailAddress,password) 


    			values($emailAddress, $password )";

    			if ($conn->query($sql)) {
    				echo "New Record inserted Successfully";
    				# code...
    			}
    			else{
    				echo"Error:".$sql. "<br>".$conn->error;

    			}
    			$conn->close();
    		}
    		




    	}
    	else{
    		echo "password should not be empty";
    		die();
    		
    	}
    		# code...
    	}
    	else{
    		echo "Username should not be empty";
    		die();

    	}
?>