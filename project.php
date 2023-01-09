<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <title>Project</title>
</head>
<body>
     <!-- ======= My Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">
        <div class="container">
  
          <div class="section-title">
            <span>OUR PROJECT</span>
            <h2>OUR PROJECT</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, sit? Incidunt fuga, vero, iste, reiciendis quibusdam dicta hic obcaecati est facere soluta distinctio eligendi molestiae consequatur nulla in veritatis voluptatem.</p>
          </div>
  
          <ul id="portfolio-flters" class="d-flex justify-content-center">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-wall">Wall</li>
            <li data-filter=".filter-space">Space</li>
            <li data-filter=".filter-furnished">Furnished</li>
            <a href="/Interior and Exterior Design System/home.php">Home</a>
          </ul>
  
          <div class="row portfolio-container">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-wall">
              <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Wall</h4>
                <p>Wall</p>
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wall"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-space">
              <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Space</h4>
                <p>Space</p>
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="space"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-wall">
              <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Wall </h4>
                <p>Wall </p>
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wall "><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-furnished">
              <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Furnished</h4>
                <p>Furnished</p>
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="furnished"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-space">
              <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Space</h4>
                <p>Space</p>
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="space"><i class="bx bx-plus"></i></a>
               
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-wall">
              <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Wall </h4>
                <p>Wall</p>
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wall"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-furnished">
              <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Furnished</h4>
                <p>Furnished</p>
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="furnished"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-furnished">
              <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Furnished</h4>
                <p>Furnished</p>
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="furnished"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-space">
              <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>space</h4>
                <p>Space</p>
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="space"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End My Portfolio Section -->

       <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>