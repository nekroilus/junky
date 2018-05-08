
<?php
echo "content";
echo "<br>";
include('navbar.php');

include("contents". DIRECTORY_SEPARATOR . str_replace("/","",$_SERVER['REQUEST_URI']) . ".php");

echo "<br>";