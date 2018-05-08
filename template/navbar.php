<?php
	
	$linkPath = getcwd(). DIRECTORY_SEPARATOR . "contents" .DIRECTORY_SEPARATOR;
	
	$aStartTag = "<a href='";
	
	$files = scandir($linkPath);
	?>
	
	<nav>
		<ul>
	<?php
	foreach($files as $file){
		if(is_file($linkPath . $file)){
			$f = substr($file,0,strpos($file,".php"));
			echo "<li><a href='?page=" . $f . "'>" . str_replace("_"," ",$f) . "</a></li>";
		}		
	}
	
	?>
		</ul>
	</nav>
	<?php