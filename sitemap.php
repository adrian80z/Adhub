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

  
  <!-- Section: Search -->
  <section id="search" class="section section-search teal darken-1 white-text center scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h3>Search for a page</h3>
          <div class="input-field">
            <input type="text" class="white grey-text autocomplete" id="autocomplete-input" placeholder="Art, Cameras, Games, etc...">
          </div>
        </div>
      </div>
    </div>
  </section>

  

  

  <!-- Footer -->
  <footer class="section teal darken-2 white-text center">
    <p class="flow-text">AdHub &copy; 2018 </p>
	<h4>Lets go Home</h4>

          <a href="index.html" class="white-text">
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