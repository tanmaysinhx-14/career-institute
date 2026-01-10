<?php 
  $page_title = "Sitemaps | Career Institute"; 

  require_once '../configurations/main.php'; 
?>

<?php // Page Analytics for Sitemaps Page
  require_once '../../shared/functions/security/envLoader.php';
  loadEnv('../../shared/functions/security/credentials.env');

  require_once '../../shared/functions/database/database.php';
  $db2 = connectDatabase('DB2', PDO::ERRMODE_SILENT);

  require_once '../../shared/functions/analytics/analytics.php';

  updatePageCount($db2, 'sitemaps');
?>

<?php // Breadcrumbs
  $breadcrumb_url_1 = '../';
  $breadcrumb_title_1 = 'Service Pages';

  $breadcrumb_url_active = './';
  $breadcrumb_title_active = 'Sitemaps';

  require_once ('../components/breadcrumb.php');
?>

<section class=" pt-10 py-12" style="background: rgba(0, 0, 0, 0.05)">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 d-flex">
        <div class="card mb-6 shadow-sm shadow-light-lg lift lift-lg">
          <a class="card-body p-3" href="../">
            <h3>Index Page</h3>
            <span class="rounded-pill bg-success text-white p-1 px-3 fs-sm text-decoration-none">Information</span>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 d-flex">
        <div class="card mb-6 shadow-sm shadow-light-lg lift lift-lg">
          <a class="card-body p-3" href="../aboutUs/">
            <h3>About Career Institute</h3>
            <span class="rounded-pill bg-success text-white p-1 px-3 fs-sm text-decoration-none">Information</span>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 d-flex">
        <div class="card mb-6 shadow-sm shadow-light-lg lift lift-lg">
          <a class="card-body p-3" href="../ourMission/">
            <h3>Our Mission</h3>
            <span class="rounded-pill bg-success text-white p-1 px-3 fs-sm text-decoration-none">Information</span>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 d-flex">
        <div class="card mb-6 shadow-sm shadow-light-lg lift lift-lg">
          <a class="card-body p-3" href="../faculties/">
            <h3>Faculties</h3>
            <span class="rounded-pill bg-success text-white p-1 px-3 fs-sm text-decoration-none">Information</span>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 d-flex">
        <div class="card mb-6 shadow-sm shadow-light-lg lift lift-lg">
          <a class="card-body p-3" href="../directorMessage/">
            <h3>Director's Message</h3>
            <span class="rounded-pill bg-success text-white p-1 px-3 fs-sm text-decoration-none">Information</span>
          </a>             
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 d-flex">
        <div class="card mb-6 shadow-sm shadow-light-lg lift lift-lg">
          <a class="card-body p-3" href="../admissionProcedure/">
            <h3>Admission Procedure</h3>
            <span class="rounded-pill bg-success text-white p-1 px-3 fs-sm text-decoration-none">Information</span>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 d-flex">
        <div class="card mb-6 shadow-sm shadow-light-lg lift lift-lg">
          <a class="card-body p-3" href="../courses/">
            <h3>Courses Page</h3>
            <span class="rounded-pill bg-primary text-white p-1 px-3 fs-sm text-decoration-none">Information</span>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 d-flex">
        <div class="card mb-6 shadow-sm shadow-light-lg lift lift-lg">
          <a class="card-body p-3" href="../changelogs/">
            <h3>Changelogs</h3>
            <span class="rounded-pill bg-primary text-white p-1 px-3 fs-sm text-decoration-none">Service</span>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 d-flex">
        <div class="card mb-6 shadow-sm shadow-light-lg lift lift-lg">
          <a class="card-body p-3" href="../contactUs/">
            <h3>Contacts Page</h3>
            <span class="rounded-pill bg-primary text-white p-1 px-3 fs-sm text-decoration-none">Service</span>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 d-flex">
        <div class="card mb-6 shadow-sm shadow-light-lg lift lift-lg">
          <a class="card-body p-3" href="../sitemaps/">
            <h3>Sitemap</h3>
            <span class="rounded-pill bg-primary text-white p-1 px-3 fs-sm text-decoration-none">Service</span>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 d-flex">
        <div class="card mb-6 shadow-sm shadow-light-lg lift lift-lg">
          <a class="card-body p-3" href="../terms&Service/">
            <h3>Terms and Service</h3>
            <span class="rounded-pill bg-primary text-white p-1 px-3 fs-sm text-decoration-none">Service</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php // Footers
  require_once ('../components/bottom_credits.php');
  require_once ('../components/footer.php');
?>