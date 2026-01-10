<?php 
  $page_title = "Routines | Career Institute"; 

  require_once '../configurations/main.php'; 
?>

<?php // Page Analytics for Routine Page
  require_once '../../shared/functions/security/envLoader.php';
  loadEnv('../../shared/functions/security/credentials.env');

  require_once '../../shared/functions/database/database.php';
  $db2 = connectDatabase('DB2', PDO::ERRMODE_SILENT);

  require_once '../../shared/functions/analytics/analytics.php';

  updatePageCount($db2, 'routines');
?>

<?php // Breadcrumb
  $breadcrumb_url_1 = '../';
  $breadcrumb_title_1 = 'Service Pages';

  $breadcrumb_url_active = './';
  $breadcrumb_title_active = 'Routines';

  require_once ('../components/breadcrumb.php');
?>

<style>
  .routine-buttons {border: 0; border-bottom: 2px solid black; background: transparent; font-weight: 700; color: black; text-decoration: none !important}
  iframe {pointer-events: none !important;}
</style>

<div class="career-content" id="content-container">
  <?php
    // Function to Fetch Parameter Value based on Input of Parameter Name
    function getParameter($param) {
      return isset($_GET[$param]) ? htmlspecialchars($_GET[$param]) : null;
    }
    $encryptedPageParam = getParameter('routine');

    // Function to Decrypt the Parameter Fetched
    function decrypt($data, $key, $iv) {
      return openssl_decrypt(base64_decode($data), 'aes-256-cbc', $key, 0, $iv);
    }
    $key = 'sbv6v1fd32v1a9v8'; $iv = 'vqfv1q32ev0qfe1q'; // Important (Need to be same as Routine Sitemap Page) !!
    $decryptedPageParam = decrypt($encryptedPageParam, $key, $iv);

    if (strpos($decryptedPageParam, '-') !== false) { // The delimiter exists, so split the string into board and class
      list($class, $board) = explode('-', $decryptedPageParam);
    } 
    else { // Handle the case where the delimiter is not present (Old System, remove this code in 2026)
      $class = $board = null;  

      echo '<script>
        alert("Clear your Browser History. Link is not valid now.");
        setTimeout(function() {
          window.location.href = "../routine-sitemap/";
        }, 1000); // 1-second delay before redirection
        </script>';
      exit();
    }
  ?>

  <section class="row align-items-center justify-content-center text-center">
    <div class="container col-12 px-7 p-0">
      <div class="row my-7">
        <div class="col-12 fw-bold ff-poppins" style="font-size: 32px;">
          Routine for 
          <?php echo isset($class) ? $class : null; ?>
          <?php echo isset($board) ? strtoupper($board) : null; ?>
        <span id="js-month"></span>
        <span id=js-academicyears></span>
      </div>
      <div>
        <p class="text-gray-800 fs-sm">
          Loading the Routine may take upto 10 seconds depending on your Network Speed. If it takes longer than expected, Click <span class="text-primary">Refresh the Page</span> or Check for the Possible <span class="text-primary">Network Issues</span>.
        </p>
      </div>
    </div>
    <div class="row d-flex mb-5 align-items-center justify-content-center">
      <div class="col-auto">
        <button class="btn btn-primary-subtle rounded-pill" onclick="reloadPage()">Refresh the Page</button>
      </div>
      <div class="col-auto">
        <a class="btn btn-primary-subtle rounded-pill" href="../routine-sitemap/">Return to Routine Sitemap</a>
      </div>
      <div class="col-auto">
        <a class="btn btn-danger-subtle rounded-pill" href="https://wa.me/+919661430521?text=I%27m%20facing%20problems%20with%20the%20Routine%20Link.%20Please%20check%20for%20possible%20issues." target="_blank">Report an Issue</a>
      </div>
    </div>
    <iframe class="mt-5 mb-12" 
            width="539" 
            height="710" 
            frameborder="0"
            src="<?php 
                  require_once '../../shared/functions/utility/utilities.php';

                  // CBSE Links 
                  if(checkForEquality($decryptedPageParam, '5-cbse', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'CBSE\'!A1&Item=\'CBSE\'!A1%3AF34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '6-cbse', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'CBSE\'!H1&Item=\'CBSE\'!H1%3AM34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '7-cbse', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'CBSE\'!O1&Item=\'CBSE\'!O1%3AT34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '8-cbse', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'CBSE\'!V1&Item=\'CBSE\'!V1%3AAA34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '9-cbse (a)', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'CBSE\'!AC1&Item=\'CBSE\'!AC1%3AAH34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '9-cbse (b)', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'CBSE\'!AJ1&Item=\'CBSE\'!AJ1%3AAO34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '10-cbse (a)', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'CBSE\'!AQ1&Item=\'CBSE\'!AQ1%3AAV34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '10-cbse (b)', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'CBSE\'!AX1&Item=\'CBSE\'!AX1%3ABC34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '11-cbse', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'CBSE\'!BE1&Item=\'CBSE\'!BE1%3ABJ34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '12-cbse', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'CBSE\'!BL1&Item=\'CBSE\'!BL1%3ABQ34&wdInConfigurator=True&wdInConfigurator=True';
                  }

                  // BSEB Links
                  elseif(checkForEquality($decryptedPageParam, '7-bseb', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'Bihar%20Board\'!A1&Item=\'Bihar%20Board\'!A1%3AF34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '8-bseb', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'Bihar%20Board\'!H1&Item=\'Bihar%20Board\'!H1%3AM34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '9-bseb', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'Bihar%20Board\'!O1&Item=\'Bihar%20Board\'!O1%3AT34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '10-bseb', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'Bihar%20Board\'!V1&Item=\'Bihar%20Board\'!V1%3AAA34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '11-bseb', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'Bihar%20Board\'!AC1&Item=\'Bihar%20Board\'!AC1%3AAH34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '12-bseb', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'Bihar%20Board\'!AJ1&Item=\'Bihar%20Board\'!AJ1%3AAO34&wdInConfigurator=True&wdInConfigurator=True';
                  }

                  // Arts Links
                  elseif(checkForEquality($decryptedPageParam, '11-arts', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'Bihar%20Board\'!AJ1&Item=\'Bihar%20Board\'!AJ1%3AAO34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '12-arts', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'Bihar%20Board\'!BL1&Item=\'Bihar%20Board\'!BL1%3ABQ34&wdInConfigurator=True&wdInConfigurator=True';
                  }

                  // Humanities Links
                  elseif(checkForEquality($decryptedPageParam, '11-humanities', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'Bihar%20Board\'!AQ1&Item=\'Bihar%20Board\'!AQ1%3AAV34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                  elseif(checkForEquality($decryptedPageParam, '12-humanities', 'strict')) {
                    echo 'https://1drv.ms/x/c/2f9715c06a8aac21/UQQhrIpqwBWXIIAvEx8AAAAAAE3Rt97k_rpt5BU?em=2&wdAllowInteractivity=False&ActiveCell=\'Bihar%20Board\'!AX1&Item=\'Bihar%20Board\'!AX1%3ABC34&wdInConfigurator=True&wdInConfigurator=True';
                  }
                ?>"
            ></iframe>
  </section>
</div>

<?php // Footers
  require_once ('../components/bottom_credits.php');
  require_once ('../components/footer.php');
?>

<script>
  function reloadPage() {
    location.reload();
  }
</script>