<?php
	class DemoReg{
		var $con,$res;
		function __construct(){
			try{
				$this->con=mysqli_connect("db","MYSQL_USER","MYSQL_PASSWORD","demo_reg")or die("Can't Connect");
			}catch(exception $e){
				echo "Exeption:".$e;
			}
		}
		function select($qry){
			try{
				$this->res=mysqli_query($this->con,$qry)or die("Can't select data".mysqli_error($this->con));
				return $this->res;	
			}catch(exception $e){}
		}
		function manip($qry){
			try{
				mysqli_query($this->con,$qry)or die("Can't manipulate".mysqli_error($this->con));
			}catch(exception $e){}
		}
	}
?>