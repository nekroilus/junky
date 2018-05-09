<?php
	session_start();
	$messages = array();
	if(isset($_SESSION['messages'])){
		$messages = $_SESSION['messages'];		
	}else{
		$_SESSION['messages'] = $messages;
	}
	
	$message = array(
			"titre" => $_POST['titre'],
			"contenu" => $_POST['contenu'],
			"date" => date("F j , Y"),
			"auteur" => $_SESSION['username']
		);
	
	array_push($_SESSION['messages'],$message);
	
	header('Location: '. $_SERVER['HTTP_REFERER'] .'');
	exit;