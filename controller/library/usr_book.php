<?php
	require_once './conn.php';
	
	if($query1 = $conn->prepare('SELECT LIB_NAME,TITLE,AUTHOR,PUBLISHER,EDITION_ID,EDITION,DATE_OF_ISSUE,DATE_OF_SUBMIT FROM `vissue_usr` WHERE USER_ID=? AND DATE_OF_RECIEVE IS NULL ORDER BY DAYS_REMAINING ASC')){
		$query1->bind_param("s", $_POST['user_id']);
		$query1->execute();
		$query1->bind_result($row1['LIB_NAME'], $row1['TITLE'], $row1['AUTHOR'], $row1['PUBLISHER'], $row1['EDITION_ID'], $row1['EDITION'], $row1['DATE_OF_ISSUE'], $row1['DATE_OF_SUBMIT']);
		$res1 = array();
		while($query1->fetch())
			array_push($res1, $row1);
		$query1->close();
	}else die();
	foreach($res1 as &$row)
		if($squery1 = $conn->prepare('SELECT RATING FROM `brating` WHERE EDITION_ID=? AND USER_ID=?')){
			$squery1->bind_param("ss", $row['EDITION_ID'], $_POST['user_id']);
			$squery1->execute();
			$squery1->bind_result($row1['RATING']);
			$squery1->fetch();
			$row = $row1;
			$squery1->close();
		}
	
	if($query2 = $conn->prepare('SELECT TITLE,AUTHOR,PUBLISHER,EDITION,LIB_NAME,CALL_NO,CATEGORY,RATING FROM `vstore_lib` WHERE LIBRARY_ID=(SELECT LIBRARY_ID FROM `vmember` WHERE USER_ID=?) ORDER BY TITLE ASC')){
		$query2->bind_param("s", $_POST['user_id']);
		$query2->execute();
		$query2->bind_result($row2['TITLE'], $row2['AUTHOR'], $row2['PUBLISHER'], $row2['EDITION'], $row2['LIB_NAME'], $row2['CALL_NO'], $row2['CATEGORY'], $row2['RATING']);
		$res2 = array();
		while($query2->fetch())
			array_push($res2, $row2);
		$query2->close();
	}else die();
	
	if($query3 = $conn->prepare('SELECT LIB_NAME,TITLE,AUTHOR,PUBLISHER,EDITION,DATE_OF_ISSUE,DATE_OF_RECIEVE,FINE FROM `vissue_usr` WHERE USER_ID=? AND DATE_OF_RECIEVE IS NOT NULL ORDER BY TITLE ASC')){
		$query3->bind_param("s", $_POST['user_id']);
		$query3->execute();
		$query3->bind_result($row3['LIB_NAME'], $row3['TITLE'], $row3['AUTHOR'], $row3['PUBLISHER'], $row3['EDITION'], $row3['DATE_OF_ISSUE'], $row3['DATE_OF_RECIEVE'], $row3['FINE']);
		$res3 = array();
		while($query3->fetch())
			array_push($res3, $row3);
		$query3->close();
	}else die();
		
	$obj = array($res1, $res2, $res3);
	/*
	$data1 = $res1 ? json_encode($res1) : NULL;
	$data2 = $res2 ? json_encode($res2) : NULL;
	$data3 = $res3 ? json_encode($res3) : NULL;
	
	$obj = array($data1, $data2, $data3);
	*/
	print_r($obj);
	//print_r(json_encode($obj));
		
	require_once './disconn.php';	
?>