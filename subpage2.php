<?php
	header("Content-type:text/html;charset=utf-8");
	//接收数据
	$username=$_REQUEST["username"];
	$userpass=$_REQUEST["userpass"];
	//搭桥、
	$con = mysql_connect("localhost","root","root");
	if(!$con){
		die("连接失败:".mysql_error());
	}else{
		mysql_select_db("greenorange",$con);
	//执行SQL语句
		$sqlstr="insert into orange values('".$username."','".$userpass."')";
		$result = mysql_query($sqlstr,$con);
		
	}
	//关闭数据库
	mysql_close($con);
	//响应
	header("location:subpage4.html");
?>