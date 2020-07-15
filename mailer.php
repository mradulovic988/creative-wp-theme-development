<?php
$firstLastName          = $_POST['firstLastName'];
$email                  = $_POST['email'];
$company                = $_POST['company'];
$phoneNumber            = $_POST['phoneNumber'];
$dns                    = isset($_POST['dns']) ? $_POST['dns'] : 'Error';
$hostingProvider        = isset($_POST['hostingProvider']) ? $_POST['hostingProvider'] : 'Error';
$optimization           = isset($_POST['optimization']) ? $_POST['optimization'] : 'Error';
$socialNetwork          = isset($_POST['socialNetwork']) ? $_POST['socialNetwork'] : 'Error';
$afterDevelop           = isset($_POST['afterDevelop']) ? $_POST['afterDevelop'] : 'Error';
$responsive             = isset($_POST['responsive']) ? $_POST['responsive'] : 'Error';
$languages              = $_POST['languages'];
$pages                  = $_POST['pages'];
$budget                 = $_POST['budget'];
$plan                   = $_POST['plan'];
$request                = $_POST['request'];

$mail_to                = 'marko@fixrunner.com';
$subject                = 'Order from M LabStudio';

$body = '
					<div class="container">
						<div class="row" style="text-align: center;">
							<div class="col" style="border: 1px solid rgba(0, 0, 0, .1); padding: 20px;">
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>First and Last Name: </strong>' . $firstLastName . '</>
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>Email: </strong>' . $email . '</>
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>Company Name: </strong>' . $company . '</>
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>Phone Number: </strong>' . $phoneNumber . '</>
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>Do you have DNS: </strong>' . $dns . '</>
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>Do you have Hosting Provider: </strong>' . $hostingProvider . '</>
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>Do you want integration with social network: </strong>' . $socialNetwork . '</>
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>Do you want responsive web design: </strong>' . $responsive . '</>
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>How many languages do you want: </strong>' . $languages . '</>
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>How many pages do you want: </strong>' . $pages . '</>
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>How many pages do you want: </strong>' . $budget . '</>
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>Choose your plan: </strong>' . print_r(implode('', $plan), true) . '</>
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;"><strong>Request:</strong></></p>
								<p style="font-size: 14px; text-align: left; color: rgb(62, 62, 62); margin: 0;">' . $request . '</>
							</div>
						</div>
					</div>';

$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= "From: <" . $email . ">\r\n";
$header .= "Reply-To: " . $email . "\r\n";

mail($mail_to, $subject, $body, $header);

?>