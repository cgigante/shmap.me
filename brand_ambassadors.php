<?php
  $page = "brand_ambassadors";
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <?php
  include ("_header.php")
  ?>
  <title>Shmap | Shmap Brand Ambassador Program</title>
  <!-- Google Analytics tracking code -->
  <?php include_once("analyticstracking.php") ?>
</head>

<body>





  <?php include_once("navigation.html") ?>


  <!-- Page Content -->
  <div class="wrap">

    <div class="container" id="brandAmbassadorPage">

        <img src="img/jozii/calendar.jpg" class="img-responsive" />

        <div class="clear"></div>



    </div><!-- /.container -->
    
    <!-- <img class="fullWidthIMG" src="img/banner.jpg" /> -->


    <?php
      include ("_footer.php")
    ?>            

  </div><!-- end Wrap -->
  

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



  <!-- Bootstrap Core JavaScript -->
  <script src="http://www.shamp.me/js/bootstrap.min.js"></script>

  

</body>

</html>
