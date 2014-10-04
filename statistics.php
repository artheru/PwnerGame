<?php
    $mysql = new SaeMysql();
	$iipp=$_SERVER["REMOTE_ADDR"];
	$score=$_GET["score"];
    if (!is_numeric($score)) $score=0;

	$sql="select min(Score) from `app_artheru`.`pwnerHS` order by Score limit 0,10";
	$data = $mysql->getData( $sql );

	$sec=rand();
	$sql =" INSERT INTO `app_artheru`.`pwner` (`IP`, `Score`, `sec`) VALUES ('$iipp', '$win','$sec');";
	$mysql->runSql($sql);
	if ($score>=$data[0][0]){
		echo "{sec:$sec,id:$id}";
	}else{
		echo "OK";
	}
    $mysql->closeDb();
?>