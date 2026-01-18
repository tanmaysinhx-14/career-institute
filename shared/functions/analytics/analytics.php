<?php
  function updatePageCount(PDO $db, string $pageIdentifier): bool {
    $currentAttemptForUpdatingPageCount = 0;
    $maxRetriesForUpdatingPageCount = 3;
    while ($currentAttemptForUpdatingPageCount < $maxRetriesForUpdatingPageCount) {
      try {
        $STMT_updatePageCount = $db->prepare(
          "UPDATE app_requestCounter
            SET page_requestCount = page_requestCount + 1
            WHERE page_identifier = :page_identifier"
        );

        $STMT_updatePageCount->bindValue(':page_identifier', $pageIdentifier, PDO::PARAM_STR);
        $STMT_updatePageCount->execute();

        return $STMT_updatePageCount->rowCount() === 1;
      } 
      catch (PDOException) {
        $currentAttemptForUpdatingPageCount++;
        sleep(5);
      }
    }
    return false;
  }
?>
