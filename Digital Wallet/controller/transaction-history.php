<?php 
	require '../model/dbconnect.php';
	require '../model/dbread.php';
	$selectCategory = empty($_GET['selectCategory']) ? "" : $_GET['selectCategory'];
	$tO = empty($_GET['tO']) ? "" : $_GET['tO'];
	$amoUnt = empty($_GET['amoUnt']) ? "" : $_GET['amoUnt'];
	if (empty($selectCategory)) {
		$selectCategory = Transaction();
	}
	if (empty($tO)) {
		$tO = Transaction();
	}
	if (empty($amoUnt)) {
		$amoUnt = Transaction();
	}

	else{
		$selectCategory = getUsers($selectCategory);

	}
	

	$arr1 = array();
	for ($i=0; $i < count($selectCategory); $i++) { 
		arrar_push($arr1, array('id' => $selectCategory[$i]["id"], 'username' => $selectCategory[$i]["selectCategory"]));
	}

	echo json_encode($arr1);
 ?>