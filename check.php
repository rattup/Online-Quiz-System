<?php

session_start();



$con = mysqli_connect('localhost','root');
	

	mysqli_select_db($con,'quizdb');


	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['username']=$username;
	
+	

	// echo $username;
	// echo $password;

	$check = "select * from user where username='$username' && password='$password' ";
	$resultcheck = mysqli_query($con,$check);	

	 $row = mysqli_num_rows($resultcheck);
	 
			if($row == 1){
			header('location:http://localhost/quiz/test.php');
				
			}	else

			

			header('location:http://localhost/quiz/login.html');

			



?>


