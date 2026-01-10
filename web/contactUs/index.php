<?php 
  $page_title = "Contact Us | Career Institute"; 

  require_once '../configurations/main.php'; 
?>

<?php // Page Analytics for Contact Us Page
  require_once '../../shared/functions/security/envLoader.php';
  loadEnv('../../shared/functions/security/credentials.env');

  require_once '../../shared/functions/database/database.php';
  $db2 = connectDatabase('DB2', PDO::ERRMODE_SILENT);

  require_once '../../shared/functions/analytics/analytics.php';

  updatePageCount($db2, 'contact_us');
?>

<?php // Breadcrumb
  $breadcrumb_url_1 = '../';
  $breadcrumb_title_1 = 'Service Pages';

  $breadcrumb_url_active = './';
  $breadcrumb_title_active = 'Contact Us';

  require_once ('../components/breadcrumb.php');
?>

<section class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover" style="background-image: url(../../shared/library/img/cover-5.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 text-center">
        <h1 class="display-2 fw-bold text-white">We’re Here to Help.</h1>
        <p class="lead text-white text-opacity-75 mb-0">We'll always like to hear from you! Please feel free to Contact Us any moment, We'll make sure to respond you the earliest.</p>
      </div>
    </div>
  </div>
</section>

<div class="position-relative">
  <div class="shape shape-bottom shape-fluid-x text-light">
    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/>
    </svg>      
  </div>
</div>

<section class="py-7 py-md-9 border-bottom border-gray-300" id="info">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <a href="#info" class="btn btn-primary btn-rounded-circle shadow mt-n11 mt-md-n13" data-scroll='{"offset":0}'><i class="fe fe-arrow-down"></i></a>
      </div>
    </div>
    <div class="row" id="info">
      <div class="col-12 col-md-4 text-center border-end border-gray-300">
        <h6 class="text-uppercase text-gray-700 mb-1">Address (Head Office)</h6>
        <div class="mb-5 mb-md-0">
          <p class="fs-sm text-primary">
            <a class="text-decoration-none" href="https://maps.app.goo.gl/P8hX31NePyzNjDsR6" target="_blank">K-180 Shashi Complex, Kali Mandir Road near Patrakar Nagar Police Station, Hanuman Nagar, Kankarbagh, Patna - 800020
            </a>
          </p>
        </div>
      </div>
      <div class="col-12 col-md-4 text-center border-end border-gray-300">
        <h6 class="text-uppercase text-gray-700 mb-1">Call anytime (Office)</h6>
        <p class="fs-sm text-primary mb-5 mb-md-0">
          <a class="text-decoration-none" href="tel:+919661430521">(+91) 96614 30521</a>
        </p>
      </div>
      <div class="col-12 col-md-4 text-center">
        <h6 class="text-uppercase text-gray-700 mb-1">Email us</h6>
        <p class="fs-sm text-primary">
          <a class="text-decoration-none" href="mailto: careerinstitutepatna@gmail.com" target="_blank">careerinstitutepatna@gmail.com</a>
      </div>
    </div>
  </div>
</section>

<section class="pt-7 pt-md-4 pb-4 pb-md-4 bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <a href="#google_map_context" class="btn btn-primary btn-rounded-circle shadow mt-n11 mt-md-n9 mt-lg-n8" data-scroll='{"offset":0}'>Google Maps Section</a>
      </div>
    </div>
    <div class="row justify-content-center" id="google_map_context">
      <div class="col-12 col-md-10 col-lg-8 text-center">
        <h2 class="fw-bold text-white">Find us on the Google Maps!</h2>
        <p class="fs-lg text-body-secondary mb-3 mb-md-3">Locate us on the Globe and drop some reviews, photos and views for us. We would love to see that.</p>
      </div>
    </div>

    <div class="row text-center align-items-center justify-content-center text-uppercase mt-3 mb-5">
      <div class="col-4">
        <a class="text-white text-decoration-none" href="https://g.page/r/CfX-2DqxydvfEBM/review" target="_blank">Leave a Great Review</a>
      </div>
      <div class="col-4">
        <a class="text-white text-decoration-none" href="https://maps.app.goo.gl/P8hX31NePyzNjDsR6" target="_blank">See us on the Map</a>
        </div>
      <div class="col-4">
        <a class="text-white text-decoration-none" href="https://www.google.com/maps/dir//Career+Institute,+Shashi+Complex,+K-180,+Kali+Mandir+Rd,+above+Mota+Bhai+Saree+Wala,+Kankarbagh,+Hanuman+Nagar,+Patna,+Bihar+800020/@25.5907131,85.1594268,18z/data=!4m8!4m7!1m0!1m5!1m1!1s0x39ed59b60a266231:0xdfdbc9b13ad8fef5!2m2!1d85.1603372!2d25.5907114?entry=ttu" target="_blank">Share to People</a>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-md-12 col-lg-12 pb-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1799.213658527274!2d85.1594268274028!3d25.590713107739514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed59b60a266231%3A0xdfdbc9b13ad8fef5!2sCareer%20Institute!5e0!3m2!1sen!2sin!4v1702289651976!5m2!1sen!2sin" 
                class="rounded-corner-sm"
                style="border: 0; width: 100%; height: 80vh;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>
  </div>
</section>

<?php // Footers
  require_once ('../components/bottom_credits.php');
  require_once ('../components/footer.php');
?>