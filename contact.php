<?php

?>
<!doctype html>
<html>
	<!--VIEWPORT-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="coopTemplateStyle.css">
	<style>	
		#contact {
			width: 80%;
			margin-left: auto;
			margin-right: auto;
			text-align: center;
			background-color: antiquewhite;
			padding: 20px;
		}
		h1 {
			text-shadow: 4px 4px 6px;
		}
		form {
			font-size: 1.5em;
		}
		.checkBoxes {
			text-align: left;
			margin: 15px;
		}
		.checkBoxes table {
			margin-left: auto;
			margin-right: auto;
		}
		.wide {
			width: 100%;
			margin-right: auto;
			margin-left: auto;
		}
		input[type = 'checkbox'], input[type = 'radio']{
			width: 1em;
			height:1em;
		}
		.buttons {
			margin: 15px;
		}
		.toggleForm {
			width: 80%;
			height: 75px;
			margin-left: auto;
			margin-right: auto;
			font-size: 2em;
			font-weight: bold;
			background-color: #857d78;
			text-align: center;
		}
		.contactButton, .scheduleButton {
			display: inline-block;
			width: 50%;
			height: 75px;
			line-height: 75px;
		}
		.contactButton:hover {
			cursor: pointer;
		}
		.scheduleButton:hover {
			cursor: pointer;
		}
		.tourDate {
			display: inline;
			width: 50%;
			margin-left: 5px;
			
		}
		.tourTime  {
			text-align: left;
			margin-left: auto;
			margin-right: auto;
		}
		h2 {
			font-weight: bold;
		}
		.tourInfo {
			margin: 15px;
		}
		
		/*Media Queries*/
		@media only screen and (max-width: 991px){
			
			.wide {
				width: 70%;
			}
			table {
				width: 70%;
				margin-left: auto;
				margin-right: auto;
			}
			.checkBoxes table {
				width: auto;
			}
			.scheduleButton, .contactButton {
				display: block;
				width: 100%;
			}
			.toggleForm {
				height: 150px;
			}
			.tourDate {
				width: 40%;
			}
			.tourTime {
				width: auto;
			}
		}
		@media only screen and (max-width: 576px){
			.wide {
				width: 100%;
			}
			#contact {
				width: 100%;
			}

			body {
				font-size: 1.5em;
			}
			table {
				width: 80%;
			}
			h1 {
				font-size: 2em;
			}
			.toggleForm {
				width: 100%;
			}
			.tourTime {
				width: 70%;
			}
			h2 {
				font-size: 1.25em;
			}
		}
	</style>
	<script>
		function contactClick() {
			document.querySelector("#scheduleForm").style.display = "none";
			document.querySelector("#contactForm").style.display = "block";
			
			document.querySelector(".contactButton").style.backgroundColor = "#A8AC86";
			document.querySelector(".scheduleButton").style.backgroundColor = "";
		}
		function scheduleClick() {
			document.querySelector("#contactForm").style.display = "none";
			document.querySelector("#scheduleForm").style.display = "block";
			
			document.querySelector(".scheduleButton").style.backgroundColor = "#A8AC86";
			document.querySelector(".contactButton").style.backgroundColor = "";
		}
	</script>
<meta charset="utf-8">
<title>Contact Us!</title>
</head>
<header>
	
	<a href="index.html"><img src="photos/logo.png" id="headLogo" alt="logo"></a>	
	
	<nav class="navbar navbar-expand-lg" style="background-color: #A8AC86;">
		<button class="navbar-toggler custom-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav" style="justify-content: center">
			<ul class="navbar-nav" >
				<li class="nav-item">
					<a class="nav-link" href="index.html"><u>Home</u></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="ourStory.html">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="floor-plans.html">Floor Plans</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="gallery.html">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<img id="bannerHome" src="photos/bannerHome2.png" alt="banner photo" width="100%" height="100%">

	<img id="bannerHomeMobile" src="photos/bannerHome3.png" alt="banner photo" width="100%" height="100%">
	
</header>

<body onLoad="contactClick()">
	<div class = "toggleForm">
		<div onClick="contactClick()" class= "contactButton">CONTACT US</div><div onClick="scheduleClick()" class= "scheduleButton">SCHEDULE TOUR</div>
	</div>
	<div id = "contact">
		<form action = "contact.php" method = "post" id = "contactForm">
			<div class= "row">
				<div class = "col-lg-1 col-md-3" ></div>
				<div class = "col-lg-5">
					<label for = "firstName" class="form-label">First Name*</label><br>
					<input type = "text" name = "firstName" class = "wide form-control">
				</div>
				<div class = "w-100 d-none"></div>
				<div class = "col-lg-5">
					<label for = "lastName" class="form-label">Last Name*</label><br>
					<input type = "text" name = "lastName" class = "wide form-control">
				</div>
				<div class = "col-lg-1 col-md-3"></div>
			</div>
			
			<div class= "row">
				<div class = "col-lg-1"></div>
				<div class = "col-lg-5">
					<label for = "email" class="form-label">Email*</label><br>
					<input type = "email" name = "email" class = "wide form-control">
				</div>
				<div class = "col-lg-5">
					<label for = "phone" class="form-label">Phone*</label><br>
					<input type = "text" name = "phone" class = "wide form-control">
				</div>
				<div class = "col-lg-1"></div>
			</div>
			
			<div class= "row">
				<div class = "col-lg-1"></div>
				<div class = "col-lg-5">
					<label for = "address" class="form-label">Address*</label><br>
					<input type = "text" name = "adress" class = "wide form-control">
				</div>
				<div class = "col-lg-5">
					<label for = "zip" class="form-label">Zip Code*</label><br>
					<input type = "text" name = "zip" class = "wide form-control">
				</div>
				<div class = "col-lg-1"></div>
			</div>
			<div class= "row">
				<div class = "col-lg-1"></div>
				<div class = "col-lg-5">
					<label for = "floorPlans" class="form-label">Floor Plans*</label><br>
					<input type = "text" name = "floorPlans" class = "wide form-control">
				</div>
				<div class = "col-lg-1"></div>
			</div>
			
			<div class = "row checkBoxes">
				<div class = "col-lg-1"></div>
				<div class = "col-lg-5">
					<table>
							<tr><td><label for "moveTime" class="form-label">How soon are you looking to move?</label></td></tr>
								<tr><td><input type = "checkbox" name = "moveTime" value = "3-6 months"> 3-6 months</td></tr>
								<tr><td><input type = "checkbox" name = "moveTime" value = "6-12 months"> 6-12 months</td></tr>
								<tr><td><input type = "checkbox" name = "moveTime" value = "12+ months"> 12+ months</td></tr>
					</table>
				</div>
				<div class= "col-lg-5">
					<table>
							<tr><td><label for "reference" class="form-label">How did you hear about us?</label></td></tr>
								<tr><td><input type = "checkbox" name = "reference" value = "Mail"> Mail</td></tr>
								<tr><td><input type = "checkbox" name = "reference" value = "Social Media"> Social Media</td></tr>
								<tr><td><input type = "checkbox" name = "reference" value = "Newspaper"> Newspaper</td></tr>
								<tr><td><input type = "checkbox" name = "reference" value = "Drive By"> Drive By</td></tr>
								<tr><td><input type = "checkbox" name = "reference" value = "Other"> Other</td></tr>
					</table>
				</div>
				<div class = "col-lg-1"></div>
			</div>
			<div class = "row">
				<div class = "col-lg-1"></div>
				<div class = "col-lg-10">
					<label for = "message" class="form-label">Message</label><br>
					<textarea name = "messaage" class = "wide form-control" rows = "5"></textarea>
				</div>
				<div class = "col-lg-1"></div>
			</div>
			<div class = "row buttons" >
				<div class = "col-lg-4"></div>
				<div class = "col-lg-4"><input type = "submit"> <input type = reset></div>
				<div class = "col-lg-4"></div>
			</div>	
		</form>
		<form action = "contact.php" method = "post" id = "scheduleForm">
			<div class= "row">
				<div class = "col-lg-1 col-md-3" ></div>
				<div class = "col-lg-5">
					<label for = "firstName" class="form-label">First Name*</label><br>
					<input type = "text" name = "firstName" class = "wide form-control">
				</div>
				<div class = "w-100 d-none"></div>
				<div class = "col-lg-5">
					<label for = "lastName" class="form-label">Last Name*</label><br>
					<input type = "text" name = "lastName" class = "wide form-control">
				</div>
				<div class = "col-lg-1 col-md-3"></div>
			</div>
			
			<div class= "row">
				<div class = "col-lg-1"></div>
				<div class = "col-lg-5">
					<label for = "email" class="form-label">Email*</label><br>
					<input type = "email" name = "email" class = "wide form-control">
				</div>
				<div class = "col-lg-5">
					<label for = "phone" class="form-label">Phone*</label><br>
					<input type = "text" name = "phone" class = "wide form-control">
				</div>
				<div class = "col-lg-1"></div>
			</div>
			<div class = "row checkBoxes">
				<div class = "col-lg-1"></div>
				<div class= "col-lg-5">
					<table>
							<tr><td><label for "reference" class="form-label">How did you hear about us?</label></td></tr>
								<tr><td><input type = "checkbox" name = "reference" value = "Mail"> Mail</td></tr>
								<tr><td><input type = "checkbox" name = "reference" value = "Social Media"> Social Media</td></tr>
								<tr><td><input type = "checkbox" name = "reference" value = "Newspaper"> Newspaper</td></tr>
								<tr><td><input type = "checkbox" name = "reference" value = "Drive By"> Drive By</td></tr>
								<tr><td><input type = "checkbox" name = "reference" value = "Other"> Other</td></tr>
					</table>
				</div>
				<div class = "col-lg-5"></div>
				<div class = "col-lg-1"></div>
			</div>
			<h2>Tour Information</h2>
			<div class = " tourInfo row">
				<div class =  "col-lg-1"></div>
				<div class = "col-lg-5">
					<label for "tourDate" class = "form-label">Select Date: </label><input type = "date" name = "tourDate" class = "tourDate form-control">
				</div>
				<div class = "col-lg-5">
					<table class = "tourTime">
						<tr>
							<td><label for = "tourTime" class = "form-label">Preferred Time:</label></td>
						</tr>
						<tr><td><input type = "radio" name = "tourTime" value = "Morning"> Morning</td></tr>
						<tr><td><input type = "radio" name = "tourTime" value = "Afternoon"> Afternoon</td></tr>
					</table>
				</div>
				<div class =  "col-lg-1"></div>

			</div>
			<div class = "row">
				<div class = "col-lg-1"></div>
				<div class = "col-lg-10">
					<label for = "message" class="form-label">Leave a comment or question</label><br>
					<textarea name = "messaage" class = "wide form-control" rows = "5"></textarea>
				</div>
				<div class = "col-lg-1"></div>
			</div>
			<div class = "row buttons" >
				<div class = "col-lg-4"></div>
				<div class = "col-lg-4"><input type = "submit"> <input type = reset></div>
				<div class = "col-lg-4"></div>
			</div>	
		</form>
	</div>
	

</body>
<footer>
	
	
	<div class="row" id="footContainer">
		
		
		<div id="navFoot" class="col-lg-4">
			<h4><strong>Navigation:</strong></h4>
			
			<p>
				<u>
					<a class="nav-link" href="index.html"><u>Home</u></a>
					<a class="nav-link" href="ourStory.html">About</a>
					<a class="nav-link" href="floor-plans.html">Floor Plans</a>
					<a class="nav-link" href="gallery.html">Gallery</a>
					<a class="nav-link" href="contact.php">Contact</a>
				</u>
			</p>
		</div>

		<div class="col-lg-4">
			<h4><strong>Vintage Cooperative of Prairie Trail</strong></h4>

			<p>
				1370 SW Magazine Rd<br>
				Ankeny, Iowa 50023<br>
				515.279.3000
			</p>
			
			<button id="footContact" onClick="document.location='contact.php'">Contact</button>
		</div>

		<div class="col-lg-4 order-first order-lg-last">

			<img id="footLogo" src="photos/logo.png" alt="logo">
			
		</div>
		
	</div>
		
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</footer>		
</html>