  <?php
  	include ('header.php');
   ?>


 <!-- Section: Contact -->
  <section id="contact" class="section section-contact scrollspy">
    <div class="container">
      <div class="row">
  
        <div class="col s12 m6">
          <div class="card-panel grey lighten-3">
          	<form action="process.php" method="post" id="login">
            <h5>Log in</h5>
            <div class="input-field">
              <input type="hidden" name="formname" value="login" readonly="readonly" />
            </div>
            <div class="input-field">
              <input type="text" name="email" placeholder="Email">
            </div>
			       <div class="input-field">
              <input type="text" name="password" placeholder="Password">
            </div>
                  
            <input type="submit" value="Submit" class="btn">
        	</form>
          </div>
        </div>
      </div>
    </div>
  </section>
	<?php
		include ('footer.php');
	 ?>