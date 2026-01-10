<?php 
  $page_title = "Page Metrics | Career Institute"; 

  require_once '../configurations/main.php'; 
?>

<?php // Page Analytics for Page Metrics Page
  require_once '../../shared/functions/security/envLoader.php';
  loadEnv('../../shared/functions/security/credentials.env');

  require_once '../../shared/functions/database/database.php';
  $db2 = connectDatabase('DB2', PDO::ERRMODE_SILENT);

  require_once '../../shared/functions/analytics/analytics.php';

  updatePageCount($db2, 'page_metrics');
?>

<?php // Breadcrumb
  $breadcrumb_url_1 = '../';
  $breadcrumb_title_1 = 'Service Pages';

  $breadcrumb_url_active = './';
  $breadcrumb_title_active = 'Page Metrics';

  require_once ('../components/breadcrumb.php');
?>

<section class="pt-7 mb-7 pt-md-7">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md">
        <a class="fs-sm text-decoration-none mb-3"><i class="fe fe-arrow-start"></i>Service Page</a>
        <h1 class="display-4 mb-2">Page Metrics (Analytics)</h1>
        <p class="fs-sm text-gray-700">Last Updated <span><?php echo (new DateTime('19-12-2025'))->diff(new DateTime())->days; ?> days</span> ago  by Tanmay Sinha. Counters update in Real-Time!</p>
      </div>
    </div>

    <div class="row">
      <div class="col-12"><hr class="my-3 my-md-5 border-gray-300"></div>
    </div>

    
    <?php // Page Metrics Backend

      function getPageMetrics(PDO $db2) {
        $query = "
          SELECT page_identifier, page_requestCount
          FROM app_requestCounter
          ORDER BY page_requestCount DESC
        ";

        $stmt = $db2->prepare($query);
        $stmt->execute();
        $metrics = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $totalViews = 0;
        foreach ($metrics as $row) {
          $totalViews += (int)$row['page_requestCount'];
        }

        return [
          'metrics' => $metrics,
          'totalViews' => $totalViews
        ];
      }

      function displayPageMetrics(array $data) {
        $metrics = $data['metrics'];
        $totalViews = $data['totalViews'];

        echo '<div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped text-center">
                      <thead>
                        <tr>
                          <th class="p-0">Ranking</th>
                          <th class="p-0">Page ID</th>
                          <th class="p-0">Visit / Request Count</th>
                        </tr>
                      </thead>
                      <tbody>';

        $rank = 1;
        foreach ($metrics as $row) {
          echo '<tr>
                  <th class="p-0">' . $rank . '</th>
                  <td class="p-0">' . htmlspecialchars($row['page_identifier']) . '</td>
                  <td class="p-0">' . (int)$row['page_requestCount'] . '</td>
                </tr>';
          $rank++;
        }

        echo '      </tbody>
                    </table>
                  </div>
                  <div class="mt-3 text-center">
                    <strong>Total Page Views: ' . $totalViews . '</strong>
                  </div>
                </div>
              </div>';
      }

      $data = getPageMetrics($db2);
      displayPageMetrics($data);
    ?>

  </div>
</section>

<?php // Footers
  require_once ('../components/bottom_credits.php');
  require_once ('../components/footer.php');
?>