<!DOCTYPE html>


<?php
//Session variables: KEEP AT TOP
session_start();
$userID = $_SESSION['userID'];
$userTypeSession = $_SESSION['userType']; 


//UNCOMMENT THIS OUT WHEN READY TO RUN PROGRAM FOR PRESENTATION OR TURN IN
/*
//If Session is empty, redirect user to restricted access notification
if ($userTypeSession != "Team Lead"){
	header("Location: restrictedAccess.php");
	exit();
}

*/



//Determine the "userType" of the persons profile in order to determine if "Accept Application" button should be shown






//THIS IS THE TEAM LEAD VIEW, SO MAKE SURE YOU ARE GETTING THE VOLUNTEER'S INFO AND NOT TEAM LEAD. DO NOT USE THE $userID variable








//Download docs
/*
if(isset($_POST['downloadResume']))
	{
		$connection =  mysqli_connect("localhost","root","Twspike1994?","wildlife")
                             or die('Database Connection Failed');
             mysqli_set_charset($connection,'utf-8');

          $id = 1; // Change to whatever necessary Person_ID
		  $whichDoc = ""; //Change to the docType (Resume, Picture, LetterOfReccomendation1, LetterOfReccomendation2, etc.)
          $query = "SELECT * " ."FROM *****TABLE NAME HERE****** WHERE Person_ID = '$id' AND WhichDoc = '$whichDoc'"; //query here to put in document and type of document. IDK how to write the join for that
          $result = mysqli_query($connection,$query) 
                     or die('Error, query failed');
         list($id, $file, $type, $size,$content) =   mysqli_fetch_array($result);
           //echo $id . $file . $type . $size;
         header("Content-length: $size");
         header("Content-type: $type");
         header("Content-Disposition: attachment; filename=$file");
         ob_clean();
         flush();
         echo $content;
         mysqli_close($connection);
         exit;
	}
*/
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
    
                  <a class="navbar-brand" href="profile2.php"><img src="../484phpWork1/images/logo_short.png" alt="Wildlife Small Logo"></a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul id="main-nav" class="nav navbar-nav">
                            <li class="action">

                            <li class="active"><a href="profile2.php">Profile</a></li>
                            <li><a href="calendar2.php">Calendar</a></li>
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
                                                 <a href="editprofile2.php" class="btn btn-default pull-right" rel="#overlay">Edit Profile<i class="fa fa-question-circle"></i></a>
                                                 <h2>
                                                     John Doe
                                                 </h2>
                                                 <h4>Team Leader</h4>
                                             </hgroup>
                                            
                                        </header>
<div class="content">
                                        <h3>Contact Information</h3>
<div class="panel panel-default">
  <div class="panel-body">
    <strong>Email - </strong> johndoe@gmail.com
  </div>
</div>                                        
<div class="panel panel-default">
  <div class="panel-body">
    <strong>Phone - </strong> (540) 555-7836
  </div>
</div>    
<div class="panel panel-default">
  <div class="panel-body">
    <strong>Address - </strong> 125 Mulberry Lane, Harrisonburg, VA 22801
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
                               </div>
							   <p>Download Resume:</p>
							   <button name="downloadResume" class="btn btn-default" type="submit">Download</button>
							   <p>Download Letter Of Recommendation:</p>
							   <button name="downloadLetter" class="btn btn-default" type="submit">Download</button>
							   </div>
							   
                                <div class="preview-pane col-md-5">
        <div class="panel panel-default"><div class="panel-body"><h4>Team Lead Notes:</h4>  </ul>
    None
                                    </div></div>
                                         <ul class="additionalinfo" class="fa-ul pull-right">
                                            <h2>Additional info</h2>
                                            <h4>Allergies</h4> None
                                            <h4>Physical Limitations</h4> None
                                            <h4>Rabies Vaccinated</h4> Yes
                                            <h4>Permit</h4> No
                                            <h4>Emergency Contact</h4> Sean Young (540)555-8202

                                       
    <h4>Weekly Availability</h4>  </ul>
    <img src="images/joecalendar.png" alt="calendar" class="img-responsive">
	<div class="col-sm-2 col-sm-offset-4">
		<button name="btnAccept" class="btn btn-default" <?php if($userType != "Applicant") echo 'style="display:none;"'?> type="submit">Accept Applicant</button>
	</div>
	  </div>
                                    


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
