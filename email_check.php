<?php
	ob_start();
	session_start();
	include("db.php");
	if(empty($_POST["email"]) || empty($_POST["pass"])){
		header("location:login.php?empty=1");		
	}
	else{
		$email = mysqli_real_escape_string($conn,$_POST["email"]);
		$pass = mysqli_real_escape_string($conn,$_POST["pass"]);
		
		$rs = mysqli_query($conn,"select * from users where email='$email'");
		if($r=mysqli_fetch_array($rs)){
			if($r["password"] ==  $pass){
				setcookie("email",$email,time()+3600*2);
				$_SESSION[$email]=$pass;
				header("location:profile.php?profile");
			}
			else{
				header("location:login.php?pass_mismatch=1");
			}
		}
		else{
			header("location:login.php?error=1");
		}
	}
?>