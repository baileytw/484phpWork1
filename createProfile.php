<!DOCTYPE html>
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<?php
//Session variables: KEEP AT TOP
session_start();
$codeCorrect = $_SESSION['codeCorrect']; 


//UNCOMMENT THIS OUT WHEN READY TO RUN PROGRAM FOR PRESENTATION OR TURN IN
/*
//If Session is empty, redirect user to restricted access notification
if ($codeCorrect != "Yes"){
	header("Location: restrictedAccess.php");
	exit();
}

*/

if(isset($_POST['upload']))
{
	$userType = "Volunteer";
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$primaryPhone = $_POST['phone'];
	$email = $_POST['email'];
	$street= $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zipcode'];
	//Make certain passwords match
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
		$servername = "localhost";
		$username = "root";
		$dbpassword = "Twspike1994?";
		$dbname = "wildlife";

		// Create connection
		$conn = new mysqli($servername, $username, $dbpassword, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$query = "INSERT INTO Person (Person_UserName, Person_PasswordHash,Person_UserType, Person_FirstName, Person_LastName, Person_Email, Person_PhonePrimary, Person_PhoneAlternate, Person_StreetAddress, Person_City, Person_County,
			Person_State, Person_Zipcode)
					VALUES ('$email', '$passwordHashPassed', '$userType', '$firstName', '$lastName', '$email', NULL, NULL, '$street', '$city',
					NULL, '$state', '$zip')"; 
		
		if(!mysqli_query($conn,$query))

		{
			echo("Error description: " . mysqli_error($conn));
		}

		else
		{
			$conn->close();
			header("Location: createConfirmation.php");
			exit();
		}
	}
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
                      <a class="navbar-brand" href="profile.php"><img src="../484phpWork1/images/logo_short.png" alt="Wildlife Small Logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul id="main-nav" class="nav navbar-nav">
                            <li class="action">

                            <li class="active"><a href="createProfile.php">Create Profile</a></li>
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
                                <div class="col-md-12 no-padding">
                                    <div class="main-content panel panel-default no-margin">
                                        <header class="panel-heading clearfix"></header>
										<div class="content">
											<h3 class="col-md-6">Enter Profile Information</h3>
											<div class="col-md-3">
												<div class="text-center">
												  <img src="images/johndoe.png" class="avatar img-circle img-responsive" alt="avatar">
												  <h6>Upload a photo...</h6>
												  <input type="file" class="form-control">
												</div>
											</div>
											<div class="container">
												<hr>
												<div class="row">
												
													<!-- left column -->
											  
													<!-- edit form column -->
											  
													<div class="col-md-7 col-md-offset-1 personal-info">

													<h3>Personal Info</h3>
											
													<form class="form-horizontal" method="post" role="form">
														<div class="form-group">
															<label class="col-lg-3 control-label">First Name:</label>
															<div class="col-lg-8">
															  <input class="form-control" name="firstName" value="<?php if (isset($_POST['upload'])) echo ($_POST['firstName']);?>" name="first" required="required">
															</div>
														</div>
														<div class="form-group">
															<label class="col-lg-3 control-label">Last Name:</label>
															<div class="col-lg-8">
															  <input class="form-control" name="lastName" value="<?php if (isset($_POST['upload'])) echo ($_POST['lastName']);?>" type="text" required="required">
															</div>
														</div>
														<div class="form-group">
															<label class="col-lg-3 control-label">Email:</label>
															<div class="col-lg-8">
																<input class="form-control" name="email" value="<?php if (isset($_POST['upload'])) echo ($_POST['email']);?>" type="text" required="required">
															</div>
														</div>
														<div class="form-group">
															<label class="col-lg-3 control-label">Phone:</label>
															<div class="col-lg-8">
																<input class="form-control" name="phone" value="<?php if (isset($_POST['upload'])) echo ($_POST['phone']);?>" type='tel' pattern='\d{3}[\-]\d{3}[\-]\d{4}' title='Phone Number Format: 555-555-5555'>
															</div>
														</div>
														<div class="form-group">
															<label class="col-lg-3 control-label">Alternate Phone:</label>
															<div class="col-lg-8">
																<input class="form-control" name="phoneAlt" value="<?php if (isset($_POST['upload'])) echo ($_POST['phoneAlt']);?>" type='tel' pattern='\d{3}[\-]\d{3}[\-]\d{4}' title='Phone Number Format: 555-555-5555'>
															</div>
														</div>
														<div class="form-group">
															<label class="col-lg-3 control-label">Address:</label>
															<div class="col-lg-8">
																<input class="form-control" name="street" value="<?php if (isset($_POST['upload'])) echo ($_POST['street']);?>" type="text" required="required">
															</div>
														</div>
														<div class="form-group">
															<label class="col-lg-3 control-label">City:</label>
															<div class="col-lg-8">
																<input class="form-control" name="city" value="<?php if (isset($_POST['upload'])) echo ($_POST['city']);?>" type="text" required="required" />
															</div>
														</div>
														<div class="form-group">
															<label class="col-lg-3 control-label">State:</label>
															<div class="col-lg-8">
																
																<select name="state">
																	<option value="<?php if (isset($_POST['upload'])) echo ($_POST['state']);?>"</option>
																	<option value="Virginia">Virginia</option>
																	<option value="Alabama">Alabama</option>
																	<option value="Alaska">Alaska</option>
																	<option value="Arizona">Arizona</option>
																	<option value="Arkansas">Arkansas</option>
																	<option value="California">California</option>
																	<option value="Colorado">Colorado</option>
																	<option value="Connecticut">Connecticut</option>
																	<option value="Delaware">Delaware</option>
																	<option value="Florida">Florida</option>
																	<option value="Georgia">Georgia</option>
																	<option value="Hawaii">Hawaii</option>
																	<option value="Idaho">Idaho</option>
																	<option value="Illinois">Illinois</option>
																	<option value="Indiana">Indiana</option>
																	<option value="Iowa">Iowa</option>
																	<option value="Kansas">Kansas</option>
																	<option value="Kentucky">Kentucky</option>
																	<option value="Louisiana">Louisiana</option>
																	<option value="Maine">Maine</option>
																	<option value="Maryland">Maryland</option>
																	<option value="Massachusetts">Massachusetts</option>
																	<option value="Michigan">Michigan</option>
																	<option value="Minnesota">Minnesota</option>
																	<option value="Mississippi">Mississippi</option>
																	<option value="Missouri">Missouri</option>
																	<option value="Montana">Montana</option>
																	<option value="Nebraska">Nebraska</option>
																	<option value="Nevada">Nevada</option>
																	<option value="New Hampshire">New Hampshire</option>
																	<option value="New Jersey">New Jersey</option>
																	<option value="New Mexico">New Mexico</option>
																	<option value="New York">New York</option>
																	<option value="North Carolina">North Carolina</option>
																	<option value="North Dakota">North Dakota</option>
																	<option value="Ohio">Ohio</option>
																	<option value="Oklahoma">Oklahoma</option>
																	<option value="Oregon">Oregon</option>
																	<option value="Pennsylvania">Pennsylvania</option>
																	<option value="Rhode Island">Rhode Island</option>
																	<option value="South Carolina">South Carolina</option>
																	<option value="South Dakota">South Dakota</option>
																	<option value="Tennessee">Tennessee</option>
																	<option value="Texas">Texas</option>
																	<option value="Utah">Utah</option>
																	<option value="Vermont">Vermont</option>
																	<option value="Washington">Washington</option>
																	<option value="West Virginia">West Virginia</option>
																	<option value="Wisconsin">Wisconsin</option>
																	<option value="Wyoming">Wyoming</option>
																</select> 
																	
															</div>
														</div>
														<div class="form-group">
															<label class="col-lg-3 control-label">Zip Code:</label>
															<div class="col-lg-8">
																<input class="form-control" name="zipcode" value="<?php if (isset($_POST['upload'])) echo ($_POST['zipcode']);?>" type="text" required="required" />
															</div>
																
														</div>
														<div class="form-group">
															<label class="col-lg-3 control-label">Allergies / Special Needs:</label>
															<div class="col-lg-8">
																<input type="radio" name="limitationsASN" value="Yes" <?php if (isset($_POST['limitationsASN']) && $_POST['limitationsASN'] == 'Yes') echo ' checked="checked"';?>> Yes
																<input type="radio" name="limitationsASN" value="No" <?php if (isset($_POST['limitationsASN']) && $_POST['limitationsASN'] == 'No') echo ' checked="checked"';?>> No
																<input class="form-control" type="text">
															</div>
														</div>
														<div class="form-group">
															<label class="col-lg-3 control-label">Physical Limitations / Such as Working Outside:</label>
															<div class="col-lg-8">
																<input type="radio" name="limitationsWO" value="Yes" <?php if (isset($_POST['limitationsWO']) && $_POST['limitationsWO'] == 'Yes') echo ' checked="checked"';?>> Yes
																<input type="radio" name="limitationsWO" value="No" <?php if (isset($_POST['limitationsWO']) && $_POST['limitationsWO'] == 'No') echo ' checked="checked"';?>> No
																<input class="form-control" type="text" value="None">
															</div>
														</div>
														<div class="form-group">
															<label class="col-lg-3 control-label">Rabies Vaccinated?</label>
															<div class="col-lg-8">
																<div class="checkbox">
																	<input type="radio" name="rabies" value="Yes" <?php if (isset($_POST['rabies']) && $_POST['rabies'] == 'Yes') echo ' checked="checked"';?>> Yes
																	<input type="radio" name="rabies" value="No" <?php if (isset($_POST['rabies']) && $_POST['rabies'] == 'No') echo ' checked="checked"';?>> No
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3">If so, how recently? Please provide proof of vaccination. Upload an attachment.</label>
															<div>
																<select name="DOBMonth">
																	<option>- Month -</option>
																	<option value="01">January</option>
																	<option value="02">February</option>
																	<option value="03">March</option>
																	<option value="04">April</option>
																	<option value="05">May</option>
																	<option value="06">June</option>
																	<option value="07">July</option>
																	<option value="08">August</option>
																	<option value="09">September</option>
																	<option value="10">October</option>
																	<option value="11">November</option>
																	<option value="12">December</option>
																</select>
																<select name="DOBDay">
																	<option>- Day -</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																	<option value="13">13</option>
																	<option value="14">14</option>
																	<option value="15">15</option>
																	<option value="16">16</option>
																	<option value="17">17</option>
																	<option value="18">18</option>
																	<option value="19">19</option>
																	<option value="20">20</option>
																	<option value="21">21</option>
																	<option value="22">22</option>
																	<option value="23">23</option>
																	<option value="24">24</option>
																	<option value="25">25</option>
																	<option value="26">26</option>
																	<option value="27">27</option>
																	<option value="28">28</option>
																	<option value="29">29</option>
																	<option value="30">30</option>
																	<option value="31">31</option>
																</select>
																<select name="DOBYear">
																	<option> - Year - </option>
																	<option value="2017">2017</option>
																	<option value="2016">2016</option>
																	<option value="2015">2015</option>
																	<option value="2014">2014</option>
																	<option value="2013">2013</option>
																	<option value="2012">2012</option>
																	<option value="2011">2011</option>
																	<option value="2010">2010</option>
																	<option value="2009">2009</option>
																	<option value="2008">2008</option>
																	<option value="2007">2007</option>
																	<option value="2006">2006</option>
																	<option value="2005">2005</option>
																	<option value="2004">2004</option>
																	<option value="2003">2003</option>
																	<option value="2002">2002</option>
																	<option value="2001">2001</option>
																	<option value="2000">2000</option>
																	<option value="1999">1999</option>
																	<option value="1998">1998</option>
																	<option value="1997">1997</option>
																	<option value="1996">1996</option>
																	<option value="1995">1995</option>
																	<option value="1994">1994</option>
																	<option value="1993">1993</option>
																	<option value="1992">1992</option>
																	<option value="1991">1991</option>
																</select>								<!-- Wanna have a date picker instead? or have it populate the drop downs? -->
															</div>
															<div class="fileinput fileinput-new" data-provides="fileinput">
																<span class="btn btn-default btn-file">
																<input name="rabbiesDocumentation" id = "rabbiesDocumentation" type="file" multiple /></span>
																<span class="fileinput-filename"></span>
																<span class="fileinput-new"></span>
															</div>
														</div>
														<div class="form-group">
															<label class="col-lg-3 control-label">Do you have a permit to rehabilitate wildlife in the state of Virginia?</label>
															<div class="col-lg-8">
																<div class="checkbox" >
																	<input type="radio" name="permit" value="Yes" <?php if (isset($_POST['permit']) && $_POST['permit'] == 'Yes') echo ' checked="checked"';?>> Yes
																	<input type="radio" name="permit" value="No" <?php if (isset($_POST['permit']) && $_POST['permit'] == 'No') echo ' checked="checked"';?>> No
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3">If so, what category? Please upload a copy of your permit.</label>
																<div>
																	<select name="permitCategory">
																		<option value="">--</option>
																		<option value="1">1</option>
																		<option value="2">2</option>
																		<option value="4">4</option>
																	</select>
																</div>
																<div class="fileinput fileinput-new" data-provides="fileinput">
																	<span class="btn btn-default btn-file">
																		<input name="permitRehabVA" id = "permitRehabVA" type="file" multiple /></span>
																	<span class="fileinput-filename"></span>
																	<span class="fileinput-new"></span>
																</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3">Are you able to lift 40 lbs?</label>
															<div class="col-sm-7">
																<div class="checkbox">
																	<input type="radio" name="fortyLBS" value="Yes" <?php if (isset($_POST['fortyLBS']) && $_POST['fortyLBS'] == 'Yes') echo ' checked="checked"';?>> Yes
																	<input type="radio" name="fortyLBS" value="No" <?php if (isset($_POST['fortyLBS']) && $_POST['fortyLBS'] == 'No') echo ' checked="checked"';?>> No
																</div>
															</div>
														</div>
														<div class="form-group">
<!-- I DON'T HAVE AN ATTRIBUTE IN THE -->				<label class="col-lg-3 control-label">Additional Notes:</label> 
<!--PERSON ENTITY FOR NOTES, WILL ADD FOR SPRINT 3--> 
															<div class="col-lg-8">
															  <input class="form-control" type="text" value="">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-3 control-label">Password:</label>
															<div class="col-md-8">
																<input class="form-control" name="password" type="password" required="required">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-3 control-label">Confirm password:</label>
															<div class="col-md-8">
																<input class="form-control" name="check" type="password" required="required">
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-3 control-label"></label>
															<div class="col-md-8">
																<input type="submit" name="upload" class="btn btn-primary" value="Submit Profile">
																<span></span>
																<input type="reset" class="btn btn-default" value="Cancel">
															</div>
														</div>
													</form>
												</div>
												</div>
												<hr>
											</div>
										</div>
									</div>
								</div>
								<div class="preview">
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
                <span class="pull-right" class="footer" > &copy; 2017. All rights reserved. Owl Team
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
