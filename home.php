<?php
	include_once("DemoReg.php");
	session_start();
	$unm=$_SESSION['unm'];
	$obj=new DemoReg();
	$res=$obj->select("select *from registration where unm='$unm'");
	//echo $_SESSION['unm'];
	if(empty($_SESSION['unm']) && !isset($_SESSION['unm'])){
		echo "Plz. check username or password";
		header("location:login.php");
	}
	else{
		echo "welcome, ".$_SESSION['unm'];
		while ($row=mysqli_fetch_array($res)) {			
			echo "<img src='".$row['img']."' width=120 height=120 alt='Pic'/>";
			echo "<tr><td>".$row['email']."</td></tr>";
			echo "<tr><td>".$row['gender']."</td></tr>";
			echo "<tr><td>".$row['hobby']."</td></tr>";
			echo "<tr><td>".$row['country']."</td></tr>";
		}
		echo "<a href=logout.php>Logout</a>";
	}
	
?>