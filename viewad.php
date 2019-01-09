
<?php
require('header.php');
?>

<section class="section section-contact scrollspy">
	<div class="container">
		<div class="row" >
			<div class="col s12">
		<?php echo showAdvert($_GET['idadvert']); ?>
	</div>
	</div>
</div>
</section>
	<footer>
		<?php
			include('footer.php');
		?>
	</footer>
     
  