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
                       <a class="navbar-brand" href=""><img src="../streamlined/images/logo_short.png" alt="Wildlife Small Logo"></a>
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
                                        Wildlife Center of Virginia - Transporter Application
                                    </h2>
                                </header>
                                <section class="panel-body container-fluid">

                                    <div class="leading">
                                    	  <form id="form" class="form-horizontal panel panel-default">
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
                                                    <label class="col-sm-2">Create Username *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="text" name="username" value="<?php if (isset($_POST['upload'])) echo ($_POST['username']);?>" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Create Password *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" id = 'password'type="password" name="password" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Confirm Password </label>
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
                                                    <label class="col-sm-2">Date of Birth *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="text" id="dob" name="dob" value="<?php if (isset($_POST['upload'])) echo ($_POST['dob']);?>" placeholder="YYYY-MM-DD" pattern="\d{4}-\d{1,2}-\d{1,2}" name="street" />
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
                                                    <div class="col-sm-3">
                                                      <input class="form-control" type="text" id="city" name="city" value="<?php if (isset($_POST['upload'])) echo ($_POST['city']);?>" placeholder="City" name="city" />
                                                    </div>

                                                    <label class="col-sm-1">State *</label>
                                                    <div class="col-sm-1">
                                                      <select class="form-control" name="state">
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
<option value="VA">Virginia</option>
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
                                                    <label class="col-sm-2">Emergency Contact*</label>
                                                    <div class="col-sm-5">
                                                      <input class="form-control" type="text" id="ec" name="ec" value="<?php if (isset($_POST['upload'])) echo ($_POST['ec']);?>" placeholder="Name" name="ecName" />
                                                </div>
                                                    <label class="col-sm-2">EC Phone*</label>
                                                    <div class="col-sm-3">
                                                      <input class="form-control" id="ecPhone" name="ecPhone" value="<?php if (isset($_POST['upload'])) echo ($_POST['ecPhone']);?>"type="text" placeholder="EC Phone" name="ecPhone" />
 
                                                </div></div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Relationship *</label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control" type="text" placeholder="street" name="street" />
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-sm-2"></label>
                                                    
                                                    </div>
                                                </div>

                                                

<h4>Please answer the following questions.</h4>
                        
<div class="form-group">
                                                    <label class="col-sm-5">When are you able to transport animals?</label>
                                                    <div class="col-sm-7">
                                                        <div class="checkbox">
                                                           
                                                            <p><input type="checkbox" name="transport" value="Weekdays">Weekdays</p>
                                                           <p><input type="checkbox" name="transport" value="Weekends">Weekends</p>
                                                            <p><input type="checkbox" name="transport" value="Anytime">Anytime</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-sm-5">Have you had the pre-exposure rabies vaccination?</label>
                                                    <div class="col-sm-7">
                                                        <div class="checkbox">
                                                           
                                                            <p><input type="radio" name="rabies" value="Yes"> Yes</p>
                                                            <p><input type="radio" name="rabies" value="No"> No</p>
                                                        </div>
                                                    </div>
                                                </div>

                <label class="col-sm-6">How far are you willing to travel for transport (i.e., 30-45 miles from your location, to a specific location, etc)?</label>
                <div class="col-sm-6">
                <textarea class="form-control" rows="5" cols="90"></textarea>
                            </div>


<div class="form-group">
         <label class="col-sm-12"><center><h3>Capturing Wildlife</h3></center></label>
     </br>
                
 <label class="col-sm-12"><h4>Sometimes rescuers need assistance with capturing and containing a wild animal in need.  For those who are interested in capturing injured animals: </h4>

</label>                          
 
  <p class="col-sm-6">Know that we do not ask transporters to attempt risky captures of dangerous animals. Also, as a volunteer, you can always say “no” if you are uncomfortable with a situation.</p>
                <p class="col-sm-6">
               If you are considering attempting a capture/rescue, we are available by phone to give advice on the best way to go about attempting a rescue safely.
                            </p>
                            
         <p class="col-sm-6">We can advise you on any particularly helpful items or equipment to take with you.
</p>
                <p class="col-sm-6">
               We have humane live traps available to assist you, if needed.
                            </p>
                            

<label class="col-sm-12"><h4>Sometimes rescuers need assistance with capturing and containing a wild animal in need.  For those who are interested in capturing injured animals: </h4>

                           
          <div class="form-group">
                                                    <label class="col-sm-5">With that in mind, would you be willing to assist with capturing animals, if needed?</label>
                                                    <div class="col-sm-7">
                                                        <div class="checkbox">
                                                           
                                                            <p><input type="radio" name="capture" value="Yes"> Yes, I am willing to capture animals.</p>
                                                            <p><input type="radio" name="capture" value="No"> No, I'd prefer to strictly transport.</p>
                                                        </div>
                                                    </div>
                                                </div>
        <div class="form-group">
                                                    <label class="col-sm-5">Transporter Guidelines</label>
                                                    <div class="col-sm-7">
                                                        <div class="checkbox">
                                                           
                                                            <input type="radio" name="" value=""> I am acknowledging that I have read the transporter guidelines and I promise to abide by these guidelines when I transport for the Wildlife Center of Virginia.
                                                        </div>
                                                    </div>
                                                </div>
                         
                            </div> </div>
                                                                            
                                                
                                                
                                            
                                            </div>
                                        </div>
                                    </div>
                            
                                            </fieldset>
            
                                            <footer class="panel-footer">
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                                <button class="btn btn-default" type="reset">Reset</button>
                                            </footer>
                                        </form>
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
