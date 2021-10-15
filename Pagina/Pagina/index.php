<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Pagina Hotel| Hotel MK </title>

  <!--  <link rel="stylesheet" type="text/css" href="utilitats/css/bootstrap.min.css">***** -->

    <link rel="stylesheet" type="text/css" href="utilitats/css/font-awesome.css">

    <link rel="stylesheet" href="utilitats/css/style.css">

    </head>
    
    <body> 
    
    <!-- ***** Carregadpr Inici ***** -->
    <?php
		 include 'carregador.php';
	?>
    <!-- *** Preloader End *** -->
    
    
    <!-- *** Header Principal *** -->
	<?php
		 include 'nav.php';
	?>
    <!-- *** Header Final *** -->

    <!-- *** Main Banner Area Start *** -->
     <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="utilitats/imatges/video.mp4" type="video/mp4" />
        </video>
            <div class="caption">
                <h6>Millor hotel de Figueres</h6>
                <h2>Hotels <em>MK</em></h2>
                <div class="main-button">
                    <a href="reserva.php">Reserva Ara!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- *** Main Banner Area End *** -->

   <!-- *** Hotels promocionats inici *** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Habitacions <em>Promocionades</em></h2>
                        <img src="utilitats/imatges/line-dec.png" alt="">
                        <p>Aqui pots trobar les millors ofertes de habitacions.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="utilitats/imatges/habitacio-1.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>€</sup>500.00 - <sup>€</sup>700.00
                            </span>

                            <h4>Habitació marró</h4>

                            <p>
                                <i class="fa fa-map-star"></i> Habitació premium
                            </p>

                            <ul class="social-icons">
                                <li><a href="link-habitacio.php">+ Veure més</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="utilitats/imatges/product-2-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>€</sup>500.00 - <sup>€</sup>700.00
                            </span>

                            <h4>Habitació verda</h4>

                            <p>
                                <i class="fa fa-map-star"></i> Habitació premium
                            </p>

                            <ul class="social-icons">
                                <li><a href="vacation-details.html">+ Veure més</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="utilitats/imatges/product-3-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <sup>€</sup>500.00 - <sup>€</sup>700.00
                            </span>

                            <h4>Habitació blava</h4>

                            <p>
                                <i class="fa fa-map-star"></i> Habitació premium
                            </p>

                            <ul class="social-icons">
                                <li><a href="vacation-details.html">+ Veure més</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="vacations.html">View Vacations</a>
            </div>
        </div>
    </section>
    <!-- *** Hotels promocionats final *** -->
	
    <!-- *** Qui som inici *** -->

    <section class="section section-bg" id="schedule" style="background-image: url(utilitats/imatges/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Qui <em>Som</em></h2>
                        <img src="utilitats/imatges/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti voluptas enim! Provident consectetur id earum ducimus facilis, aspernatur hic, alias, harum rerum velit voluptas, voluptate enim! Eos, sunt, quidem.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nulla quo cum officia laboriosam. Amet tempore, aliquid quia eius commodi, doloremque omnis delectus laudantium dolor reiciendis non nulla! Doloremque maxime quo eum in culpa mollitia similique eius doloribus voluptatem facilis! Voluptatibus, eligendi, illum. Distinctio, non!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *** Qui som inici *** -->
   
    
    <!-- *** Footer inici *** -->
     <?php
	 include 'footer.php';
	?>
    <!-- jQuery -->
    <script src="utilitats/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="utilitats/js/popper.js"></script>
    <script src="utilitats/js/bootstrap.min.js"></script>

    <!-- Plugins afegits -->
    <script src="utilitats/js/scrollreveal.min.js"></script>
    <script src="utilitats/js/waypoints.min.js"></script>
    <script src="utilitats/js/jquery.counterup.min.js"></script>
    <script src="utilitats/js/imgfix.min.js"></script> 
    <script src="utilitats/js/mixitup.js"></script> 
    <script src="utilitats/js/accordions.js"></script>
    
    <!-- Fitxer nostre -->
    <script src="utilitats/js/custom.js"></script>

  </body>
</html>