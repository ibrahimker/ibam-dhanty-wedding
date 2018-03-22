<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dhanty & Ibam Wedding</title>
  <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="extras/modernizr.2.5.3.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-53568416-4', 'auto');
    ga('send', 'pageview');
  </script>
  <?php 
  require_once 'Mobile_Detect.php';
  $detect = new Mobile_Detect;
  ?>
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
  <style>
    .teks{
      font-family: 'Gloria Hallelujah', cursive;
      font-size:28px;
      /*text-shadow: grey 0.1em 0.1em 0.2em;*/
    }
    .teks-small{
      font-family: 'Gloria Hallelujah', cursive;
      font-size:24px;
      width:80%;
      /*text-shadow: grey 0.1em 0.1em 0.2em;*/
    }
    .teks-super-small{
      font-family: 'Gloria Hallelujah', cursive;
      font-size:18px;
      width:80%;
      /*text-shadow: grey 0.1em 0.1em 0.2em;*/
    }
  </style>
</head>
<body>
  <?php
  if ( $detect->isMobile() ) {
    include('mobile.php');
  }
  else {
    include('nonmobile.php');
  }
  ?>


</body>
</html>