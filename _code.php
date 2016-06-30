<!-- This code will notify users if they are using an out-of-date browser  -->
<script> 
    var $buoop = {c:2}; 
    function $buo_f(){ 
     var e = document.createElement("script"); 
     e.src = "//browser-update.org/update.js"; 
     document.body.appendChild(e);
    };
    try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
    catch(e){window.attachEvent("onload", $buo_f)}
</script>


<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<!-- The following script changes the navbar when scrolling down -->
<script>
  $(function() {
      //caches a jQuery object containing the header element
      var header = $(".navbar");
      $(window).scroll(function() {
          var scroll = $(window).scrollTop();
          if (scroll >= 50) {
              header.addClass("navbarOnScroll");
          } else {
              header.removeClass("navbarOnScroll");
          }
      });
  });
</script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Image Gallery Javascript Links -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.min.js"></script>

<!-- ####################################################
The following script provides the SCROLL functionality 
############################################################ -->
<script>
$('a[href^="#"]').on('click', function(event) {
  var target = $( $(this).attr('href') );
  if( target.length ) {
      event.preventDefault();
      $('html, body').animate({
          scrollTop: target.offset().top
      }, 1500);
  }
});
</script>