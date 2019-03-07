<?php

session_start();
include 'mail.php';



$con = mysqli_connect('localhost','root');
	

	mysqli_select_db($con,'quizdb');


	$username = $user;
	$password = $pass;
	
	
	

	// echo $username;
	// echo $password;

	$check = "select * from user where username='$username' && password='$password' ";
	$resultcheck = mysqli_query($con,$check);	

	 $row = mysqli_num_rows($resultcheck);
			if($row == 1){
			header('location:http://localhost/quiz/login.html');
				
			}	else{

				$q = "insert into user(username, password) values ('$username', '$password')"  ;

				$result = mysqli_query($con,$q);
				header('location:http://localhost/quiz/login.html');

			}



?>


