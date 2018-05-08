<body>
	<header>
		<?php include('navbar.php'); ?>
	</header>

<?php

//redirection vers la page home quand URI == /
$_SERVER['REQUEST_URI'] = ($_SERVER['REQUEST_URI'] === "/")?"/home":$_SERVER['REQUEST_URI'];

include("contents". DIRECTORY_SEPARATOR . str_replace("/","",$_SERVER['REQUEST_URI']) . ".php");

?>
