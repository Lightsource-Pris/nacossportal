<html>
<head>
	<title>NACOSS FUNAAB</title>
	<link rel="stylesheet" type="text/css" href="../css/font-awesome/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i|Signika+Negative:300,400,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/floating-labels.css">
	<link rel="icon" href="images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
		 <a class="navbar-brand" href="index.html"><img class="nav-logo" src="images/nacoss-logo.jpg"></a>
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
		 	<span class="navbar-toggler-icon"></span>
		 </button>

		<div class="collapse navbar-collapse  my-2 my-md-0" id="navbarsExample05">
		 	<ul class="navbar-nav mr-auto" id="nav-ul">
		     	<li class="nav-item">
		          	<a class="nav-link" href="index.html"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
		     	</li>
		     	<li class="nav-item">
		          	<a class="nav-link" href="" onclick="maintain()"><i class="fa fa-credit-card"></i> Make Payments</a>
		     	</li>
		     	<li class="nav-item">
		          	<a class="nav-link" href="lectmat.html"><i class="fa fa-file-text"></i> Lecture Materials</a>
		     	</li>
		     	<li class="nav-item active">
		          	<a class="nav-link" href="contact.php"><i class="fa fa-info"></i> Contact Us</a>
		     	</li>
		     	<li class="nav-item">
		          	<a class="nav-link" href="about.html"><i class="fa fa-users"></i> About Us</a>
		    		</li>
		     	<li class="nav-item">
		          	<a class="nav-link" href="photos.html"><i class="fa fa-photo"></i>Photo Speaks</a>
		    		</li>
	     	</ul>
	 	</div>
	</nav>
	
	<!-- <header>
		<h1 class="contact-h1"> Contact Us </h1>
		<p>
			You can make enquirues, suggestions, <br>
			leave a comment, give your opinions about matters and lodge complains.<br>
			Just fill out the form below with correct information and we will get back to you as soon as possible
		</p>
	</header> -->

	<section class="about-us-section container">
		<h1 class="wow animated bounceInDown" data-wow-delay="0.5s">
			Contact Us
			<hr class="about-hr">
		</h1> <br>
		<p class="wow animated fadeIn" data-wow-delay="0.7s">
			You can make enquiries, suggestions, <br>
			leave a comment, give your opinions about matters and lodge complains.<br>
			Just fill out the form below with correct information and we will get back to you as soon as possible
		</p>
	</section>

	<form method="POST" action="contact.php" class="needs-validation wow animated slideInUp container"   data-wow-delay="0.5s" novalidate>
		<div class="form-label-group">
		      <input type="text" pattern="[a-z A-Z -]+" title="Letters Only" id="inputname" name="name" class="form-control" placeholder="Full Name" required >
		      <label for="inputname">Full Name</label>
		      <div class="valid-feedback">Valid.</div>
		           <div class="invalid-feedback">Please fill out this field correctly.</div>
		 </div>

		<div class="form-label-group">
		      <input type="text" pattern="[0-9]+" title="Numbers Only" id="inputmatric" name="llevel" class="form-control" placeholder="Level" required>
		      <label for="inputmatric">Level</label>
		      <div class="valid-feedback">Valid.</div>
		      <div class="invalid-feedback">Please fill out this field correctly.</div>
		</div>

		<div class="form-label-group">
		      <input type="email" id="inputemail" name="email_add" class="form-control" placeholder="Email Address" required>
		      <label for="inputemail">Email Address</label>
		      <div class="valid-feedback">Valid.</div>
		      <div class="invalid-feedback">Please fill out this field correctly.</div>
		</div>

		<div class="form-label-group" id="no-pad-b">
		      <input type="tel" pattern="[0-9]+" title="Numbers Only" id="inputphone" name="phone_number" class="form-control" placeholder="Phone Number" required>
		      <label for="inputphone">Phone Number</label>
		      <div class="valid-feedback">Valid.</div>
		      <div class="invalid-feedback">Please fill out this field correctly.</div>
		</div>

		<textarea rows="3" maxlength="150" name="message" required class="form-control" placeholder="What would you like tell us ?"></textarea>
		<br>
		<button class="btn btn-lg btn-primary" id="submit-btn" type="submit">SUBMIT</button>
	</form>

	<div class="advert-div wow animated bounceInUp">
		<h1 class="advert-h1">Advertise your Product Here</h1>
		<img class="img-fluid" src="images/advert.jpg">
	</div>
	
	
	<?php 
function response($msg){
	echo '<script type="text/javascript"> alert("'.$msg .'") </script>';
	}
if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email_add']) && !empty($_POST['email_add']))
&& (isset($_POST['llevel']) && !empty($_POST['llevel']))
&& (isset($_POST['phone_number']) && !empty($_POST['phone_number']))
&& (isset($_POST['message']) && !empty($_POST['message']))){
    $nameee = $_POST['name'];
    $email_addee = $_POST['email_add'];
    $llevelee = $_POST['llevel'];
    $messageee = $_POST['message'];
    $messageee .= $_POST['llevel'];
    $phone_numberee = $_POST['phone_number'];
    $to = "nacossfunaabchapter@gmail.com";
    $headers = "From : " . $email_addee."\r\n";
    
    if( mail($to, $nameee, $messageee, $headers)){
       response("Message Sent successfully, we will get back to you soon.");
	  $conn = new mysqli('localhost','root','','ncs');
	$query = $conn->prepare( "INSERT INTO contactoo(nameee, email_addee, llevelee, phone_numberee, messageee) VALUES (?,?,?,?,?)") or die("Unable to Connect");
	$query->bind_param("ssiis",$nameee,$email_addee,$llevelee,$phone_numberee,$messageee);
	$query->execute();
	$query->close();
	$conn->close();
     }
     else{
       response("Your message was unable to send please try again later, thanks."); 
    }
	
}
    ?> 
	
	
	
	<footer class="row">
			<div class="col-md-4">
				<h1 class="footer-h1">
					NACOSS <span class="green">FUNAAB</span>
				</h1>
				<ul class="foot-pg-ul">
					<li class="foot-pg-li "><a  class="foot-pg-a" href="index.html">HOME</a></li> |
					<li class="foot-pg-li "><a  class="foot-pg-a" href="" onclick="maintain()">PAYMENTS</a></li> |
					<li class="foot-pg-li "><a  class="foot-pg-a" href="contact.php">CONTACT</a></li> |
					<li class="foot-pg-li "><a  class="foot-pg-a" href="about.html">ABOUT</a></li> |
					<li class="foot-pg-li "><a  class="foot-pg-a" href="photos.html">GALLERY</a></li>
				</ul>

				<p class="foot-p"> ©2020 NACOSS FUNAAB </p>
			</div>
			<div class="col-md-4 foot-center">
				<div class="foot-div">
					<i class="fa fa-map-marker foot-icons"></i>
					<p class="foot-center-p">
						NACOSS,Federal Uni. of Agriculture<br>
					     Alabata Road, Abeokuta
					  </p>
				</div>
				<p>
					<i class="fa fa-phone foot-icons"></i>  +234 8130005258
				</p>
				<p>
					<i class="fa fa-envelope foot-icons"></i> nacossfunaabchapter@gmail.com
				</p>
			</div>
			<div class="col-md-4">
				<h3>About this site</h3>

				<p class="foot-right-p">
					This site offers payment features, departmental updates, advertisement and past question downloads as sponsored by NACOSS FUNAAB and designed by PRISSOLUTIONS
				</p>

				<a href="https://web.facebook.com/nacoss_funaab-100562041636964/" target="blank"><i class="fa fa-facebook foot-icons"></i></a>
				<i class="fa fa-twitter foot-icons"></i>
				<a href="https://www.instagram.com/nacoss_funaab/" target="blank"><i class="fa fa-instagram foot-icons"></i></a>
			</div>
	</footer>




	<script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/maintain.js"></script>

</body>
</html>
