<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dhanty & Ibam Wedding</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">

    <script src="js/countdown.js" type="text/javascript"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-53568416-4', 'auto');
      ga('send', 'pageview');
    </script>

    <link rel="stylesheet" type="text/css" href="css/fullpage.css" />
    <?php 
    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect;
    ?>
    <style>
        body .modal-lg {
            width: 90%;
            margin-left: 5%;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top" style="font-family: 'Gloria Hallelujah', cursive;">Dhanty & Ibam</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#cerita">Cerita Kami</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#waktu">Waktu</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#lokasi">Lokasi</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#rsvp">RSVP</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div id="fullpage">
            <div class="section">
                <header>
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1 id="homeHeading" class="main-title fade-out">Dhanty & Ibam</h1>
                            <h1 class="main-title fade-out" style="padding-top:5%;">17.08.17</h1>
                            <div class="container">
                                <div class="row" style="padding-top:5%;">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2 col-xs-6 text-center">
                                        <div class="service-box">
                                            <h1 id="countdown-timer-day"></h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-xs-6 text-center">
                                        <div class="service-box">
                                            <h1 id="countdown-timer-hour"></h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-xs-6 text-center">
                                        <div class="service-box">
                                            <h1 id="countdown-timer-min"></h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-xs-6 text-center">
                                        <div class="service-box">
                                            <h1 id="countdown-timer-sec"></h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <div class="section section-cerita" id="cerita">
                <section class="">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading-grey">Cerita Kami</h2>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            if ( $detect->isMobile() ) {
                                echo "<center><a href='".$actual_link."/story' target='_blank' class='btn btn-primary' style='padding:5%;font-size:100%;margin-top:5%;background-color:orange;'>Klik untuk melihat cerita</a></center>";
                            }
                            else {
                                echo "<center><iframe src='".$actual_link."/story' style='width:80%;height:750px;border:0;'></iframe></center>";
                            }
                            ?>
                        </div>
                    </div>
                </section>
            </div>
            <div class="section">
                <section class="bg-purple3" id="waktu">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading" style="color:white;padding-top:7%;">Waktu</h2>
                                <hr class="primary">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top:5%;">
                        <div class="col-md-6 text-center waktu">
                            <h2 class="section-heading">Akad Nikah</h2>
                            <p>Kamis, 17 Agustus 2017</p>
                            <p>15.45 - 17.00</p>
                        </div>
                        <div class="col-md-6 text-center waktu">
                            <h2 class="section-heading">Resepsi</h2>
                            <p>Kamis, 17 Agustus 2017</p>
                            <p>18.45 - 21.00</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="section section-lokasi">
                <section class="" id="lokasi">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading-grey">Lokasi</h2>
                                <hr class="primary">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <center class="alamat-tempat">
                                <h3>Gedung Aneka Bhakti, Kementerian Sosial</h3>
                                <p>Jl. Salemba Raya No.28, RT.5/RW.6, Kenari, Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10430</p>
                            </center>
                        </div>
                        <div class="row">
                            <div id="map" style="height:300px; width:80%;margin-left:10%;">

                            </div>
                        </div>
                        <br>
                        <div class="row alamat-tempat">
                            <span>Catatan terkait pembangunan underpass matraman:</span>
                            <ol>
                                <li>Lalu lintas dari Jatinegara menuju Senen dan Pramuka, yang semula lurus dan belok kanan di simpang Matraman, dialihkan belok kiri ke jalan Matraman Dalam ke Jalan Proklamasi menuju Jalan Diponegoro, lalu belok kiri ke Senen, dan belok kanan ke Pramuka dan lurus ke Jatinegara. Pengecualian untuk bus TransJakarta.</li>
                                <li> Lalu lintas dari Manggarai yang akan menuju Senen atau Pramuka, yang semula belok kiri dan lurus di simpang Matraman, kini dialihkan belok kiri ke Jalan Proklamasi menuju Jalan Diponegoro, lalu belok kiri ke Senen, dan belok kanan ke Pramuka dan lurus ke Jatinegara. Pengecualian untuk bus TransJakarta.</li>
                            </ol>
                        </div>
                    </div>
                </section>
            </div>
            <div class="section">
                <section id="rsvp" class="bg-purple2">
                    <div class="container text-center">
                        <div class="call-to-action">
                            <div class="row">
                            <h2 class="section-heading">RSVP!</h2>
                            </div>
                            <div class="row">
                                <div class="typeform-widget" data-url="https://ibrahimker.typeform.com/to/Z77YJe" style="width: 100%; height: 500px;" > </div> <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> <div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;" > powered by <a href="https://www.typeform.com/examples/?utm_campaign=Z77YJe&amp;utm_source=typeform.com-400758-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-poweredbytypeform&amp;utm_term=EN" style="color: #999" target="_blank">Typeform</a> </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script>
            var myElement = $('.fade-out');

            $(window).on('scroll', function() {
                var st = $(this).scrollTop();
                myElement.css({
                    'opacity' : 1 - st/600
                });
            });
        </script>

        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/fullpage.js"></script>
        <script type="text/javascript" src="js/gmaps-config.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA67aTCwFcc5iu7wQaN-t8j1ZuUsl1gwfs&callback=initMap"></script>
        <!-- Theme JavaScript -->
        <script src="js/creative.min.js"></script>
        <script type="text/javascript">
         $(document).ready(function() {
          $('#fullpage').fullpage({
           'verticalCentered': false,
           'css3': true,
           'autoScrolling': true,
           'scrollBar': true,
           'fitToSection':true,
           'loopTop':true,
           'normalScrollElements': '#section4',
           'responsiveWidth':768,
           'responsiveHeight':500,
           'navigation': true,
           'navigationPosition': 'right',
       });
      });
  </script>

</body>

</html>
