<?php
if ($_SERVER["REQUEST_METHOD"]!="GET") {
  header("Location:registration.html");
}
 ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147255876-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147255876-1');
</script>
   <title>TEDxKLSGIT | Error</title>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
   <meta property="og:title" content="TEDxKLSGIT | Speakers">
   <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>

   <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" />
   <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css" />
   <link rel="icon" type="image/png" href="images/icon.png" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500" />
   <link rel="stylesheet" href="fonts/icomoon/style.css" />
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <link rel="stylesheet" href="css/magnific-popup.css" />
   <link rel="stylesheet" href="css/jquery-ui.css" />
   <link rel="stylesheet" href="css/owl.carousel.min.css" />
   <link rel="stylesheet" href="css/owl.theme.default.min.css" />
   <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
   <link rel="stylesheet" href="css/animate.css" />
   <link rel="stylesheet" href="css/countdown.css" />
   <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />
   <link rel="stylesheet" href="css/aos.css" />
   <link rel="stylesheet" href="css/style.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>

   <link rel="stylesheet" href="./dist/style.css">
   <link rel="stylesheet" href="./dist/style.css">
   <style media="screen">
   body,html{
     font-family:helvetica;
   }
   iframe{
   position: absolute;
   left: 0;
   bottom: 0;
}
   </style>
 </head>

 <body style="background: #F1EEEE;">
   <div class="site-wrap">
     <div class="site-mobile-menu">
       <div class="site-mobile-menu-header">
         <div class="site-mobile-menu-close mt-3">
           <span class="icon-close2 js-menu-toggle"></span>
         </div>
       </div>
       <div class="site-mobile-menu-body"></div>
     </div>
     <!-- .site-mobile-menu -->

     <div class="site-navbar-wrap bg-white" id="sticky">
       <div class="container">
         <div class="site-navbar bg-light">
           <div class="py-1">
             <div class="row align-items-center">
               <div class="col-2">
                 <h2 class="mb-0 site-logo">
                   <a href="index.html"><img src="images/logo.png" /></a>
                 </h2>
               </div>
               <div class="col-10">
                 <nav class="site-navigation text-right" role="navigation">
                   <div class="container">
                     <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                       <a href="#" class="site-menu-toggle js-menu-toggle text-white-opacity-5"><span class="icon-menu h3" style="color:#000;"></span></a>
                     </div>
                     <ul class="site-menu js-clone-nav d-none d-lg-block">
                       <li><a href="index.html" class='text-black'>Home</a></li>
                       <li>
                         <!--<a href="gallery.html" class='text-black'>Gallery</a>-->
                       </li>
                       <li>
                         <a href="videos.html" class='text-black'>Watch</a>
                       </li>
                       <!--<li><a href="team.html" class='text-black'>Crew</a></li>-->
                       <li ><a href="speaker.html" class='text-black'>Speakers</a></li>

                       <li style=""><a href="registration.php"><span style="color: red; height: 50px; font-weight: 800;padding: 0px">Register</span></a></li>

                     </ul>
                   </div>
                 </nav>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <br />
     <br />

    <div class="container">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
        <img src="images/log.png" alt="" height="auto" width="100%">

        <p><h3 style="color:#bf0c00"><strong><?php echo $_GET['error']; ?></strong></h3></p>
        <a style="color:black" href="<?php echo $_GET['link']; ?>"><strong>Go Back</strong></a>
      </div>
    </div>


    <iframe src="footer.html" frameborder="0" scrolling="no" style="width: 100%; height: 120px; margin-bottom:-20px;margin-top:20px;" id="foo"></iframe>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/countdown.js" type="text/javascript"></script>
    <script src="js/main.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136909677-1"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="./dist/script.js"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-136909677-1");
    </script>
  </body>

  </html>
