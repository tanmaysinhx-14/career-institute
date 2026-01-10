<?php //Backend for Routine Sitemap
  // Function for producing Encrypted Tokens based on Class-Board Selection
  function encrypt($data, $key, $iv) { 
    return base64_encode(openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv));
  }

  $key = 'sbv6v1fd32v1a9v8'; $iv = 'vqfv1q32ev0qfe1q'; // Important (Need to be same as Routines Page) !!

  if (isset($_POST['redirectToRoutinesPage'])) {
    // Fetch Board and Class values from Dynamically-Controlled JS Form
    $class = $_POST['class'] ?? null;

    // Board and Class Input Detected, Produce Routine URL and Redirect
    if (!is_null($class)) { 
      $link = '../routines/index.php?routine=' . encrypt($class, $key, $iv);
      header('Location: ' . $link);
      exit;
    } 
    else { // Class and Board Input absent. Produce Error.
      echo '<script>alert("Invalid selection. Please select both board and class.")</script>';
    }
  }
?>

<?php // Page Analytics for Routine Sitemap Page
  require_once '../../shared/functions/security/envLoader.php';
  loadEnv('../../shared/functions/security/credentials.env');

  require_once '../../shared/functions/database/database.php';
  $db2 = connectDatabase('DB2', PDO::ERRMODE_SILENT);

  require_once '../../shared/functions/database/data-retrievers.php';

  require_once '../../shared/functions/analytics/analytics.php';

  updatePageCount($db2, 'routine_sitemap');
?>

<?php 
  $page_title = "Routine Sitemap | Career Institute"; 

  require_once '../configurations/main.php'; 
?>

<?php // Breadcrumb
  $breadcrumb_url_1 = '../';
  $breadcrumb_title_1 = 'Service Pages';

  $breadcrumb_url_active = './';
  $breadcrumb_title_active = 'Routine Sitemap';

  require_once ('../components/breadcrumb.php');
?>

<section class="justify-content-center text-center mt-6 overlay overlay-white overlay-90 min-vh-100" 
        style="background-image: url(../../shared/library/favicon/original512.png); 
                background-size: auto 100%; 
                background-repeat: no-repeat; 
                background-position: top;">
  <div class="container">
    <h2 class="display-3 fw-bold mb-0">Routine Sitemap</h2>
    <p class="fs-sm mb-3">New Accounts System Coming December 2025!</p>
    <h7 class="fs-sm">
        Current Page Views: 
        <?php 
          $routineSitemapViewCountArray = fetchUserRecord($db2, 'app_requestCounter', 'page_identifier', 'routine_sitemap');
          echo "<span class=\"text-primary\">" . $routineSitemapViewCountArray['page_requestCount'] . "</span>";
        ?>
    </h7>  
    <div class="d-flex row py-7 pt-10">
      <div class="col-6 col-auto">
        <label for="board">Select Board:</label>
        <select id="board" 
                name="board" 
                onchange="updateClasses()">
          <option value="" selected disabled>Select Board</option>
          <option value="cbse">CBSE</option>
          <option value="bseb">BSEB</option>
          <option value="arts">Arts</option>
          <option value="humanities">Humanities</option>
        </select>
      </div>
      <div class="col-6 col-auto">
        <label for="class">Select Class:</label>
        <select id="class" name="class">
          <option value="" selected disabled>Select Class</option>
        </select>
      </div>
    </div>

    <!-- PSEUDO FORM -->
    <form action="" method="POST">
      <input type="hidden" id="hiddenBoard" name="board" />
      <input type="hidden" id="hiddenClass" name="class" />
      <button class="mx-5 mb-12 px-5 py-3 text-bg-primary rounded-pill border-0" 
              type="submit"
              name="redirectToRoutinesPage">Preview Class Routine</button>
    </form>
  </div>
</section>

<script>
  function updateClasses() { // JS Form Controller
    const boardSelect = document.getElementById('board');
    const classSelect = document.getElementById('class');
    const hiddenBoard = document.getElementById('hiddenBoard');
    const hiddenClass = document.getElementById('hiddenClass');
    
    classSelect.innerHTML = '<option value="" selected disabled>Select Class</option>';

    const selectedBoard = boardSelect.value;
    hiddenBoard.value = selectedBoard; // Store the selected board in hidden input

    const classes = {
      cbse: ['5 CBSE', '6 CBSE', '7 CBSE', '8 CBSE', '9 CBSE (A)', '9 CBSE (B)', '10 CBSE (A)', '10 CBSE (B)', '11 CBSE', '12 CBSE'],
      bseb: ['7 BSEB', '8 BSEB', '9 BSEB', '10 BSEB', '11 BSEB', '12 BSEB'],
      arts: ['11 Arts', '12 Arts'],
      humanities: ['11 Humanities', '12 Humanities']
    };

    classes[selectedBoard]?.forEach(className => {
      const option = document.createElement('option');
      option.value = className.toLowerCase().replace(' ', '-');
      option.text = className;
      classSelect.add(option);
    });
  }

  // Add an event listener for class selection
  document.getElementById('class').addEventListener('change', function() {
    const classSelect = document.getElementById('class');
    const hiddenClass = document.getElementById('hiddenClass');
    hiddenClass.value = classSelect.value; // Store the selected class in hidden input
  });
</script>

<?php // Footers
  require_once ('../components/bottom_credits.php');
  require_once ('../components/footer.php');
?>