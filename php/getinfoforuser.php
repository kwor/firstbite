<?php
require_once("dbconn.php");
	$uid=$_REQUEST["uid"]?$_REQUEST["uid"]:0;

	$sql = "select count(*) as num from kvideo where uid='$uid'";
	$res=mysqli_query($dbconn,$sql);
	$row = mysqli_fetch_array($res);
	
	$uinfo["videonum"]=$row["num"];
	
	$sql2 = "select count(*) as num from kfollow where uid='$uid'";
	$res2=mysqli_query($dbconn,$sql2);
	$row2 = mysqli_fetch_array($res2);
	
	$uinfo["follownum"]=$row2["num"];	
	
	$sql3 = "select count(*) as num from kfollow where followuid='$uid'";
	$res3=mysqli_query($dbconn,$sql3);
	$row3 = mysqli_fetch_array($res3);
	
	$uinfo["followernum"]=$row3["num"];	
	
	
	echo json_encode($uinfo);
	
?>