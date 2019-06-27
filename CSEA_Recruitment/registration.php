<!DOCTYPE html>
<html lang="en">
<html>

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CSEA Recruitment</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="shortcut icon" href="images/csealogo.png">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<section class="abc">
		<header id="header" class="page-topbar">
			<nav class="black" role="navigation">
				<div class="nav-wrapper center"><a id="logo-container" href="" class="brand-logo">
						<img  src="images/csealogo2.png" height="50" width="50"></a>
				</div>
			</nav> <!-- end header nav-->
		</header>

			<?php
				if(isset($_POST['sendmail'])) {
					require 'PHPMailerAutoload.php';
					require 'credential.php';

					$mail = new PHPMailer;

					 $mail->SMTPDebug = 2;

					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';
					$mail->SMTPAuth = true;
					$mail->Username = EMAIL;
					$mail->Password = PASS;
					$mail->SMTPSecure = 'ssl';
					$mail->Port = 465;

					$mail->setFrom(EMAIL, 'SRMCSEA');
					$mail->addAddress($_POST['email']);

					$mail->addReplyTo(EMAIL);


					$mail->isHTML(true);
					$sub=  'SRM CSEA Recruitment Form';
					$msg = '<b>Greetings from SRM CSEA. With respect to your entries, following responses are generated</b>'."<br><br>"; // start with a blank message
				    $msg .= '<b>Name:</b> ' . $_POST['name'] . "<br><br>";
				    $msg .= '<b>Registration Number</b>: ' . $_POST['regno'] . "<br> <br>";
					$msg .= '<b>Email:</b> ' . $_POST['email'] . "<br> <br>";
					$msg .= '<b>Contact Number:</b> ' . $_POST['mobile'] . "<br>  <br>";
					$msg .= '<b>Domain(s):</b> ' . $_POST['Area'] . "<br><br>";
					$msg .= '<b>Mention two of your strengths and two of your weaknesses.</b> ' . $_POST['job1'] . "<br> <br>";
					$msg .= '<b>Why do you want to be a part of the CSE Association?</b> ' . $_POST['job2'] . "<br><br>";
					$msg .= '<b>Were you part of the Association last year?,If yes, what work have you done?</b> ' . $_POST['job3'] . "<br> <br>";
					$msg .= '<b>Do you have any experience in the domain(s) that you have selected? If yes, mention them.</b> ' . $_POST['job4'] . "<br> <br>";
					$msg .= '<b>Are you a part of any other team/club? What is your job profile there?</b> ' . $_POST['job5'] . "<br> <br>";
					$msg .= '<b>How do you plan to contribute to your selected domain(s)? What ideas do you have?</b> ' . $_POST['job6'] . "<br> <br>";
					$msg .= '<b>What do you think is the job of an office bearer? How is it different from that of a first year member?</b> ' . $_POST['job7'] ."<br> <br>";
					$msg .= '<b>How would you resolve differences if they arise in the team?</b> ' . $_POST['job8'] . "<br> <br>";
					$msg .= '<b>Do you consider yourself to be a team leader? Elucidate about your previous experience as one.</b> ' . $_POST['job9'] . "<br> <br>";

		            $mail->Subject = $sub;

					$mail->Body    = $msg;

					$mail->AltBody = $_POST['regno'];

					if(!$mail->send()) {
					    echo 'Message could not be sent.';
					    echo 'Mailer Error: ' . $mail->ErrorInfo;

					} else {
					    echo 'Message has been sent';
					}
				}
			 ?>
		<main>
			<div class="row">
				<div class="col s12 m12 l12">
					<div class="col s12 m12 l6 offset-l3">
						<div class="card-panel z-depth-3 contact">
							<div class="row">
								<h5 class="black-text" id="title2"><b>CSEA Recruitment</b></h5>
								<h7 class="black-text" id="title2">
									<center><b>Only 2nd years</b></center>
								</h7>
								<form role="form" method="post" id="formID" enctype="multipart/form-data">
									<div class="input-field col s6">
										<label for="name">Name*</label>
										<input id="first_name" type="text" name="name" minlength="5" class="validate" required />
									</div>
									<div class="input-field col s6">
										<label for="regno">Registration Number*</label>
										<input type="text" name="regno" maxlength="15" minlength="15" class="validate" required />
									</div>
									<div class="input-field col s6">
										<label for="email">Email Address*</label>
										<input type="email" name="email" class="validate" required />
									</div>
									<div class="input-field col s6">
										<label for="mobile">Mobile Number*</label>
										<input type="tel" pattern="[6789][0-9]{9}" maxlength="10" minlength="10" name="mobile" class="validate" required />
									</div>
									<div class="col s6 ">
										<label for="role">Branch</label>
										<select id="role" class="validate black" name="branch" required>
											<option value="" disabled>Select Your Branch</option>
											<option class="black-text" value="CSE" name="OPTS">CSE</option>
											<option value="CSE With AI and ML" name="OPTS">CSE With AI and ML</option>
											<option value="CSE With Big Data" name="OPTS">CSE With Big Data</option>
											<option value="CSE With Cloud Computing" name="OPTS">CSE With Cloud Computing</option>
											<option value="CSE With Computer Networking" name="OPTS">CSE With Computer Networking</option>
											<option value="CSE With IOT" name="OPTS">CSE With IOT</option>
											<option value="CSE With Software Engineering" name="OPTS">CSE With Software Engineering</option>
											<option value="CSE With IT" name="OPTS">CSE With IT</option>
										</select>
									</div>
									<div class="col s6">
										<label for="role">Domain</label>
										<select multiple id="role" class="validate" name="Area" required>
											<option value="" disabled>Select Your Domain</option>
											<option value="Tech" name="OPTS">Tech</option>
											<option value="Media" name="OPTS">Media</option>
											<option value="Cultural" name="OPTS">Cultural</option>
											<option value="Operation and Logistics" name="OPTS">Operation and Logistics</option>
											<option value="Sponsorship" name="OPTS">Sponsorship</option>
											<option value="Workshop" name="OPTS">Workshop</option>
											<option value="Discipline" name="OPTS">Discipline</option>
											<option value="Communication" name="OPTS">Communication</option>
										</select>
									</div>
									<div class="col s12">
										<h7 class="black-text" id="title3"><b>Mention two of your strengths and two of your weaknesses. </b></h7>
									</div>
									<div class="input-field col s12">
										<label for="job">Your Answer</label>
										<textarea  class="validate materialize-textarea" name="job1" id="txtJobTitle" value="" required></textarea>
									</div>
									<div class="col s12">
										<h7 class="black-text" id="title3"><b>Why do you want to be a part of the CSE Association? </b></h7>
									</div>
									<div class="input-field col s12">
										<label for="job">Your Answer</label>
										<textarea  class="validate materialize-textarea" name="job2" id="txtJobTitle" value="" required></textarea>
									</div>
									<div class="col s12">
										<h7 class="black-text" id="title3"><b>Were you part of the Association last year? </b><b>If yes, what work have you done?</b></h7>
									</div>
									<div class="input-field col s12">
										<label for="job">Your Answer</label>
											<textarea  class="validate materialize-textarea" name="job3" id="txtJobTitle" value="" required></textarea>
									</div>
									<div class="col s12">
										<h7 class="black-text" id="title3"><b>Do you have any experience in the domain(s) that you have selected? If yes, mention them.</b></h7>
									</div>
									<div class="input-field col s12">
										<label for="job">Your Answer</label>
											<textarea  class="validate materialize-textarea" name="job4" id="txtJobTitle" value="" required></textarea>
									</div>
									<div class="col s12">
										<h7 class="black-text" id="title3"><b>Are you a part of any other team/club? What is your job profile there?</b></h7>
									</div>
									<div class="input-field col s12">
										<label for="job">Your Answer</label>
										<textarea  class="validate materialize-textarea" name="job5" id="txtJobTitle" value="" required></textarea>
									</div>
									<div class="col s12">
										<h7 class="black-text" id="title3"><b>How do you plan to contribute to your selected domain(s)? What ideas do you have? </b></h7>
									</div>
									<div class="input-field col s12">
										<label for="job">Your Answer</label>
										<textarea  class="validate materialize-textarea" name="job6" id="txtJobTitle" value="" required></textarea>
									</div>
									<div class="col s12">
										<h7 class="black-text" id="title3"><b>What do you think is the job of an office bearer? How is it different from that of a first year member? </b></h7>
									</div>
									<div class="input-field col s12">
										<label for="job">Your Answer</label>
										<textarea class="validate materialize-textarea" name="job7" id="txtJobTitle" value="" required></textarea>
									</div>
									<div class="col s12">
										<h7 class="black-text" id="title3"><b>How would you resolve differences if they arise in the team? </b></h7>
									</div>
									<div class="input-field col s12">
										<textarea class="validate materialize-textarea" name="job8" id="txtJobTitle" value="" required></textarea>
										<label for="job">Your Answer</label>
									</div>
									<div class="col s12">
										<h7 class="black-text" id="title3"><b> Do you consider yourself to be a team leader? Elucidate about your previous experience as one. </b></h7>
									</div>
									<div class="input-field col s12">
										<textarea class="validate materialize-textarea" name="job9" id="txtJobTitle" value="" required></textarea>
											<label for="job">Your Answer</label>
									</div>
									<div class="input-field col s12">
										<center>
											<button class="btn waves-effect waves-light center submit" id="btnReg" onclick="Validate();" type="submit" name="sendmail">Register
											</button>
										</center>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
	</section>
	</div>
	</main>



	  <!-- Modal Structure -->
	  <div id="modal1" class="modal">
	    <div class="modal-content">
	      <h4 id="title2" class="center">Thanks For Filling The Form!</h4>
	      <p  id="title3" class="center"><a class="btn-floating white pulse"><i class="green-text material-icons">check</i></a>
				<br>	Please check your e-mail</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Close</a>
	    </div>
	  </div>
		<div id="modal2" class="modal">
	    <div class="modal-content">
	      <h4 id="title2" class="center">Sorry! The Message Could Not Be Sent.</h4>
	      <p  id="title3" class="center"><a class="btn-floating white pulse"><i class="red-text material-icons">error</i></a>
				<br>	Please fill the form again</p>
	    </div>
	    <div class="modal-footer">
	      <a href="#!" class="modal-close waves-effect waves-red btn-flat">Close</a>
	    </div>
	  </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
	<script type='text/javascript' src='js/materialize.min.js'></script>
	<script>
		$(document).ready(function() {
			$('select').formSelect();
		});
		$(document).ready(function(){
	 $('.modal').modal();
 });
	</script>
	<script type="text/javascript">
		function Validate() {
			captureSetup();
			$('#textarea1').val('New Text');
			M.textareaAutoResize($('#textarea1'));
		}
	</script>

</body>

</html>
