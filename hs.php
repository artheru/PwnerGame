<?php
    $mysql = new SaeMysql();
	$iipp=$_SERVER["REMOTE_ADDR"];
	$sec=$_GET["sec"];
    if (!is_numeric($sec)) $sec=0;
	$id=$_GET["id"];
    if (!is_numeric($id)) $id=0;
	$name=$mysqli->real_escape_string($_GET["n"])
	$sql="update `app_artheru`.`pwner` set `name`='$name' where `sec`='$sec' and `ID`='$id'";
	$data = $mysql->runSql($sql);
	
    $mysql->closeDb();
?>