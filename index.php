<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Swapi</title>
    <meta name="description" content="This is a test for using the SWAPI Api" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    
    
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/local.css" />
    <style>
   
    </style>    
    
  </head>
  <body>
<?php
require_once './inc/inc_nav.php';
?>
    
    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1>MySwapi</h1>
                <h4>A testing app to test the Swapi API</h4>
                <hr>
                <a href="#video-background" id="toggleVideo" data-toggle="collapse" class="btn btn-danger btn-xl">Toggle Video</a> 
            </div>
        </div>
        <video muted autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="media/darth_bg.png" id="video-background">
            <source src="media/sw_destroyer.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
    </header>
    
      
      
      <section class="bg-primary" id="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary">Something something quote</h2>
                    <br>
                    <p class="text-faded">
                       You know, I think that R2 unit we bought might have been stolen. What makes you think that? Well, I stumbled across a recording while I was cleaning him. He says he belongs to someone called Obi-Wan Kenobi. I thought he might have meant old Ben. Do you know what he's talking about? Well, I wonder if he's related to Ben. That old man's just a crazy old wizard. Tomorrow I want you to take that R2 unit into Anchorhead and have its memory flushed. That'll be the end of it. It belongs to us now. But what if this Obi-Wan comes looking for him? He won't, I don't think he exists any more. He died about the same time as your father. He knew my father? I told you to forget it. Your only concern is to prepare the new droids for tomorrow. In the morning I want them on the south ridge working out those condensers.
                    </p>
                    <a href="#three" class="btn btn-default btn-xl page-scroll">Learn More</a>
                </div>
            </div>
        </div>
    </section>

      
      
      <section class="bg-primary" id="films">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div id="sw-listing-container">
                        <div id="temp-loader" style="display:none;">
                                Loading...
                                <i class="fa fa-cog fa-spin fa-3x fa-fw margin-bottom"></i>
                                <span class="sr-only">Loading...</span>                            
                        </div>
                        <ul id="sw-listing" class="list-group"></ul>
                    </div>
                </div>
                <div class="col-sm-8" id="swapi-detail-container">
                         <div id="temp-loader2" style="display:none;">
                                Loading...
                                <i class="fa fa-cog fa-spin fa-3x fa-fw margin-bottom"></i>
                                <span class="sr-only">Loading...</span>                            
                        </div>                   
                <div id="swapi-detail" style="display:none;">
                    <?php
                    include_once './inc/inc_movie_card.php';
                    ?>
                </div> 
                </div>
            </div>
            
          
            </div>
        </div>
    </section>      


    <section id="people">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
    <section id="planets">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section> 
    <section id="starships">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>         
    <section id="vehicles">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>         


      
      
    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-3 column">
                    <h4>Information</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Products</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Benefits</a></li>
                        <li><a href="">Developers</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 column">
                    <h4>About</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 column">
                    <h4>Stay Posted</h4>
                    <form>
                        <div class="form-group">
                          <input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-3 text-right">
                    <h4>Follow</h4>
                    <ul class="list-inline">
                      <li><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Dribble"><i class="icon-lg ion-social-dribbble-outline"></i></a></li>
                    </ul>
                </div>
            </div>
            <br/>
            <span class="pull-right text-muted small"><a href="http://www.bootstrapzero.com">MySwapi by BootstrapZero</a> ©2015 Company</span>
        </div>
    </footer>
    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<div class="modal-body">
                    <img src="media/darth_wp1.jpg" id="galleryImage" class="img-responsive" />
        		<p>
        		    <br/>
        		    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
        		</p>
        	</div>
        </div>
        </div>
    </div>
    <div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center">MySwapi Theme</h2>
        		<h5 class="text-center">
        		    A free, responsive landing page theme built by BootstrapZero.
        		</h5>

        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
        	</div>
        </div>
        </div>
    </div>
    <div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center">Nice Job!</h2>

        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
        	</div>
        </div>
        </div>
    </div>
    <!--scripts loaded here from cdn for performance -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/local.js"></script>
  </body>
</html>