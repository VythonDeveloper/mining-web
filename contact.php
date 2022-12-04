<?php 
include "./dbcon.php";
$start = date("d-m-Y h:i a");
$added_on= date('Y-m-d h:i:s',strtotime('+5 hour +30 minutes',strtotime($start)));

function getSafeValue($value){
	global $conn;
	return strip_tags(
		mysqli_real_escape_string($conn, $value)
	);
}
if(isset($_POST['postMessage'])){

	$mandatoryVal = isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']);

	if($mandatoryVal){
		$fullname = getSafeValue($_POST['fullname']);
	    $email = getSafeValue($_POST['email']);
	    $subject = getSafeValue($_POST['subject']);
	    $message = getSafeValue($_POST['message']);

	    $conn->query("Insert into contact_us set
	    	fullname = '$fullname',
	    	email = '$email',
	    	subject = '$subject',
	    	message = '$message',
	    	status = 'Active',
	    	date = '$added_on'
	    	");

	    if($conn->affected_rows > 0){
	    	echo "<script>alert('Message is posted. Please allow 24 hrs and will we connect you with your query/suggestion/complaint.');</script>";
	    } else{
	    	echo "<script>alert('Something went wrong');</script>";
	    }
	} else{
		echo "<script>alert('All fields are required');</script>";
	}
	header("Refresh:0");
}
include "header.php";?>

	<!-- contact -->
	<div class="contact-top">
		<!-- container -->
		<div class="container">
			<div class="contact-info">
				<h3>Knowteq Equipcare LLP</h3>
			</div>
			<div class="map footer-middle">
				<iframe src="https://maps.google.com/maps?q=Knowteq%20Equipcare%20LLP&t=m&z=10&output=embed&iwloc=near" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<h3>Address</h3>
					<h5 style="color: black;">Better yet, see us in person!</span></h5>
					<h4>Headquarters</h4>
					<p style="color: black;"><strong>Knowteq Equipcare LLP</strong>, Tarakpur Near- ECL Hospital, Kajora Gram, Andal, Dist- West Burdwan, Asansol
						<span>West Bengal</span>
						India, Pin-713321
					</p>
					<h4>Get In Touch</h4>
					<p style="color: black;">Telephone: +91 84201 78887<br>
					Telephone: +91 96095 86869<br>
						<!-- <span>FAX: +1 234 567 9871</span> -->
						E-mail: <a href="mailto:info@equipcare.in">info@equipcare.in</a>
					</p>
				</div>
				<div class="col-md-6 contact-form">
					<form method="POST">
						<input type="text" id="fullname" name="fullname" placeholder="Full Name" required="">
						<input type="text" id="email" name="email" placeholder="Email" required="">
						<input type="text" id="subject" name="subject" placeholder="Subject" required="">
						<textarea id="message" name="message" placeholder="Message" required=""></textarea>
						<input type="submit" value="Post Message" name="postMessage" id="postMessage">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //gallery -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<h3>Reach and Join Us</h3>
				<p class="f-address"><strong>Knowteq Equipcare LLP</strong>, Tarakpur Near- ECL Hospital, Kajora Gram, Andal, Dist- West Burdwan, Asansol</p>
				<ul>
					<li><a href="#" class="facebook"> </a>
					<li><a href="#" class="facebook twitter"> </a>
				</ul>
				<p class="copyright"> © <?php echo date('Y');?> Knowteq Equipcare LLP. All rights reserved <mute style="display: none;">| Design by <a href="http://w3layouts.com/">W3layouts</a></mute> | Customised by Munmun Gorai</p>
			</div>	
		</div>
	</div>
	<?php include "footer.php";?>