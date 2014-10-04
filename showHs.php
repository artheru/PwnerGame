<?php
    $mysql = new SaeMysql();
    
    $sql = "SELECT name,Score FROM `app_artheru`.`pwner` order by `Score` desc LIMIT 10";
	$data = $mysql->getData( $sql );

    if ($mysql->errno() != 0)
    {
        die("Error:" . $mysql->errmsg());
    }
	echo json_encode($data);

    $mysql->closeDb();
?>