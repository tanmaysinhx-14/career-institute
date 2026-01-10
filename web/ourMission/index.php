<?php 
  $page_title = "Our Mission | Career Institute"; 

  require_once '../configurations/main.php'; 
?>

<?php // Page Analytics for Our Mission Page
  require_once '../../shared/functions/security/envLoader.php';
  loadEnv('../../shared/functions/security/credentials.env');

  require_once '../../shared/functions/database/database.php';
  $db2 = connectDatabase('DB2', PDO::ERRMODE_SILENT);

  require_once '../../shared/functions/analytics/analytics.php';

  updatePageCount($db2, 'our_mission');
?>

<?php // Breadcrumb
  $breadcrumb_url_1 = '../';
  $breadcrumb_title_1 = 'Information Pages';

  $breadcrumb_url_active = './';
  $breadcrumb_title_active = 'Our Mission';

  require_once ('../components/breadcrumb.php');
?>

<section data-jarallax data-speed=".8" class="pt-12 pb-10 pt-md-15 pb-md-14" style="background-image: url(../../shared/library/img/student_studying.jpg)">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-8 col-lg-6">
        <h1 class="display-3 fw-bold text-white" id="welcomeHeadingSource">
          We want to make a better place for <br />
          <span class="text-warning" data-typed='{"strings": ["Students.", "Learners.", "Future."]}'></span>
        </h1>
        <p class="fs-lg text-white text-opacity-80 mb-6">We'll help you to reach the Enviable Heights in your Career, by nurturing you with the Skills!</p>
      </div>
    </div>
  </div>
</section>

<section class="pt-8 pt-md-11">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-12 col-md-6">
        <h6 class="text-uppercase text-primary fw-bold">Overview</h6>
        <h2>As a team, we are always committed towards Excellence and Perfection.</h2>
        <p class="lead text-body-secondary mb-6 mb-md-0">At Present, Career Institute has become a Benchmark in Academic Excellence by Continuously Delivering nothing, but the Best! </p>
      </div>

      <div class="col-12 col-md-6 col-xl-5">
        <div class="row gx-0">
          <div class="col-4">
            <div class="w-150 mt-9 p-1 bg-white shadow-lg" data-aos="fade-up" data-aos-delay="100">
              <img src="../../shared/library/img/photo-13.jpg" class="img-fluid" alt="...">
            </div>
          </div>
          <div class="col-4">
            <div class="w-150 p-1 bg-white shadow-lg" data-aos="fade-up">
              <img src="../../shared/library/img/photo-14.jpg" class="img-fluid" alt="...">
            </div>
          </div>
          <div class="col-4 position-relative">
            <div class="w-150 mt-11 float-end p-1 bg-white shadow-lg" data-aos="fade-up" data-aos-delay="150">
              <img src="../../shared/library/img/photo-15.jpg" class="img-fluid" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-7 pb-5 pt-md-9 pb-md-11">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="row">
          <div class="col-auto col-md-12">
            <div class="row gx-0 align-items-center mb-md-5">
              <div class="col-auto"><a class="btn btn-sm btn-rounded-circle bg-gray-400 text-white disabled opacity-100"><span>1</span></a></div>
              <div class="col"><hr class="d-none d-md-block me-n7"></div>
            </div>
          </div>
          <div class="col col-md-12 ms-n5 ms-md-0">
            <h3>Development in the Thoughts</h3>
            <p class="text-body-secondary mb-6 mb-md-0">To make the folks mentally tough, emotionally strong & intellectually sharp, so that every Student will stand strong in the ever flowing World of Technological Advancements.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="row">
          <div class="col-auto col-md-12">
            <div class="row gx-0 align-items-center mb-md-5">
              <div class="col-auto"><a class="btn btn-sm btn-rounded-circle bg-gray-400 text-white disabled opacity-100"><span>2</span></a></div>
              <div class="col"><hr class="d-none d-md-block me-n7"></div>
            </div>
          </div>
          <div class="col col-md-12 ms-n5 ms-md-0">
            <h3>Upbringing the Culture</h3>
            <p class="text-body-secondary mb-6 mb-md-0">Inculcate the Work Culture amongst the Students, helping them to achieve New Heights in their every step of the life.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="row">
          <div class="col-auto col-md-12">
            <div class="row gx-0 align-items-center mb-md-5">
              <div class="col-auto"><a class="btn btn-sm btn-rounded-circle bg-gray-400 text-white disabled opacity-100"><span>3</span></a></div>
            </div>
          </div>
          <div class="col col-md-12 ms-n5 ms-md-0">
            <h3>Getting the Rewards</h3>
            <p class="text-body-secondary mb-0">Settling with the Medical or Engineering Career brings Intellectual Confidence, gives Professional Satisfaction and brings Social Prestige.</p>
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