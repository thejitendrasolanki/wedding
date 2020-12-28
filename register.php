<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner navbar-inner_1">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
				  <a href="#" class="icon-home"></a>
				  <ul>
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
				  </ul>
				</li>
			   </ul>
             </nav>
           </div>
           <a class="brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
 
		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="index.html">Home</a></li>
		            <li><a href="about.html">About</a></li>
		    		<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matches<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="matches.html">New Matches</a></li>
		                <li><a href="viewed-profile.html">Who Viewed my Profile</a></li>
		                <li><a href="viewed-not_contacted.html">Viewed & not Contacted</a></li>
		                <li><a href="members.html">Premium Members</a></li>
		                <li><a href="shortlisted.html">Shortlisted Profile</a></li>
		              </ul>
		            </li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Regular Search</a></li>
		                <li><a href="profile.html">Recently Viewed Profiles</a></li>
		                <li><a href="search-id.html">Search By Profile ID</a></li>
		                <li><a href="faq.html">Faq</a></li>
		                <li><a href="shortcodes.html">Shortcodes</a></li>
		              </ul>
		            </li>
		            <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Messages<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="inbox.html">Inbox</a></li>
		                <li><a href="inbox.html">New</a></li>
		                <li><a href="inbox.html">Accepted</a></li>
		                <li><a href="sent.html">Sent</a></li>
		                <li><a href="upgrade.html">Upgrade</a></li>
		              </ul>
		            </li>
		            <li class="last"><a href="contact.html">Contacts</a></li>
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Register</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	    <?php
			if(isset($_GET["success"])){
				?>
				<h3 style="color:green">Account Created Successfully</h3>
				<?php
			}
			else if(isset($_GET["error"])){
				?>
				<h3 style="color:red">Try Again</h3>
				<?php
			}
			else if(isset($_GET["empty"])){
				?>
				<h3 style="color:red">All Field Required</h3>
				<?php
			}
			else if(isset($_GET["img_error"])){
				?>
				<h3 style="color:red">Sorry, there was problem uploading your file</h3>
				<?php
			}
		?>
		 <form method="post" action="registration.php" enctype="multipart/form-data">
	  	    <br><h3 style="color:#CD5C5C;text-decoration:underline;"><b>Persoanl Detail : <b></h3><br>
			<div class="form-group">
		      <label for="edit-name">First Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="fname" value="" size="60" maxlength="60" class="form-text required">
		    </div>
			<div class="form-group">
		      <label for="edit-name">Last Name <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="lname" value="" size="60" maxlength="60" class="form-text required">
		    </div>
			<div class="form-group">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required">
		    </div>
			<div class="form-group">
		      <label for="edit-name">Contact Number <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-pass" name="contact_number" size="60" maxlength="128" class="form-text required">
		    </div>
			<div class="form-group">
		      <label for="edit-name">Height(cm) <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="height" value="" size="60" maxlength="60" class="form-text required">
		    </div>
			<div class="form-group">
		      <label for="edit-name">Weight(kg) <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="weight" value="" size="60" maxlength="60" class="form-text required">
		    </div>
			<div class="form-group">
		      <label for="edit-name">Marital Status <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="marital_status" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="age_select">
		      <label for="edit-pass">D.O.B <span class="form-required" title="This field is required.">*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <select name="day">
	                    <option value="">Day</option>
						<?php
						for($i=1;$i<=31;$i++){
							?>
							<option value=<?=$i?>><?=$i?></option>
							<?php
						}
						?>
                    </select>
                  </div>
            </div>
            <div class="col-sm-4 form_box2">
                   <div class="select-block1">
                    <select name="month">
	                    <option value="">Month</option>
						<?php
						for($i=1;$i<=12;$i++){
							?>
							<option value=<?=$i?>><?=$i?></option>
							<?php
						}
						?>
                    </select>
                  </div>
                 </div>
                 <div class="col-sm-4 form_box1">
                   <div class="select-block1">
                    <select name="year">
	                    <option value="">Year</option>
	                   <?php
						for($i=1980;$i<=2010;$i++){
							?>
							<option value=<?=$i?>><?=$i?></option>
							<?php
						}
						?>
                    </select>
                   </div>
                  </div>
                  <div class="clearfix"> </div>
                 </div>
              </div>
              <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="sex">Sex : </label>
                <div class="col-sm-5">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name="gender" value="male" checked> Male
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="gender" value="female"> Female
				        </label>
	                </div>
                </div>
                <div class="clearfix"> </div>
             </div>
			 <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="diet">Diet : </label>
                <div class="col-sm-5">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name="diet" value="veg" checked> Vegetarian
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="diet" value="non_veg"> Non-Vegetarian
				        </label>
	                </div>
                </div>
                <div class="clearfix"> </div>
             </div>
			 <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="drink">Drink : </label>
                <div class="col-sm-5">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name="drink" value="no" checked> NO
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="drink" value="yes"> Yes
				        </label>
	                </div>
                </div>
                <div class="clearfix"> </div>
             </div>
			 <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="smoke">Smoke : </label>
                <div class="col-sm-5">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
				            <input type="radio" name="smoke" value="no" checked> NO
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="smoke" value="yse"> yes
				        </label>
	                </div>
                </div>
                <div class="clearfix"> </div>
             </div>
			 <br><h3 style="color:#CD5C5C;text-decoration:underline;"><b>Religious & Social Background : <b></h3><br>
			 <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="caste">Caste : </label>
                <div class="col-sm-5">
                    <div size="60" maxlength="60" class="select-block1">
						<select name="caste">
							<option value="">Caste</option>
							<option value="General">General</option>
							<option value="OBC">OBC</option>
							<option value="SC">SC</option>
						</select>
					</div>
                </div>
                <div class="clearfix"> </div>
             </div>
			 <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="religion">Religion : </label>
                <div class="col-sm-5">
                    <div size="60" maxlength="60" class="select-block1">
						<select name="religion">
							<option value="">Religion</option>
							<option value="Hindu">Hindu</option>
							<option value="Muslim">Muslim</option>
							<option value="Sikh">Sikh</option>
							<option value="Jain">Jain</option>
						</select>
					</div>
                </div>
                <div class="clearfix"> </div>
             </div>
			  <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="city">City : </label>
                <div class="col-sm-5">
                    <div size="60" maxlength="60" class="select-block1">
						<select name="city">
							<option value="">City</option>
							<option value="Jodhpur">Jodhpur</option>
							<option value="Bikaner">Bikaner</option>
							<option value="Jaipur">Jaipur</option>
							<option value="Udaypur">Udaypur</option>
						</select>
					</div>
                </div>
                <div class="clearfix"> </div>
             </div>
			 <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="state">State : </label>
                <div class="col-sm-5">
                    <div size="60" maxlength="60" class="select-block1">
						<select name="state">
							<option value="">state</option>
							<option value="Rajasthan">Rajasthan</option>
							<option value="Gujrat">Gujrat</option>
							<option value="Maharastra">Maharastra</option>
							<option value="New_Delhi">New Delhi</option>
						</select>
					</div>
                </div>
                <div class="clearfix"> </div>
             </div>
			  <div class="form-group">
			     <label for="edit-name">Permanent Address <span class="form-required" title="This field is required.">*</span></label>
				 <textarea class="form-control bio" name="address" placeholder="" rows="3"></textarea>
			  </div>
			  <div class="form-group">
			     <label for="edit-name">Bio <span class="form-required" title="This field is required.">*</span></label>
				 <textarea class="form-control bio" name="bio" placeholder="" rows="3"></textarea>
			  </div>
			  <br><h3 style="color:#CD5C5C;text-decoration:underline;"><b>Education & Career : <b></h3><br>
			  <div class="form-group">
				<label for="edit-name">Higher Education <span class="form-required" title="This field is required.">*</span></label>
				<input type="text" id="edit-name" name="education" value="" size="60" maxlength="60" class="form-text required">
		      </div>
			  <div class="form-group">
				<label for="edit-name">Occupation <span class="form-required" title="This field is required.">*</span></label>
				<input type="text" id="edit-name" name="occupation" value="" size="60" maxlength="60" class="form-text required">
		      </div>
			  <br><h3 style="color:#CD5C5C;text-decoration:underline;"><b>Files : <b></h3><br>
			  <div class="form-group">
				<label for="edit-name">Profile Photo <span class="form-required" title="This field is required.">*</span></label>
				<input type="file" id="edit-name" name="photo" value="PHOTO" class="form-text required">
		      </div>
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="submit" value="Submit" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	  <div class="col-sm-6">
	     <ul class="sharing">
			<li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
		  	<li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
		  	<li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		  	<li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		  	<li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
		 </ul>
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
</div>
<div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="contact.html">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.html">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.html">Privacy Policy</a></li>
    				<li><a href="terms.html">Terms and Conditions</a></li>
    				<li><a href="services.html">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="#"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-google-plus fa1"> </i></a></li>
				  <li><a href="#"><i class="fa fa-youtube fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		       <p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
      </div>
</div>
</body>
</html>	