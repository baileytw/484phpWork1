<!DOCTYPE html>
<?php
//Session variables: KEEP AT TOP
session_start();
$userID = $_SESSION['userID'];
$userTypeSession = $_SESSION['userType'];
$profileID = $_SESSION['profileID']; 


//UNCOMMENT THIS OUT WHEN READY TO RUN PROGRAM FOR PRESENTATION OR TURN IN
/*
//If Session is empty, redirect user to restricted access notification
if ($userTypeSession != "Team Lead"){
	header("Location: restrictedAccess.php");
	exit();
}

*/

if(isset($_POST['emailSelected']))
{
	
	//Create email array
	$emailArray = array();
	//Add values to array
	foreach($_POST['check'] as $value) 
	{
		$emailArray[] = $value;
	}
	
	//Put the array in a session variable
	$_SESSION['profileEmail']= $emailArray;
		
	if( count($emailArray) > 0 ){
		header("Location: emailSelected.php");
		exit();
	}
	else{
		$message = 'Please select at least one checkbox to send email';
		echo "<SCRIPT>
		alert('$message');
		</SCRIPT>";
	}
}


?>
<!-- Select all checkboxes -->
<script type="text/javascript">

    function do_this(){

        var checkboxes = document.getElementsByName('check[]');
        var button = document.getElementById('toggle');

        if(button.value == 'Select All'){
            for (var i in checkboxes){
                checkboxes[i].checked = 'FALSE';
            }
            button.value = 'Deselect All'
        }else{
            for (var i in checkboxes){
                checkboxes[i].checked = '';
            }
            button.value = 'Select All';
        }
    }
</script>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">

        <style>
            html, body {
                height: 100%;
            }
            .wrapper {
                min-height: 100%;
                height: auto !important;
                height: 100%;
                margin: 0 auto -120px;
            }
            .footer, .push {
                height: 120px;
            }
        </style>

<title>Wildlife Center of Virginia Volunteers</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--Add Jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link rel="stylesheet" media="screen" href="css/style.css" />
<style>
table, th, td {
    border: 1px solid black;
	padding: .8em;
}

</style>
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
                      <a class="navbar-brand" href="calendar2.php"><img src="../484phpWork1/images/logo_short.png" alt="Wildlife Small Logo"></a>
                    </div>
    
                 
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul id="main-nav" class="nav navbar-nav">
                            <li class="action">
							<li><a href="calendar2.php">Calendar</a></li>
							<li class="active"><a href="profilesearch.php">Search</a></li>							
                            <li><a href="accountProfile.php">Account</a></li>                          
                            <li><a href="index.php">Sign Out</a></li>                     
                            </li>
							</ul>
                      
                    </div>
                </div>
            </nav>
        </header>
        
        <section>
            <div class="container">
                <div class="row">

    <div class="container">
    <div class="row">
        <div id="filter-panel">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form"> <!-- action="Datebase.php" -->
                        <div class="form-group">
                            <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Search:</label>
                            <input type="text" class="form-control input-sm" name="pref-search" placeholder="First or Last Name" id="pref-search">
                        </div><!-- form group [search] -->                               
                        </div> <!-- form group [rows] -->
                        
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;"  for="pref-selectteam">Filter Team:</label>
                            <select name="pref-selectteam" id="pref-selectteam" class="form-control">
                                <option value="null">Select Team</option>
                                <option value="Animal Care">Animal Care</option>
                                <option value="Front Desk">Front Desk</option>
                                <option value="Outreach">Outreach</option>
                                <option value="Transporter">Transporter</option>
                                <option value="Vet Team">Vet Team</option>
                            </select>                                
                        </div> <!-- form group [Select Team] --> 
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-namefilter">Sort By:</label>
                            <select name="pref-namefilter" id="pref-namefilter" class="form-control">
                                <option value="lastName">Last Name</option>
                                <option value="firstName">First Name</option>
                            </select> 
						</div>
						<div class="form-group">
                             <select id="pref-days" class="form-control">
                                <option value="daysA">Days Available</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                                <option value="Sunday">Sunday</option>
                            </select>                               
                        </div> <!-- form group [Select Team] -->    
                        
						
						
						
						
                            <button type="submit" name="submit" value="Search" class="btn btn-default filter-col">
                                Submit
                            </button>  
							
							<section id="displayInfo">

			<fieldset id="displayField">
				<table>
					<thead>
						<tr>
							<th><input type="button" id="toggle" value="Select All" onClick="do_this()" /></th>
							<th>Profile</th>
							<th>First Name</th> 
							<th>Last Name</th>
							<th>Email</th>
							<th>Phone</th>
						</tr>
					</thead>
					<tbody> 
						<!--Use a while loop to make a table row for every Database row-->
						<?php 
						if (isset($_POST['submit'])){
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
						// Variables
						$search = $_POST['pref-search'];
						$filter = $_POST['pref-selectteam'];
						$sorts = $_POST['pref-namefilter'];
						$days = $_POST['pref-days'];
						
						
					
					
					
					
					// Default Statments
				
						if($search == null && $sorts == "lastName" && $filter == "null"){
							// Select statement for default
							$sql = "SELECT * FROM Person ORDER BY Person_LastName ASC";
						}
						
						if($search == null && $sorts == "firstName" && $filter == "null"){
							// Select statement for default
							$sql = "SELECT * FROM Person ORDER BY Person_FirstName ASC";
						}
						
						if($search == null && $sorts == "profileNumber" && $filter == "null"){
							// Select statement for default
							$sql = "SELECT * FROM Person ORDER BY Person_ID ASC";
						}
							
						
						// Statements for filter
						
											
						
						
						
						
						
						// Statements for sorts
						if($search != null && $sorts == "lastName" && $filter == "null"){
						
						
						$sql = "SELECT * FROM Person where Person_FirstName like '%{$search}%' || Person_LastName like '%{$search}%' 
								|| concat_ws(' ',Person_FirstName,Person_LastName) like '%{$search}%' ORDER BY Person_LastName ASC";	
						}
						
						if($search != null && $sorts == "firstName" && $filter == "null"){
						
						
						$sql = "SELECT * FROM Person where Person_FirstName like '%{$search}%' || Person_LastName like '%{$search}%' 
								|| concat_ws(' ',Person_FirstName,Person_LastName) like '%{$search}%' ORDER BY Person_FirstName ASC";	
						}
						
						if($search != null && $sorts == "profileNumber" && $filter == "null"){
						
						
						$sql = "SELECT * FROM Person where Person_FirstName like '%{$search}%' || Person_LastName like '%{$search}%' 
								|| concat_ws(' ',Person_FirstName,Person_LastName) like '%{$search}%' ORDER BY Person_ID ASC";	
						}
															
		
		
		
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {?>
								<tr>
									<!--Each table column is echoed in to a td cell-->
									<td><input type="checkbox" name="check[]" value="<?php echo $row['Person_Email'] ?>"></td>
									<td><?php echo '<a href="profile2.php?profileID='.$row['Person_ID'].'">View</a>'; ?></td>
									<td><?php echo $row['Person_FirstName']; ?></td>
									<td><?php echo $row['Person_LastName']; ?></td>
									<td><?php echo $row['Person_Email']; ?></td>
									<td><?php echo $row['Person_PhonePrimary']; ?></td>
									
									
								</tr>
							<?php }
								}
								$conn->close();
							}?>
					</tbody> 
				</table>
			
				</fieldset>
		</section>
		<div class="form-group">
<label>Send email to selected: </label>
	<button type="submit" name="emailSelected"  class="btn btn-default filter-col">Send Email </button> 
</div>	
                        </div>
                    </form>
                </div>
            </div>
        </div> 
	
    </div>

</div><!--end container search bar-->


<div class="container">
    <div class="row">
        <div class="navbar navbar-default visible-xs">
  <div class="container-fluid">
    <button class="btn btn-default navbar-btn" data-toggle="collapse" data-target="#filter-sidebar">
      <i class="fa fa-tasks"></i> Toggle Sidebar
    </button>
  </div>
</div>

<div class="container-fluid">

  <div class="row">

    
    </div><!--end class row-->
</div><!--end container search bar-->
    
                    <!-- Main Section -->

   </div>
</div>
</div>
</div>
   
    <footer>
        <div id="footer-inner" class="container">
            <div>
                <span class="pull-right" class="footer" > &copy; 2017. All rights reserved. Owl Team</span>
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
