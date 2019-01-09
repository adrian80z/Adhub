  <?php 
	require 'header.php';
?>

	<div class="container">
      <div class="row">      
        <div class="col s12 m6">
          <div class="card-panel grey lighten-3">
		<form action="process.php" method="post" id="adform" enctype="multipart/form-data">
		<input type="hidden" name="formname" value="adform" readonly="readonly" />		
        <label>Advert title</label>
        <div class="input-field">
        	<input type="text" name="title" maxlength="20" required="required" />
        </div>
        <label>Price</label>
        <div class="input-field">
        	<input type="text" name="price" required="required" />
        </div>
        <label>Category</label>
        <div class="input-field">
		<select name="id_category" required="required">
			<option value="">Choose category...</option>
					<?php
						echo displayCategories("");
					?>
		</select>
	</div>
	<label>Location</label>
	<div class="input-field">
	
		<select name="location" required="required">
		<option value="">Choose location...</option>
				<?php
					echo displayCounties("");
				?>
		</select>
	</div>
        <label>Ad type:</label>
        <div class="input-field">
		<select name="ad_type" required="required">
			<option value="">Choose type...</option>
			<option value="S">Sell</option>
			<option value="W">Buy</option>
		</select>
	</div>
		<label>Contact method:</label>
		<div class="input-field">

		<p>
      <label>
        <input type="checkbox" class="filled-in" name="contact_byphone" value="1" />
        <span>Phone</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" class="filled-in" name="message_center" value="1" />
        <span>Email</span>
      </label>
    </p>
	</div>
	<label> Add Image:</label>

	<div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="mainpicture" required="required">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload file">
      </div>
    </div>
        <label>Description:</label>
        <textarea name="description" required="required" class="materialize-textarea"> </textarea>
			<button type="submit" class="btn">Place Ad</button>
		</form>
	</div>
</div>
</div>
</div>
		<?php
			include 'footer.php';
		?>
