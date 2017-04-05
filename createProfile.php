<!DOCTYPE html>

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

if(isset($_POST['btnSave']))
{
	$first = $_POST['firstName'];
	$last = $_POST['lastName'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
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
		$query = "UPDATE Person SET Person_PasswordHash = '" . $passwordHashPassed . "', Person_FirstName = '" . $first . "', Person_LastName ='" 
		. $last . "', Person_PhonePrimary =" . $phone . ", Person_Email ='" . $email . "' WHERE Person_ID = " .$userID; 
		
		if(!mysqli_query($conn,$query))

		{
			echo("Error description: " . mysqli_error($conn));
		}

		else
		{
			$conn->close();
			header("Location: updateConfirmation2.php");
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
                                        <header class="panel-heading clearfix">

                                             

                                            
                                        </header>
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
              <input class="form-control" name="firstName" value="<?php echo ($first);?>" type="text" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last Name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="lastName" value="<?php echo ($last);?>" type="text" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" value="<?php echo ($email);?>" type="text" required="required">
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
              <input class="form-control" name="street" value="<?php echo ($street);?>" type="text" required="required">
            </div>
          </div>
		  <div class="form-group">
			<label class="col-lg-3 control-label">City:</label>
			<div class="col-lg-8">
			  <input class="form-control" name="city" value="<?php echo ($city);?>" type="text" required="required" />
			</div>
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label">State:</label>
			<div class="col-lg-8">
			
			<select name="state">
			<option value="<?php echo ($state);?>"</option>
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
		</div>
		<div class="form-group">
			<label class="col-lg-3 control-label">Zip Code:</label>
			<div class="col-lg-8">
			  <input class="form-control" name="zipcode" value="<?php echo ($zipcode);?>" type="text" required="required" />
			</div>
			
		</div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Allergies:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="None">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Physical Limitations:</label>
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
            <label class="col-lg-3 control-label">Additional Notes:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" name="btnSave" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
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
