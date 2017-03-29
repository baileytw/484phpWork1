<?php ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Wildlife Center of Virginia Application</title>

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
                       <a class="navbar-brand" href=""><img src="../484phpWork1/images/logo_short.png" alt="Wildlife Small Logo"></a>
                    </div>
    
                  
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul id="main-nav" class="nav navbar-nav">
                            <li class="action">

                            <li class="active"><a href="forms.php">Application</a></li>
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
    
                    <section class="col-md-12">
                        <div class="main-section">

                            <div class="main-content panel panel-default">
                                <header class="panel-heading clearfix">

                                    <h2 class="panel-title">
                                        Wildlife Center of Virginia - Application
                                    </h2>
                                </header>
                                <section class="panel-body container-fluid">

                                    <div class="leading">
                                    	  <form id="form" method="post" enctype = "multipart/form-data"  class="form-horizontal panel panel-default">
                                            <header class="panel-heading"><h2 class="panel-title">Basic Information</h2></header>
            
                                            <fieldset class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-2">First Name *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'firstName' name = 'firstName' type="text" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Last Name *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'lastName' name = 'lastName' type="text" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Password *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'password'type="password" name="password" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Password check </label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="password" name="check" data-equals="password" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Email *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'email' name = 'email' type="email" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Phone *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'phone' type="number" name="phone" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Age *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'age' type="number" name="age" required="required" value="0" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Address *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'address' type="text" name="address" />
                                                    </div>
                                                </div>
<div class="form-group">
                                                    <label class="col-sm-5">Do you have a permit to rehabilitate wildlife?</label>
                                                    <div class="col-sm-7">
                                                        <div class="checkbox">
														<input type="radio" name="permit" value="Yes"> Yes
														<input type="radio" name="permit" value="No"> No

                                                        </div>
                                                    </div>
                                                </div>
<div class="form-group">
                                                    <label class="col-sm-5">Are you rabies vaccinated?</label>
                                                    <div class="col-sm-7">
                                                        <div class="checkbox">
                                                            <input type="radio" name="rabies" value="Yes"> Yes
															<input type="radio" name="rabies" value="No"> No
                                                        </div>
                                                    </div>
                                                </div>

<h4>Please answer the following questions.</h4>
                                                
<div class="form-group">
         <label class="col-sm-3">Do you have any allergies or physical limitations?</label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'allergies' name = 'allergies' rows="5" cols="90"></textarea>
                            </div>
 <label class="col-sm-3">Please describe your availability weekly and seasonally. WCVV needs consistency in scheduling, and is open on weekends.</label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'availability' name = 'availability'rows="5" cols="90"></textarea>
                            </div>                            
                                                
         <label class="col-sm-3">Why are you interested in volunteering as an outreach docent?</label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'whyInterested' name = 'whyInterested'rows="5" cols="90"></textarea>
                            </div>
                            
                            
         <label class="col-sm-3">What’s an environmental or wildlife issue you feel passionately about, and why?</label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'wildlifeIssue' name = 'wildlifeIssue'rows="5" cols="90"></textarea>
                            </div>
                            

         <label class="col-sm-3">Do you have prior experience speaking to the public? Please describe.</label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'priorExperience' name ='priorExperience'rows="5" cols="90"></textarea>
                            </div>
                           
         <label class="col-sm-3">Do you belong to any animal rights groups (PETA, The Humane Society, etc.)? If so, which ones?</label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'groups' name = 'groups' rows="5" cols="90"></textarea>
                            </div>
                           
         <label class="col-sm-3">What do you think you’d bring to the outreach volunteer team?</label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'valueAdded' name = 'valueAdded' rows="5" cols="90"></textarea>
                            </div>
<div class="col-sm-12">Please upload a current resume.</div>
<div class="fileinput fileinput-new col-sm-3 col-sm-offset-3 btn-lg" data-provides="fileinput">
    <span class="btn btn-default btn-file">

    	<input name="userfile" id = "userfile" type="file" multiple /></span>
    <span class="fileinput-filename col-sm-3"></span>
    <span class="fileinput-new"></span>
</div>

                            </div>
                            

                                                
                                                
                                                
                                            
                                            </div>
                                        </div>
                                    </div>
                            
                                            </fieldset>
            
                                            <footer class="panel-footer">
                                                <button class="btn btn-primary" type="submit" name="upload" id="upload" >Submit form</button>
                                                <button class="btn btn-default" type="reset">Reset</button>
                                            </footer>
                                        </form>

										<?php
if(isset($_POST['upload']))
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

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userName = $_POST['email'];
        $email = $_POST['email'];
        $middleInitial = '';
        $primaryPhone = $_POST['phone'];
        $secondaryPhone = 5555;
        $city = '';
        $county = '';
        $state = 'VA';
        $zip = 0;
        $dob = 10/10/1999;
        $street = $_POST['address'];
        $tmpName  = $_FILES['userfile']['tmp_name'];
		$fileSize = $_FILES['userfile']['size'];

		$fp      = fopen($tmpName, 'r');
		$picture = fread($fp, filesize($tmpName));
		$picture = addslashes($picture);
		fclose($fp);
		$status = '';
		$rabiesVac = 10/10/2010;
		$permitrehab ='';
		$lastVolunteered = 10/10/2011;
		$allergies = $_POST['allergies'];
		$specialNeeds = '';
		$workOutside = '';
		$totalHours = 10;
		$workOutsideLimitations = '';
		$lift40 = '';






		
		$query = "INSERT INTO person (Person_UserName, Person_FirstName, Person_MiddleInitial, Person_LastName, Person_Email, Person_PhonePrimary, Person_PhoneAlternate, Person_StreetAddress, Person_City, Person_County,
			Person_HomeState, Person_ZipCode, Person_DateOfBirth, Person_Picture, Person_Status, Person_RabiesVaccinationDate, Person_RehabilitatePermitCategory, Person_Allergies, Person_SpecialNeeds,
			Person_WorkOutside, Person_OutsideLimitations, Person_Lift40Lbs, Person_TotalVolunteeredHours, Person_LastVolunteered)
					VALUES ('$userName', '$firstName', '$middleInitial', '$lastName', '$email', '$primaryPhone', '$secondaryPhone', '$street', '$city',
					'$county', '$state', '$zip', NOW(), '$picture', '$status', NOW(), '$permitrehab', '$allergies', '$specialNeeds', '$workOutside',
					'$workOutsideLimitations', '$lift40', '$totalHours', NOW())";

					mysqli_query($conn, $query) or die(mysqli_error($conn)); 

}
					
/* if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
	$server = "localhost";
        $user = "root";
        $password = "Twspike1994?";
        $database = "test_1";
        $conn = mysqli_connect($server, $user, $password, $database);
        if (mysqli_connect_errno()) 
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
		
		if(!mysqli_select_db($conn, 'test_1'))
        {
            echo "Database Not Selected";
        }
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}


$query = "INSERT INTO picture (name_a, type_a, size, content ) ".
"VALUES ('$fileName', '$fileType', '$fileSize', '$content')";

mysqli_query($conn, $query) or die('Error, query failed'); 


echo "<br>File $fileName uploaded<br>";
}  */
?>
                                    </div>
                
    
                    <!-- Main Section End -->

                </div>
            </div>
            <div id="push"></div>
        </section>
    </div>
    
    <footer>
        <div id="footer-inner" class="container">
            <div>
                <span class="pull-right" class="footer" > &copy; 2017. All rights reserved. Owl Team
            </div>
        </div>
    </footer>

    <!-- simple dialog -->
    <div class="modal fade" id="simpledialog" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- yes/no dialog -->
    <div class="modal fade" id="yesno" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- user input dialog -->
    <div class="modal fade" id="prompt" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">This is a modal dialog</h4>
          </div>
          <div class="modal-body">
              <p>
                  You can only interact with elements that are inside this dialog.
                  To close it click a button or use the ESC key.
              </p>
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="control-label">Recipient:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="message-text" class="control-label">Message:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- render blocking scripts -->

    <!-- jQuery JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- Main Script -->
    <script src="js/global.js"></script>
</body>
</html>
