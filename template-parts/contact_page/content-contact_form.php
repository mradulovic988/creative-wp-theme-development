<!--
=============================================
    Contact Us
==============================================
-->
<div class="contact-us-section contact-agency pt-150 mb-200">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="contact-form">
					<form action="" method="post" class="form form-style-two" id="contact-form">
						<div class="messages"></div>
						<div class="controls">
							<div class="form-group">
								<input id="form_name" type="text" name="names" placeholder="Your Name*" required="required" data-error="Your name is required.">
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group">
								<input id="form_email" type="email" name="emails" placeholder="Email Address*" required="required" data-error="Valid email is required.">
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group">
								<input id="form_sub" type="text" name="subjects" placeholder="Subject*" required="required" data-error="Subject is required.">
								<div class="help-block with-errors"></div>
							</div>
                            <input style="display:none;" type="text" id="web" name="web">
							<div class="form-group">
								<textarea id="form_message" name="messages" class="form_message" placeholder="Your Message*" required="required" data-error="Please,leave us a message."></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<button name="submits" class="theme-button-two" onchange="this.form.submit()">Send Message</button>
                            <div class="form-group">
                                <small class="agree" style="margin-top: 20px;">By clicking "Send Message", I agree to the terms & conditions and processing of my personal data as described in the <a href="/privacy-policy">Privacy Policy</a>.</small>
                            </div>
						</div> <!-- /.controls -->
					</form>
					<?php
                    if(!empty($_POST['web'])) die();
					if (isset($_POST['submits'])) {
						$names = $_POST['names'];
						$emails = $_POST['emails'];
						$subjects = $_POST['subjects'];
						$messages = $_POST['messages'];

						$mail_tos                = 'info@mlab-studio.com';
						$subjects_global         = 'Contact form - M LabStudio';

						$bodys = '
							<div class="container">
								<div class="row" style="text-align: center;">
									<div class="col" style="border: 1px solid rgba(0, 0, 0, .1); padding: 20px;">
										<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>Your Name: </strong>' . $names . '</p>
										<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>Email: </strong>' . $emails . '</p>
										<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>Subject: </strong>' . $subjects . '</p>
										<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>Message: </strong></p>
										<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;">' . $messages . '</p>
									</div>
								</div>
							</div>';

						$headers  = 'MIME-Version: 1.0' . "\r\n";
						$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$headers .= "From: " . $names . "<" . $emails . ">\r\n";
						$headers .= "Reply-To: " . $emails . "\r\n";

						if (!empty($names) && !empty($emails) && !empty($subjects) && !empty($messages)) {
							mail($mail_tos, $subjects_global, $bodys, $headers);
							echo '<div class="thank-you-wrapper" style="margin-top: 80px; text-align: center;" id="anchor"><strong style="letter-spacing: 1.2px;">Thank you for getting in touch!</strong><br><br><span>We appreciate you contacting us. One of our colleagues will get back in touch with you soon!</span><br><span>Have a great day!</span></div>';

                            mail($emails, 'M LabStudio - Contact', 'Thank you for your contact. One of our colleagues will get back in touch with you soon!');
						} else {
							echo '<div class="error-wrapper" id="anchor">Your message was not sent! Please check all of the fields.</div>';
						}
					}
					?>

					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
					<script>
                        (function($){

                            // Stay on the same location after mail was sent
                            $.fn.scrollPosRealoads = function(){
                                if (localStorage) {
                                    var posReader = localStorage["posStorage"];
                                    if (posReader) {
                                        $(window).scrollTop(posReader);
                                        localStorage.removeItem("posStorage");
                                    }
                                    $(this).click(function(e) {
                                        localStorage["posStorage"] = $(window).scrollTop();
                                    });
                                    return true;
                                }
                                return false;
                            }

                            $(document).ready(function() {
                                $('button').scrollPosRealoads();
                            });
                        }(jQuery));
					</script>

				</div> <!-- /.contact-form -->
			</div> <!-- /.col- -->

			<div class="col-lg-6">
				<div class="contact-info">
					<h2 class="title">Don’t Hesitate to contact with us for any kind of information</h2>
					<p>Call us for imidiate support to this number</p>
					<a href="tel:+381606631540" class="call">+38160 663 15 40</a>
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
				</div> <!-- /.contact-info -->
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div> <!-- /.contact-us-section -->