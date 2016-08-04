<?php
  $page = "attribution";
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <?php
  include ("_header.php")
  ?>
  <title>Use Cases | Shmap | Mobile Messaging App</title>

  <!-- Image Gallery -->
  <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
  <link rel="stylesheet" href="http://www.shmap.me/css/bootstrap-image-gallery.min.css">
  <!-- Google Analytics tracking code -->
  <?php include_once("analyticstracking.php") ?>
</head>

<body>

  <!-- Begin Bootstrap Image Gallery lightbox -->
  <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" style="display: none;" data-use-bootstrap-modal="false">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" aria-hidden="true">&times;</button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body next"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left prev">
              <i class="glyphicon glyphicon-chevron-left"></i>
              Previous
            </button>
            <button type="button" class="btn btn-primary next">
              Next
              <i class="glyphicon glyphicon-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end blueimp-gallery controls -->


  <!-- Navigation -->
  <?php include_once("navigation.html") ?>
  
  <!-- Page Content -->
  <div class="wrap">
    <div class="container">
      <div>
        <h1 class="text-center whiteColor scriptFont">Attributions</h1>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div id="facebook-dab" class="text-center chatBubble animated bounceInUp">
            <div class="row">
              <div class="col-sm-6">
                <!-- <img class="img-responsive main-logo" src="img/softBarbie_withText_trnsp.png" alt="Shmap Logo"> -->
                <h2 class="scriptFont">Facebook Ad - Dab</h2>
                <h3 class="scriptFont">Use of this image falls under the <span class="orangeColor">Creative Commons</span> License. Details below:</h3>
                <br>
                <h4><a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">CC License</a></h4>
                <h4>Note: Original image has been altered.</h4>
                <h4><a href="https://www.flickr.com/photos/cavan/26557604313/in/photolist-GsNEvx-c4d9Wu-7CknMV-5fbSwm-c3DUyE-g4FxXp-4ZAmUh-9sD2kz-2mxdzn-wEq6C-8c1pxG-2mxdLe-spXRS-5GaK26-7CyJaF-5kKyWy-2jLHYH-4ZAmU9-EDPLs-t7xRQu-5GaK1z-6KKsBs-8DSuuF-5Gchgb-dPd3AH-eSvfbs-2mxdTV-didSXP-74cMaW-efEDFH-7zWtG1-ubxiFp-2V8TMa-zuZ97-7zWtpU-rLgHv-782fpj-4vNGUp-GYt3AG-77Xkkz-782fAu-hL8FH-rLgEM-yUGku-9C2kCX-A6cCj-74cLNC-bptPJk-bptJkk-9z3UpB">Original can be found here.</a></h4>
              </div>
              <br>
              <div class="col-sm-6">
                <img src="img/attribution/ad_male_13-17_dab-3.jpg" alt="Shmap Dab Ad" class="img-responsive" />    
              </div>
            </div>
          </div>          
        </div>
        
        <div class="clear"></div>
      </div>
      <!-- /.row -->



<!-- ***********************
How do you use Shmap?
*********************** -->
     <!--  <h1 id="useCasesGroup" class="scriptFont whiteColor text-center useCaseHeaderText">How do <u>you</u> use Shmap?</h1>

      <div class="row" id="">
        <div class="col-sm-12">
          <div class="text-center chatBubbleWhite animated bounceInLeft">
            <h3 class="scriptFont">Are you using Shmap in ways you think are unique? We'd love to hear about it! <a href="mailto:info@ideally.net">Drop us a message</a> with your username and a description of how you use Shmap. If you've got fun ideas, we might feature you on our social media!</h3>
          </div>          
        </div>
        
      </div> -->


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
