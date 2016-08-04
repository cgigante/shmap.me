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
  <!-- Google Analytics tracking code -->
  <?php include_once("analyticstracking.php") ?>
</head>

<body>
  <video autoplay loop poster="img/mapblue.jpg" id="bgvid">
      <source src="videos/shmap_edit4.mp4" type="video/mp4">
  </video>


  <!-- Navigation -->
  <?php include_once("navigation.html") ?>
  
  <!-- Page Content -->
  <div class="wrap">
    <div class="container" id="homePage">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center chatBubble animated bounceInUp">
            <h1 class="animated flipInX">
              <div class="row">
                <div class="col-md-8">
                  <img src="img/logo.png" class="img-responsive main-logo">
                  <div id="app-store-badge-div">
                    <a href="https://itunes.apple.com/us/app/shmap/id993757607" target="_blank">
                      <img id="app-store-badge" class="img-responsive" src="img/app_store_badge.png" alt="Download Shmap on iOS" title="Download Shmap on iOS" />
                    </a>                  
                  </div>
                  <div>
                    <h3><span class="orangeColor scriptFont">Brand Ambassadors:</h3></span>
                    <h4><em>Download the Shmap Quickstart Guide &amp; Presentation</em></h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="div-dl-images">
                          <div class="hovereffect">
                            <img src="quickstart/quickstart_image.png" alt="Quickstart Thumbnail Image" class="img-responsive" id="quickstartImage">
                            <div class="overlay">
                               <a class="info" href="http://bit.ly/shmap-quick" download>Download the Shmap Quickstart Guide<br><br><span class="glyphicon glyphicon-download" aria-hidden="true"></span></a>
                            </div>
                          </div>                    
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="div-dl-images">
                            <div class="hovereffect">
                              <img src="presentation/presentation_image.jpg" alt="Quickstart Thumbnail Image" class="img-responsive" id="presentationImage">
                              <div class="overlay">
                                 <a class="info" href="http://bit.ly/shmap-preso" download>Download the Brand Ambassador presentation<br><br><span class="glyphicon glyphicon-download" aria-hidden="true"></span></a>
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
        </div>
        
        
        <!-- <div class="col-md-1"></div> -->
        <div class="clear"></div>
      </div>
      <!-- /.row -->
      
      <div class="row">
        
        <div class="col-md-6">
          <div class="text-center chatBubbleWhite animated bounceInLeft">
            <h4><img src="http://www.shmap.me/img/footerlogo.png" alt="Shmap Logo" class="img-responsive" style="max-width:60px; margin:0 auto;"> on <a href="https://www.instagram.com/shmapapp/" target="_blank">Instagram</a></h4>
            <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/091e8a1d4899621ac35a9648d571ea206f7c0ac3.html" id="lightwidget_091e8a1d48" name="lightwidget_091e8a1d48"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
          </div>          
        </div>
        <div class="col-md-6">
          <div class="text-center chatBubbleBlue animated bounceInRight">
            <a class="twitter-timeline" data-height="500" data-link-color="#e69f12" href="https://twitter.com/shmapapp">Tweets by shmapapp</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>          
        </div>
        

				
      </div>

    </div><!-- /.container -->
    
    <!-- Footer -->
    <?php
      include ("_footer.php")
    ?>            

  </div><!-- end Wrap -->
  
  <!-- Javascript/Jquery -->
  <?php
    include ("_code.php")
  ?>

</body>

</html>
