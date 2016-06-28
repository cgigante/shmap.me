<?php
  $page = "home";
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <?php
  include ("_header.php")
  ?>
  <title>Shmap | Mobile Messaging App</title>

</head>

<body>
  <video autoplay loop poster="img/mapblue.jpg" id="bgvid">
      <!-- <source src="polina.webm" type="video/webm"> -->
      <source src="videos/shmap_edit4.mp4" type="video/mp4">
  </video>

<!-- Google Analytics tracking code -->
<?php include_once("analyticstracking.php") ?>
  
  <?php include_once("navigation.html") ?>
  
  <!-- Page Content -->
  <div class="wrap">
    <div class="container" id="homePage">
      <div class="row">
        
        <!-- <div class="col-md-1"></div> -->

        <div class="col-md-12 text-center chatBubble animated bounceInUp">
          <h1 class="animated flipInX">
            <div class="row">
              <div class="col-md-8">
                <img src="img/softBarbie_withText_trnsp.png" class="img-responsive" id="homepage-logo">
                <div id="app-store-badge-div">
                  <a href="https://itunes.apple.com/us/app/shmap/id993757607" target="_blank">
                    <img id="app-store-badge" class="img-responsive" src="img/app_store_badge.png" alt="Download Shmap on iOS" title="Download Shmap on iOS" />
                  </a>                  
                </div>
                <div>
                  <h3><span class="orangeColor">Brand Ambassadors:</h3></span>
                  <h4><em>Download the Shmap Quickstart Guide &amp; Presentation</em></h4>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="div-quickstart">
                        <div class="hovereffect">
                            <img src="quickstart/quickstart_image.png" alt="Quickstart Thumbnail Image" class="img-responsive" id="quickstartImage">
                            <div class="overlay">
                               <a class="info" href="quickstart/shmap_launch_handout_sm.pdf" download><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Download the Shmap Quickstart Guide</a>
                            </div>
                        </div>                    
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="div-quickstart">
                          <div class="hovereffect">
                              <img src="presentation/presentation_image.jpg" alt="Quickstart Thumbnail Image" class="img-responsive" id="quickstartImage">
                              <div class="overlay">
                                 <!-- <h2>Hover effect 1</h2> -->
                                 <a class="info" href="presentation/Shmap_Presentation_for_App_Launch_v6_sm.pdf" download><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Download the Brand Ambassador presentation</a>
                              </div>
                          </div>                    
                        </div>
                    </div>
                  </div>

                </div>

              </div>
              
              <div class="col-md-4">
                <img id="homepage-gif" src="img/gif/iphone_with_gif.gif" class="img-responsive" alt="Shmap Slideshow" title="Shmap Slideshow">
              </div>

            </div>
          </h1>
        </div>
        
        <!-- <div class="col-md-1"></div> -->
        <div class="clear"></div>
      </div>
      <!-- /.row -->
      
      <div class="row">
        
        
        <div class="col-md-6 text-center chatBubbleInstagram animated bounceInLeft">
        	<h4><img src="http://www.shmap.me/img/footerlogo.png" alt="Shmap Logo" class="img-responsive" style="max-width:60px; margin:0 auto;"> on <a href="https://www.instagram.com/shmapapp/" target="_blank">Instagram</a></h4>
					<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/091e8a1d4899621ac35a9648d571ea206f7c0ac3.html" id="lightwidget_091e8a1d48" name="lightwidget_091e8a1d48"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
				</div>

        <!-- <div class="col-md-1"></div> -->

        <div class="col-md-6 text-center chatBubbleTwitter animated bounceInRight">
					<a class="twitter-timeline" data-height="500" data-link-color="#e69f12" href="https://twitter.com/shmapapp">Tweets by shmapapp</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>

				
      </div>

    </div><!-- /.container -->
    

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
