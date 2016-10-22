<?php 
// Grab Config for DB...
include_once('conf000.php'); 

// Make Connection to DB...

  try {

      $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
      
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // Enable for Debug...  echo "Connected!"; 
      }

  catch(PDOException $err)
    
      {
        echo "ERROR: " . $err->getMessage();
      }
?>

<html>
<head>
<title>THOT Patrol</title>
<!-- START META INCLUDES -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:300,400,700" rel="stylesheet">
<style type="text/css">
body {
  font-family: 'Roboto', sans-serif;
}
.jumbotron {
  font-family: 'Oswald', sans-serif;
  align-content: center;
  float: center;
}
.container {
  padding-top: 25px;
}
</style>
</head>
<body>
<div class="jumbotron" style="margin:0;">
  <h1 style="margin-left:22px;">THOT Patrol</h1>
  <p style="margin-left:22px;">Keep the web safe and your eyes safe... Get on THOT Patrol, before the THOTS GET YOU!</p>
</div>

<div class="container">
  <div class='col-lg-8'>
  <form class="form-horizontal" method="POST" action="" name="thot_signup" id="thot_signup">
    <div class="form-group">
        <label class="col-xs-3 control-label">Username:</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" title = 'select your patrol name'>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Password:</label>
        <div class="col-xs-8">
            <input type="password" class="form-control" title = 'select your secure password'>
        </div>
    </div>
    <div class="form-group">
        <label class="col-xs-3 control-label">Email:</label>
        <div class="col-xs-8">
            <input type="text" class="form-control" title = 'Enter your Email'>
        </div>
    </div>
  <div class='col-md-offset-2' align="center">
        <button type="submit" class="btn btn-primary btn-lg">SIGN UP FOR PATROLE</button>
  
  </div>
</form>
</div>
</div>

<script>
$(document).tooltip({ selector: "[title]",
                      placement: "left",
                      trigger: "focus"}); 
</script>
</body>
</html>
