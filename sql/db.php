<?php
  /**
 * @author Jon McLean
*/
  $host = "localhost";
  $username = "root";
  $password = "";
  $db = "pastes";
  $link = mysqli_connect($host, $username, $password, $db) or die("Error while connection to the mysqli database: " . mysqli_error($link));


?>
