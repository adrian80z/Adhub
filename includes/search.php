<?php
		require_once 'dbconnect.php';
			
			if( isset($_GET["q"]) ){
			$q	= 	$_GET["q"];
		}else{
			$q	= 	"";	
		}

		if( isset($_GET["category"]) ){
			$cat	= 	$_GET["category"];
		}else{
			$cat	= 	"";	
		}
		
	$query = "SELECT a.*, c.county FROM adverts a
			INNER JOIN counties c ON (a.location = c.id_county)
			WHERE a.title LIKE '%".$q."%' 
			AND a.id_category LIKE '%".$cat."%'
			ORDER BY a.id_advert DESC;";
	
	

		if( ! $result = mysqli_query($link, $query) ){
			echo mysqli_error($link);
			exit();
			}
		
		$numrows =mysqli_num_rows($result);
		if( mysqli_num_rows($result) < 1)
			{
				$adverts = "not results";
			}else{
						
			
		$adverts = "";
		while($row = mysqli_fetch_array($result)){
		$adverts.= ' 	<div class="col s12 m4">
						<div class="card small">
              			<div class="card-image">
                			<img src="'.$row["main_picture"].'">
                			<span class="card-title">'.$row["title"].'</span>
              			</div>
              			<div class="card-content">
               				<div class="price">€ '.$row["price"].'</div>
							<div class="county"> '.$row["county"].'</div>	
              			</div>
              			<div class="card-action">
                		<a href="viewad.php?idadvert='.$row["id_advert"].'" class="viewad">View Ad</a>
              		</div></div></div>';
			}}
			?>

	
		
		
		
	

