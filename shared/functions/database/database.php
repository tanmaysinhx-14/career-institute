<?php
  function connectDatabase($dbPrefix, $connectionMode) {
    $dbhost     = $_ENV["{$dbPrefix}_HOST"];
    $dbusername = $_ENV["{$dbPrefix}_USERNAME"];
    $dbpassword = $_ENV["{$dbPrefix}_PASSWORD"];
    $dbname     = $_ENV["{$dbPrefix}_NAME"];

    $options = [
      PDO::ATTR_ERRMODE => $connectionMode,
      PDO::ATTR_TIMEOUT => 15,
      PDO::ATTR_PERSISTENT => true,
    ];

    $currentAttemptForDatabaseConnection = 0;
    $maxRetriesForDatabaseConnection = 3;

    while ($currentAttemptForDatabaseConnection < $maxRetriesForDatabaseConnection) {
      try {
        $currentAttemptForDatabaseConnection++;

        $connection = new PDO("mysql:host=$dbhost;
                                     dbname=$dbname;
                                     charset=utf8",
                                     $dbusername,
                                     $dbpassword,
                                     $options
        );
        return $connection;
      }
      catch (Throwable) {
        sleep(5);
      }
    }
    if ($currentAttemptForDatabaseConnection > $maxRetriesForDatabaseConnection) {
      return null;
    }
  }

  function isRetryablePdoException(PDOException $ex): bool {
    // MySQL error codes that MAY succeed on retry (transient failures)
    $retryable = [
      1205, // Lock wait timeout exceeded
      1213, // Deadlock found
      2006, // MySQL server has gone away
      2013, // Lost connection to MySQL server during query
      1040, // Too many connections
      1158, // Network error reading from socket
      1159, // Network error writing to socket
      1161, // Got an error writing communication packets
      1180, // Error during COMMIT
      1181, // Error during ROLLBACK
    ];

    if (!isset($ex->errorInfo[1])) {
      return false;
    }
    return in_array($ex->errorInfo[1], $retryable, true);
  }

  function getTableArray($userType) { // Meta Data of Database Tables
    switch ($userType) {
      case 'student': 
        $tableArray = [
          'student_configurations',
          'student_details',
          'student_devicedetails',
          'student_timestamps',
          'student_url'
        ];
      break;

      case 'faculty': 
        $tableArray = [
          'faculty_configurations',
          'faculty_details',
          'faculty_devicedetails',
          'faculty_timestamps',
          'faculty_url'
        ];
      break;

      case 'admin': 
        $tableArray = [
          'admin_details',
          'admin_devicedetails',
          'admin_timestamps'
        ];
      break;

      default: 
        $tableArray = []; 
        break;
    }   
    return $tableArray;
  }

  function checkAppStatus(PDO $db) {
    $STMT_checkAppStatus = "SELECT * FROM app_configurations WHERE parameter = :parameter";

    $checkAppStatus = $db->prepare($STMT_checkAppStatus);

    $checkAppStatus->bindValue('parameter', 'app_status', PDO::PARAM_STR);

    if($checkAppStatus->execute()) {
      return $checkAppStatus->fetch(PDO::FETCH_ASSOC);
    }
    else return null;
  }
?>