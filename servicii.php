<?php
// Your PHP code here

// Define your MySQL connection parameters here

// Attempt MySQL server connection
$link = mysqli_connect("localhost","root","","dexter");

// Check connection
if ($link === false) {
    die("Conectare la MySQL nereușită: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dexter Lab</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Medilab
    * Updated: Jan 29 2024 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top topbar-scrolled">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i> <a href="mailto:dexterlab@dex.com">dexterlab@dex.com</a>
                <i class="bi bi-phone"></i>+40744109622</div>
            <div class="d-none d-lg-flex social-links align-items-center">

                <a href="https://www.facebook.com/lorena.goja/?locale=ro_RO" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/lorenagoja/?hl=en" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://ro.linkedin.com/in/lorena-goja-96ba67190" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Dexter Lab</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Acasa</a></li>
                    <li><a class="nav-link scrollto" href="#about">Despre</a></li>
                    <li><a class="nav-link scrollto" href="#services">Servicii</a></li>
                    <li><a class="nav-link scrollto" href="#departments">Departamente</a></li>
                    <li><a class="nav-link scrollto" href="#doctors">Doctori</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Fa-ti o Programare</span></a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Servicii</h2>
                <p>Avem o gamă variată de servicii de la analize medicale, la doctori competenți din diferite departamente, cu prescripții medicale date pe baza analizelor efectuate în contul dumneavoastră de pacient, la cele mai mici prețuri.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                        <h4><a href="">Analize medicale</a></h4>
                        <p>La cele mai bune si corecte standarde</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-pills"></i></div>
                        <h4><a href="">Prescriptii medicale</a></h4>
                        <p>Date pe o baza clara de analize si istoric medical</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-hospital-user"></i></div>
                        <h4><a href="file:///C:/xampp/htdocs/Medilab/Medilab/index.html">Doctori</a></h4>
                        <p>Cei mai buni si cunoscuti in fiecare departament</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Dexter Lab</h3>
                        <p>Str. Clinicilor<br>Cluj-Napoca, Cluj<br>Romania<br><br>
                            <strong>Telefon:</strong>+40744109622<br>
                            <strong>Email:</strong>dexterlab@dex.com<br>
                        </p>
                    </div>


                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Aboneaza-te la Newsletter</h4>
                        <p>Stai conectat cu noi si gama variata de servicii premium:</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Aboneaza-te">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Dexter Lab</span></strong>. Toate Drepturile Rezervate
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!--
