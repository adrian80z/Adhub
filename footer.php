<!-- Footer -->
  <footer class="section teal darken-2 white-text center">
    <p class="flow-text">AdHub &copy; <?php echo date("Y") ?> </p>
	<h4>Sitemap</h4>

          <a href="sitemap.html" class="white-text">
            <i class="fab fa-database fa-4x"></i>
          </a>
		  	
  </footer>

   <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
  	  $(document).ready(function(){
    $('select').formSelect();
  });

    $('.dropdown-trigger').dropdown();
  </script>
  <script>
    
      $(document).ready(function() {
        $(".firstmg").click(function() {
          $("#infodet").toggle();
        });
        });
        
        
        $(document).ready(function() {
        $(".ph").click(function() {
          $(".phnum").toggle();
        });
        });
      
    </script>

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

    // Material Boxed
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    // ScrollSpy
    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});

  </script>
  </body>
</html>