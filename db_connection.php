<?php
 
 $conn = mysqli_connect("localhost","root","","test");



 if(mysqli_connect_error()){
 	//echo "Database connection error occured!!";
 }else{
 	echo"Database connection successfull !!";
 }
?>