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
<script>
function StringCompare()
{
	var string1 = document.getElementById("password").value;
	var string2 = document.getElementById("check").value;

	if(string1 === string2)
	{
		return true;
	}
	else
       {
		alert("Values are different.");
		return false;
	}
}
</script>
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
                                    	  <form id="form" method="post" enctype = "multipart/form-data" class="form-horizontal panel panel-default" onSubmit="return StringCompare();">
                                            <header class="panel-heading"><h2 class="panel-title">Basic Information</h2></header>
            
                                            <fieldset class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-2">First Name *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" name = 'firstName' type="text" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Last Name *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" name = 'lastName' type="text" required="required" />
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label class="col-sm-2">Create Username *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="text" name="username" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Create Password *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="password" name="password" id="password" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Confirm Password *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="password" name="check" id="check" data-equals="password" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Email *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="email" name = 'email' required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Phone *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="number" name="phone" required="required" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Age *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="number" name="age" required="required" value="0" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Address *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="text" name="address" />
                                                    </div>
                                                </div>
												<div class="form-group">
                                                    <label class="col-sm-2">Address *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="text" placeholder="street" name="street" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">City *</label>
                                                    <div class="col-sm-3">
                                                      <input class="form-control" type="text" placeholder="City" name="city" />
                                                    </div>

                                                    <label class="col-sm-1">State *</label>
                                                    <div class="col-sm-1">
                                                      <input class="form-control" type="text" placeholder="State" name="state" />
                                                    </div>
                                            
                                                    <label class="col-sm-2">Zip Code *</label>
                                                    <div class="col-sm-2">
                                                      <input class="form-control" type="text" placeholder="Zip" name="zip" />
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Emergency Contact*</label>
                                                    <div class="col-sm-5">
                                                      <input class="form-control" type="text" placeholder="Name" name="ecName" />
                                                    
                                                </div>
                                                    <label class="col-sm-2">EC Phone*</label>
                                                    <div class="col-sm-3">
                                                      <input class="form-control" type="text" placeholder="EC Phone" name="ecPhone" />
 
                                                </div></div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Relationship *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="text" placeholder="Relationship" name="relationship" />
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-sm-2"></label>
                                                    
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

<div class="form-group">
<div class="form-group">
                                                    <label class="col-sm-5">Are you willing to be vaccinated at your own cost?</label>
                                                    <div class="col-sm-7">
                                                        <div class="checkbox">
                                                           
                                                            <input type="radio" name="rabies" value="Yes"> Yes
															<input type="radio" name="rabies" value="No"> No
                                                        </div>
                                                    </div>
                                                </div>
                                                    <label class="col-sm-5">Are you able to lift 40lbs?</label>
                                                    <div class="col-sm-7">
                                                        <div class="checkbox">
                                                           
                                                            <input type="radio" name="rabies" value="Yes"> Yes
															<input type="radio" name="rabies" value="No"> No
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                

<h4>Please answer the following questions.</h4>
                                                
<div class="form-group">
         <label class="col-sm-6">Do you have any allergies or physical limitations?</label>
                <div class="col-sm-6">
                <textarea class="form-control" name = 'allergies' rows="5" cols="90"></textarea>
                            </div>
 <label class="col-sm-6">Please describe your availability weekly and seasonally. The Wildlife Center of Virginia needs consistency in scheduling, and is open on weekends.</label>
                <div class="col-sm-6">
                <textarea class="form-control" name = 'availability' rows="5" cols="90"></textarea>
                            </div>                            
 
  <label class="col-sm-6">Please briefly describe your relevant hands-on experience with animals, if any. What did you enjoy about the experience? What did you dislike?</label>
                <div class="col-sm-6">
                <textarea class="form-control" name = 'experience' rows="5" cols="90"></textarea>
                            </div>
                            
         <label class="col-sm-6">Carnivorous patients are sometimes unable to eat food items whole due to their injuries; you may be required to cut and divide dead rodents, chicks, and fishes into smaller portions. Are you comfortable handling dead animals for this purpose?</label>
                <div class="col-sm-6">
                <textarea class="form-control" name = 'deadAnimals' rows="5" cols="90"></textarea>
                            </div>
                            

         <label class="col-sm-6">Prior to release from the Wildlife Center, many predatory birds are presented with live mice in order to evaluate their ability to capture prey in a controlled and measurable environment. What is your opinion on using live-prey for this purpose?</label>
                <div class="col-sm-6">
                <textarea class="form-control" name = 'livePrey' rows="5" cols="90"></textarea>
                            </div>
                           
         <label class="col-sm-6">Wildlife rehabilitation requires daily outdoor work -- year-round and regardless of weather conditions. Are you able to work outside during all seasons? If not, what are your limitations?</label>
                <div class="col-sm-6">
                <textarea class="form-control" name = 'seasons' rows="5" cols="90"></textarea>
                            </div>
                            
         <label class="col-sm-6">Do you belong to any animal rights groups (PETA, The Humane Society, etc.)? If so, which ones?</label>
                <div class="col-sm-6">
                <textarea class="form-control" name = 'groups' rows="5" cols="90"></textarea>
                            </div>
                         
                            
 <label class="col-sm-6">What do you hope to learn or accomplish by volunteering at the Wildlife Center of Virginia?</label>
                <div class="col-sm-6">
                <textarea class="form-control" name = 'accomplish' rows="5" cols="90"></textarea>
                            </div>
                            
                            
<label class="col-sm-6">Please describe an environmental or wildlife-based issue you feel passionately about, and why.</label>
                <div class="col-sm-6">
                <textarea class="form-control" name = 'issue' rows="5" cols="90"></textarea>
                            </div>
                         
                            
<label class="col-sm-6">Is there anything else that you’d like us to know about yourself or your experience?</label>
                <div class="col-sm-6">
                <textarea class="form-control" name = 'additionalInfo' rows="5" cols="90"></textarea>
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
                                                <input class="btn btn-default" type="submit" name = 'upload' type="submit" id = 'upload' value="Submit form"/>
                                                <button class="btn btn-default" type="reset">Reset</button>
                                            </footer>
                                        </form>


<?php

  

	  if(isset($_POST['upload']))
	{
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

		 

			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$userName = $_POST['email'];
			$email = $_POST['email'];
			$middleInitial = 'I';
			$primaryPhone = $_POST['phone'];
			$secondaryPhone = 1;
			$city = 'Sterling';
			$county = 'Loudoun';
			$state = 'MA';
			$zip = 22525;
			$dob = 10/10/1999;
			$street = $_POST['address'];
			$tmpName  = $_FILES['userfile']['tmp_name'];
			$fileSize = $_FILES['userfile']['size'];
			$rabies = $_POST['rabies'];
			//$experience = $_POST['experience'];
			//$deadAnimals = $_POST['deadAnimals'];
			//$livePrey = $_POST['livePrey'];
			//$seasons = $_POST['seasons'];
			//$groups = $_POST['groups'];
			//$accomplish = $_POST['accomplish'];
			//$issue = $_POST['issue'];
			//$additionalInfo = $_POST['additionalInfo'];
			$fp      = fopen($tmpName, 'r');
			$picture = fread($fp, filesize($tmpName));
			$picture = addslashes($picture);
			fclose($fp);
			$status = 'Applicant';
			$rabiesVac = 10/10/2010;
			$lastVolunteered = 10/10/2011;
			$allergies = $_POST['allergies'];
			$specialNeeds = '';
			$workOutside = '';
			$totalHours = 10;
			$workOutsideLimitations = '';
			$lift40 = '';
			$permitRehab = $_POST['permit'];

				  $query = "INSERT INTO person (Person_UserName, Person_FirstName, Person_MiddleInitial, Person_LastName, Person_Email, Person_PhonePrimary, Person_PhoneAlternate, Person_StreetAddress, Person_City, Person_County, Person_HomeState, Person_ZipCode, Person_DateOfBirth, Person_Picture, Person_Status, Person_RabiesVaccinationDate, Person_RehabilitatePermitCategory, Person_Allergies, Person_SpecialNeeds,
		  Person_WorkOutside, Person_OutsideLimitations, Person_Lift40Lbs, Person_TotalVolunteeredHours, Person_LastVolunteered)
			  VALUES ('$userName', '$firstName', '$middleInitial', '$lastName', '$email', '$primaryPhone', '$secondaryPhone', '$street', '$city', '$county', '$state', '$zip', NOW(), '$picture', '$status', NOW(), '$permitRehab', '$allergies', '$specialNeeds', '$workOutside', '$workOutsideLimitations', '$lift40', '$totalHours', NOW())";



		if(!mysqli_query($conn,$query))

			{
				echo("Error description: " . mysqli_error($conn));
			}

			else
			{
				echo "Application Sent! {person table}";
			}

			//animalCare app specific

			$experience = $_POST['experience'];
			$deadAnimals = $_POST['deadAnimals'];
			$livePrey = $_POST['livePrey'];
			$seasons = $_POST['seasons'];
			$groups = $_POST['groups'];
			$accomplish = $_POST['accomplish'];
			$issue = $_POST['issue'];
			$additionalInfo = $_POST['additionalInfo'];

			

			$animalQuery = "INSERT INTO AnimalCareApp (AnimalCareApp_HandsOnExperience, AnimalCareApp_HandleDeadAnimals, AnimalCareApp_OpinionLivePrey, AnimalCareApp_WorkOutside, AnimalCareApp_BelongToAnimalRightsGroup, AnimalCareApp_HopeToLearnAccomplish, AnimalCareApp_PassionateWildlifeIssue, AnimalCareApp_MoreAboutExperience)
			  VALUES ('$experience', '$deadAnimals', '$livePrey', '$seasons', '$groups', '$accomplish', '$issue', '$additionalInfo')";



			  if(!mysqli_query($conn,$animalQuery))

			{
				echo("Error description: " . mysqli_error($conn));
			}

			else
			{
				echo "Application Sent! {animalCareApp table}";
			}
		  
			
			//var_dump($_POST);


	}


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
