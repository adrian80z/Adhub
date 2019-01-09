<?php
require('header.php');
?>

<body>
	<div class="wrapper">
			<?php
			include 'includes/search.php';
			 ?>
	
		  <!-- Section: Popular Products -->
  <section id="popular" class="section section-popular scrollspy">
    <div class="container">
      <div class="row">
        <h4 class="center">
         <h3>Search results: <?php echo $numrows ?> match (es)</h3>
        <hr />
          <?php
            echo $adverts;
           ?>
      </div>
    </div>
  </section>
	<footer>
		<?php
			include('footer.php');
		?>
	</footer>
	
	
