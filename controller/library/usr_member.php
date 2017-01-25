<?php
	require_once './conn.php';

	if($query1 = $conn->prepare('SELECT MEMBER_ID,LIBRARY_ID,LIB_NAME,LIB_ADDRESS,LIB_CONTACT,BOOK_COUNT,DATE_OF_APPROVAL FROM `vmember` WHERE USER_ID=? AND STATUS="Active" ORDER BY LIB_NAME ASC')){
		$query1->bind_param("s", $_POST['user_id']);
		$query1->execute();
		$query1->bind_result($row1['MEMBER_ID'], $row1['LIBRARY_ID'], $row1['NAME'], $row1['ADDRESS'], $row1['CONTACT'], $row1['BOOK_COUNT'], $row1['DATE_OF_APPROVAL']);
		$res1 = array();
		while($query1->fetch())
			array_push($res1, $row1);
		$query1->close();
	}
	foreach($res1 as &$row)
		if($squery1 = $conn->prepare('SELECT COUNT(ISSUE_ID),MAX(DATE_OF_ISSUE) FROM `issue` WHERE LIBRARY_ID=? AND MEMBER_ID=?')){
			$squery1->bind_param("ss", $row['LIBRARY_ID'], $row['MEMBER_ID']);
			$squery1->execute();
			$squery1->bind_result($row1['NO_OF_ISSUE'], $row1['LAST_ISSUED_ON']);
			$squery1->fetch();
			$row = $row1;
			$squery1->close();
		}
	
	$query2 = $conn->prepare('SELECT MEMBER_ID,LIBRARY_ID,LIB_NAME,LIB_ADDRESS,LIB_CONTACT,BOOK_COUNT,DATE_OF_APPROVAL,STATUS FROM `vmember` WHERE USER_ID=? AND status!="Active" ORDER BY LIB_NAME ASC');
	$query2->bind_param("s", $_POST['user_id']);
	$query2->execute();
	$query2->bind_result($row2['MEMBER_ID'], $row2['LIBRARY_ID'], $row2['NAME'], $row2['ADDRESS'], $row2['CONTACT'], $row2['BOOK_COUNT'], $row2['DATE_OF_APPROVAL'], $row2['STATUS']);
	$res2 = array();
	while($query2->fetch())
		array_push($res2, $row2);
	$query2->close();
	foreach($res2 as &$row)
		if($squery2 = $conn->prepare('SELECT COUNT(ISSUE_ID),MAX(DATE_OF_ISSUE) FROM `issue` WHERE LIBRARY_ID=? AND MEMBER_ID=?')){
			$squery2->bind_param("ss", $row['LIBRARY_ID'], $row['MEMBER_ID']);
			$squery2->execute();
			$squery2->bind_result($row2['NO_OF_ISSUE'], $row2['LAST_ISSUED_ON']);
			$squery2->fetch();
			$row = $row2;
			$squery2->close();
		}
	
	$query3 = $conn->prepare('SELECT REQUEST_TOKEN,LIB_NAME,LIB_ADDRESS,LIB_CONTACT,DATE_OF_REQUEST FROM `vmember_req` WHERE USER_ID=? ORDER BY LIB_NAME ASC');
	$query3->bind_param("s", $_POST['user_id']);
	$query3->execute();
	$query3->bind_result($row3['REQUEST_TOKEN'], $row3['NAME'], $row3['ADDRESS'], $row3['CONTACT'], $row3['DATE_OF_REQUEST']);
	$res3 = array();
	while($query3->fetch())
		array_push($res3, $row3);
	$query3->close();
	
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