<!DOCTYPE html>
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>

<?php
//DO NOT MOVE. KEEP AT TOP
// destroy the session
session_start(); 
session_destroy();
//start new session
session_start();
/****************************************
	START ClockIn CODE 
****************************************/

//Clockin validation and action
 if(isset($_POST['btnClockIn']) && ($_POST['usernameClockIn'] != "")){
	$servername = "localhost";
	$username = "root";
	$dbpassword = "Twspike1994?";
	$dbname = "wildlife";

	// Create connection
	$conn = new mysqli($servername, $username, $dbpassword, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	//SQL Statement to gather hash
	$sql = "SELECT Person_Email, Person_UserType FROM Person WHERE Person_Email = '" . $_POST['usernameClockIn'] . "'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$user = $row['Person_Email'];
			$userType = $row['Person_UserType'];
		}
		
		if($userType == "Volunteer" ){														//***************NEED TO MAKE A WAY TO DISTINGUISH BETWEEN REGULAR VOLUNTEERS AND TRANSPORTERS
			
			
			//////INSERT THE clock in TIME HERE INTO THE DATABASE
			
			
			$conn->close();
			header("Location: clockin.php");
			exit();
		}
		else {
		// Not a volunteer, show an error
		$message = 'Error. If you are a transporter, please use the Transporter form.';
		echo "<SCRIPT>
		alert('$message');
		</SCRIPT>";
		}
	}
	else {
	 // passwords didn't match, show an error
		$message = 'Username incorrect. Please use your email address for your Username.';
		echo "<SCRIPT>
		alert('$message');
		</SCRIPT>";
	}
 }
 /****************************************
	END ClockIn CODE 
****************************************/
/****************************************
	START ClockOut CODE 
****************************************/

//Clockout validation and action
 if(isset($_POST['btnClockOut']) && ($_POST['usernameClockIn'] != "")){
	$servername = "localhost";
	$username = "root";
	$dbpassword = "Twspike1994?";
	$dbname = "wildlife";

	// Create connection
	$conn = new mysqli($servername, $username, $dbpassword, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	//SQL Statement to gather hash
	$sql = "SELECT Person_Email, Person_UserType FROM Person WHERE Person_Email = '" . $_POST['usernameClockIn'] . "'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$user = $row['Person_Email'];
			$userType = $row['Person_UserType'];
		}
		$conn->close();
		if($userType == "Volunteer" ){											//***************NEED TO MAKE A WAY TO DISTINGUISH BETWEEN REGULAR VOLUNTEERS AND TRANSPORTERS
			
			
			//////INSERT THE clock out TIME HERE INTO THE DATABASE
			
			
			header("Location: clockin.php");
			exit();
		}
		else {
		// Not a volunteer, show an error
		$message = 'Error. If you are a transporter, please use the Transporter form.';
		echo "<SCRIPT>
		alert('$message');
		</SCRIPT>";
		}
	}
	else {
	 // passwords didn't match, show an error
		$message = 'Username incorrect. Please use your email address for your Username.';
		echo "<SCRIPT>
		alert('$message');
		</SCRIPT>";
	}
 }
 /****************************************
	END ClockOut CODE 
****************************************/
 /****************************************
	START Transporter CODE 
****************************************/
//Clockin validation and action
 if(isset($_POST['btnTransporter']) && ($_POST['usernameTransporter'] != "")){
	$servername = "localhost";
	$username = "root";
	$dbpassword = "Twspike1994?";
	$dbname = "wildlife";

	// Create connection
	$conn = new mysqli($servername, $username, $dbpassword, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	//SQL Statement to gather hash
	$sql = "SELECT Person_Email, Person_UserType FROM Person WHERE Person_Email = '" . $_POST['usernameTransporter'] . "'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$user = $row['Person_Email'];
			$userType = $row['Person_UserType'];
		}
		
		if($userType == "Volunteer" ){									//***************NEED TO MAKE A WAY TO DISTINGUISH BETWEEN REGULAR VOLUNTEERS AND TRANSPORTERS
			
			
			//////INSERT THE transporter INFO HERE INTO THE DATABASE
			
			
			$conn->close();
			header("Location: transporter.php");
			exit();
		}
		else {
		// Not a volunteer, show an error
		$message = 'Error. For Transporter use only.';
		echo "<SCRIPT>
		alert('$message');
		</SCRIPT>";
		}
	}
	else {
	 // passwords didn't match, show an error
		$message = 'Username incorrect. Please use your email address for your Username.';
		echo "<SCRIPT>
		alert('$message');
		</SCRIPT>";
	}
 }

 /****************************************
	END Transporter CODE 
****************************************/
 /****************************************
	START Login CODE 
****************************************/

if(isset($_POST['btnLogIn'])){
	// Help with password hashing from https://sunnysingh.io/blog/secure-passwords
		//Get PasswordHash file
		require("PasswordHash.php");
		//Construct the class
		$hasher = new PasswordHash(8, false);
		// Password from form input
		$password = $_POST["password"];
		
		if (strlen($password) > 72) { die("Password must be 72 characters or less"); }
		// Just in case the hash isn't found
		$stored_hash = "*";
		// Retrieve the stored hash
		$servername = "localhost";
		$username = "root";
		$dbpassword = "Twspike1994?";
		$dbname = "wildlife";
 
		// Create connection
		$conn = new mysqli($servername, $username, $dbpassword, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		//SQL Statement to gather hash
		$sql = "SELECT Person_PasswordHash, Person_UserType FROM Person WHERE Person_Email = '" . $_POST['usernameLogIn'] . "'";
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$stored_hash = $row['Person_PasswordHash'];
				$userType = $row['Person_UserType'];
			}
		}
		
		$conn->close();
		// Check that the password is correct, returns a boolean
		$check = $hasher->CheckPassword($password, $stored_hash);
		
		if ($check) {
			
			//Save session variable to be used on the next page
			$_SESSION['emailSession'] = $_POST['usernameLogIn'];
			$_SESSION['userType'] = $userType;
		
		  // passwords matched! Go to the User Type specific page (Depends if they are applicant, volunteer, team leads, staff)
			if ($userType == "Applicant"){
				header("Location: applicantprofile.php");
			exit();
			}
			if ($userType == "Volunteer"){
				header("Location: profile.php");
			exit();
			}
			if ($userType == "Team Lead"){
				header("Location: profile2.php");
			exit();
			}
			if ($userType == "Staff"){
				header("Location: staffprofile.php");
			exit();
			}
			
			
		} else {

		 // passwords didn't match, show an error
			
$message = 'Username and/or Password is incorrect. Please use your email address for your Username.';

echo "<SCRIPT>
alert('$message');
</SCRIPT>";
		}
	} 
/****************************************
	END Login CODE 
****************************************/
?>

<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Wildlife Center of Virginia Volunteers</title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--Add Jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>





<link rel="stylesheet" media="screen" href="css/style.css" />

</head>

<!--clock in form-->
<body class="login">
    <div class="login-box main-content panel panel-default">
      <header class="panel-heading"><img src="../484phpWork1/images/logo_small.png" alt="Wildlife Logo"></header>
    	<section class="panel-body">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" id="usernameClockIn"  class="form-control" value="" name="usernameClockIn" required="required" placeholder="Username" />
            </div>
          </div>
          <div class="form-group">
            <div class="form-inline">
              <button  ID="btnClockIn" name="btnClockIn" class="btn btn-default col-sm-3 col-sm-offset-3" type="submit">Clock In</button>
              <button  ID="btnClockOut" name="btnClockOut" class="btn btn-default" type="submit">Clock Out</button>
            </div>
          </div>
</form>
<!--end clock in form-->

<!--Accordion Start-->
<div class="bs-example">
    <div class="panel-group" id="accordion">

       <!--Transporter Form-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Transporter</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <form id="form" method="post" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" id="usernameTransporter"  class="form-control" value="" name="usernameTransporter" required="required" placeholder="Username" />
            </div>
          </div>
		  <div class="form-group">
            <div class="col-sm-12">
              <input type="text" id="address"  class="form-control" value="" name="address" required="required" placeholder="Pick Up Address" />
            </div>
          </div>
		  <div class="form-group">
            <div class="col-sm-12">
              <input type="text" id="species"  class="form-control" value="" name="species" required="required" placeholder="Animal Species" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="number" id="hours" class="form-control" value="" name="hours" required="required" placeholder="Hours" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="number" id="mileage" class="form-control" value="" name="mileage" required="required" placeholder="Mileage" />
            </div>
          </div>
          <div><a target="_blank" href="https://www.google.com/maps/dir///Wildlife+Center+of+VA,+South+Delphine+Avenue,+Waynesboro,+VA//@38.0808252,-78.9864842,13z/data=!4m11!4m10!1m0!1m0!1m5!1m1!1s0x89b3640efe4889c9:0xf47416d422aa90a9!2m2!1d-78.9137609!2d38.0392567!1m0!3e0">Click here to check how far you drove.</a></div>
          <br>
          <div class="form-group">
            <div class="col-sm-2 col-sm-offset-4">
              <button name="btnTransporter" class="btn btn-default" type="submit">Submit</button>
            </div>
          </div>
</form>
  <!--end transporter form-->
                    
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
<!--Log in Form-->
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Log in</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
  <form id="form" method="post" class="form-horizontal">
    			<div class="form-group">
    			  <div class="col-sm-12">
      				<input type="text" id="usernameLogIn"  class="form-control" value="" name="usernameLogIn" required="required" placeholder="Username" />
    				</div>
    			</div>
    			<div class="form-group">
    			  <div class="col-sm-12">
      				<input type="password" id="password" class="form-control" value="" name="password" required="required" placeholder="Password" />
      			</div>
    			</div>
    			<div class="form-group">
    			  <div class="col-sm-2 col-sm-offset-4">
      				<button ID="btnLogIn" name="btnLogIn" class="btn btn-default" type="submit">Login</button>
      			</div>
      		</div>
</form>
<!--end log in form-->
                    
                    
                </div>
            </div>
        </div>

       
    <!--Apply Form-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Apply</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                <form id="form" method="post" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-12">
              <input type="text" id="username"  class="form-control" value="" name="username" required="required" placeholder="Email Address" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-2 col-sm-offset-4">
              <button class="btn btn-default" name = 'apply' type="submit">Apply</button>
            </div>
          </div>


</form>    
<!--end apply form-->



<?php

if(isset($_POST['apply']))
{
        $server = "localhost";
        $user = "root";
        $password = "password";
        $database = "wildlife";
        $conn = mysqli_connect($server, $user, $password, $database);
        if (mysqli_connect_errno()) 
        {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    
    if(!mysqli_select_db($conn, 'wildlife'))
        {
           echo "Database Not Selected";
        }
       
$emailAddress = $_POST['username'];


require_once('C:\inetpub\wwwroot\PHPMailer\class.phpmailer.php');      
require 'C:\inetpub\wwwroot\PHPMailer\PHPMailerAutoload.php';


$mail = new PHPMailer;

$mail->IsSMTP();
$mail->Host = "smtp.gmail.com"; // may need to change host depending on which email client we are using
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Username = "<enter wildife email here>";  // the email we want to send from (wildlife email)
$mail->Password = "<enter password here>"; // above emails password
$mail->Port = "465"; // may need to change port depending on which email client we are using


$mail->setFrom('<enter wildlife email here>', 'Wildlife Center of Virginia');
$mail->addAddress($emailAddress, 'Applicant');     // recipient

$mail->Subject = 'Wildlife Center of Virginia Volunteer Opportunity';
$mail->Body    = 'Thank you for your interest in the Wildlife Center!<br>
                  Please follow the link provided to fill out an application.
                  ';

if(!$mail->send()) {
   echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
 else {
	  
  echo "<script>window.top.location='apply_confirmation.php'</script>";
  
}




}
        ?>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>


    		
    		
    	</section>
    </div>






</body>
</html>