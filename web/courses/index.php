<?php 
  $page_title = "Courses | Career Institute"; 

  require_once '../configurations/main.php'; 
?>

<?php // Page Analytics for Courses Page
  require_once '../../shared/functions/security/envLoader.php';
  loadEnv('../../shared/functions/security/credentials.env');

  require_once '../../shared/functions/database/database.php';
  $db2 = connectDatabase('DB2', PDO::ERRMODE_SILENT);

  require_once '../../shared/functions/analytics/analytics.php';

  updatePageCount($db2, 'courses');
?>

<?php // Breadcrumb
  $breadcrumb_url_1 = '../';
  $breadcrumb_title_1 = 'Information Pages';

  $breadcrumb_url_active = './';
  $breadcrumb_title_active = 'Courses';

  require_once ('../components/breadcrumb.php');
?>

<section class="pt-5 pb-8 pt-md-9 pb-md-12 py-lg-14 bg-light bg-between" style="background-image: url(../../shared/library/img/illustration-6-cropped.png), url(../../shared/library/img/illustration-4-cropped.png);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7 text-center" data-aos="fade-up">
        <img src="../../shared/library/img/illustration-8.png" alt="..." class="img-fluid mb-6 d-lg-none">
        <h1 class="display-2 fw-bold">Way to the Courses.</h1>
        <p class="fs-lg text-body-secondary mb-6 mb-md-8">See forward to get an Idea about the Currently Active Batches in our Institute.</p>
        <a href="#course-details" class="btn btn-primary rounded-pill me-1 lift">View Details <i class="fe fe-arrow-right ms-3"></i></a>
      </div>
    </div>
  </div>
</section>

<section id="course-details">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 col-lg-5 pt-3" data-aos="fade-up">
        <span class="badge rounded-pill text-bg-success-subtle mb-3 h6 text-uppercase">Course Details</span>
        <h2>Choose the Course that <br><span class="text-success fw-bold">fits you the Best!</span></h2>
        <p class="fs-lg text-gray-700">We have Courses for Every Student, depending on their Medium of Education and the Career they want to Explore in.</p>
      </div>
      <div class="col-12 col-md-6 col-lg-6 offset-lg-1">
        <div class="card card-border border-success shadow-lg mb-5" data-aos="fade-up">
          <div class="card-body">
            <div class="list-group list-group-flush">
              <div class="list-group-item d-flex align-items-center">
                <div class="me-auto">
                  <p class="fw-bold mb-1">Bihar School Examination Board (BSEB/ Bihar Board)</p>
                  <p class="fs-sm text-body-secondary mb-0">Grade 7 to Grade 12</p>
                </div>
                <div class="badge badge-rounded-circle text-bg-success-subtle ms-4"><i class="fe fe-check"></i></div>
              </div>
              <div class="list-group-item d-flex align-items-center">
                <div class="me-auto">
                  <p class="fw-bold mb-1">Central Board of Secondary Education (CBSE)</p>
                  <p class="fs-sm text-body-secondary mb-0">Grade 5 to Grade 12</p>
                </div>
                <div class="badge badge-rounded-circle text-bg-success-subtle ms-4"><i class="fe fe-check"></i></div>
              </div>
              <div class="list-group-item d-flex align-items-center">
                <div class="me-auto">
                  <p class="fw-bold mb-1">Indian Certificate of Secondary Education</p>
                  <p class="fs-sm text-body-secondary mb-0">Grade 7 to Grade 10</p>
                </div>
                <div class="badge badge-rounded-circle text-bg-success-subtle ms-4"><i class="fe fe-check"></i></div>
              </div>
              <div class="list-group-item d-flex align-items-center">
                <div class="me-auto">
                  <p class="fw-bold mb-1">General Competition and Competitive Examinations</p>
                  <p class="fs-sm text-body-secondary mb-0">SSC/ Banking/ Railway/ JEE/ NEET/ KVPY/ Olympiads</p>
                </div>
                <div class="badge badge-rounded-circle text-bg-success-subtle ms-4"><i class="fe fe-check"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-8 pt-md-10" id="about">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <a href="#about" class="btn btn-white btn-rounded-circle shadow mt-n10" data-scroll='{"offset":0}'><i class="fe fe-arrow-down"></i></a>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8 text-center">
        <h2 class="fw-bold">After Matriculation, we have <span class="text-primary">something more for you...</span></h2>
        <p class="fs-lg text-body-secondary mb-9">All Streams are available in Hindi as well as English Medium, in order to support each and every Child's Language of Learning.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-4">
        <div class="row align-items-center mb-8" data-aos="fade-up">
          <div class="col-4 col-lg-5"><img src="../../shared/library/svg/atom-svg.svg" alt="..." class="img-fluid"></div>
          <div class="col-8 col-lg-7">
            <h3 class="fw-bold mb-2">Science Stream</h3>
            <p class="text-gray-700 mb-0">Physics, Chemistry, Biology and Mathematics.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="row align-items-center mb-8" data-aos="fade-up">
          <div class="col-4 col-lg-5"><img src="../../shared/library/svg/money-svg.svg" alt="..." class="img-fluid"></div>
          <div class="col-8 col-lg-7">
            <h3 class="fw-bold mb-2">Commerce Stream</h3>
            <p class="text-gray-700 mb-0">Accountancy, Economics, Business Studies, Statistics, Mathematics and Informatics Practices.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="row align-items-center mb-8" data-aos="fade-up">
          <div class="col-4 col-lg-5"><img src="../../shared/library/svg/arts-svg.svg" alt="..." class="img-fluid"></div>
          <div class="col-8 col-lg-7">
            <h3 class="fw-bold mb-2">Arts Stream</h3>
            <p class="text-gray-700 mb-0">Philosophy, History, Computer Science, Political Science, Sociology, Regional language, Economics, Hindi, Psychology</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="position-relative">
  <div class="shape shape-bottom shape-fluid-x text-dark">
    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/>
    </svg>      
  </div>
</div>

<section class="pt-6 pt-md-8 bg-dark">
  <div class="container pb-6 pb-md-8">
    <div class="row align-items-center">
      <div class="col-12 col-md">
        <h3 class="fw-bold mb-1 text-white">Are you Ready to Go?</h3>
        <p class="fs-lg text-body-secondary mb-6 mb-md-0">To know more about the Courses, Contact Us Right Away! We're a moment apart.</p>
      </div>
      <div class="col-12 col-md-auto"><a href="../contactUs/" class="btn btn-primary lift">Contact Us</a></div>
    </div>
  </div>
</section>

<?php // Footers
  require_once ('../components/bottom_credits.php');
  require_once ('../components/footer.php');
?>