<?php
	session_start();
	
	$messages = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/datas/messages.json"),true);
	if($messages === null){
		$messages = array();
	}
	$message = array(
			"titre" => $_POST['titre'],
			"contenu" => $_POST['contenu'],
			"date" => date("F j , Y"),
			"auteur" => $_SESSION['username']
		);
	
	array_push($messages,$message);
	
	
	file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/datas/messages.json",json_encode($messages));
	
	
	
	
	header('Location: '. $_SERVER['HTTP_REFERER'] .'');
	exit;