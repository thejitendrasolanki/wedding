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
			$id=mysqli_real_escape_string($conn,$_REQUEST["id"]);
			$sn=0;
			$rs=mysqli_query($conn,"select MAX(sn) from inbox");
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
			for($i=1;$i<=9;$i++){
				array_push($a,$i);
			}
			for($i='a';$i<='z';$i++){
				array_push($a,$i);
				if($i=='z')	break;
			}
			$b = array_rand($a,6);
			for($i=0;$i<sizeof($b);$i++){
				$code = $code.$a[$b[$i]];
			}
			$code = $code."_".$sn;
			
			$rd=mysqli_query($conn,"select email from users where code='$id'");
			if($ra=mysqli_fetch_array($rd)){
				$to_email=$ra[0];
			}
			$rd=mysqli_query($conn,"select code from users where email='$email'");
			if($ra=mysqli_fetch_array($rd)){
				$from_code=$ra[0];
			}
			
			$dt=DATE('Y-m-d H:i:s');
			$msg=mysqli_real_escape_string($conn,$_REQUEST["message"]);
			if(mysqli_query($conn,"insert into inbox values($sn,'$code','$email','$from_code','$id','$to_email','$msg','$dt')")>0){
				header("location:inbox.php");
			}
			else{
				header("location:view_profile.php?msg_error=1");
			}
		}
	}
?>