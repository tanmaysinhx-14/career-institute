<?php
  function getPDOParamType($value): int {
    return match (gettype($value)) {
      'boolean' => PDO::PARAM_BOOL,
      'integer' => PDO::PARAM_INT,
      'NULL'    => PDO::PARAM_NULL,
      default   => PDO::PARAM_STR,
    };
  }

  function checkUserRecord(PDO $db, string $table, array $conditions): bool {
    try {
      $queryParts = [];
      $params = [];
      foreach ($conditions as $column => $value) {
        $queryParts[] = "`$column` = :$column";
        $params[$column] = $value;
      }
      $whereClause = implode(' AND ', $queryParts);
      $sql = "SELECT * FROM `$table` WHERE $whereClause LIMIT 1";

      $stmt = $db->prepare($sql);
      foreach ($params as $key => $val) {
        $paramType = is_int($val) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue(":$key", $val, $paramType);
      }
      $stmt->execute();

      return $stmt->fetch() !== false;
    } catch (PDOException) {
      return false;
    }
  }

  function fetchUserRecord(PDO $db, string $tname, string $cname, $cvalue): ?array {
    $maxRetries = 3;

    for ($retryCount = 0; $retryCount < $maxRetries; $retryCount++) {
      try {
        $query = "SELECT * FROM `$tname` WHERE `$cname` = :cvalue LIMIT 1";
        $stmt = $db->prepare($query);

        $paramType = getPDOParamType($cvalue);
        $stmt->bindValue(':cvalue', $cvalue, $paramType);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
      } 
      catch (Exception $e) {
        error_log("Attempt " . ($retryCount + 1) . " failed: " . $e->getMessage());
        if ($retryCount === $maxRetries - 1) {
          return null;
        }
        sleep(5);
      }
    }
    return null;
  }

  function fetchUserRecordsFromMultipleTables(PDO $db, array $tables, array $criteria): ?array {
    $maxRetries = 3;
    $mergedResult = [];

    foreach ($tables as $table) {
      $retryCount = 0;

      while ($retryCount < $maxRetries) {
        try {
          $whereParts = [];
          foreach ($criteria as $col => $val) {
            $whereParts[] = "`$col` = :$col";
          }
          $whereClause = implode(' AND ', $whereParts);

          $query = "SELECT * FROM `$table` WHERE $whereClause";
          $stmt  = $db->prepare($query);

          foreach ($criteria as $col => $val) {
            $stmt->bindValue(":$col", $val, getPDOParamType($val));
          }

          $stmt->execute();
          $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

          if (!empty($results)) {
            foreach ($results as $row) {
              foreach ($row as $col => $val) {
                if ($col === '_source_table') continue;

                if (!array_key_exists($col, $mergedResult) || empty($mergedResult[$col])) {
                  $mergedResult[$col] = $val;
                }
              }
              $mergedResult['_source_tables'][] = $table;
            }
          }

          break;
        } 
        catch (Exception) {
          $retryCount++;
          if ($retryCount < $maxRetries) {
            sleep(5);
          }
        }
      }
    }

    return !empty($mergedResult) ? $mergedResult : null;
  }

  function checkUserRole($userRole) {
    return $_SESSION['userRole'] = $userRole;
  }

  function retrieveActiveBatchlist(PDO $db) {
    $STMT_RetrieveActiveBatchlist = "SELECT * FROM app_configurations WHERE parameter = :parameter LIMIT 1";
    $retrieveActiveBatchlist  = $db->prepare($STMT_RetrieveActiveBatchlist);
    $retrieveActiveBatchlist->bindValue(':parameter', 'active_batchlist', PDO::PARAM_STR);

    $currentAttemptForRetrieveActiveBatchlist = 0;
    $maxRetriesForRetrieveActiveBatchlist = 3;
    while ($currentAttemptForRetrieveActiveBatchlist < $maxRetriesForRetrieveActiveBatchlist) { 
      if ($retrieveActiveBatchlist->execute()) {
        return $retrieveActiveBatchlist->fetch(PDO::FETCH_ASSOC);
      }
      $currentAttemptForRetrieveActiveBatchlist++;
      sleep(5);
    }
    if($currentAttemptForRetrieveActiveBatchlist == $maxRetriesForRetrieveActiveBatchlist) {
      return null;
    }    
  }
?>