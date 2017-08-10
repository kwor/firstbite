<?php
require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;

	$sql = "select count(*) as num from kvideo where uid='$uid'";
	$res=mysqli_query($dbconn,$sql);
	$row = mysqli_fetch_array($res);
	
	$uinfo["videonum"]=$row["num"];
	echo json_encode($uinfo);
	
?>