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
              <a href="index.html" class="white-text"><li>Home</a></li>
            </li>
             <li>
              <a href="team.html" class="white-text"><li>Speak to a team member</a></li>
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
            <h5>Please fill out this form</h5>
            <div class="input-field">
              <input type="text" placeholder="Name">
            </div>
            <div class="input-field">
              <input type="text" placeholder="Email">
            </div>
            <div class="input-field">
              <input type="text" placeholder="Phone">
            </div>
            <div class="input-field">
              <textarea class="materialize-textarea" placeholder="Enter Message"></textarea>
            </div>
            <input type="submit" value="Submit" class="btn">
          </div>
        </div>
      </div>
    </div>
  </section>
  

  

  

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