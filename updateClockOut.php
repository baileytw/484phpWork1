<!DOCTYPE html>
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>

<?php




?>





<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Wildlife Center of Virginia Volunteers</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<link rel="stylesheet" media="screen" href="css/style.css" />

</head>
<body class="login">
    <div class="login-box main-content panel panel-default">
      <header class="panel-heading"><img src="../484phpWork1/images/logo_small.png" alt="Wildlife Logo"></header>
    	  <form id="form" method="post" class="form-horizontal">
    			<div class="form-group">
    			  <div class="col-sm-12">
				  <p>Please enter the correct Clock Out time for "~DATE WILL GO HERE"
      				<input type="text" id="usernameLogIn"  class="form-control" value="" name="usernameLogIn" required="required" placeholder="Unique ID" />
    				</div>
    			</div>
    			<div class="form-group">
    			  <div class="col-sm-12">
      				<input type="password" id="password" class="form-control" value="" name="password" required="required" placeholder="Correct Clock Out Time" />
      			</div>
    			</div>
    			<div class="form-group">
    			  <div class="col-sm-2 col-sm-offset-4">
      				<button ID="btnLogIn" name="btnLogIn" class="btn btn-default" type="submit">Update</button>
      			</div>
      		</div>
</form>

<!--clock out form-->
<form id="form" action="index.php" method="post" class="form-horizontal">

          <div class="form-group">
            <div class="col-sm-2 col-sm-offset-3">
              <button class="btn btn-default" type="submit">Return to Login Screen</button>
            </div>
          </div>
</form>
    		
    	</section>
    </div>
</body>
</html>