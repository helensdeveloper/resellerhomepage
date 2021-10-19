<?php 
include_once("config.php");
$url = $gateway."/getdata?uniq=".$uniq;
$json = file_get_contents($url);
$data = json_decode($json);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gatewayku - Index</title>
  <meta content="Gatewayku | Unofficial Whatsapp Gateway" name="description">
  <meta content="wagw, gatewayku, whatsapp gateway" name="keywords">
  <link href="assets/images/icon.png" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>Gatewayku</span>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li><a class="nav-link scrollto" target="_blank" href="docs">Documentation</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="register.php" target="_blank">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Gatewayku Unofficial Whatsapp API</h1>
          <div data-aos="fade-up" data-aos-delay="400">
            <div class="text-center text-lg-start">
              <a href="register.php" target="_blank" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-person"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?=$data->customer?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Customer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?=$data->reseller?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Reseller</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-phone" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?=$data->devices?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Devices</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-server" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="<?=$data->server?>" data-purecounter-duration="1" class="purecounter"></span>
                <p>Server</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>Features</p>
        </header>
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/features.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">
              <div class="col-md-4" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Send & Receive Message</h3>
                </div>
              </div>
              <div class="col-md-4" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Message History</h3>
                </div>
              </div>
              <div class="col-md-4" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Read Whatsapp Story</h3>
                </div>
              </div>
              <div class="col-md-4" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Number Filter</h3>
                </div>
              </div>
              <div class="col-md-4" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Send & Receive Images</h3>
                </div>
              </div>
              <div class="col-md-4" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Send & Receive File</h3>
                </div>
              </div>
              <div class="col-md-4" data-aos="zoom-out" data-aos-delay="800">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Send & Receive Video</h3>
                </div>
              </div>
              <div class="col-md-4" data-aos="zoom-out" data-aos-delay="900">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Send & Receive Audio</h3>
                </div>
              </div>
              <div class="col-md-4" data-aos="zoom-out" data-aos-delay="1000">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Developer API</h3>
                </div>
              </div>
              <div class="col-md-4" data-aos="zoom-out" data-aos-delay="1100">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Webhook Notifikasi</h3>
                </div>
              </div>
              <div class="col-md-4" data-aos="zoom-out" data-aos-delay="1200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Read Contact</h3>
                </div>
              </div>
              <div class="col-md-4" data-aos="zoom-out" data-aos-delay="1300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Read Group</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Pricing</h2>
          <p>Check our Pricing</p>
        </header>
        <div class="row gy-4" data-aos="fade-left">
          <div class="col-lg-12 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="price"><sup>Rp</sup><?=number_format($data->jual)?><span> / Bulan</span></div>
              <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
              <ul>
                <li>Send & Receive Message</li>
                <li>Send & Receive Media</li>
                <li>Webhook</li>
                <li>Filter Number</li>
                <li>Read Contact</li>
                <li>Read Group</li>
                <li>Developer API</li>
              </ul>
              <a href="my/subscription/type=pro" class="btn-buy">Langganan</a>
            </div>
          </div>
        </div><br>
        <center><h3>Ingin Menjadi Reseller?</h3></center>
        <center><a href="" class="btn-buy">Hubungi Kami</a></center>
      </div>
    </section>
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Jalan Raya Kebon Agung,<br>Minggir, Sleman, ID 55561</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+62 xxx xxx xxx<br>+62 xxx xxx xxx</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@gatewayku.id<br>contact@gatewayku.id</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Saturday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <form action="" method="post" class="php-email-form">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                  <button type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>Gatewayku</span>
            </a>
            <p>Unofficial Whatsapp API.</p>
            <div class="social-links mt-3">
              <a href="<?= $facebook ?>" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="<?= $instagram ?>" target="_blank" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Jalan Raya Kebon Agung <br>
              Minggir, Sleman, Yogyakarta 55561<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 xxx xxx xxx<br>
              <strong>Email:</strong> info@gatewayku.id<br>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gatewayku</span></strong>. All Rights Reserved
      </div>
      <div class="credits">Designed by <a href="https://gatewayku.id/">gatewayku</a></div>
    </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>