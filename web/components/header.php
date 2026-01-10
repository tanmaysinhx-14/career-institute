<!DOCTYPE HTML>
<HTML LANG="EN">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="https://careerinstitute.co.in/library/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://careerinstitute.co.in/library/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://careerinstitute.co.in/library/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="https://careerinstitute.co.in/library/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-TileImage" content="https://careerinstitute.co.in/library/favicon/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://landkit.goodthemes.co/assets/css/libs.bundle.css">
    <link rel="stylesheet" href="https://landkit.goodthemes.co/assets/css/theme.bundle.css">    
    <link rel="stylesheet" href="<?php echo isset($urlForUniversalCSS) ? $urlForUniversalCSS: '#' ?>">

    <title><?php echo isset($page_title) ? $page_title : 'Unknown Page Title'; ?></title>
  </head>

  <!-- LARGE SCREEN NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-white d-none d-lg-flex">
    <div class="container">
      <a class="navbar-brand" href="<?php echo isset($logo_href) ? $logo_href: '#';?>">
        <span class="ff-poppins logo-md"><?php echo isset($logo_text) ? $logo_text: '#';?></span>
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
                 href="<?php if(isset($urlForAboutUs)) echo $urlForAboutUs; ?>">About Us</a>
            </li>
            <li class="nav-item p-2 px-lg-3">
              <a class="nav-link p-2 px-lg-3 fs-lg" 
                 href="<?php if(isset($urlForOurMission)) echo $urlForOurMission; ?>">Our Mission</a>
            </li>
            <li class="nav-item p-2 px-lg-3">
              <a class="nav-link p-2 px-lg-3 fs-lg" 
                 href="<?php if(isset($urlForCourses)) echo $urlForCourses; ?>">Courses</a>
            </li>
            <li class="nav-item btn btn-sm btn-primary p-2 rounded-pill ms-10">
              <a class="nav-link p-2 px-lg-3 fs-lg text-white" 
                 href="<?php if(isset($urlForAdmissionProcedure)) echo $urlForAdmissionProcedure; ?>">Admission Procedure</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- SMALL SCREEN NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-white border-bottom d-flex d-lg-none">
    <div class="container">
      <a class="navbar-brand" href="<?php if(isset($logo_href)) echo $logo_href;?>">
        <span class="ff-poppins logo-md"><?php if(isset($logo_text)) echo $logo_text;?></span>
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
                 href="<?php if(isset($urlForAboutUs)) echo $urlForAboutUs; ?>">About Us</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-crosshairs col-2"></i></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="<?php if(isset($urlForOurMission)) echo $urlForOurMission; ?>">Our Mission</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-book-open col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="<?php if(isset($urlForCourses)) echo $urlForCourses; ?>">Courses</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-message col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="<?php if(isset($urlForDirectorMessage)) echo $urlForDirectorMessage; ?>">Director's Message</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-address-card col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="<?php if(isset($urlForContactUs)) echo $urlForContactUs; ?>">Contact Us</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-arrows-rotate col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="<?php if(isset($urlForChangelogs)) echo $urlForChangelogs; ?>">Changelogs</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-file-invoice col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="<?php if(isset($urlForTermsAndService)) echo $urlForTermsAndService; ?>">Terms and Service</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-gauge-high col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="<?php if(isset($urlForPageMetrics)) echo $urlForPageMetrics; ?>">Page Metrics</a>
            </li>
            <li class="nav-item-responsive row mb-3">
              <i class="fa-solid fa-map col-2"></i>
              <a class="nav-link col-10 mt-n3 fs-lg" 
                 href="<?php if(isset($urlForSitemap)) echo $urlForSitemap; ?>">Sitemap</a>
            </li>
          </ul>
          <li class="nav-item btn btn-primary mt-5 rounded-pill w-100">
            <a class="nav-link fs-lg text-white" 
               href="<?php if(isset($urlForAdmissionProcedure)) echo $urlForAdmissionProcedure; ?>">Admission Procedure</a>
          </li>
        </div>
      </div>
    </div>
  </nav>
  