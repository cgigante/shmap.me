<?php
  $page = "usecases";
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
    <div class="container" id="homePage">
      <div class="row">
        <div class="col-sm-12">
          <div class="text-center chatBubble animated bounceInUp">
            <div class="row">
              <div class="col-sm-6">
                <img class="img-responsive main-logo" src="img/logo.png" alt="Shmap Logo">
                <h2 class="scriptFont">Need some inspiration for using Shmap? Check out some of our <span class="orangeColor">use cases</span> below.</h2>
                <br>
                <h4><a href="#useCasesShouts">Shouts</a></h4>
                <h4><a href="#useCasesReminders">Reminders</a></h4>
                <h4><a href="#useCasesPMs">Private Location Messages</a></h4>
                <!-- <h4><a href="#useCasesSD">Self-Destructing Messages</a></h4> -->
                <h4><a href="#useCasesGroup">Group Messages</a></h4>
              </div>
              <br>
              <div class="col-sm-6">
                <img src="img/usecases/usecases_header.jpg" alt="Use Cases Header Image" class="img-responsive useCaseHeader" />    
              </div>
            </div>
          </div>          
        </div>
        
        <div class="clear"></div>
      </div>
      <!-- /.row -->


<!-- ***********************
Shouts 
*********************** -->
      <h1 id="useCasesShouts" class="scriptFont whiteColor text-center useCaseHeaderText">Shouts</h1>
      <!-- Begin Row -->
      <div class="row" id="">
        <div class="col-sm-4">
          <!-- White Bubble, Blue Text -->
          <div class="text-center chatBubbleWhite animated bounceInLeft">
            <h1 class="increaseSize"><i class="fa fa-beer orangeColor" aria-hidden="true"></i></h1>
            <h3 class="scriptFont">Out partying and want to invite people around to join you for a drink? Leave a Shout at your current location.</h3>
            <div id="useCasesShouts0">
              <a href="img/usecases/phone/shout1.jpg" title="Use Case: Shout" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/shout1.jpg" alt="Use Case: Shout" />
              </a> 
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <!-- Blue Bubble, White Text -->
          <div class="text-center chatBubbleBlue animated bounceInRight">
            <h1 class="increaseSize"><i class="fa fa-thumbs-up orangeColor" aria-hidden="true"></i></h1>
            <h3 class="scriptFont whiteColor">Want to recommend the hottest new spot in town? Leave a Shout with your review!</h3>
            <div id="useCasesShouts1">
              <a href="img/usecases/phone/shout2.jpg" title="Use Case: Shout" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/shout2.jpg" alt="Use Case: Shout" />
              </a> 
            </div>
          </div>          
        </div>

        <div class="col-sm-4">
          <!-- White Bubble, Blue Text -->
          <div class="text-center chatBubbleWhite animated bounceInLeft">
            <h1 class="increaseSize"><i class="fa fa-map-o orangeColor" aria-hidden="true"></i></h1>
            <h3 class="scriptFont">Do you know your neighborhood better than anyone? Post Shouts around town to mark your territory and offer a unique voice from a true local.</h3>
            <div id="useCasesShouts2">
              <a href="img/usecases/phone/shout3.jpg" title="Use Case: Shout" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/shout3.jpg" alt="Use Case: Shout" />
              </a> 
            </div>
          </div>          
        </div>
    
      </div>
      <!-- End Row -->



      <!-- Begin Row -->
      <div class="row">

        <div class="col-sm-4">
          <!-- White Bubble, Blue Text -->
          <div class="text-center chatBubbleWhite animated bounceInRight">
            <h1 class="increaseSize"><i class="fa fa-spoon orangeColor" aria-hidden="true"></i></h1>
            <h3 class="scriptFont">Post warnings at the school cafeteria letting others know what monstrosity is on the menu today.</h3>
            <div id="useCasesShouts3">
              <a href="img/usecases/phone/shout4.jpg" title="Use Case: Shout" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/shout4.jpg" alt="Use Case: Shout" />
              </a> 
            </div>
          </div>          
        </div>      
        

        <div class="col-sm-4">
          <!-- Blue Bubble, White Text -->
          <div class="text-center chatBubbleBlue animated bounceInRight">
            <h1 class="increaseSize"><i class="fa fa-building orangeColor" aria-hidden="true"></i></h1>
            <h3 class="scriptFont whiteColor">Business owner or party promoter? Offer perks for your customers or fans by leaving Shouts at your location.</h3>
            <div id="useCasesShouts4">
              <a href="img/usecases/phone/shout6.jpg" title="Use Case: Shout" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/shout6.jpg" alt="Use Case: Shout" />
              </a>
            </div>  
          </div>          
        </div> 

        
        <div class="col-sm-4">
          <!-- White Bubble, Blue Text -->
          <div class="text-center chatBubbleWhite animated bounceInRight">
            <h1 class="increaseSize"><i class="fa fa-music orangeColor" aria-hidden="true"></i></h1>
            <h3 class="scriptFont">Bands and other creatives can promote special events at their shows!</h3>
            <div id="useCasesShouts5">
              <a href="img/usecases/phone/shout5.jpg" title="Use Case: Shout" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/shout5.jpg" alt="Use Case: Shout" />
              </a> 
            </div>
          </div>          
        </div>  

        
      </div>
      <!-- End Row -->


<!-- ***********************
Reminders 
*********************** -->
      <h1 id="useCasesReminders" class="scriptFont whiteColor text-center useCaseHeaderText">Reminders</h1>
<!-- Begin Row -->
      <div class="row" id="">
        <div class="col-sm-12">
          <!-- Blue Bubble, White Text -->
          <div class="text-center chatBubbleBlue animated bounceInLeft">
            <h1 class="increaseSize"><i class="fa fa-sticky-note orangeColor" aria-hidden="true"></i></h1>
            <h3 class="scriptFont whiteColor">Leave virtual "sticky note" reminders for yourself at the grocery store or as a quick reminder to call mom when you get home.</h3>
            <div id="useCasesReminders1">
              <a href="img/usecases/phone/reminder.jpg" title="Use Case: Reminder" data-gallery>
                <img class="img-responsive" src="img/usecases/Shmap_Use_Cases_060616.008.jpeg" alt="Use Case: Reminder" />
              </a> 
            </div>
          </div>          
        </div>

        
      </div>
      <!-- End Row -->


<!-- ***********************
Private Messages 
*********************** -->
      <h1 id="useCasesPMs" class="scriptFont whiteColor text-center useCaseHeaderText">Private Location Messages</h1>
      
      <!-- Begin Row -->
      <div class="row" id="">
        <div class="col-sm-4 ">
          <!-- White Bubble, Blue Text -->
          <div class="text-center chatBubbleWhite animated bounceInLeft">
            <h1 class="increaseSize"><i class="fa fa-smile-o orangeColor" aria-hidden="true"></i></h1>
            <h3 class="scriptFont">Plant messages at locations for your friends where they have done something memorable (or embarrassing!)</h3>
            <div id="useCasesPMs1">
              <a href="img/usecases/phone/p2p1.jpg" title="Use Case: Private Message" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/p2p1.jpg" alt="Use Case: Private Message" />
              </a> 
            </div>
          </div>
        </div>
        
        <div class="col-sm-4">
          <!-- Blue Bubble, White Text -->
          <div class="text-center chatBubbleBlue animated bounceInLeft">
            <h1 class="increaseSize"><i class="fa fa-heart orangeColor" aria-hidden="true"></i></h1>
            <h3 class="scriptFont whiteColor">Rekindle love by leaving a note for your former boyfriend or girlfriend at the place you met.</h3>
            <div id="useCasesPMs2">
              <a href="img/usecases/phone/p2p2.jpg" title="Use Case: Private Message" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/p2p2.jpg" alt="Use Case: Private Message" />
              </a> 
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <!-- White Bubble, Blue Text -->
          <div class="text-center chatBubbleWhite animated bounceInLeft">
            <h1 class="increaseSize"><i class="fa fa-graduation-cap orangeColor" aria-hidden="true"></i></h1>
            <h3 class="scriptFont">Leave a message at the bar to let that delinquent friend know they should be studying, not partying.</h3>
            <div id="useCasesPMs3">
              <a href="img/usecases/phone/p2p3.jpg" title="Use Case: Private Message" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/p2p3.jpg" alt="Use Case: Private Message" />
              </a> 
            </div>
          </div>          
        </div>

        
      </div>
      <!-- End Row -->

      <!-- Begin Row -->
      <div class="row" id="">
        <div class="col-sm-4 ">
          <!-- White Bubble, Blue Text -->
          <div class="text-center chatBubbleWhite animated bounceInRight">
            <h1 class="increaseSize"><i class="fa fa-globe orangeColor" aria-hidden="true"></i></h1>
            <h3 class="scriptFont">Leave location messages for loved ones at all the amazing spots they’re visiting during travel around the world...</h3>
            <div id="useCasesPMs1">
              <a href="img/usecases/phone/2-3_inloop_chat-w-loc-vacation-msg1.jpg" title="Use Case: Private Message" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/2-3_inloop_chat-w-loc-vacation-msg1.jpg" alt="Use Case: Private Message" />
              </a> 
            </div>
          </div>
        </div>
        
        <div class="col-sm-4">
          <!-- Blue Bubble, White Text -->
          <div class="text-center chatBubbleBlue animated bounceInRight">
            <h1 class="increaseSize"><i class="fa fa-plane orangeColor" aria-hidden="true"></i></h1>
            <h3 class="scriptFont whiteColor">...and welcome them home right when they land!</h3>
            <div id="useCasesPMs2">
              <a href="img/usecases/phone/2-3_inloop_chat-w-loc-vacation.jpg" title="Use Case: Private Message" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/2-3_inloop_chat-w-loc-vacation.jpg" alt="Use Case: Private Message" />
              </a> 
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <!-- White Bubble, Blue Text -->
          <!-- <div class="text-center chatBubbleWhite animated bounceInLeft">
            <h3 class="scriptFont">Leave a message at the bar to let that delinquent friend know they should be studying, not partying.</h3>
            <div id="useCasesPMs3">
              <a href="img/usecases/phone/p2p3.jpg" title="Use Case: Private Message" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/p2p3.jpg" alt="Use Case: Private Message" />
              </a> 
            </div>
          </div> -->
        </div>

        
      </div>
      <!-- End Row -->      


<!-- ***********************
Self-Destructing Messages
*********************** -->
<!--       <h1 id="useCasesSD" class="scriptFont whiteColor text-center useCaseHeaderText">Self-Destructing Messages</h1>
     
      <div class="row" id="">
        <div class="col-sm-6">
          
          <div class="text-center chatBubbleBlue animated bounceInLeft">
            <h3 class="whiteColor scriptFont">Got a message you don't want hanging around for too long? Set it to self-destruct!</h3>
            <div id="usecaseSD1">
              <a href="img/usecases/phone/sd1.jpg" title="Use Case: Self-Destructing Message" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/sd1.jpg" alt="Use Case: Self-Destructing Message" />
              </a> 
            </div>
          </div>          
        </div>
        

        <div class="col-sm-6">
          
          <div class="text-center chatBubbleWhite animated bounceInRight">
            <h3 class="scriptFont">Send a private photo that will automatically disappear after a specific period of time you select.</h3>
            <div id="usecaseSD2">
              <a href="img/usecases/phone/sd2.jpg" title="Use Case: Self-Destructing Message" data-gallery>
                <img class="img-responsive" src="img/usecases/phone/sd2.jpg" alt="Use Case: Self-Destructing Message" />
              </a> 
            </div>
          </div>
        </div>
        
      </div> -->
      <!-- End Row -->


<!-- ***********************
Group Messages
*********************** -->
      <h1 id="useCasesGroup" class="scriptFont whiteColor text-center useCaseHeaderText">Group Messages</h1>
<!-- Begin Row -->
      <div class="row" id="">
        <div class="col-sm-12">
          <!-- White Bubble, Blue Text -->
          <div class="text-center chatBubbleWhite animated bounceInLeft">
            <h1 class="increaseSize"><i class="fa fa-users orangeColor" aria-hidden="true"></i></h1>
            <h3 class="scriptFont">Hold group chats with friends, at a location or not.</h3>
            <div id="usecaseGroup">
              <a href="img/usecases/phone/group.jpg" title="Use Case: Group Messages" data-gallery>
                <img class="img-responsive" src="img/usecases/Shmap_Use_Cases_060616.015.jpeg" alt="Use Case: Group Messages" />
              </a> 
            </div>
          </div>
        </div>
        
        
      </div>
      <!-- End Row -->


<!-- ***********************
How do you use Shmap?
*********************** -->
      <h1 id="useCasesGroup" class="scriptFont whiteColor text-center useCaseHeaderText">How do <u>you</u> use Shmap?</h1>
<!-- Begin Row -->
      <div class="row" id="">
        <div class="col-sm-12">
          <!-- White Bubble, Blue Text -->
          <div class="text-center chatBubbleWhite animated bounceInLeft">
            <h3 class="scriptFont">Are you using Shmap in ways you think are unique? We'd love to hear about it! <a href="mailto:info@ideally.net">Drop us a message</a> with your username and a description of how you use Shmap. If you've got fun ideas, we might feature you on our social media!</h3>
          </div>          
        </div>
        
      </div>
      <!-- End Row -->


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
