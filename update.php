<?php
	ob_start();
	session_start();
	include("db.php");
	if(!isset($_COOKIE["email"])){
		header("location:login.php");
	}
	else{
		$email = mysqli_real_escape_string($conn,$_COOKIE["email"]);
		if(!isset($_SESSION[$email])){
			header("location:login.php");
		}
		else{
			if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["contact_number"]) || empty($_POST["height"]) || empty($_POST["weight"]) || empty($_POST["marital_status"]) || empty($_POST["day"]) || empty($_POST["month"]) || empty($_POST["year"]) || empty($_POST["gender"]) || empty($_POST["diet"]) || empty($_POST["drink"]) || empty($_POST["smoke"]) || empty($_POST["caste"]) || empty($_POST["religion"]) || empty($_POST["city"]) || empty($_POST["state"]) || empty($_POST["address"]) || empty($_POST["bio"]) || empty($_POST["education"]) || empty($_POST["occupation"])){
				header("location:edit.php?empty=1");
			}
			else{
				$fname=$_POST["fname"];
				$lname=$_POST["lname"];
				$contact_number=$_POST["contact_number"];
				$height=$_POST["height"];
				$weight=$_POST["weight"];
				$marital_status=$_POST["marital_status"];
				$day=$_POST["day"];
				$month=$_POST["month"];
				$year=$_POST["year"];
				$gender=$_POST["gender"];
				$diet=$_POST["diet"];
				$drink=$_POST["drink"];
				$smoke=$_POST["smoke"]; 
				$caste=$_POST["caste"];
				$religion=$_POST["religion"];
				$city=$_POST["city"];
				$state=$_POST["state"];
				$address=$_POST["address"];
				$bio=$_POST["bio"];
				$education=$_POST["education"];
				$occupation=$_POST["occupation"];
				
				$code = mysqli_real_escape_string(conn,$_POST["code"]);		
				if(mysqli_query($conn,"update users set first_name='$fname',last_name='$lname',contact_number='$contact_number',height=$height,weight=$weight,marital_status='$marital_status',day=$day,month=$month,year=$year,gender='$gender',diet='$diet',drink='$drink',smoke='$smoke',caste='$caste',religion='$religion',city='$city',state='$state',address='$address',bio='$bio',education='$education',occupation='$occupation' where email='$email'")>0){
					header("location:edit.php?success=1");
				}
				else{
					header("location:edit.php?error=1");
				}
			}			
		}
	}
?>