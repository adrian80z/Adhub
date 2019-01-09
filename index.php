  <?php
    include('header.php');
    require('includes/search.php')
  ?>

  <!-- Section: Slider -->
  <section class="slider">
    <ul class="slides">
      <li>
        <img src="img/watch.jpg">
        <!-- random image -->
        <div class="caption center-align">
          <h2>Find your ideal product</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, provident eos dicta unde debitis</h5>
        </div>
      </li>
      <li>
        <img src="img/headphones.jpg">
        <!-- random image -->
        <div class="caption left-align">
          <h2>We sell your items for Budget prices</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus delectus inventore neque impedit</h5>
        </div>
      </li>
      <li>
        <img src="img/drone1.jpg">
        <!-- random image -->
        <div class="caption right-align">
          <h2>Group deals & Individual adverts</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsum molestias excepturi doloremque</h5>
        </div>
      </li>
    </ul>
  </section>

  <!-- Section: Search -->
  <section id="search" class="section section-search teal darken-1 white-text center scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h3>Search specific products</h3>

            <form action="result.php" method="get" id="search">
        <select name="category">
          <option value="">Choose category...</option>
          
            <?php
            echo displayCategories($cat);
            ?>
          
        </select>
        
        <input type="search" name="q"  placeholder="Enter your keywords..." value="<?php echo $q; ?>"><button class="btn waves-effect waves-light" type="submit">Search</button>
       
    </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Icon Boxes -->
  <section class="section section-icons grey lighten-4 center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large teal-text">backup</i>
            <h4>Pick an advert style | Upload with ease</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, tempore?</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large teal-text">store</i>
            <h4>Hub Shop</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, tempore?</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large teal-text">face</i>
			
            <h4>Buy Cheap | Sell cheap</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, tempore?</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  

  <!-- Section: Popular Products -->
  <section id="popular" class="section section-popular scrollspy">
    <div class="container">
      <div class="row">
        <h4 class="center">
          <span class="teal-text">Popular</span> Deals</h4>
         
        
          <?php
            echo $adverts;
           ?>
     
      </div>
    </div>
  </section>
  
  <!-- Section: Icon Boxes2 -->
  <section class="section section-icons grey lighten-4 center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large teal-text">store
</i>
            <h4>Place your order- Add to your cart</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, tempore?</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large teal-text">feedback</i>
            <h4>Advert templates</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, tempore?</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large teal-text">dashboard</i>
			
            <h4>Create your own ad style</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, tempore?</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Follow -->
  <section class="section section-follow teal darken-2 white-text center">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h4>Follow AdHub</h4>
          <p>Follow us on social media for special offers on adverts for gold sellers</p>
          <a href="https://www.facebook.com/" class="white-text">
            <i class="fab fa-facebook fa-4x"></i>
          </a>
          <a href="https://twitter.com/" class="white-text">
            <i class="fab fa-twitter fa-4x"></i>
          </a>
          <a href="https://www.linkedin.com" class="white-text">
            <i class="fab fa-linkedin fa-4x"></i>
          </a>
          <a href="https://plus.google.com/discover" class="white-text">
            <i class="fab fa-google-plus fa-4x"></i>
          </a>
          <a href="https://www.pinterest.ie/" class="white-text">
            <i class="fab fa-pinterest fa-4x"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Gallery-lightbox material plugin-variation on  scrollspy -->
  <!-- Section: 4 3 -column divs -->
  <section id="gallery" class="section section-gallery scrollspy">
    <div class="container">
      <h4 class="center">
        <span class="teal-text">Product</span> Gallery
      </h4>
      <div class="row">
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?video-games" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?cameras" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?electronics" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?vinyl" alt="" class="materialboxed responsive-img">
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?bass" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?musical-instrument" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?records" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?computers" alt="" class="materialboxed responsive-img">
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?drum" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?robot" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?guitar" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?books" alt="" class="materialboxed responsive-img">
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Contact -->
  <section id="contact" class="section section-contact scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <div class="card-panel teal white-text center">
            
            <h5>Contact Us For an advert booking</h5>
			 <a href="advert.html" class="white-text">
            <i class="material-icons">email</i>
          </a>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo praesentium fugit tempore hic enim possimus molestias
              quisquam impedit corrupti eveniet.</p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4>Location</h4>
            </li>
            <li class="collection-item">AdHub Agency</li>
            <li class="collection-item">101 South Circular Road, Dublin 8, Ireland</li>
            <li class="collection-item">HQ-102, Pl. Malachowskiego 2, 00-940 WARSZAWA, Poland</li>
          </ul>
        </div>
        <div class="col s12 m6">
          <div class="card-panel grey lighten-3">
            <h5>Log in</h5>
            <div class="input-field">
              <input type="text" placeholder="Name">
            </div>
            <div class="input-field">
              <input type="text" placeholder="Email">
            </div>
			<div class="input-field">
              <input type="text" placeholder="Password">
            </div>
                  
            <input type="submit" value="Submit" class="btn">
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    include ('footer.php');
  ?>

 

 
