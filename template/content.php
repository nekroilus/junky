<?php
echo "content";
echo "<br>";
include('navbar.php');



$content = $_GET['page'];

include("contents". DIRECTORY_SEPARATOR . $content . ".php");

echo "<br>";