<?php
	
	$linkPath = getcwd(). DIRECTORY_SEPARATOR . "contents" .DIRECTORY_SEPARATOR;
	
	
	$files = scandir($linkPath);
?>
	
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="navbar-brand"><i class="fab fa-accessible-icon"></i>Restologist</div>
		<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
<?php
foreach($files as $file){
	if(is_file($linkPath . $file)){
		$f = substr($file,0,strpos($file,".php"));
		echo "<li class='nav-item'><a class='nav-link' href='/" . $f . "'>" . str_replace("_"," ",$f) . "</a></li>";
	}		
}

?>
		</ul>
		<form class="form-inline mt-3 mt-md-0">
			<input class="form-control mr-sm-2" type="text" placeholder="username">
			<input class="form-control mr-sm-2" type="password" placeholder="password">
			<button class="btn btn-outline-success my-2 my-sm-0">LOGIN</button>
		</form>
		</div>
	</nav>
	</header>
	<?php