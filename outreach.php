
<!DOCTYPE html>
<?php

/* 
PERSON, APPLICATION, AND OUTREACH SUBMITS TO DATABASE.

THE FILL IN FIELDS FOR THE FIRST TWO SHORT ANSWERS DO NOT GO IN THE DATABASE. NOT SURE IF WE NEED THEM.

DOCUMENTS IS HARDCODED FOR NOW AS A DEFAULT VALUE OF '1'. 
	WE NEED TO FIGURE OUT HOW TO GET THIS WORKING

*/




ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>




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
                                    	  <form id="form" method="post" enctype = "multipart/form-data"  class="form-horizontal panel panel-default" >
                                            <header class="panel-heading"><h2 class="panel-title">Basic Information</h2></header>
            
                                            <fieldset class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-2">First Name *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'firstName' name = 'firstName' value="<?php if (isset($_POST['upload'])) echo ($_POST['firstName']);?>" type="text" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Last Name *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'lastName' name = 'lastName' value="<?php if (isset($_POST['upload'])) echo ($_POST['lastName']);?>" type="text" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Create Password *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'password'type="password" name="password" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Confirm Password *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="password" name="check" data-equals="password" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Email *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'email' name = 'email' value="<?php if (isset($_POST['upload'])) echo ($_POST['email']);?>" type="email" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Phone *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'phone' type="number" name="phone" value="<?php if (isset($_POST['upload'])) echo ($_POST['phone']);?>" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Age *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'age' type="number" name="age" value="<?php if (isset($_POST['upload'])) echo ($_POST['age']);?>" required="required" value="0" />
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label class="col-sm-2">Address *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id= 'address' name="address" type="text" value="<?php if (isset($_POST['upload'])) echo ($_POST['address']);?>" placeholder="street" name="street" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">City *</label>
                                                    <div class="col-sm-2">
                                                      <input class="form-control" type="text" id="city" name="city" value="<?php if (isset($_POST['upload'])) echo ($_POST['city']);?>" placeholder="City" name="city" />
                                                    </div>

                                                    <label class="col-sm-1">State *</label>
                                                    <div class="col-sm-3">
													
													<select name="state">
													<option value="VA">Virginia</option>
<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option>
</select> 
                                                    </div>
                                            
                                                    <label class="col-sm-2">Zip Code *</label>
                                                    <div class="col-sm-2">
                                                      <input class="form-control" type="text" id="zipcode" name="zipcode" value="<?php if (isset($_POST['upload'])) echo ($_POST['zipcode']);?>" placeholder="Zip" name="zip" />
                                                    </div>
                                                    
                                                </div>
                                                                                                  <div class="form-group">
                                                    <label class="col-sm-2">Date of Birth *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="text" id="dob" name="dob" value="<?php if (isset($_POST['upload'])) echo ($_POST['dob']);?>" placeholder="12/01/95" name="street" />
                                                    </div>
                                                </div>
<div class="form-group">
                                                    <label class="col-sm-5">Do you have a permit to rehabilitate wildlife?</label>
                                                    <div class="col-sm-7">
                                                        <div class="checkbox" >
														<input type="radio" name="permit" value="Yes" <?php if (isset($_POST['permit']) && $_POST['permit'] == 'Yes') echo ' checked="checked"';?>> Yes
														<input type="radio" name="permit" value="No" <?php if (isset($_POST['permit']) && $_POST['permit'] == 'No') echo ' checked="checked"';?>> No

                                                        </div>
                                                    </div>
                                                </div>
<div class="form-group">
                                                    <label class="col-sm-5">Are you rabies vaccinated?</label>
                                                    <div class="col-sm-7">
                                                        <div class="checkbox">
                                                            <input type="radio" name="rabies" value="Yes" <?php if (isset($_POST['rabies']) && $_POST['rabies'] == 'Yes') echo ' checked="checked"';?>> Yes
															<input type="radio" name="rabies" value="No" <?php if (isset($_POST['rabies']) && $_POST['rabies'] == 'No') echo ' checked="checked"';?>> No
                                                        </div>
                                                    </div>
                                                </div>

<h4>Please answer the following questions.</h4>
                                                
<div class="form-group">
         <label class="col-sm-3">Do you have any allergies or physical limitations?</label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'allergies' name = 'allergies' value="<?php if (isset($_POST['upload'])) echo ($_POST['allergies']);?>" rows="5" cols="90"></textarea>
                            </div>
 <label class="col-sm-3">Please describe your availability weekly and seasonally. WCVV needs consistency in scheduling, and is open on weekends.</label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'availability' name = 'availability' value="<?php if (isset($_POST['upload'])) echo ($_POST['availability']);?>"rows="5" cols="90"></textarea>
                            </div>                            
                                                
         <label class="col-sm-3">Why are you interested in volunteering as an outreach docent?</label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'whyInterested' name = 'whyInterested' value="<?php if (isset($_POST['upload'])) echo ($_POST['whyInterested']);?>" rows="5" cols="90"></textarea>
                            </div>
                            
                            
         <label class="col-sm-3">What’s an environmental or wildlife issue you feel passionately about, and why?</label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'wildlifeIssue' name = 'wildlifeIssue' value="<?php if (isset($_POST['upload'])) echo ($_POST['wildlifeIssue']);?>" rows="5" cols="90"></textarea>
                            </div>
                            

         <label class="col-sm-3">Do you have prior experience speaking to the public? Please describe.</label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'priorExperience' name ='priorExperience' value="<?php if (isset($_POST['upload'])) echo ($_POST['priorExperience']);?>" rows="5" cols="90"></textarea>
                            </div>
                        
         <label class="col-sm-3">Do you belong to any animal rights groups (PETA, The Humane Society, etc.)? If so, which ones? </label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'animalRightsGroup' name ='animalRightsGroup' value="<?php if (isset($_POST['upload'])) echo ($_POST['animalRightsGroup']);?>" rows="5" cols="90"></textarea>
                            </div>                  
						   
						   
         <label class="col-sm-3">What do you think you’d bring to the outreach volunteer team?</label>
                <div class="col-sm-9">
                <textarea class="form-control" id = 'valueAdded' name = 'valueAdded' value="<?php if (isset($_POST['upload'])) echo ($_POST['valueAdded']);?>" rows="5" cols="90"></textarea>
                            </div>
<div class="col-sm-12 col-sm-offset-3">Please upload a current resume.</div>
<div class="fileinput fileinput-new col-sm-3 col-sm-offset-3 btn-lg" data-provides="fileinput">
    <span class="btn btn-default btn-file">

    	<input type="file" multiple /></span>
    <span class="fileinput-filename col-sm-3"></span>
    <span class="fileinput-new"></span>
</div>
<div class="col-sm-12 col-sm-offset-3">Recommendation Letter 1</div>
<div class="fileinput fileinput-new col-sm-3 col-sm-offset-3 btn-lg" data-provides="fileinput">
    <span class="btn btn-default btn-file">
	    	<input type="file" multiple /></span>
    <span class="fileinput-filename col-sm-3"></span>
    <span class="fileinput-new"></span>
</div>
<div class="col-sm-12 col-sm-offset-3">Recommendation Letter 2</div>
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
                                                <input class="btn btn-default" type="submit" name = 'upload' type="submit" id = 'upload' value="Submit form"/>
                                                <button class="btn btn-default" type="reset">Reset</button>
                                            </footer>
                                        </form>

<?php
/****************************************
	START DATABASE UPLOAD CODE 
****************************************/
if(isset($_POST['upload']))
{
	if($_POST['password'] == $_POST['check']){
	
	
		/****************************************
			START PASWWORD CODE 
		****************************************/

		require("PasswordHash.php");
		$hasher = new PasswordHash(8, false);
		// Retrieve password
		$password = $_POST["password"];
		// Limit passwords to 72 characters to help prevent DoS attacks
		if (strlen($password) > 72) { die("Password must be 72 characters or less"); }
		// The $hash variable will contain the hash of the password
		$hash = $hasher->HashPassword($password);
		if (strlen($hash) >= 20) {
			$passwordHashPassed = $hash;
				
		} else {
			
		 // something went wrong

		}

		/****************************************
			END PASWWORD CODE 
		****************************************/

		$server = "localhost";
        $user = "root";
        $password = "starwars97";
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
		$userType = "Applicant";
		$passwordHash = $passwordHashPassed;
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
/*
		$fp      = fopen($tmpName, 'r');					//ZACH MOVED PICTURE TO THE DOCUMENTS TABLE
		$picture = fread($fp, filesize($tmpName));
		$picture = addslashes($picture);
		fclose($fp);
		*/
		
		$status = '';
		//$rabiesVac = 10/10/2010;
		$permitrehab ='';
		$lastVolunteered = 10/10/2011;
		$allergies = $_POST['allergies'];
		$specialNeeds = '';
		$workOutside = '';
		$totalHours = 10;
		$workOutsideLimitations = '';
		$lift40 = '';

		$whyInterested = $_POST['whyInterested'];
		$wildlifeIssue = $_POST['wildlifeIssue'];
		$priorExperience = $_POST['priorExperience'];
		$animalRightsGroup = $_POST['animalRightsGroup'];
		$valueAdded = $_POST['valueAdded'];






		
		$query = "INSERT INTO person (Person_UserName, Person_PasswordHash,Person_UserType, Person_FirstName, Person_MiddleInitial, Person_LastName, Person_Email, Person_PhonePrimary, Person_PhoneAlternate, Person_StreetAddress, Person_City, Person_County,
			Person_HomeState, Person_ZipCode, Person_DateOfBirth, Person_Status, Person_RehabilitatePermitCategory, Person_Allergies, Person_SpecialNeeds,
			Person_WorkOutside, Person_OutsideLimitations, Person_Lift40Lbs, Person_TotalVolunteeredHours, Person_LastVolunteered)
					VALUES ('$userName', '$passwordHash', '$userType', '$firstName', '$middleInitial', '$lastName', '$email', '$primaryPhone', '$secondaryPhone', '$street', '$city',
					'$county', '$state', '$zip', NOW(), '$status', '$permitrehab', '$allergies', '$specialNeeds', '$workOutside',
					'$workOutsideLimitations', '$lift40', '$totalHours', NOW())";

					 mysqli_query($conn, $query) or die(mysqli_error($conn));
			
					

			if(!mysqli_query($conn,$query))

			{
				echo("Error description: " . mysqli_error($conn));
			}

			else
			{
				echo "Application Sent! {person table}";
			}
			
			
			
			// PersonApplication
			
			
			
			$sql = "SELECT MAX(Person_ID) FROM Person";
			$result = $conn->query($sql);
			$personID = null;
			if($result->num_rows > 0) {
				//output data of each row
				while($row = $result->fetch_assoc()) {
					$personID = $row['MAX(Person_ID)'];
				}
			}
			
			$applicationQuery = "INSERT INTO PersonApplication (	PersonApplication_PersonID,
																	PersonApplication_DateApplied,
																	PersonApplication_Documents,
																	PersonApplication_DepartmentApplied)
														VALUES (	'$personID',
																	NOW(),
																	'1',
																	'1')";
			
			 mysqli_query($conn, $applicationQuery) or die(mysqli_error($conn));
			
			
			// outReach specific
			
			
			$sql = "SELECT MAX(PersonApplication_ID) FROM PersonApplication";
			$result = $conn->query($sql);
			$applicationID = null;
			if($result->num_rows > 0) {
				//output data of each row
				while($row = $result->fetch_assoc()) {
					$applicationID = $row['MAX(PersonApplication_ID)'];
				}
			}
			
		$outreachQuery = "INSERT INTO outreachApp (	OutreachApp_ApplicationID,
													OutreachApp_WhyInterested,
													OutreachApp_PassionateWildlifeIssue,
													OutreachApp_ExperiencePublicSpeaking,
													OutreachApp_BelongToAnimalRightsGroup,
													OutreachApp_BringToTeam)
										VALUES (	'$applicationID',
													'$whyInterested',
													'$wildlifeIssue',
													'$priorExperience',
													'$belongToGroup',
													'$valueAdded')";
													
													/*
													$whyInterested = $_POST['whyInterested'];
													$wildlifeIssue = $_POST['wildlifeIssue'];
													$priorExperience = $_POST['priorExperience'];
													$animalRightsGroup = $_POST['animalRightsGroup'];
													$valueAdded = $_POST['valueAdded'];
*/

					mysqli_query($conn, $outreachQuery) or die(mysqli_error($conn)); 


	}
	else{
		$message = 'Password values do not match. Please try again.';

echo "<SCRIPT>
alert('$message');
</SCRIPT>";
	}
	
}
/****************************************
	END DATABASE UPLOAD CODE 
****************************************/					
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
