<?php // Page Analytics for Welcome Page
  require_once '../shared/functions/security/envLoader.php';
  loadEnv('../shared/functions/security/credentials.env');

  require_once '../shared/functions/database/database.php';
  $db2 = connectDatabase('DB2', PDO::ERRMODE_SILENT);

  require_once '../shared/functions/analytics/analytics.php';

  updatePageCount($db2, 'welcome_page');
?>

<!DOCTYPE HTML>
<HTML LANG="EN">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="../shared/library/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../shared/library/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../shared/library/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="../shared/library/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-TileImage" content="../shared/library/favicon/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://landkit.goodthemes.co/assets/css/libs.bundle.css">
    <link rel="stylesheet" href="https://landkit.goodthemes.co/assets/css/theme.bundle.css">    
    <link rel="stylesheet" href="../shared/library/css/universal.css">

    <title>Career Institute | careerinstitute.co.in</title>
  </head>

  <nav class="navbar navbar-expand-lg bg-white d-none d-md-block">
    <div class="container">
      <a class="navbar-brand" href="./">
        <span class="ff-poppins logo-md">Career Institute</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header px-5 pt-7" style="padding-bottom: 10px !important;">
          <h2 class="offcanvas-title fw-bold ff-poppins" id="offcanvasExampleLabel">Explore the Content!</h2>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body list-group-item d-flex align-items-center">
        <ul class="navbar-nav me-auto">
            <li class="nav-item p-2 px-lg-3">
              <a class="nav-link p-2 px-lg-3 fs-lg" 
                 href="aboutUs/">About Us</a>
            </li>
            <li class="nav-item p-2 px-lg-3">
              <a class="nav-link p-2 px-lg-3 fs-lg" 
                 href="ourMission/">Our Mission</a>
            </li>
            <li class="nav-item p-2 px-lg-3">
              <a class="nav-link p-2 px-lg-3 fs-lg" 
                 href="courses/">Courses</a>
            </li>
            <li class="nav-item btn btn-primary p-2 px-lg-3 rounded-pill ms-10">
              <a class="nav-link p-2 px-lg-3 fs-lg text-white" 
                 href="admissionProcedure/">Admission Procedure</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg bg-white border-bottom d-md-none">
    <div class="container">
      <a class="navbar-brand" href="./">
        <span class="ff-poppins logo-md">Career Institute</span>
      </a>
      <button class="navbar-toggler" 
              type="button" 
              data-bs-toggle="offcanvas" 
              data-bs-target="#offcanvas_sm" 
              aria-controls="offcanvas_sm">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start" 
           tabindex="-1" 
           id="offcanvas_sm" 
           aria-labelledby="offcanvasLabel_sm">
        <div class="offcanvas-header px-5 pt-7 pb-2">
          <h2 class="offcanvas-title fw-bold ff-poppins" id="offcanvasLabel_sm">Explore the Contents</h2>
          <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" 
                  style="background: transparent; border: none;">
            <i class="fa-solid fa-right-to-bracket"></i>
          </button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav">
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-circle-info col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="aboutUs/">About Us</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-crosshairs col-2"></i></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="ourMission/">Our Mission</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-book-open col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="courses/">Courses</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-message col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="directorMessage/">Director's Message</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-address-card col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="contactUs/">Contact Us</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-arrows-rotate col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="changelogs/">Changelogs</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-file-invoice col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="terms&Service/">Terms and Service</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-gauge-high col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="pageMetrics/">Page Metrics</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-map col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="sitemaps/">Sitemap</a>
            </li>
          </ul>
          <li class="nav-item btn btn-primary mt-5 rounded-pill w-100">
            <a class="nav-link fs-lg text-white" 
               href="admissionProcedure/">Admission Procedure</a>
          </li>
        </div>
      </div>
    </div>
  </nav>

  <style>
    .wtcs-heading {
      margin: 0 0 50px 0 !important;
      font-weight: 900 !important;
    }
    .masked-text {
      background: rgb(103, 181, 255); 
      background: linear-gradient(135deg, rgba(103,181,255,1) 0%, rgba(186,0,241,1) 67%, rgba(255,0,236,1) 100%); 
      -webkit-background-clip: text; 
      background-clip: text; 
      -webkit-text-fill-color: transparent;
    }
  </style>
  
  <body>
    <section class="pt-4 pt-md-11">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-5 col-lg-6 order-md-2">
            <img src="../shared/library/favicon/original512.png" 
                 style="width: 100vw;" 
                 class="img-fluid mb-6 mb-md-0" 
                 alt="..." 
                 data-aos="fade-up" 
                 data-aos-delay="200">
          </div>
          <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">
            <h1 class="display-3 text-center text-md-start">
              Welcome to 
                <br>
              <span class="display-3 text-primary ff-poppins fw-bold">Career Institute</span>.
                <br>
            </h1>
            <h2 class="display-5 text-center text-md-start ff-sourcesans3">
              एक विश्वसनीय शिक्षण संस्थान
            </h2>
            <p class="lead text-center text-md-start text-body-secondary mb-6 mb-lg-8">
              Excelling the Education since 1995! Get started with the Best with <span class="text-primary">Career Institute</span>
            </p>
            <div class="text-center text-md-start">
              <a href="courses/" 
                class="btn btn-primary shadow lift p-2 px-3 mx-3">
                See Courses<i class="fa-solid fa-book-open-reader mx-1"></i>
              </a>
              <a href="#wtcs" class="btn btn-primary-subtle lift p-2 px-3" data-scroll='{"offset": 0}'>Take a Tour</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-8 py-md-11 border-bottom text-center" id="wtcs">
      <h1 class="display-4 wtcs-heading"  
          data-aos="fade-up" 
          data-aos-delay="50">
        Why to <span class="masked-text">Choose Us?</span>
      </h1>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="50">
            <div class="icon text-primary mb-3">
              <img width="50px" src="../shared/library/svg/date-svg.svg"></img>
            </div>
            <h3>Experience of <?php echo date('Y') - 1995; ?> Years and Counting...</h3> 
            <p class="text-body-secondary mb-6 mb-md-0">
              Over the years, we've improved Teaching, Administration, and Student Support. This makes our Institute better, creating an environment for Impactful and Skillful Learning.
            </p>
          </div>
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="50">
            <div class="icon text-primary mb-3">
              <img width="60" src="../shared/library/svg/books-svg.svg">
            </div>
            <h3>Academic-Supportive Approach</h3>
            <p class="text-body-secondary mb-6 mb-md-0">
              We regularly conduct Chapter-Wise Tests, Mid-Term and Yearly Exams along with Quiz Contests and Rewarding Competitions to bring the most out the Students.
            </p>
          </div>
          <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon text-primary mb-3">
              <img width="90" src="../shared/library/svg/graph-rising-to-the-right-svg.svg">
            </div>
            <h3>Monitoring the Performance</h3>
            <p class="text-body-secondary mb-0">
              Facilities for One-to-One Doubt Assistance with Teachers and monthly Parent- Teacher- Meetings fosters Parent Involvement and offer Personalized Support.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-8 pt-md-11 bg-gradient-white">
      <div class="container">
        <div class="row align-items-center justify-content-between mb-8 mb-md-11">
          <div class="col-12 col-md-6 order-md-2" data-aos="fade-left">
            <h2>
              Students will get to learn the best
              <span class="text-success">from <span class="fw-bold" data-typed='{"strings": ["Faculties.", "Mentors.", "Educators."]}'></span></span>
            </h2>
            <p class="fs-lg text-body-secondary mb-6">
              Our Institution features World-Class Teaching Facilities, from Smart Classes to One-To-One Intuition. Experienced Teachers guarantee Quality Education, Academic Excellence and Student Success.
            </p>
            <div class="row">
              <div class="col-12 col-lg-12">
                <div class="d-flex">
                  <div class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4"><i class="fe fe-check"></i></div>
                  <p class="text-success">Smart Classes</p>
                </div>
                <div class="d-flex mb-lg-2">
                  <div class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4"><i class="fe fe-check"></i></div>
                  <p class="text-success mb-lg-0">Regular Chapter-Wise Tests, Study Materials and Assignments</p>
                </div>
                <div class="d-flex">
                  <div class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4"><i class="fe fe-check"></i></div>
                  <p class="text-success">Half-Yearly, Yearly Examinations along with Set Practice and Mock Tests.</p>
                </div>
                <div class="d-flex">
                  <div class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4"><i class="fe fe-check"></i></div>
                  <p class="text-success">Monthly Parents-Teacher Meetings</p>
                </div>
                <div class="d-flex mb-lg-2">
                  <div class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4"><i class="fe fe-check"></i></div>
                  <p class="text-success mb-lg-0">World-Class Experienced Faculties</p>
                </div>
                <div class="d-flex">
                  <div class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4"><i class="fe fe-check"></i></div>
                  <p class="text-success">Scholarships Tests upto 50% Concession</p>
                </div>
                <div class="d-flex">
                  <span class="badge badge-rounded-circle text-bg-success-subtle mt-1 me-4"><i class="fe fe-check"></i></span>
                  <p class="text-success">24×7 CCTV Survillence</p>
                </div>
                <div class="d-flex">
                  <div class="badge badge-rounded-circle text-bg-success-subtle me-1 me-4"><i class="fe fe-check"></i></div>
                  <p class="text-success mb-0">SMS Alert for Absence and Results</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-5 order-md-1" data-aos="fade-right">
            <div class="card lift lift-lg mt-5 mt-lg-0">
              <img src="../shared/library/img/high_school_teaching.jpg" 
                    alt="..." 
                    class="card-img-top" 
                    style="border-radius: 10px;">
            </div>
          </div>
        </div>
        <div class="row align-items-center justify-content-center text-center" id="see-the-courses">
          <div class="col-12" data-aos="fade-right">
            <h2>We have Lots of Courses <span class="text-primary fw-bold">to Enroll In.</span></h2>
            <p class="fs-lg text-body-secondary mb-6">
              We have more than 10+ Active Courses, ranging from Middle to Senior Secondary Courses along with Competitive Courses where you could get Enrolled into, depending on your needs.
            </p>
            <a class="badge rounded-pill bg-primary-subtle text-primary" 
              href="courses/">
              <span class="h5 text-uppercase">See All Courses <i class="fa-solid fa-eye"></i></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    </section>

    <section class="pt-10 pt-md-12">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            <h2>
              Our Students are our Biggest Fans.<br> Hear from <span class="masked-text fw-bold">the Masters!</span>
            </h2>
            <p class="fs-lg text-body-secondary">We don't like to brag, but we don't mind letting our Students do it for us. Here are a few nice things folks have said about our Institute over the years.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card card-row shadow-light-lg mb-6">
              <div class="row gx-0">
                <div class="col-12 col-md-6">
                  <div class="card-img-slider" data-flickity='{"fade": true, "imagesLoaded": true, "pageDots": false, "prevNextButtons": false, "asNavFor": "#blogSlider", "draggable": false}'>
                    <a class="card-img-start position-absolute d-block w-100 bg-cover" style="background-image: url(../shared/library/img/student_reviewing.jpg);">
                      <img src="../shared/library/img/student_reviewing.jpg" alt="..." class="img-fluid d-md-none invisible">
                    </a>
                  </div>
                  <div class="shape shape-end shape-fluid-y text-white d-none d-md-block">
                    <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M116 0H51v172C76 384 0 517 0 517v173h116V0z" fill="currentColor"/>
                    </svg>       
                  </div>
                </div>
                <div class="col-12 col-md-6 position-md-static">
                  <div class="position-md-static" data-flickity='{"wrapAround": true, "pageDots": false, "adaptiveHeight": true}' id="blogSlider">
                    <div class="w-100">
                      <div class="card-body">
                        <blockquote class="blockquote text-center mb-0">
                          <p class="mb-5 mb-md-7">“Highly recommend Career Institute! Exceptional teachers bring passion and dedication. Convenient two-shift classes for flexibility. Impressed with the commitment to quality education. Solid 5/5 stars.”</p>
                          <footer class="blockquote-footer"><span class="h6 text-uppercase">ANURADHA KUMARI</span></footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="w-100">
                      <div class="card-body">
                        <blockquote class="blockquote text-center mb-0">
                          <p class="mb-5 mb-md-7">“Highly recommend Career Institute! One of the best in the locality, it boasts exceptional teachers and a flexible class schedule. Their commitment to top-notch education is truly impressive.”</p>
                          <footer class="blockquote-footer"><span class="h6 text-uppercase">R. K. Triphati</span></footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="w-100">
                      <div class="card-body">
                        <blockquote class="blockquote text-center mb-0">
                          <p class="mb-5 mb-md-7">“Absolute gem! Career Institute is a local standout with unparalleled educators. The class schedule offers the perfect blend of flexibility. Undoubtedly, top-tier Institution deserving of a 5-star rating!”</p>
                          <footer class="blockquote-footer"><span class="h6 text-uppercase">Saurabh Shubham</span></footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-2 pb-7 pt-md-2 pb-md-7">
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="d-flex">
            <div class="pe-5">
              <h3 class="mb-0"><span data-countup='{"startVal": 0}' data-to="97" data-aos data-aos-id="countup:in"></span>%</h3>
              <p class="text-gray-700 mb-0">Satisfaction</p>
            </div>
            <div class="border-start border-gray-300"></div>
            <div class="px-5">
              <h3 class="mb-0"><span data-countup='{"startVal": 0}' data-to="120" data-aos data-aos-id="countup:in"></span>+</h3>
              <p class="text-gray-700 mb-0">Reviews</p>
            </div>
            <div class="border-start border-gray-300"></div>
            <div class="ps-5">
              <h3 class="mb-0"><span data-countup='{"startVal": 0}' data-to="8000" data-aos data-aos-id="countup:in"></span>+</h3>
              <p class="text-gray-700 mb-0">Students</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-7 pb-8 py-md-11 bg-dark">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8 text-center">
            <h1 class="display-7 text-white ff-poppins">Get Access to our <span class="masked-text fw-bold">Paid Batches</span> Now!</h1>
            <p class="fs-lg text-body-secondary mb-6 mb-md-8">Take a Glance at our Courses, Take a Moment to Consider, then Make your Move! Explore the Options and Decide with Confidence.</p>
            <a href="contactUs/" class="rounded-pill bg-primary text-white p-2 px-4 lift text-decoration-none">Ways to Contact Us <i class="fe fe-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <footer class="mt-5 py-md-7">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-8 col-lg-8">
            <h3 class="display-3 text-md-start">
              <span class="text-primary ff-poppins logo-lg fw-bold">Career Institute</span>
            </h3>
            <h3 class="display-6 text-md-start ff-sourcesans3">एक विश्वसनीय शिक्षण संस्थान</h3>
            <ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
              <li class="list-inline-item list-social-item me-3">
                <a href="https://www.instagram.com/ci_patna/" class="text-decoration-none">
                  <img src="../shared/library/svg/instagram-svg.svg" width="25" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item me-3">
                <a href="https://www.facebook.com/kankarbaghpatna20" class="text-decoration-none">
                  <img src="../shared/library/svg/facebook-svg.svg" width="25" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item me-3">
                <a href="https://wa.me/+919661430521" class="text-decoration-none">
                  <img src="../shared/library/svg/whatsapp-svg.svg" width="25" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item">
                <a href="https://t.me/+919661430521" class="text-decoration-none">
                  <img src="../shared/library/svg/telegram-svg.svg" width="25" alt="...">
                </a>
              </li>
              <li class="list-inline-item list-social-item">
                <a href="https://maps.app.goo.gl/q4mrhtPhQDkGeKZc7" class="text-decoration-none">
                  <img src="../shared/library/svg/google-maps-svg.svg" width="25" alt="...">
                </a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-md-2 col-lg-2">
            <h6 class="fw-bold text-uppercase text-gray-700">
              Information
            </h6>
            <ul class="list-unstyled text-body-secondary mb-6 mb-md-8 mb-lg-0">
              <li class="mb-3">
                <a href="aboutUs/" class="text-reset text-decoration-none">About Us</a>
              </li>
              <li class="mb-3">
                <a href="ourMission/" class="text-reset text-decoration-none">Our Mission</a>
              </li>
              <li class="mb-3">
                <a href="directorMessage/" class="text-reset text-decoration-none">Director's Message</a>
              </li>
              <li>
                <a href="faculties/" class="text-reset text-decoration-none">Faculties</a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-md-2 col-lg-2">
            <h6 class="fw-bold text-uppercase text-gray-700">SERVICES</h6>
            <ul class="list-unstyled text-body-secondary mb-0">
              <li class="mb-3">
                <a href="terms&Service/" class="text-reset text-decoration-none">Terms of Service</a>
              </li>
              <li class="mb-3">
                <a href="sitemaps/" class="text-reset text-decoration-none">Sitemap</a>
              </li>
              <li>
                <a href="changelogs/" class="text-reset text-decoration-none">Changelogs</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <div class="row text-center bg-dark text-white py-5">
      <span class="col-12 col-lg-12 px-5 text-center text-gray-300">
        Developed and Managed by
        <a class="text-decoration-none text-white fw-bold" 
          href="https://instagram.com/tanmaysinhx14">
          Tanmay Sinha</a> 
            <br> 
          Copyright &copy; 2025-30. All Rights Reserved.
      </span>
    </div>
  </body>

  <script src="https://landkit.goodthemes.co/assets/js/vendor.bundle.js"></script>
  <script src="https://landkit.goodthemes.co/assets/js/theme.bundle.js"></script>
  <script src="https://kit.fontawesome.com/dba62debdb.js" crossorigin="anonymous"></script>
</html>