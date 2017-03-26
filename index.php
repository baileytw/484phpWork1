<!DOCTYPE html>
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
<body class="login"> <!--hi-->
    <div class="login-box main-content panel panel-default">
      <header class="panel-heading"><img src="../streamlined/images/logo_small.png" alt="Wildlife Logo"></header>
    	<section class="panel-body">

<!--log in form-->
    		<form id="form" action="profile.php" method="post" class="form-horizontal">
    			<div class="form-group">
    			  <div class="col-sm-12">
      				<input type="text" id="username"  class="form-control" value="" name="username" required="required" placeholder="Username" />
    				</div>
    			</div>
    			<div class="form-group">
    			  <div class="col-sm-12">
      				<input type="password" id="password" class="form-control" value="" name="password" required="required" placeholder="Password" />
      			</div>
    			</div>
    			<div class="form-group">
    			  <div class="col-sm-2 col-sm-offset-4">
      				<button class="btn btn-default" type="submit">Login</button>
      			</div>
      		</div>
</form>

<!--clock in form-->
<form id="form" action="clockin.php" method="post" class="form-horizontal">

          <div class="form-group">
            <div class="col-sm-2 col-sm-offset-4">
              <button class="btn btn-default" type="submit">Clock In</button>
            </div>
          </div>
</form>
    		
    		<ul><li>&nbsp;<a href="forms.php">Don't work here yet? Apply.</a></li></ul>
    	</section>
    </div>
</body>
</html>