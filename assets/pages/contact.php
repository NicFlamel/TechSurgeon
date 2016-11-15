<?php
   require_once('./assets/header.php');
?>
<header class="main-header">
    <div class="container">
        <h1 class="page-title">Contact Us</h1>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="section-title no-margin-top">Send Message</h2>
        </div>	
		<div class="col-md-12">
            <section>
			 <ul class="nav nav-pills nav-justified ar-nav-pills max-width-500 center-block margin-bottom">
				<li class="active"><a href="#contact" data-toggle="tab"><i class="fa fa-envelope"></i> Contact Us</a></li>
				<li> <a href="#quote" data-toggle="tab"><i class="fa fa-wrench"></i> Request a Repair</a></li>
			</ul>
                <p>If you have any questions, concerns, or would like a quote on a repair, please fill out a very detailed message and we will get back to you as soon as possible.</p>
<?php
	if (isset($_POST['quoteBtn'])) {
		$errors = array();
		$name = $_POST['QuoteInputName'];
		$email = $_POST['QuoteInputEmail1'];
		$device = $_POST['QuoteInputDevice'];
		$problem = $_POST['QuoteInputIssue'];
		$cause = $_POST['QuoteInputCause'];
		$other = $_POST['QuoteInputOther'];

		if(empty($name)) {
			$errors[] = 'You did not enter a name.';
		}
		if(empty($email)) {
			$errors[] = 'You did not enter an email.';
		}
		if(empty($device)) {
			$errors[] = 'You did not enter a device.';
		} 
		if(empty($problem)) {
			$errors[] = 'You did not enter the problem.';
		} 
		if(empty($cause)) {
			$errors[] = 'You did not enter how the device got damaged.';
		} 

		
		
		if(empty($errors)) {


			$Database->selectPrepare("INSERT INTO  `quotes` (`ID` ,`name` ,`email` ,`device` ,`problem` ,`cause` ,`other` ,`time`, `IP`) VALUES (NULL ,  :name,  :email,  :device,  :problem,  :cause,  :other,  :time, :IP);",
				array(':name' => $name, ':email' => $email, ':device' => $device, ':problem' => $problem, ':cause' => $cause, ':other' => $other, ':time' => time(), ':IP' => $_SERVER["HTTP_CF_CONNECTING_IP"]));
			echo '	<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4>Success!</h4>
						Your request has been recieved and we will get back to you as soon as possible!
					</div>';

				$to      = 'austin@techsurgeon.net';
				$subject = 'Quote Request: '.$name.'\'s ' .$device;
				
				$message = "
				<b>Name</b><br>
				".$name."<br><br>
				<b>E-mail</b><br>
				".$email."<br><br>
				<b>Device</b><br>
				".$device."<br><br>
				<b>What's the issue?</b><br>
				".$problem."<br><br>
				<b>How did this happen?</b><br>
				".$cause."<br><br>
				<b>Anything else?</b><br>
				".$other."<br><br>
				";
				
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

				

				mail($to, $subject, $message, $headers);

		} else {
			echo '
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4>ERROR!</h4>';
				foreach($errors as $error) {
					echo ' <p>'.$error.'</p>';
				}
				echo '</div>';
		}
		
	}

	if (isset($_POST['contactBtn'])) {
		$errors = array();
		$name = $_POST['ContactInputName'];
		$email = $_POST['ContactInputEmail'];
		$message = $_POST['ContactInputMessage'];
		

		if(empty($name)) {
			$errors[] = 'You did not enter a name.';
		}
		if(empty($email)) {
			$errors[] = 'You did not enter an email.';
		}
		if(empty($message)) {
			$errors[] = 'You did not enter a message.';
		} 
		if(strlen($message) < 4 || strlen($message) > 4096) {
			$errors[] = 'Message length must be between 4 and 4096 characters long.';
		}
		
		if(empty($errors)) {


			$Database->selectPrepare("INSERT INTO  `contact` (`ID` ,`name` ,`email` ,`message` ,`time`, `IP`) VALUES (NULL ,  :name,  :email,  :message,  :time, :IP);",
				array(':name' => $name, ':email' => $email, ':message' => $message, ':time' => time(), ':IP' => $_SERVER["HTTP_CF_CONNECTING_IP"]));
			echo '	<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4>Success!</h4>
						Your message has been recieved and we will get back to you as soon as possible!
					</div>';
					
				$to      = 'austin@techsurgeon.net';
				$subject = 'Message from: '.$name.'';
				
				$sendmessage = "
				<b>Name</b><br>
				".$name."<br><br>
				<b>E-mail</b><br>
				".$email."<br><br>
				<b>Message</b><br>
				".$message."<br><br>
				";
				
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

				

				mail($to, $subject, $sendmessage, $headers);
			
		} else {
			echo '
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4>ERROR!</h4>';
				foreach($errors as $error) {
					echo ' <p>'.$error.'</p>';
				}
				echo '</div>';
		}
		
	}
?>
<div class="tab-content margin-top">
            <div class="tab-pane active" id="contact">
                <div class="row">
					<div class="col-md-12">
						<div class="panel panel-primary">
							<div class="panel-body">

								<form method="POST">
									<div class="form-group">
										<label for="ContactInputName">Name*</label>
										<input type="text" class="form-control" name="ContactInputName" placeholder="John Smith">
									</div>
									<div class="form-group">
										<label for="ContactInputEmail">Email address*</label>
										<input type="email" class="form-control" name="ContactInputEmail" placeholder="John@smith.com">
									</div>
									<div class="form-group">
										<label for="ContactInputMessage">Message*</label>
										<textarea class="form-control" name="ContactInputMessage" rows="4"></textarea>
									</div>
								  <button type="submit" name="contactBtn" class="btn btn-ar btn-primary">Submit</button>
								</form>
							</div>
						</div>
					</div>
                </div>
            </div>
            <div class="tab-pane" id="quote">
                <div class="row">
						<div class="col-md-12">
							<div class="panel panel-primary">
								<div class="panel-body">
									<form method="POST">
										<div class="form-group">
											<label for="QuoteInputName">Name*</label>
											<input type="text" class="form-control" name="QuoteInputName" placeholder="John Smith">
										</div>
										<div class="form-group">
											<label for="QuoteInputEmail1">Email address*</label>
											<input type="email" class="form-control" name="QuoteInputEmail1" placeholder="John@smith.com">
										</div>
										<div class="form-group">
											<label for="QuoteInputDevice">Device*</label>
											<input type="text" class="form-control" name="QuoteInputDevice" placeholder="iPhone 5s">
										</div>
										<div class="form-group">
											<label for="QuoteInputIssue">What's the issue?*</label>
											<textarea class="form-control" name="QuoteInputIssue" rows="4" placeholder="Screen is shattered"></textarea>
										</div>
										<div class="form-group">
											<label for="QuoteInputCause">How did this happen?*</label>
											<textarea class="form-control" name="QuoteInputCause" rows="4" placeholder="I dropped it"></textarea>
										</div>
										<div class="form-group">
											<label for="QuoteInputOther">Anything else?</label>
											<textarea class="form-control" name="QuoteInputOther" rows="4"></textarea>
										</div>
									  <button type="submit" name="quoteBtn" class="btn btn-ar btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
                </div>
            </div>
        </div>
            </section>
        </div>
    </div>

    
</div> <!-- container -->
<?php
   require_once('./assets/footer.php');
?>