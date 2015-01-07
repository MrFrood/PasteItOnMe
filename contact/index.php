<?php
/**
 * @author Jon McLean
*/
?>
<html>

  <head>
    <title>PasteItOn.me</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../assets/default.css"/>
    <link rel="stylesheet" href="../assets/default.css"/>
    <link rel="stylesheet" href="../assets/pure-min.css"/>
    <link rel="shortcut icon" href="../assets/favicon.ico"/>
  </head>
  <body>
      <div class="container">
        <div class="header">
          <?php include("../includes/header-normal.php"); ?>
        </div>
        <div class="body">
        	<div class="container">
    			<p>If you would like to contact us then feel free to send an email to one of the below emails:</p>
    			<p>Generic Queries: contact@pasteiton.me</p>
    			<p>Business Queries: business@pasteion.me</p>
    			<p>Support Queries: support@pasteiton.me</p>
    			<br/>
    			
    			<!--<form method='post' action='' class="pure-form">
    				<p>Subscribe to our change-log and newsletter</p>
    				Email: <input type="text" name='email' placeholder="email"/>
    				<input type="submit" name="submit-email" value="Subscribe"/>
    			</form>-->
    			
    			<p>&copy; Copyright Jon McLean </p>
    			
    			<?php
    				function enterEmail() { 
    					include("../sql/db.php");
    					$email = $_POST['email'];
    					$sql = "INSERT INTO 'sub' ('email') VALUES ('$email')";
    					mysqli_query($link, $sql);
    				}
    				
    				if(isset($_POST['submit-email'])) {
    						enterEmail();
    				}
    			?>
    			
        	</div>
        </div>
        <div class="footer">
          
        </div>
      </div>
  </body>

</html>
