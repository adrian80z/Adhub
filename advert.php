<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Adhub</title>
</head>

<body id="home" class="scrollspy">
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="teal">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">AdHub</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="#home">Home</a>
            </li>
            <li>
              <a href="#search">Search Items</a>
            </li>
            <li>
           <a href="#popular">Strange & wonderful Products</a>
            </li>
            <li>
              <a href="#gallery">Gallery</a>
            </li>
            <li>
              <a href="#contact">Place an advert</a>
            </li>
			 <li>
              <a href="#contact">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <ul class="sidenav" id="mobile-nav">
    <li>
      <a href="#home">Home</a>
    </li>
    <li>
       <a href="#search">Search Items</a>
    </li>
    <li>
     <a href="#popular">Strange & wonderful Products</a>
    </li>
    <li>
      <a href="#gallery">Gallery</a>
    </li>
    <li>
      <a href="#contact">Place an advert</a>
    </li>
	 <li>
      <a href="#contact">Contact Us</a>
     </li>
  </ul>

  
  <!-- Section: Search -->
  <section id="search" class="section section-search teal darken-1 white-text center scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h3>Search specific products</h3>
          <div class="input-field">
            <input type="text" class="white grey-text autocomplete" id="autocomplete-input" placeholder="Art, Cameras, Games, etc...">
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
          <span class="teal-text">Advert</span> Category</h4>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/coins.jpg" alt="">
              <span class="card-title">Basic Package</span>
            </div>
            <div class="card-content">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum ea deserunt officia, dicta sint perferendis.
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
			<img src="img/bitcoin.jpg" alt="">
              <span class="card-title">Standard Package</span>
              
            </div>
            <div class="card-content">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum ea deserunt officia, dicta sint perferendis.
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/cash.jpg" alt="">
              <span class="card-title">Plus Package</span>
            </div>
            <div class="card-content">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum ea deserunt officia, dicta sint perferendis.
            </div>
          </div>
        </div>
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
            <i class="material-icons">email</i>
            <h5>Contact Us For an advert booking</h5>
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

  <!-- Footer -->
  <footer class="section teal darken-2 white-text center">
    <p class="flow-text">AdHub &copy; 2018 </p>
	<h4>Sitemap</h4>

          <a href="sitemap.html" class="white-text">
            <i class="fab fa-database fa-4x"></i>
          </a>
		  	
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  <script>
    // Sidenav
    const sideNav = document.querySelector('.sidenav');
    M.Sidenav.init(sideNav, {});

    // Slider
    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 500,
      interval: 6000
    });

    // Autocomplete
    const ac = document.querySelector('.autocomplete');
    M.Autocomplete.init(ac, {
      data: {
        "Music": null,
        "Paintings": null,
        "Jewelery": null,
        "Fun stuff": null,
        "Cars": null,
        "Video Games": null,
        "Clothing": null,
		"Instruments": null,
        "Pictures": null,
        "Electronics": null,
        "Tickets": null,
        "Watches": null,
        "Cameras": null,
        "Electric Bikes": null,
      }
    });

    // Material Boxed
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    // ScrollSpy
    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});

  </script>
</body>

</html>