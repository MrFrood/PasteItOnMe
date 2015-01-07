<?php
?>
<html>

  <head>
    <title>PasteItOn.me</title>
    <meta charset='utf-8'/>
    <link rel="stylesheet" href="assets/style.css"/>
    <link rel="stylesheet" href="assets/pure-min.css"/>
    <link rel="shortcut icon" href="assets/favicon.ico"/>
  </head>

  <body>

    <div class="container">
      <div class="header">
        <div class='pure-menu pure-menu-open' id='menu'>
		  <a href='pasteiton.me' class='pure-menu-heading' style='color: #7489E8;' >PasteItOn.me</a>
		  <ul>
		      <li><a href='http://pasteiton.me'>Create your own paste</a></li>
		      <li><a href='<?php echo "http://pasteiton.me/p/" . $_GET['f'] . ".txt"; ?>'>View Raw</a></li>
		      <li><a href='contact/'>Contact Us</a></li><br>
		  </ul>
		</div>
      </div>
      <div class="body">
        <?php
			
		  $f = "";
			
          function readAndEchoFile($name) {
            $file_name = "p/" . $name . ".txt";
            $contents = file_get_contents($file_name);
            $contents = strip_tags($contents);
            echo $contents;
          }

          if(isset($_GET['f'])) {
            readAndEchoFile($_GET['f']);
            $f = $_GET['f'];
          }
        ?>
      </div>
      <div class="footer">
       
      </div>
    </div>
  </body>
</html>
