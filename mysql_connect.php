<?php
function MYSQL_CONNECTION(){
	$Conn=mysqli_connect('localhost','root','','diemdanh');
	mysqli_set_charset($Conn,'utf8');
	return $Conn;
}
?>