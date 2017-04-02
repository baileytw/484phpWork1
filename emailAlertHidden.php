<!DOCTYPE html>
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>

<?php

$server = "localhost";
$user = "root";
$password = "Twspike1994?";
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

$emailAddress = 'seilermr@dukes.jmu.edu';			//CHANGE TO GET FROM DATABASE

require 'C:\inetpub\wwwroot\PHPMailer\PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'wcvtestemail@gmail.com';                 // SMTP username
$mail->Password = '1wildcva';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('wcvtestemail@gmail', 'Wildlife Center of Virginia');
$mail->addAddress($emailAddress, 'Applicant');     // recipient
//$mail->addAddress('ellen@example.com');               //Add team lead
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML '. $emailAddress . ' message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


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
    	<section class="panel-body">
		
		<div id="warning">
		<img src="../484phpWork1/images/owl.jpg" alt="Warning">
		</div>
<ul><li>&nbsp;Oops! You caught us off guard. Owl you need to do is fly back to the login screen.</li></ul>

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