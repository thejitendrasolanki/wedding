<?php
	ob_start();
	session_start();
	include("db.php");
	if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["contact_number"]) || empty($_POST["height"]) || empty($_POST["weight"]) || empty($_POST["marital_status"]) || empty($_POST["day"]) || empty($_POST["month"]) || empty($_POST["year"]) || empty($_POST["gender"]) || empty($_POST["diet"]) || empty($_POST["drink"]) || empty($_POST["smoke"]) || empty($_POST["caste"]) || empty($_POST["religion"]) || empty($_POST["city"]) || empty($_POST["state"]) || empty($_POST["address"]) || empty($_POST["bio"]) || empty($_POST["education"]) || empty($_POST["occupation"])){
		header("location:register.php?empty=1");
	}
	else{
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
		$email=$_POST["email"];
		$pass=$_POST["pass"];
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
		
		$sn=0;
		$rs=mysqli_query($conn,"select MAX(sn) from users");
		if($r=mysqli_fetch_array($rs)){
			$sn=$r[0];
		}
		$sn++;
		
		$code="";
		$a=array();
		for($i='A';$i<='Z';$i++){
			array_push($a,$i);
			if($i=='Z')	break;
		}
		for($i='a';$i<='z';$i++){
			array_push($a,$i);
			if($i=='z')	break;
		}
		for($i=1;$i<=9;$i++){
			array_push($a,$i);
		}
		$b = array_rand($a,6);
		for($i=0;$i<sizeof($b);$i++){
			$code = $code.$a[$b[$i]];
		}
		$code = $code."_".$sn;
		
		$target = "photo/";
		$target = $target.$code.".jpg";
		if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
			if(mysqli_query($conn,"insert into users values($sn,'$code','$fname','$lname','$email','$pass','$contact_number',$height,$weight,'$marital_status',$day,$month,$year,'$gender','$diet','$drink','$smoke','$caste','$religion','$city','$state','$address','$bio','$education','$occupation')")>0){
				header("location:register.php?success=1");
			}
			else{
				header("location:register.php?error=1");
			}
		}
		else{
			header("location:register.php?img_error=1");
		}
	}
?>