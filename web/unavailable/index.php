<?php 
  $page_title = "Unavailable | Career Institute"; 

  require_once '../configurations/main.php'; 
?>
  
<?php // Breadcrumb
  $breadcrumb_url_1 = '../';
  $breadcrumb_title_1 = 'Service Pages';

  $breadcrumb_url_active = './';
  $breadcrumb_title_active = 'Unavailable';

  require_once ('../components/breadcrumb.php');
?>

<section class="section">
  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center gx-0 min-vh-100">
      <div class="col-8 col-md-6 col-lg-7 offset-md-1 order-md-2 mt-auto mt-md-0 pt-8 pb-4 py-md-11">
        <img src="../../shared/library/img/illustration-1.png" alt="..." class="img-fluid">
      </div>
      <div class="col-12 col-md-5 col-lg-4 order-md-1 mb-auto mb-md-0 pb-8 py-md-11">
        <h1 class="display-3 fw-bold text-center">Uh Oh.</h1>
        <p class="mb-5 text-center text-body-secondary">We are working over the thing currently. Comeback some other day :)</p>
        <div class="text-center"><a class="btn btn-primary" href="../">Back to Main Page</a></div>
      </div>
    </div>
  </div>
</section>


<?php // Footers
  require_once ('../components/bottom_credits.php');
  require_once ('../components/footer.php');
?>