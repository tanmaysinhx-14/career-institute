<?php 
  $page_title = "Director's Message | Career Institute"; 

  require_once '../configurations/main.php'; 
?>

<?php // Page Analytics for Director Message Page
  require_once '../../shared/functions/security/envLoader.php';
  loadEnv('../../shared/functions/security/credentials.env');

  require_once '../../shared/functions/database/database.php';
  $db2 = connectDatabase('DB2', PDO::ERRMODE_SILENT);

  require_once '../../shared/functions/analytics/analytics.php';

  updatePageCount($db2, 'director_message');
?>

<?php // Breadcrumb
  $breadcrumb_url_1 = '../';
  $breadcrumb_title_1 = 'Information Pages';

  $breadcrumb_url_active = './';
  $breadcrumb_title_active = 'Director\'s Message';

  require_once ('../components/breadcrumb.php');
?>

<section class="pt-7 pt-md-7">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md">
        <a class="fs-sm text-decoration-none mb-3"><i class="fe fe-arrow-start"></i>Information Page</a>
        <h1 class="display-4 mb-2">Director's Message</h1>
        <p class="fs-sm text-gray-700">Last Updated <span><?php echo (new DateTime('19-12-2025'))->diff(new DateTime())->days; ?> days</span> ago  by Tanmay Sinha</p>
      </div>
    </div>

    <div class="row">
      <div class="col-12"><hr class="my-3 my-md-5 border-gray-300"></div>
    </div>

    <div class="row mb-5">
      <div class="col-12 col-md-8">
        <h3>About the Director</h3>
        <p class="text-gray-800 mb-6 mb-md-8">Mr. Navin Kumar Sinha, a visionary pioneer started with Tuition Center way back from 1995. From Home Tuitions to the base of Career Institute, he had lead the way at the forefront and has made the Education a Status-Symbol among the Students. </p>
        <h3>His Thought Process</h3>
        <p class="text-gray-800 mb-5">As a firm believer in the irreplaceable value of hard work, I acknowledge that, in today's era, success in both life and education necessitates the combination of hard work with strategic thinking. While personal satisfaction is heightened upon achieving ambitious goals, the spirit of victory is rooted in diligence, unwavering determination, and the ability to perceive opportunities. During this critical phase of life, profound inspiration and guidance are essential to shape one's career. The dedicated members of the Career team have embraced an innovative, meticulous, and exceptionally clear teaching approach, complemented by modern academic support. Our commitment lies in establishing a robust and enjoyable learning process at every stage. No student is overlooked; every action and thought are centered around the students. At Career, we function as your friend, motivator, and guide, aiming to unlock your full potential and pave the way to success. We tirelessly collaborate with you, optimizing your energy and efforts in the right direction, ensuring each step you take leads you closer to the summit. Over the years, we have assisted thousands of students in realizing their dreams.</p>
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