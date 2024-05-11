<?php
include_once("db_connection.php");


$msg = '';
$full_name = htmlspecialchars(trim($_POST['full_name'])) ; //sanitizing form data from csrf attacks

$phone = htmlspecialchars(trim($_POST['phone'])) ;

$email = htmlspecialchars(trim($_POST['email'])); 

$subject = htmlspecialchars(trim($_POST['subject'])); 

$message = htmlspecialchars(trim($_POST['message']));

$isPhone = false;

$isemail = false;

if(preg_match('/^[0-9]{10}+$/', $phone)){
	
	//$msg = "Valid Phone Number";
	$isPhone = true;
}else{

	$msg = "Invalid Phone Number";
	 
	$isPhone = false;
}

if(filter_var($email, FILTER_VALIDATE_EMAIL)){

	//$msg = "Valid Email";
	 
	$isemail =  true;
}else{
	$msg = "InValid Email";
	 
	$isemail = false;
}

if(isset($full_name) && isset($phone) && isset($email) && isset($subject) && isset($message)){

	//print_r($_REQUEST);

	if($isPhone == true && $isemail == true){
		//echo "ok";
		$date = date("Y-m-d H:i:s");
		$sql = "insert into user (name,phone,email,subject,message,ip,time_stamp) values ('".$full_name."','".$phone."','".$email."','".$subject."','".$message."','".$_SERVER['REMOTE_ADDR']."','".$date."')"; //this way to sanitize the sql script form value is done to avoid sql injection hacking attemp

		$insertdata = mysqli_query($conn,$sql);

		if($insertdata){
			$msg = "1";
			header('Location:http://localhost/client_form/form.php?msg='.$msg);

			
			
			//echo "<a href='http://localhost/client_form/form.php'>Back</a>";
		}
	}else{

		echo "Problem in input";

	}

}else{

	echo"Some feilds are missing!! Please try again";
}
?>


