<div id="ajax-modal" class="modal fade" tabindex="-1" style="display: none;"></div>
  <!-- Bootstrap core JavaScript -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="Bootstrap/js/jquery.js"></script>
  <script src="Bootstrap/js/bootstrap.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.js"></script>
    <script src="Bootstrap/js/bootstrap-modalmanager.js"></script>
    <script src="Bootstrap/js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script type="text/javascript" src="Bootstrap/js/jquery.imgslider.js"></script>
    <script type="text/javascript">
      $(function() {

        $( '#fs-slider' ).imgslider();

      });
    </script>

  <!-- Custom JavaScript for the Side Menu - Put in a custom JS file if you want to clean this up -->
  <script>
      $("#menu-close").click(function(e) {
          e.preventDefault();
          $("#sidebar-wrapper").toggleClass("active");
      });
  </script>
  <script>
      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#sidebar-wrapper").toggleClass("active");
      });
  </script>
  <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
              || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>

  </body>

</html>
