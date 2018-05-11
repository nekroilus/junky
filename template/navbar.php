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
		$active = (str_replace(" ","_",str_replace("/","",$_SERVER['REQUEST_URI'])) === $f)?"active":"";
		echo "<li class='nav-item'><a class='nav-link ". $active ."' href='/" . $f . "'>" . str_replace("_"," ",$f) . "</a></li>";
	}		
}

?>
		</ul>
		<?php 
			if(isset($_SESSION['username'])){
				?>
		<form class="form-inline mt-3 mt-md-0" method="POST" action="scripts/disconnect.php">
			<h4 class="mr-4"><?= $_SESSION['username'];?></h4>
			<button class="btn btn-outline-success my-2 my-sm-0">LOGOUT</button>
		</form>		
				
				<?php
			}else{
				?>
		<form class="form-inline mt-3 mt-md-0" method="POST" action="scripts/connexion.php">
			<input class="form-control mr-sm-2" type="text" placeholder="username" name="username">
			<button class="btn btn-outline-success my-2 my-sm-0">LOGIN</button>
		</form>
				<?php
			}
		?>
		
		</div>
	</nav>
	</header>
	<?php