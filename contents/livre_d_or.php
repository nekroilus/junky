<div class="container" style="padding-top:60px">
	<div class="row">
		<div class="col-md-8 blog-main">
			<h3 class="pb-3 mb-4 font-italic border-bottom">
				Vous avez aimé ? Lachez votre commentaire :
			</h3>		
			
	<?php
			$messages = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/datas/messages.json"),true);
			if($messages !== null){
				foreach($messages as $message){
				?>
				<div class="blog-post">
					<h2 class="blog-post-title"><?= $message['titre']; ?></h2>
					<p class="blog-post-meta"><?= $message['date']; ?> par <a href="#"><?= $message['auteur']; ?></a></p>

					<p><?= $message['contenu']; ?></p>
					<hr>
				</div>
					
				<?php
				}				
			}

	?>

		</div>
		<aside class="col-md-4 blog-sidebar">
			<div class="p-3 mb-3 bg-light rounded">
				<h4 class="font-italic">Ajoutez un commentaire</h4>
				<p class="mb-0">ça fait toujours plaisir et ça ne mange pas de pain.</p>
<?php 
			if(!isset($_SESSION['username'])){
				?> 
				<p class="mb-0 mt-2">Vous devez etre connecté pour laisser un commentaire.</p>
				<?php
				}
?>
			</div>
<?php
			if(isset($_SESSION['username'])){
				?>
			<div class="p-3">
				<h4 class="font-italic">Redigez le message :</h4>
				<form class="form-inline mt-3 mt-md-0" method="POST" action="scripts/add_message.php">
					<input type="text" class="form-control mr-sm-0 col-md-12 mt-3" name="titre" placeholder="titre">
					<textarea class="form-control mr-sm-0 col-md-12 mt-3" name="contenu" placeholder="votre message" style="min-height:175px;"></textarea>
					<button class="btn btn-outline-success mt-3">Valider</button>
				</form>
			</div>
				<?php
			}
?>
			
			<div class="p-3">
			<h4 class="font-italic">Retrouvez nous :</h4>
				<ol class="list-unstyled">
				  <li><a href="#">Twitter</a></li>
				  <li><a href="#">Facebook</a></li>
				</ol>
			</div>
		</aside>
	</div>
</div>