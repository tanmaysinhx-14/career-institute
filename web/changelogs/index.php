<?php 
  $page_title = "Changelogs | Career Institute"; 

  require_once '../configurations/main.php'; 
?>

<?php // Page Analytics for Changelogs Page
  require_once '../../shared/functions/security/envLoader.php';
  loadEnv('../../shared/functions/security/credentials.env');

  require_once '../../shared/functions/database/database.php';
  $db2 = connectDatabase('DB2', PDO::ERRMODE_SILENT);

  require_once '../../shared/functions/analytics/analytics.php';

  updatePageCount($db2, 'changelogs');
?>

<?php // Breadcrumb
  $breadcrumb_url_1 = '../';
  $breadcrumb_title_1 = 'Service Pages';

  $breadcrumb_url_active = './';
  $breadcrumb_title_active = 'Changelogs';

  require_once ('../components/breadcrumb.php');
?>

<section class="py-10 py-md-12 py-lg-12 bg-primary">
  <div class="shape shape-blur-3 text-white">
    <svg viewBox="0 0 1738 487" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 0h1420.92s713.43 457.505 0 485.868C707.502 514.231 0 0 0 0z" fill="url(#paint0_linear)"/>
      <defs>
        <linearGradient id="paint0_linear" x1="0" y1="0" x2="1049.98" y2="912.68" gradientUnits="userSpaceOnUse">
          <stop stop-color="currentColor" stop-opacity=".075"/>
          <stop offset="1" stop-color="currentColor" stop-opacity="0"/>
        </linearGradient>
      </defs>
    </svg>      
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-12 col-lg-12 text-center">
        <h1 class="display-2 fw-bold text-white">Changelogs</h1>
        <p class="lead text-white mb-8">Even the Website needs regular Improvements, in order to keep the Web Experience smoother for you!</p>
      </div>
    </div>
  </div>
</section>

<div class="position-relative">
  <div class="shape shape-bottom shape-fluid-x text-white">
    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/>
    </svg>      
  </div>
</div>

<section class="pt-8 pt-md-10 overlay overlay-white overlay-90" style="background-image: url(../../shared/library/favicon/original512.png); background-size: auto 100%; background-repeat: no-repeat; background-position: center;" id="about">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <a href="#about" class="btn btn-white btn-rounded-circle shadow mt-n12 mt-md-n14" data-scroll='{"offset":0}'><i class="fe fe-arrow-down"></i></a>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 text-center mb-5">
        <h2 class="fw-bold">Here's what we have <span class="text-primary">Changed</span>.</h2>
      </div>
    </div>
  
    <div class="row pb-7">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card card-border border-primary shadow-lg mb-6 mb-md-8 lift lift-lg">
          <div class="card-body p-0 pt-5 px-5 text-center">
            <h4 class="fw-bold">Accounts System</h4>
            <p class="text-gray-700 mb-5">Account Systems for Students will roll-out this October 2025. Stay tuned!</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card card-border border-success shadow-lg mb-6 mb-md-8 lift lift-lg">
          <div class="card-body p-0 pt-5 px-5 text-center">
            <h4 class="fw-bold">Introducing Page Metrics!</h4>
            <p class="text-gray-700 mb-5">Real-Time Count of Visits/Requests. Check them out.</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card card-border border-warning shadow-lg mb-6 mb-md-8 lift lift-lg">
          <div class="card-body p-0 pt-5 px-5 text-center">
            <h4 class="fw-bold">Performance Improvements</h4>
            <p class="text-gray-700 mb-5">CDN Integration. Faster Loading Speeds and Optimized Content.</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card card-border border-dark shadow-lg mb-6 mb-md-8 mb-lg-0 lift lift-lg">
          <div class="card-body p-0 pt-5 px-5 text-center">
            <h4 class="fw-bold">Ease in Navigation</h4>
            <p class="text-gray-700 mb-5">Offcanvas Navigation Bars rolled-out. Optimized Navigation Bars for All Screeens.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php // Footers
  require_once ('../components/bottom_credits.php');
  require_once ('../components/footer.php');
?>