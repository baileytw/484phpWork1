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
				<option value=""> Select </option>
			
				<option <?php if ($state == 'AL' ) echo 'selected' ; ?> value="AL">Alabama</option>
				<option <?php if ($state == 'AK' ) echo 'selected' ; ?> value="AK">Alaska</option>
				<option <?php if ($state == 'AZ' ) echo 'selected' ; ?> value="AZ">Arizona</option>
				<option <?php if ($state == 'AR' ) echo 'selected' ; ?> value="AR">Arkansas</option>
				<option <?php if ($state == 'CA' ) echo 'selected' ; ?> value="CA">California</option>
				<option <?php if ($state == 'CO' ) echo 'selected' ; ?> value="CO">Colorado</option>
				<option <?php if ($state == 'CT' ) echo 'selected' ; ?> value="CT">Connecticut</option>
				<option <?php if ($state == 'DE' ) echo 'selected' ; ?> value="DE">Delaware</option>
				<option <?php if ($state == 'FL' ) echo 'selected' ; ?> value="FL">Florida</option>
				<option <?php if ($state == 'GA' ) echo 'selected' ; ?> value="GA">Georgia</option>
				<option <?php if ($state == 'HI' ) echo 'selected' ; ?> value="HI">Hawaii</option>
				<option <?php if ($state == 'ID' ) echo 'selected' ; ?> value="ID">Idaho</option>
				<option <?php if ($state == 'IL' ) echo 'selected' ; ?> value="IL">Illinois</option>
				<option <?php if ($state == 'IN' ) echo 'selected' ; ?> value="IN">Indiana</option>
				<option <?php if ($state == 'IA' ) echo 'selected' ; ?> value="IA">Iowa</option>
				<option <?php if ($state == 'KS' ) echo 'selected' ; ?> value="KS">Kansas</option>
				<option <?php if ($state == 'KY' ) echo 'selected' ; ?> value="KY">Kentucky</option>
				<option <?php if ($state == 'LA' ) echo 'selected' ; ?> value="LA">Louisiana</option>
				<option <?php if ($state == 'ME' ) echo 'selected' ; ?> value="ME">Maine</option>
				<option <?php if ($state == 'MD' ) echo 'selected' ; ?> value="MD">Maryland</option>
				<option <?php if ($state == 'MA' ) echo 'selected' ; ?> value="MA">Massachusetts</option>
				<option <?php if ($state == 'MI' ) echo 'selected' ; ?> value="MI">Michigan</option>
				<option <?php if ($state == 'MN' ) echo 'selected' ; ?> value="MN">Minnesota</option>
				<option <?php if ($state == 'MS' ) echo 'selected' ; ?> value="MS">Mississippi</option>
				<option <?php if ($state == 'MO' ) echo 'selected' ; ?> value="MO">Missouri</option>
				<option <?php if ($state == 'MT' ) echo 'selected' ; ?> value="MT">Montana</option>
				<option <?php if ($state == 'NE' ) echo 'selected' ; ?> value="NE">Nebraska</option>
				<option <?php if ($state == 'NV' ) echo 'selected' ; ?> value="NV">Nevada</option>
				<option <?php if ($state == 'NH' ) echo 'selected' ; ?> value="NH">New Hampshire</option>
				<option <?php if ($state == 'NJ' ) echo 'selected' ; ?> value="NJ">New Jersey</option>
				<option <?php if ($state == 'NM' ) echo 'selected' ; ?> value="NM">New Mexico</option>
				<option <?php if ($state == 'NY' ) echo 'selected' ; ?> value="NY">New York</option>
				<option <?php if ($state == 'NC' ) echo 'selected' ; ?> value="NC">North Carolina</option>
				<option <?php if ($state == 'ND' ) echo 'selected' ; ?> value="ND">North Dakota</option>
				<option <?php if ($state == 'OH' ) echo 'selected' ; ?> value="OH">Ohio</option>
				<option <?php if ($state == 'OK' ) echo 'selected' ; ?> value="OK">Oklahoma</option>
				<option <?php if ($state == 'OR' ) echo 'selected' ; ?> value="OR">Oregon</option>
				<option <?php if ($state == 'PA' ) echo 'selected' ; ?> value="PA">Pennsylvania</option>
				<option <?php if ($state == 'RI' ) echo 'selected' ; ?> value="RI">Rhode Island</option>
				<option <?php if ($state == 'SC' ) echo 'selected' ; ?> value="SC">South Carolina</option>
				<option <?php if ($state == 'SD' ) echo 'selected' ; ?> value="SD">South Dakota</option>
				<option <?php if ($state == 'TN' ) echo 'selected' ; ?> value="TN">Tennessee</option>
				<option <?php if ($state == 'TX' ) echo 'selected' ; ?> value="TX">Texas</option>
				<option <?php if ($state == 'UT' ) echo 'selected' ; ?> value="UT">Utah</option>
				<option <?php if ($state == 'VA' ) echo 'selected' ; ?> value="VA">Virginia</option>
				<option <?php if ($state == 'VT' ) echo 'selected' ; ?> value="VT">Vermont</option>
				<option <?php if ($state == 'WA' ) echo 'selected' ; ?> value="WA">Washington</option>
				<option <?php if ($state == 'WV' ) echo 'selected' ; ?> value="WV">West Virginia</option>
				<option <?php if ($state == 'WI' ) echo 'selected' ; ?> value="WI">Wisconsin</option>
				<option <?php if ($state == 'WY' ) echo 'selected' ; ?> value="WY">Wyoming</option>
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
