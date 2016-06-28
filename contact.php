<?php
  $page = "contact";
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <?php
  include ("_header.php")
  ?>
    <title>Contact Us | Shmap | Mobile Messaging App</title>
</head>

<body>
  
  <?php include_once("analyticstracking.php") ?>
  <?php include_once("navigation.html") ?>

  <!-- Page Content -->
  <div class="wrap">

    <div class="container" id="contactPage">

      <div class="row">
          
        <div class="col-md-4"></div>
        
        <div class="col-md-4 text-center" id="contactCenterDiv">
          
          <!-- Chat Bubble -->
          <div class="chatBubble animated bounceIn">
            <h1>Contact Us</h1>
          </div>


          <section id="contact">
            <div class="contact-div">
              <form name="sentMessage" id="contactForm" novalidate>
                <div class="row control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Tell us who you are" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="your@emailaddress.com" id="email" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Message</label>
                        <textarea rows="5" class="form-control" placeholder="Say hello" id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>

                <div id="success"></div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-md">Send</button>
                </div>

              </form>
            </div>    
          </section>
        </div>

        <div class="col-md-4"></div>
        
      </div>
      <!-- /.row -->


    </div>
    <!-- /.container -->

    <div class="clear"></div>
      
    <?php
      include ("_footer.php")
    ?>

  </div> 
  <!-- end WRAP -->

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

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>
