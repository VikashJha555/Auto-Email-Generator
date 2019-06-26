<!DOCTYPE html>
<html lang="en" >
<html>
<head>

			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="profile" href="http://gmpg.org/xfn/11">

			<title>CSEA Recruitment</title>
			<link rel="shortcut icon" href="images/csealogo2.png">

			<link rel="shortcut icon" href="images/csealogo2.png">

			  <link rel="stylesheet" href="css/materialize.min.css">
			  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			  <link rel='stylesheet' href='https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css'>
			  <link rel='stylesheet' href='https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css'>


		      <link rel="stylesheet" href="css/style.css">
		      <link rel="stylesheet" href="css/responsive_market.css">
            


</head>



<body>


<section class="abc">
  <header id="header" class="page-topbar">
    <nav class="black" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">
        <img class="responsive-img" src="images/csea logo2.png" height="50" width="50" ></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">CSEA</a></li>
        </ul>

         <ul id="nav-mobile" class="sidenav">
          <li><a href="#">CSEA</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav> <!-- end header nav-->
  </header>


<hr>
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
			$sub=  'SRM CSEA Recruitment form';
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

    <div class="container">

      <div class="row">
        <div class="col s12 m12 l12">

            <div class="col s12 m12 l6 offset-l3">
                  <div class="card-panel z-depth-3 contact">
                      <div class="row">
                          <h5 class="black-text" id="title2"><b>CSEA Recruitment</b></h5>
                          <h7 class="black-text" id="title2"><center><b>Only 2nd years</b></center></h7>



                           <form role="form" method="post" id="formID" enctype="multipart/form-data">


                        <div class="input-field col s6">

                            <label for="name">Name</label>
                            <input id="txtContactPersonName" type="text" name="name" required/>

                        </div>

                        <div class="input-field col s6">

                            <label for="regno">Registration Number</label>
                            <input type="text"id="txtPhone" name="regno" required />

                        </div>


                        <div class="input-field col s6">

                            <label for="email">Email Address*</label>
                            <input type="email"id="email" name="email" required />

                        </div>


                         <div class="input-field col s6">

                             <label for="mobile">Mobile Number*</label>
                             <input type="text" pattern="[6789][0-9]{9}"  id="txtPhone" name="mobile" required />

                         </div>


                         <div class="col s6">
                             <label for="role">Domain</label>
                             <select multiple id="role" class="error" name="Area" required>
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
                             <input type="text" name="job1" id="txtJobTitle" value="" />

                         </div>
                         <div class="col s12">
                         <h7 class="black-text" id="title3"><b>Why do you want to be a part of the CSE Association? </b></h7>
                         </div>
                         <div class="input-field col s12">

                             <label for="job">Your Answer</label>
                             <input type="text" name="job2" id="txtJobTitle" value="" />

                         </div>
                         <div class="col s12">
                         <h7 class="black-text" id="title3"><b>Were you part of the Association last year? </b><b>If yes, what work have you done?</b></h7>
                         </div>
                         <div class="input-field col s12">

                             <label for="job">Your Answer</label>
                             <input type="text" name="job3" id="txtJobTitle" value="" />

                         </div>
                         <div class="col s12">
                         <h7 class="black-text" id="title3"><b>Do you have any experience in the domain(s) that you have selected? If yes, mention them.</b></h7>
                         </div>
                         <div class="input-field col s12">

                             <label for="job">Your Answer</label>
                             <input type="text" name="job4" id="txtJobTitle" value="" />

                         </div>
                         <div class="col s12">
                          <h7 class="black-text" id="title3"><b>Are you a part of any other team/club? What is your job profile there?</b></h7>
                          </div>
                          <div class="input-field col s12">

                              <label for="job">Your Answer</label>
                              <input type="text" name="job5" id="txtJobTitle" value="" />

                          </div>
                          <div class="col s12">
                           <h7 class="black-text" id="title3"><b>How do you plan to contribute to your selected domain(s)? What ideas do you have? </b></h7>
                           </div>
                           <div class="input-field col s12">

                               <label for="job">Your Answer</label>
                               <input type="text" name="job6" id="txtJobTitle" value="" />

                           </div>
                           <div class="col s12">
                            <h7 class="black-text" id="title3"><b>What do you think is the job of an office bearer? How is it different from that of a first year member? </b></h7>
                            </div>
                            <div class="input-field col s12">

                                <label for="job">Your Answer</label>
                                <input type="text" name="job7" id="txtJobTitle" value="" />

                            </div>
                            <div class="col s12">
                             <h7 class="black-text" id="title3"><b>How would you resolve differences if they arise in the team?  </b></h7>
                             </div>
                             <div class="input-field col s12">

                                 <label for="job">Your Answer</label>
                                 <input type="text" name="job8" id="txtJobTitle" value="" />

                             </div>
                             <div class="col s12">
                              <h7 class="black-text" id="title3"><b> Do you consider yourself to be a team leader? Elucidate about your previous experience as one. </b></h7>
                              </div>
                              <div class="input-field col s12">

                                  <label for="job">Your Answer</label>
                                  <input type="text" name="job9" id="txtJobTitle" value="" />

                              </div>
                         <!--div class="col s12">
                         <h7 class="black-text" id="title3"><b>     How will our association better than other?</b></h7>
                       </div>

                         <div class="input-field col s12">
                             <label for="company">Must Answer<span style="color: red;">*</span></label>
                             <input type="text" name="company" id="txtCompany" required/>
                         </div>
                         <div class="col s12">
                         <h7 class="black-text" id="title3"><b>Why do you want to join CSEA?</b></h7>
                         </div>
                         <div class="input-field col s12">

                             <label for="job">Your Answer</label>
                             <input type="text" name="job" id="txtJobTitle" value="" />

                         </div>

                         <div class="input-field col s12">
                             <label for="message" id="txtMessage">Message*</label>
                             <textarea id="txtMessage" name="message" rows="10" class="materialize-textarea"
                             placeholder="Tell us what's on your mind..." required></textarea>
                         </div-->
                         <div class="input-field col s12">
                           <center>
                             <button class="btn waves-effect waves-light right submit" id="btnReg" onclick="Validate();" type="submit" name="sendmail">Register
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


<div id="particles-js"></div>
  <script  type="text/javascript" src="js/particles.js"></script>
        <script  type="text/javascript" src="js/app.js"></script>
        <script type='text/javascript' src='js/jquery.js?ver=1.12.4'></script>
      	<script type='text/javascript' src='js/jquery-migrate.min.js?ver=1.4.1'></script>
          <script type='text/javascript' src="js/jquery1.11.3.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
<script src='https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js'></script>
<script  src="js/index_market.js"></script>
<script type='text/javascript' src='js/navigation.js'></script>
<script type='text/javascript' src='js/parallax.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script type='text/javascript' src='js/slick.min.js'></script>
<script type='text/javascript' src='js/scrollreveal.min.js'></script>
<script type='text/javascript' src='js/waypoints.min.js'></script>
<script type='text/javascript' src='js/jquery.counterup.min.js'></script>

<script type='text/javascript' src='js/header.js'></script>
	<script type='text/javascript' src='js/scripts.js'></script>



<script>

$(document).ready(function(){
    $('select').formSelect();
  });

</script>
<script type="text/javascript">
   function Validate() {

			captureSetup();
			
}

</script>

</body>
</html>
