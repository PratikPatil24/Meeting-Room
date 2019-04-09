<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 

    "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="project.css"></link>
	<script type="text/javascript" src="project.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/ajax_hall.js"></script>
  
    <link rel="stylesheet" href="css/user_menu.css">

  <link rel="stylesheet" href="css/user_card.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css">
  
    <title>Meeting Room</title>


  </head>
  <body>
  
  
  
<!-- =========================
     NAVIGATION LINKS     
============================== -->
<div class="navbar navbar-fixed-top custom-navbar" role="navigation" >
  <div class="container" >

    <!-- navbar header -->
    <div class="navbar-header">
      <a href="#" class="navbar-brand"><img src="css/logo-v7.png" alt="Logo" class="main_logo"></a>
    </div>
      <ul class="nav navbar-nav navbar-right" align="center">
        <li><a href="#home" class="smoothScroll">Home</a></li>
        <li><a href="./Login_Stud/admin_login.php" class="smoothScroll">Admin Panel</a></li>
        <li><a href="./Login_Stud/login.php" class="smoothScroll">User Panel</a></li>
      </ul>

  </div>
</div>

  
    <div class="ctrlqFormContentWrapper">
      <div class="ctrlqHeaderMast"></div>
      <div class="ctrlqCenteredContent">
        <div class="ctrlqFormCard">
          <div class="ctrlqAccent"></div>
          <div class="ctrlqFormContent">

            <form method="post" action="process.php" >  

              <div class="row">
                <div class="input-field col s12">
                  <h4>Seminar Hall Booking Form</h4>
                  <p>All fields are required</p>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <input id="name" name="name" type="text" class="validate" data-error="#e1" required>
                  <label for="name">Your Name</label>
                  <div id="e1"></div>
                </div>
              </div>

              
			  
			  <div class="row">
				<div class="input-field col s12">
					<input id="cid" name="cid" type="text" class="validate" data-error="#e3" required>
					<label for="cid">Your College Id</label>
					<div id=="e3"></div>
				</div>
			  </div>	
			  
			  <div class="row">
                <div class="input-field col s12">
                  <input id="email" name="email" type="text" class="validate" data-error="#e2" required>
                  <label for="email">Your Email</label>
                  <div id="e2"></div>
                </div>
              </div>
			  
			  
			  <div class="row">
                <div class="input-field col s12">
                  <input id="phone" name="phone" type="text" class="validate" data-error="#e10" required>
                  <label for="phone">Your Phone Number</label>
                  <div id="e10"></div>
                </div>
              </div>

              <!---div class="row">
                <div class="input-field col s12">
                  <select id="gender" name="gender" class="validate" data-error="#e3" required>           
                    <option value="" disabled selected>Choose Gender</option>
                    <option value="Male">Male</option> 
                    <option value="Female">Female</option>
                  </select>
                  <div id="e3"></div>
                </div>
              </div-->

              <div class="row">
                <div class="input-field col s12">
                  <p for="s_hall">Seminar Hall</p>
                  <div>
                    <input name="radio" type="radio" id="audi" value="audi" data-error="#e4" required>
                    <label for="audi">Main Auditorium</label>
                  </div>
                  <p>
                    <input name="radio" type="radio" id="comp" value="cs">
                    <label for="comp">Computer Seminar Hall</label>
                  </p>
                  <p> 
                    <input name="radio" type="radio" id="it" value="it">
                    <label for="it">IT Seminar Hall</label>
                  </p>
				  <p> 
                    <input name="radio" type="radio" id="entc" value="entc">
                    <label for="entc">E&TC Seminar Hall</label>
                  </p>
				  <p> 
                    <input name="radio" type="radio" id="room" value="class">
                    <label for="room">Class Room</label>
                  </p>
                  <div class="input-field">
                    <br>
                    <div id="e4"></div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <!--label for="birthdate">Date of Birth</label-->
                  Date of seminar:<input type="date" id="date" class="datepicker" name="date" data-error="#e5" required>
                  <div id="e5"></div>
                </div>
              </div>
			  
			  <div class="row">
                <div class="input-field col s12">
                  Time:<input id="time" name="time" type="time" class="validate" data-error="#e9" required>
                  <div id="e9"></div>
                </div>
              </div>		  
			  
			  <div class="row">
                <input type="button" id="check_avail" class="waves-effect waves-light btn-large" value="check" name="check_avail"/>
        </div>


              <div class="row">
                <div class="input-field col s12">
                  <textarea id="req" name="req" class="materialize-textarea" data-error="#e6" required></textarea>
                  <label for="req">Other Requirements(20 words)</label>
                  <div id="e6"></div>
                </div>
              </div>

			  <div class="row">
                <div class="input-field col s12">
                  <textarea id="desc" name="desc" class="materialize-textarea" data-error="#e7" required></textarea>
                  <label for="desc">Short Description about Seminar(20 words)</label>
                  <div id="e7"></div>
                </div>
              </div>
			  
              <div class="row">
                <div class="file-field input-field col s12">
                  <div class="btn">
                    <span>Browse</span>
                    <input type="file" data-error="#e8" required>
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Select a file to upload">
                  </div>
                  <div class="input-field">
                    <div id="e8"></div>
                  </div>
                </div>
              </div>

              
              <div class="row">
                <div class="input-field col m6 s12">
                  <button name = "actionsub" type="submit" value="submit" class="waves-effect waves-light btn-large"><i class="material-icons right">backup</i>Submit</button>
				  
				  </div>
				  <div class="input-field col m6 s12">
				  <button type="reset" class="waves-effect waves-light btn-large" value="Reset">Reset</button>
                                  
				</div>
              </div>

			   
            </form>
			

          </div>
        </div>
      </div>
    </div>

    <!--div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
      <a class="btn-floating btn-large red" href="http://www.labnol.org/" target="_blank" title="YouTube Uploader Support">
        <i class="large material-icons">live_help</i>
      </a>
    </div-->
	
	

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

  </body>

  </html>