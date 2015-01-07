<?php
?>

<html>

  <head>
    <title>PasteItOn.me</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="assets/style.css"/>
    <link rel="stylesheet" href="assets/pure-min.css"/>
    <link rel="shortcut icon" href="assets/favicon.ico"/>
  </head>
  <body>

    <?php
      function paste($text) {
      	include("sql/db.php");
        error_reporting(E_ALL);
        $name = generateRandomString();
        $file = "p/" . $name . ".txt";
        if(file_put_contents($file, strip_tags(mysqli_real_escape_string($link , $text)))) {
        	sqlIndex($file, $name);
        	header("Location: view.php?f=" . $name);
        }else {
        	header("Location: index.php?error=true");	
        }

      }

      function sqlIndex($file_name, $name) { //$filename is the dir, name, and extension. $name is the name generated.
        include("sql/db.php");
        $sql_query = "INSERT INTO pastes (paste_name, paste_file_name) VALUES('$name', '$file_name')";
        mysqli_query($link, $sql_query);
      }

      function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
      }

      if(isset($_POST['paste-it'])) {
        paste($_POST['paste-text']);
      }else {

      }


    ?>
    <form action="index.php?paste-com=true" method="post">
      <div class="container">
        <div class="header">
          <?php include("includes/header.php"); ?>
        </div>
        <div class="body">
          <textarea id="textArea" class="paste-text" name="paste-text"></textarea>
        </div>
        <div class="footer">
          
        </div>
      </div>
    </form>
  </body>

</html>
