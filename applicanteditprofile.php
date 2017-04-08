<!DOCTYPE html>

<?php
//Session variables: KEEP AT TOP
session_start();
$userID = $_SESSION['userID'];
$userTypeSession = $_SESSION['userType']; 


//UNCOMMENT THIS OUT WHEN READY TO RUN PROGRAM FOR PRESENTATION OR TURN IN
/*
//If Session is empty, redirect user to restricted access notification
if ($userTypeSession != "Applicant"){
	header("Location: restrictedAccess.php");
	exit();
}

*/

//Get user info
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
$sql = "SELECT Person_FirstName, Person_LastName, Person_PhonePrimary, Person_Email, Person_StreetAddress, Person_City,
Person_State, Person_Zipcode FROM Person WHERE Person_ID = '" . $userID . "'";
echo sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
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
	$conn->close();
}
//If Save button clicked, update data
if(isset($_POST['btnSave']))
{
	/*
	header("Location: accountProfile.php");
	exit();
	*/
}

//If Cancel button clicked, go back to profile
if(isset($_POST['btnCancel']))
{
	header("Location: accountProfile.php");
	exit();
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
                      <a class="navbar-brand" href="applicantprofile.php"><img src="../484phpWork1/images/logo_short.png" alt="Wildlife Small Logo"></a>
                    </div>
    
                  
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul id="main-nav" class="nav navbar-nav">
                            <li class="action">

                            <li class="active"><a href="applicantprofile.php">Profile</a></li>
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
                                        <header class="panel-heading clearfix">

                                             

                                            
                                        </header>
<div class="content">
                                        <h3 class="col-md-6">Edit Contact Information</h3>
                                              <div class="col-md-3">
        <div class="text-center">
          <img src="images/johndoe.png" class="avatar img-circle img-responsive" alt="avatar">
          <h6>Upload a different photo...</h6>
          
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
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">First Name:</label>
            <div class="col-lg-8">
              <input class="form-control" maxlength="20" name="firstName" value="<?php echo ($first);?>" type="text" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last Name:</label>
            <div class="col-lg-8">
              <input class="form-control" maxlength="20" name="lastName" value="<?php echo ($last);?>" type="text" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" maxlength="254" name="email" value="<?php echo ($email);?>" type="email" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone:</label>
            <div class="col-lg-8">
              <input class="form-control" name="phone" value="<?php echo ($phone);?>" type='tel' pattern='\d{3}[\-]\d{3}[\-]\d{4}' title='Phone Number Format: 555-555-5555'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <input class="form-control" maxlength="50" name="street" value="<?php echo ($street);?>" type="text" required="required">
            </div>
          </div>
		  <div class="form-group">
			<label class="col-lg-3 control-label">City:</label>
			<div class="col-lg-8">
			  <input class="form-control" maxlength="40" name="city" value="<?php echo ($city);?>" type="text" required="required" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label">State:</label>
			<div class="col-lg-8">
			
			<select name="state" required="required">
				<option <?php if ($state == 'Virginia' ) echo 'selected' ; ?> value="Virginia">Virginia</option>
				<option <?php if ($state == 'Alabama' ) echo 'selected' ; ?> value="Alabama">Alabama</option>
				<option <?php if ($state == 'Alaska' ) echo 'selected' ; ?> value="Alaska">Alaska</option>
				<option <?php if ($state == 'Arizona' ) echo 'selected' ; ?> value="Arizona">Arizona</option>
				<option <?php if ($state == 'Arkansas' ) echo 'selected' ; ?> value="Arkansas">Arkansas</option>
				<option <?php if ($state == 'California' ) echo 'selected' ; ?> value="California">California</option>
				<option <?php if ($state == 'Colorado' ) echo 'selected' ; ?> value="Colorado">Colorado</option>
				<option <?php if ($state == 'Connecticut' ) echo 'selected' ; ?> value="Connecticut">Connecticut</option>
				<option <?php if ($state == 'Delaware' ) echo 'selected' ; ?> value="Delaware">Delaware</option>
				<option <?php if ($state == 'Florida' ) echo 'selected' ; ?> value="Florida">Florida</option>
				<option <?php if ($state == 'Georgia' ) echo 'selected' ; ?> value="Georgia">Georgia</option>
				<option <?php if ($state == 'Hawaii' ) echo 'selected' ; ?> value="Hawaii">Hawaii</option>
				<option <?php if ($state == 'Idaho' ) echo 'selected' ; ?> value="Idaho">Idaho</option>
				<option <?php if ($state == 'Illinois' ) echo 'selected' ; ?> value="Illinois">Illinois</option>
				<option <?php if ($state == 'Indiana' ) echo 'selected' ; ?> value="Indiana">Indiana</option>
				<option <?php if ($state == 'Iowa' ) echo 'selected' ; ?> value="Iowa">Iowa</option>
				<option <?php if ($state == 'Kansas' ) echo 'selected' ; ?> value="Kansas">Kansas</option>
				<option <?php if ($state == 'Kentucky' ) echo 'selected' ; ?> value="Kentucky">Kentucky</option>
				<option <?php if ($state == 'Louisiana' ) echo 'selected' ; ?> value="Louisiana">Louisiana</option>
				<option <?php if ($state == 'Maine' ) echo 'selected' ; ?> value="Maine">Maine</option>
				<option <?php if ($state == 'Maryland' ) echo 'selected' ; ?> value="Maryland">Maryland</option>
				<option <?php if ($state == 'Massachusetts' ) echo 'selected' ; ?> value="Massachusetts">Massachusetts</option>
				<option <?php if ($state == 'Michigan' ) echo 'selected' ; ?> value="Michigan">Michigan</option>
				<option <?php if ($state == 'Minnesota' ) echo 'selected' ; ?> value="Minnesota">Minnesota</option>
				<option <?php if ($state == 'Mississippi' ) echo 'selected' ; ?> value="Mississippi">Mississippi</option>
				<option <?php if ($state == 'Missouri' ) echo 'selected' ; ?> value="Missouri">Missouri</option>
				<option <?php if ($state == 'Montana' ) echo 'selected' ; ?> value="Montana">Montana</option>
				<option <?php if ($state == 'Nebraska' ) echo 'selected' ; ?> value="Nebraska">Nebraska</option>
				<option <?php if ($state == 'Nevada' ) echo 'selected' ; ?> value="Nevada">Nevada</option>
				<option <?php if ($state == 'New Hampshire' ) echo 'selected' ; ?> value="New Hampshire">New Hampshire</option>
				<option <?php if ($state == 'New Jersey' ) echo 'selected' ; ?> value="New Jersey">New Jersey</option>
				<option <?php if ($state == 'New Mexico' ) echo 'selected' ; ?> value="New Mexico">New Mexico</option>
				<option <?php if ($state == 'New York' ) echo 'selected' ; ?> value="New York">New York</option>
				<option <?php if ($state == 'North Carolina' ) echo 'selected' ; ?> value="North Carolina">North Carolina</option>
				<option <?php if ($state == 'North Dakota' ) echo 'selected' ; ?> value="North Dakota">North Dakota</option>
				<option <?php if ($state == 'Ohio' ) echo 'selected' ; ?> value="Ohio">Ohio</option>
				<option <?php if ($state == 'Oklahoma' ) echo 'selected' ; ?> value="Oklahoma">Oklahoma</option>
				<option <?php if ($state == 'Oregon' ) echo 'selected' ; ?> value="Oregon">Oregon</option>
				<option <?php if ($state == 'Pennsylvania' ) echo 'selected' ; ?> value="Pennsylvania">Pennsylvania</option>
				<option <?php if ($state == 'Rhode Island' ) echo 'selected' ; ?> value="Rhode Island">Rhode Island</option>
				<option <?php if ($state == 'South Carolina' ) echo 'selected' ; ?> value="South Carolina">South Carolina</option>
				<option <?php if ($state == 'South Dakota' ) echo 'selected' ; ?> value="South Dakota">South Dakota</option>
				<option <?php if ($state == 'Tennessee' ) echo 'selected' ; ?> value="Tennessee">Tennessee</option>
				<option <?php if ($state == 'Texas' ) echo 'selected' ; ?> value="Texas">Texas</option>
				<option <?php if ($state == 'Utah' ) echo 'selected' ; ?> value="Utah">Utah</option>
				<option <?php if ($state == 'Virginia' ) echo 'selected' ; ?> value="Virginia">Virginia</option>
				<option <?php if ($state == 'Vermont' ) echo 'selected' ; ?> value="Vermont">Vermont</option>
				<option <?php if ($state == 'Washington' ) echo 'selected' ; ?> value="Washington">Washington</option>
				<option <?php if ($state == 'West Virginia' ) echo 'selected' ; ?> value="West Virginia">West Virginia</option>
				<option <?php if ($state == 'Wisconsin' ) echo 'selected' ; ?> value="Wisconsin">Wisconsin</option>
				<option <?php if ($state == 'Wyoming' ) echo 'selected' ; ?> value="Wyoming">Wyoming</option>
				</select>  
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label">Zip Code:</label>
			<div class="col-lg-8">
			  <input class="form-control" pattern=".{5}" title="Enter 5 digit zipcode" name="zipcode" value="<?php echo ($zipcode);?>" type="text" required="required" />
			</div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Allergies</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="None">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Physical Limitations</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="None">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Rabies Vaccinated?</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Yes">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Permit?</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="No">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Additional Notes</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Change Password?</label>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" name="password" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" name="check" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" name="btnSave" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="submit" name="btnCancel" class="btn btn-default" formnovalidate value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

                                    </div>
                               </div></div>

  
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
