<?php
	include_once("DemoReg.php");
	$obj=new DemoReg();
	$unm=$_POST['unm'];
	$pwd=$_POST['pwd'];
	$res=$obj->select("select unm,pwd from registration where unm='$unm' and pwd='$pwd'");
	if(mysqli_num_rows($res)>0){
		session_start();
		$_SESSION['unm']=$unm;
		//echo $_SESSION['unm'];
		header("location:home.php");
	}else{
		echo "Plz. try again";
	}
?>