<!DOCTYPE html>

<?php
//Session variables: KEEP AT TOP
session_start();
$userID = $_SESSION['userID'];
$userTypeSession = $_SESSION['userType']; 


//UNCOMMENT THIS OUT WHEN READY TO RUN PROGRAM FOR PRESENTATION OR TURN IN
/*
//If Session is empty, redirect user to restricted access notification
if ($userTypeSession != "Volunteer"){
	header("Location: restrictedAccess.php");
	exit();
}

*/
//Populate fields code
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
//SQL Statement to gather info
$sql = "SELECT Person_FirstName, Person_LastName, Person_PhonePrimary, Person_Email, Person_StreetAddress, Person_City,
Person_State, Person_Zipcode FROM Person WHERE Person_ID = " .$userID;
$result = $conn->query($sql);
if ($result->num_rows > 0){
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$first = $row['Person_FirstName'];
		$last = $row['Person_LastName'];
		$phone = $row['Person_PhonePrimary'];
		$email = $row['Person_Email'];
		$street = $row['Person_StreetAddress'];
		$city = $row['Person_City'];
		$state = $row['Person_State'];
		$zipcode = $row['Person_Zipcode'];
	}
}
else {
 
}
$conn->close();
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
<body>
    <div id="wrapper">
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
    
                  <a class="navbar-brand" href="profile.php"><img src="../484phpWork1/images/logo_short.png" alt="Wildlife Small Logo"></a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul id="main-nav" class="nav navbar-nav">
                            <li class="action">

                            <li class="active"><a href="profile.php">Profile</a></li>
                            <li><a href="calendar.php">Calendar</a></li>
                            <li><a href="index.php">Sign Out</a></li>
                                </ul>
                            </li>
                        </ul>
                      
                    </div>
                </div>
            </nav>
        </header>
        
        <section>
            <div class="container">
                <div class="row">

    
    
                    <!-- Main Section -->



                    <section class="col-md-9 no-padding">
                        <div class="main-section">
                        
                            <div class="container-fluid no-padding">
                                <div class="col-md-7 no-padding">
                                    <div class="main-content panel panel-default no-margin">
                                        <header class="panel-heading clearfix">

                                             <img src="images/johndoe.png" class="img-responsive col-sm-4"></span>
                                             <hgroup>
                                                 <a href="editprofile.php" class="btn btn-default pull-right" rel="#overlay">Edit Profile<i class="fa fa-question-circle"></i></a>
                                                 <h2>
                                                     <?php echo $first . " " . $last?>
                                                 </h2>
                                                 <h4>Volunteer</h4>
                                             </hgroup>
                                            
                                        </header>
<div class="content">
                                        <h3>Contact Information</h3>
<div class="panel panel-default">
  <div class="panel-body">
    <strong>Email - </strong> <?php echo $email ?>
  </div>
</div>                                        
<div class="panel panel-default">
  <div class="panel-body">
    <strong>Phone - </strong> <?php echo $phone ?>
  </div>
</div>    
<div class="panel panel-default">
  <div class="panel-body">
    <strong>Address - </strong> <?php echo $street . ", " . $city . ", " . $state . " " . $zipcode ?>
  </div>
</div>    

                                           
                                        <h3>Outreach</h3>
                                        <div class="row">
                                        <div class="col-sm-6">
                                        <h4>Tours</h4>
                                        <ul>
                                            <li>Shadow: 1</li>
                                            <li>Intro Portion: Yes</li>
                                            <li>Lead Alone: No</li>
                                        </ul>  </div>                                        <div class="col-sm-6"><h4>Off-Site Displays</h4>
               <p>Yes</p></div></div>
<div class="row col-sm-12">
<h4>Animal Handling</h4>
</div>
<div class="row">
<div class="col-sm-6">
<p>Reptile Handling Overview:</p>
<ul>      <li>Alligator</li>
            <li>Iguana</li>
                  <li>Chameleon</li></ul>
<p>No additional notes</p></div>

<div class="col-sm-6">
<p>Raptor Handling Overview:</p>
                                        <ul>
                                            <li>Falconers Knot: No</li>
                                            <li>Parrot</li>
                                            <li>Flamingo</li>
                                            <li>Raven</li> 
                                            <li>Penguin</li>
                                                                                    </ul>
                                            <p>No additional notes</p>

                                    </div></div></div>
                               </div></div>
                                <div class="preview-pane col-md-5">
                                       
                                         <ul class="additionalinfo" class="fa-ul pull-right">
                                            <h2>Additional info</h2>
                                            <h4>Allergies</h4> None
                                            <h4>Physical Limitations</h4> None
                                            <h4>Rabies Vaccinated</h4> Yes
                                            <h4>Permit</h4> No
                                            <h4>Emergency Contact</h4> Sean Young (540)555-8202

                                       
    <h4>Weekly Availability</h4>  </ul>
    <img src="images/joecalendar.png" alt="calendar" class="img-responsive">

                                    </div>
                                    <div class="preview">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                    <!-- Main Section End -->
                </div>
            </div>
            <div id="push"></div>
        </section>
    </div>
    
    <footer>
        <div id="footer-inner" class="container">
            <div>
                <span class="pull-right"> &copy; 2017. All rights reserved. Owl Team
            </div>
        </div>
    </footer>


    <!-- render blocking scripts -->

    <!-- jQuery JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- markitup! -->
    <script type="text/javascript" src="markitup/jquery.markitup.js"></script>
    <!-- markItUp! toolbar settings -->
    <script type="text/javascript" src="markitup/sets/default/set.js"></script>

    <!-- Main Script -->
    <script src="js/global.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        // Add markItUp! to your textarea in one line
        $('.markItUpTextarea').markItUp(mySettings, { root:'markitup/skins/simple/' });
    });
    </script>
</body>
</html>
