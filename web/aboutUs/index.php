<?php 
  $page_title = "About Us | Career Institute"; 

  require_once '../configurations/main.php'; 
?>

<?php // Page Analytics for About Us Page
  require_once '../../shared/functions/security/envLoader.php';
  loadEnv('../../shared/functions/security/credentials.env');

  require_once '../../shared/functions/database/database.php';
  $db2 = connectDatabase('DB2', PDO::ERRMODE_SILENT);

  require_once '../../shared/functions/analytics/analytics.php';

  updatePageCount($db2, 'about_us');
?>

<?php // Breadrumb
  $breadcrumb_url_1 = '../';
  $breadcrumb_title_1 = 'Information Pages';

  $breadcrumb_url_active = './';
  $breadcrumb_title_active = 'About Us';

  require_once ('../components/breadcrumb.php');
?>

<section class="py-7 pt-md-7">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col">
        <a class="fs-sm text-decoration-none mb-3"><i class="fe fe-arrow-start"></i> Information Page</a>
        <h1 class="display-4 mb-2">About Career Institute</h1>
        <p class="fs-sm text-gray-700">Last Updated <span><?php echo (new DateTime('19-12-2025'))->diff(new DateTime())->days; ?> days</span> ago  by Tanmay Sinha</p>
      </div>
    </div>

    <div class="row">
      <div class="col-12"><hr class="my-3 my-md-5 border-gray-300"></div>
    </div>

    <div class="row">
      <div class="col-12 col-md-8">
        <h3>Who are we?</h3>
        <p class="text-gray-800 mb-6 mb-md-8">Career Institute is recognized as one of the premier institutes in Patna, offering a comprehensive and affordable learning experience for students from Class 5 to 12 (CBSE/BSEB/ICSE) as well as those preparing for competitive exams like JEE/ NEET/ KVPY/ Olympiads/ SSC/ Banking/ Railways. We provide an extensive array of NCERT-aligned assignments, sample papers, mock tests, chapter-wise assessments, and scholarship tests, making us the ultimate destination for all educational resources.</p>
        <h3>What makes Career Institute exceptional?</h3>
        <p class="text-gray-800 mb-5">We recognize that each student has unique needs and potential, which is why we have meticulously designed a dynamic and individualized curriculum to cater to every learner. Here's how we achieve that:</p>
        <div class="d-flex">
          <div class="badge badge-rounded-circle bg-primary-subtle text-primary mt-1 pt-1 me-4"><i class="fe fe-check"></i></div>
          <p class="text-gray-800">Scholarship tests at the start of each session, offering discounts of up to 50%.</p>
        </div>
        <div class="d-flex">
          <div class="badge badge-rounded-circle bg-primary-subtle text-primary mt-1 pt-1 me-4"><i class="fe fe-check"></i></div>
          <p class="text-gray-800">Frequent chapter-wise assessments, assignments, sample paper practice, and board mock tests to reinforce mastery over the syllabus.</p>
        </div>
        <div class="d-flex">
          <div class="badge badge-rounded-circle bg-primary-subtle text-primary mt-1 pt-1 me-4"><i class="fe fe-check"></i></div>
          <p class="text-gray-800">A distinguished team of educators with over a decade of experience in their respective fields.</p>
        </div>
        <div class="d-flex">
          <div class="badge badge-rounded-circle bg-primary-subtle text-primary mt-1 pt-1 me-4"><i class="fe fe-check"></i></div>
          <p class="text-gray-800">State-of-the-art smart classrooms that help students visualize and better understand complex concepts.</p>
        </div>
        <div class="d-flex">
          <div class="badge badge-rounded-circle bg-primary-subtle text-primary mt-1 pt-1 me-4"><i class="fe fe-check"></i></div>
          <p class="text-gray-800 mb-6 mb-md-8">Regular parent-teacher meetings and personalized doubt resolution sessions to ensure comprehensive concept clarity.</p>
        </div>

        <h3 class="mb-5">How have we reached this point?</h3>
        <div class="d-flex">
          <div class="badge badge-rounded-circle bg-primary-subtle text-primary mt-1 pt-1 me-4"><i class="fe fe-check"></i></div>
          <p class="text-gray-800">In-depth research into learning patterns and capacities to provide students with the best possible educational experience. This success is driven by the seamless integration of experience and diligence!</p>
        </div>
        <div class="d-flex">
          <div class="badge badge-rounded-circle bg-primary-subtle text-primary mt-1 pt-1 me-4"><i class="fe fe-check"></i></div>
          <p class="text-gray-800 mb-6 mb-md-0">We foster a culture of both hard work and smart work, empowering students not only to excel in competitive exams but also to achieve remarkable success in their future careers.</p>
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