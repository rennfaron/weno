<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the first name field is not empty
	if(trim($_POST['firstname']) == '') {
		$hasError = true;
	} else {
		$firstname = trim($_POST['firstname']);
	}
	
	//Check to make sure that the last name field is not empty
	if(trim($_POST['lastname']) == '') {
		$hasError = true;
	} else {
		$lastname = trim($_POST['lastname']);
	}

	//attention field (can be empty)
	$attention = trim($_POST['attention']);
	
	//Check to make sure that the phone field is not empty
	if(trim($_POST['phone']) == '') {
		$hasError = true;
	} else {
		$phone = trim($_POST['phone']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$message = stripslashes(trim($_POST['message']));
		} else {
			$message = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = 'tina@wenohealthcare.com, gene@wenohealthcare.com, kevin@wenoexchange.com'; //Put your own email address here
		$body = "From: \n$firstname $lastname \n$email \n$phone \n\nAttention: \n$attention \n\nMessage: \n$message";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $attention, $body, $headers);
		$emailSent = true;
	}
}
?>
<?php include("header.php"); ?>
        <section>
            <header class="page">
                <h1>
                    Weno Loves Communication
                </h1>
                <h2>
                    Send us a Message!
                </h2>
            </header>
        </section>
    </div>
	<section class="bg-jagged br-lightcyan-fill-top">
        <div class="xthin">
        	<h1>If you want to leave a message, please fill out your information and we will get back to you as soon as we can.</h1>
			<?php if(isset($hasError)) { //If errors are found ?>
			<p class="message-status">Please check if you've filled all the fields with valid information. Thank you.</p>
            <?php } if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
			<p class="message-status"><strong>Email Successfully Sent!</strong> Thank you, <strong><?php echo $firstname; echo ' '; echo $lastname; ?></strong>.</p>
            <?php } ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
    			<ul>
                	<li>
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" id="firstname" required>
                	</li>
                    <li>
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" id="lastname" required>
                	</li>
                    <li>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                	</li>
                    <li>
                        <label for="attention">Attention (not required)</label>
                        <input type="text" name="attention" id="attention">
                	</li>
                    <li>
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" required>
                	</li>
                    <li>
                        <label for="message">Message</label>
                        <textarea name="message" id="message" required></textarea>
                	</li>
                </ul>
                <p class="before-submit">Make sure the information is correct before clicking submit</p>
                <div class="btn-submit">
                    <input type="submit" name="submit" value="submit">
                </div>
		</form>
        <p class="contact-thank-you">Thank you.</p>
            <figure class="thank-you-weno"></figure>
		</div>
        <button type="button" class="go-top">Go Back to Top</button>
    </section>
<?php include("footer.php"); ?>