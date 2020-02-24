<?php

  // Step 1: (12) Using either MySQLi or PDO
  //    Create a connection to your MySQL DB and store it in a variable named $conn
  // CREATE YOUR CONNECTION BELOW THE LINE

  if (file_exists(dirname(__FILE__) . './.env.php'))
   {
    include_once('./.env.php');
  }

  // TOTAL POINTS POSSIBLE: 6
  function connect () {
    $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));
    if (mysqli_connect_error($conn)) {
      echo "Issue connecting to the MySQL database: " . mysqli_connect_error();
      return false;
    } else {
      return $conn;
    }
  }
?>