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

if(isset($_POST['from']) && $_POST['from'] == "Upload_Resume"){
	$mandatoryVal = isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['phoneNumber']) && isset($_FILES['resumeFile']['name']);

	if($mandatoryVal){
		$fullname = getSafeValue($_POST['fullname']);
	    $email = getSafeValue($_POST['email']);
	    $phoneNumber = getSafeValue($_POST['phoneNumber']);
	    $resumeFileName = $_FILES['resumeFile']['name'];

	    if (round($_FILES['resumeFile']['size'] /1024 /1024, 2) > 7.00) {
            die("The file is too big. Max size is 7 mb");
        }

        if(!is_dir("./assets/resume/")) {
            mkdir("./assets/resume"); 
        }

        $rawBaseName = uniqid();
        $extension = pathinfo($resumeFileName, PATHINFO_EXTENSION ) != '' ? pathinfo($resumeFileName, PATHINFO_EXTENSION ) : 'pdf';
        $counter = 0;
        $resumeFileName = $rawBaseName . '.' . $extension;
        while(file_exists("./assets/resume/".$resumeFileName)) {
            $resumeFileName = $rawBaseName . $counter . '.' . $extension;
            $counter++;
        }

        if(move_uploaded_file($_FILES['resumeFile']['tmp_name'],"./assets/resume/".$resumeFileName)){
        	$conn->query("Insert into resume set
        		resumeFile = '$resumeFileName',
        		fullname = '$fullname',
        		email = '$email',
        		phone = '$phoneNumber',
        		status = 'Active',
        		date = '$added_on'
        		");

        	if($conn->affected_rows > 0){
        		echo json_encode(array("error" => false, "message" => "Resume Posted! Thanks for showing interest. Please wait for our executive to contact you."));
        	} else{
        		echo json_encode(array("error" => true, "message" => "Something went wrong"));
        	}
        } else{
    		echo json_encode(array("error" => true, "message" => "File was not uploaded. Try again"));
    	}

	} else{
		echo json_encode(array("error" => true, "message" => "All fields are required"));
	}
	exit();
}

include "header.php";?>

	<!-- contact -->
	<div class="contact-top">
		<!-- container -->
		<div class="container">
			<div class="contact-info">
				<h3>Career</h3>
			</div>
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		
					<h4 style="color: black;">We are hiring, To apply connect with below-mentioned mail id</span></h4>
					<h4>Mail your Resume</h4>
					E-mail: <a href="mailto:hr.exerecruitment@equipcare.in">hr.exerecruitment@equipcare.in</a>
				</div>
				<div class="col-md-6 contact-form" style="text-align: left !important;">
					<form method="POST" style="text-align: left !important;" id="career-form" onsubmit="postResume(); return false;" enctype="multipart/form-data">
						<label for="resumeFile">Resume *</label>
						<input type="file" id="resumeFile" name="resumeFile" required>
						<br>
						<label for="fullname">Full Name *</label>
						<input type="text" id="fullname" name="fullname" placeholder="First Name" required="">
						<label for="email">Email *</label>
						<input type="text" id="email" name="email" placeholder="Email" required="">
						<label for="phoneNumber">Phone number *</label>
						<input type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone number" required="">
						<div id="post_button_field">
							<input type="submit" value="Post my Resume">
						</div>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //gallery -->
	<!-- footer -->
	<?php include "footer.php";?>

<script type="text/javascript">
    function _(el){
        return document.getElementById(el);
    }
    
    function postResume(){
        var fi =_('resumeFile'); 
        var file_len = fi.files.length;
        _("post_button_field").innerHTML = "Thanks for posting your resume. Please wait Loading...";
        var formdata = new FormData();
        file_name = fi.files[0].name;
        var file_size = (fi.files[0].size / 1024 / 1024).toFixed(2); 
        var file_type = file_name.slice((file_name.lastIndexOf(".") - 1 >>> 0) + 2);
        var allowed_vid_ext = ["pdf", "docx"];
        
        if(file_len > 0 && file_size <= 7.00 && allowed_vid_ext.includes(file_type)){
            var file = _("resumeFile").files[0];
            formdata.append("resumeFile", file);
            formdata.append("fullname", _("fullname").value);
	        formdata.append("email", _('email').value);
	        formdata.append("phoneNumber", _('phoneNumber').value);
	        formdata.append("from", "Upload_Resume");
	        var ajax = new XMLHttpRequest();
	        ajax.addEventListener("load", completeHandler, false);
	        ajax.addEventListener("error", errorHandler, false);
	        ajax.open("POST", "./career.php");
	        ajax.send(formdata);
        }
        else{
          	_("post_button_field").innerHTML = "<input type=\"submit\" value=\"Post my Resume\">";
          	alert("Resume File size must be within 7 mb.");
          	return false;
        }
    }
    function completeHandler(event){
    	// alert(event.target.responseText);
        var response = JSON.parse(event.target.responseText);
        if(response.error == false){
            alert(response.message);
            location.reload();
        } else{
            alert(response.message);
        }
    }
    function errorHandler(event){
        _("post_button_field").innerHTML = "<input type=\"submit\" value=\"Post my Resume\">";
        alert("Status : Upload Failed");
    }
</script>