<?php
	include_once("DemoReg.php");
	$obj=new DemoReg();
	$unm=$_POST['unm'];
	$email=$_POST['email'];
	$pwd=md5($_POST['pwd']);
	$gender=$_POST['gender'];
	$hobby=isset($_POST['reading'])?$_POST['reading']:"";
	$hobby.=isset($_POST['writing'])?$_POST['writing']:"";
	$img=$_FILES['file']['name'];
	$country=$_POST['country'];
	if(isset($img)){
		$file="upload/".$img;
		move_uploaded_file($_FILES['file']['tmp_name'], $file);
		$qry="insert into registration(unm,email,pwd,gender,hobby,img,country) values('$unm','$email','$pwd','$gender','$hobby','$file','$country')";
		$obj->manip($qry);
		header("location:login.php");
	}else{
		echo "Plz. upload image";
		header("location:registration_form.php");
	}
?>