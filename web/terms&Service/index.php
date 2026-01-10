<?php 
  $page_title = "Terms & Service | Career Institute"; 

  require_once '../configurations/main.php'; 
?>

<?php // Page Analytics for Terms and Service Page
  require_once '../../shared/functions/security/envLoader.php';
  loadEnv('../../shared/functions/security/credentials.env');

  require_once '../../shared/functions/database/database.php';
  $db2 = connectDatabase('DB2', PDO::ERRMODE_SILENT);

  require_once '../../shared/functions/analytics/analytics.php';

  updatePageCount($db2, 'terms_and_service');
?>

<?php // Breadcrumb
  $breadcrumb_url_1 = '../';
  $breadcrumb_title_1 = 'Service Pages';

  $breadcrumb_url_active = './';
  $breadcrumb_title_active = 'Terms and Service';

  require_once ('../components/breadcrumb.php');
?>

<section class="pt-7 mb-7 pt-md-7">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md">
        <a class="fs-sm text-decoration-none mb-3"><i class="fe fe-arrow-start"></i>Service Page</a>
        <h1 class="display-4 mb-2">Terms and Service</h1>
        <p class="fs-sm text-gray-700">Last Updated <span><?php echo (new DateTime('19-12-2025'))->diff(new DateTime())->days; ?> days</span> ago  by Tanmay Sinha</p>
      </div>
    </div>

    <div class="row">
      <div class="col-12"><hr class="my-3 my-md-5 border-gray-300"></div>
    </div>

    <div class="row">
      <div class="col-12 col-md-8">
        <p class="fs-lg text-gray-800 mb-6 mb-md-8">The following Terms of Service govern the use of Career Institute’s platform. The primary objective of these terms is to outline the legal framework and foster a safer and more secure web experience for all users.</p>
        <h3 class="mb-5">Terms for Web Services, User-Based Services, and Payments</h3>
        <p class="text-gray-800">By accessing or interacting with <span class="text-primary">careerinstitute.co.in</span>, you acknowledge that you have read, understood, and agree to comply with the terms outlined herein. These terms apply to the website, emails, and any other forms of communication from Career Institute.</p>

        <p class="fw-bold">Web and User-Based Terms of Service</p>
        <div class="d-flex">
          <span class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4"><i class="fe fe-check"></i></span>
          <p class="text-gray-800">We do not collect or process your online data or browsing history for sharing with third-party entities, thereby ensuring your privacy is safeguarded.</p>
        </div>
        <div class="d-flex">
          <span class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4"><i class="fe fe-check"></i></span>
          <p class="text-gray-800">Your data is only requested or processed to enhance personalized interactions and services provided by <span class="text-primary">careerinstitute.co.in</span>. All chatbot interactions are secured with multiple layers of encryption and remain exclusively within our domain.</p>
        </div>
        <div class="d-flex">
          <span class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4"><i class="fe fe-check"></i></span>
          <p class="text-gray-800">Any form submissions, web responses, or site telemetry data collected will be securely encrypted and stored on our backend servers. This data is used solely for improving site performance and user experience.</p>
        </div>
        <div class="d-flex">
          <span class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4"><i class="fe fe-check"></i></span>
          <p class="text-gray-800">Although our site incorporates open-source elements, the CSS and JavaScript frameworks utilized are proprietary to <span class="text-primary">careerinstitute.co.in</span> and Landkit Themes. While our associates are authorized to moderate copyright violations, they are not liable for any legal actions taken by third parties.</p>
        </div>
        <div class="d-flex">
          <span class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4"><i class="fe fe-check"></i></span>
          <p class="text-gray-800"><span class="text-primary">Careerinstitute.co.in</span> strictly prohibits spam and unsolicited promotional content. However, telemetry data collected by Google AdSense and Hostinger is utilized solely for enhancing web performance and user experience.</p>
        </div>

        <p class="fw-bold">Payment Terms of Service</p>
        <div class="d-flex">
          <span class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4"><i class="fe fe-check"></i></span>
          <p class="text-gray-800 mb-6 mb-md-8">Currently, we have not integrated any payment processing systems on our platform. Consequently, <span class="text-primary">careerinstitute.co.in</span> disclaims all liability for payment-related scams or fraudulent activities occurring outside our official domain.</p>
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