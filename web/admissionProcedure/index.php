<?php 
  $page_title = "Admission Procedure | Career Institute"; 

  require_once '../configurations/main.php'; 
?>

<?php // Page Analytics for Admission Procedure Page
  require_once '../../shared/functions/security/envLoader.php';
  loadEnv('../../shared/functions/security/credentials.env');

  require_once '../../shared/functions/database/database.php';
  $db2 = connectDatabase('DB2', PDO::ERRMODE_SILENT);

  require_once '../../shared/functions/analytics/analytics.php';

  updatePageCount($db2, 'admission_procedure');
?>

<?php // Breadcrumb
  $breadcrumb_url_1 = '../';
  $breadcrumb_title_1 = 'Information Pages';

  $breadcrumb_url_active = './';
  $breadcrumb_title_active = 'Admission Procedure';

  require_once ('../components/breadcrumb.php');
?>

<section class="py-7 pt-md-7">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md">
        <a class="fs-sm text-decoration-none mb-3"><i class="fe fe-arrow-start"></i>Information Page</a>
        <h1 class="display-4 mb-2">Admission Procedure</h1>
        <p class="fs-sm text-gray-700">Last Updated <span><?php echo (new DateTime('19-12-2025'))->diff(new DateTime())->days; ?> days</span> ago  by Tanmay Sinha</p>
      </div>
    </div>

    <div class="row">
      <div class="col-12"><hr class="my-3 my-md-5 border-gray-300"></div>
    </div>

    <div class="row">
      <div class="col-12 col-md-8">
        <h3>Overview</h3>
        <p class="text-gray-800 mb-6 mb-md-8">Enrolling in our Courses has always been easy and rewarding. Here how one could get Enrolled in our Courses:-</p>
        <div class="d-flex">
          <div class="badge badge-rounded-circle text-bg-primary mt-1 me-4">&nbsp;1&nbsp;</div>
          <p class="text-gray-800">Bring a Passport Size Photograph along with School I.D. Card (for Verification Purposes) to the Head Office.</p>
        </div>
        <div class="d-flex">
          <div class="badge badge-rounded-circle text-bg-primary mt-1 me-4">&nbsp;2&nbsp;</div>
          <p class="text-gray-800">Any one of the Identification Cards (like Aadhar Card/ Voter ID Card/ Driving License) would be also needed.</p>
        </div>
        <div class="d-flex">
          <div class="badge badge-rounded-circle text-bg-primary mt-1 me-4">&nbsp;3&nbsp;</div>
          <p class="text-gray-800">Get the Admission Form from the Head Office, fill it and submit it.</p>
        </div>
        <div class="d-flex">
          <div class="badge badge-rounded-circle text-bg-primary mt-1 me-4">&nbsp;4&nbsp;</div>
          <p class="text-gray-800">By filling the Form, you also get the privelige to have 7 Days of Free Demo Classes!</p>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="card shadow-light-lg bg-gray-300 mb-5">
          <div class="card-body">
            <h4>Need help with something?</h4>
            <p class="fs-sm text-gray-800 mb-5">Not sure exactly what we’re looking for or just want clarification? We’d be happy to chat with you and clear things up for you. Anytime!</p>
            <h6 class="fw-bold text-uppercase text-gray-700 mb-2">Call anytime</h6>
            <p class="fs-sm mb-5 text-primary">
              <a href="tel:+919661430521" 
                  class="text-reset text-decoration-none" target="_blank">(+91) 96614 30521</a>
            </p>
            <h6 class="fw-bold text-uppercase text-gray-700 mb-2">Email us</h6>
            <p class="fs-sm mb-0 text-primary">
              <a href="mailto:careerinstitutepatna@gmail.com" 
                  class="text-reset text-decoration-none" target="_blank">careerinstitutepatna@gmail.com</a>
            </p>
          </div>
        </div>

        <div class="card shadow-light-lg bg-gray-300">
          <div class="card-body">
            <h4>Newsletter</h4>
            <p class="fs-sm text-gray-800">Do you know Admissions are going on for Session <?php echo date('Y') . '-' . date('y', strtotime('+1 year')); ?>. Let us know if you're interest in Enrolling.</p>
            <p class="text-primary text-reset ">
              <a href="../contactUs/" 
                  class="text-decoration-none" target="_blank">Contact Us <i class="fe fe-arrow-right ms-3"></i>
              </a>
            </p>
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