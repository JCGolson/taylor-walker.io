<?php 
$dontsendemail = 0;
$possiblespam = FALSE;
$strlenmessage = "";
$email = $_REQUEST['email']; 
$message = $_REQUEST['message']; 
$subject = $_REQUEST['subject']; 
$emailaddress = "martin@martingolson.com"; /* NOTE: Although your email address is visible here in this code, the person contacting you will never see this email address. Your email address will remain on your server, and it will not be sent from your server to the person contacting you. It will also remain invisible to spam bots. Your email address	is also never stored on any of our servers. You can choose to delete or not delete this note when you publish this page. It will not change the functionality of the contact form. */

// Check human test input box
if(isset($_REQUEST["htest"]) && $_REQUEST["htest"] != "") die("Possible spam detected. Please hit your browser back button and check your entries."); 
// Check email address function
function checkemail($field) {
	// checks proper syntax
	if( !preg_match( "/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $field))
	{
		die("Improper email address detected. Please hit your browser back button and enter a proper email address."); 
		return 1;
	}
}
// Check month function
function checkmonth($field,$checkrequiredob) {
    if($checkrequiredob == 0) {
		if(!preg_match("/^[\s]{0,5}$|^(0|January|February|March|April|May|June|July|August|September|October|November|December)$/", $field)) die("Improper month of birth detected. Please hit your browser back button and try again.");  
	}
	else {
		if(!preg_match("/^(January|February|March|April|May|June|July|August|September|October|November|December)$/", $field)) die("Improper month of birth detected. Please hit your browser back button and try again."); 
	}
}
// Spamcheck function
function spamcheck($field) {
	if(preg_match("/to:/i",$field) || preg_match("/cc:/i",$field) || preg_match("/\r/i",$field) || preg_match("/i\n/i",$field) || preg_match("/%0A/i",$field)){ 
		$possiblespam = TRUE;
	}else $possiblespam = FALSE;
	if ($possiblespam) {
		die("Possible spam attempt detected. If this is not the case, please edit the content of the contact form and try again.");
		return 1;
	}
}
// Spamcheck URL function
function spamcheckurl($field) {
	if(preg_match("/to:/i",$field) || preg_match("/cc:/i",$field) || preg_match("/\r/i",$field) || preg_match("/\n/i",$field)){ 
		$possiblespam = TRUE;
	}else $possiblespam = FALSE;
	if ($possiblespam) {
		die("Possible spam attempt detected. If this is not the case, please edit the content of the contact form and try again.");
		return 1;
	}
}
function strlencheck($field,$minlength,$maxlength,$minresponse,$maxresponse) {
	if (strlen($field) < $minlength){
		die($minresponse); 
		return 1;
	}
	if (strlen($field) > $maxlength){
		die($maxresponse); 
		return 1;
	}
}
function checkphone($field,$checkrequirephone,$warning) {
	if($checkrequirephone == 0) {
		if(!preg_match("/^([\s]{0,10})$|^(((\+)?[1-9]{1,2})?([-\s\.])?((\(\d{1,4}\))|\d{1,4})(([-\s\.])?)(((\d{1,12}){1})|((\d{3,4}([-\s\.])?){2,3})){1}([\s]{0,10}))$/", $field)) die($warning);
	}		
	else {
		if(!preg_match("/^((\+)?[1-9]{1,2})?([-\s\.])?((\(\d{1,4}\))|\d{1,4})(([-\s\.])?)(((\d{1,12}){1})|((\d{3,4}([-\s\.])?){2,3})){1}([\s]{0,10})$/", $field)) die($warning);
	}
}
function checkpriority($field,$checkrequirepriority) {
	if($checkrequirepriority == 0) {
		if(!preg_match("/^[\s]{0,10}$|^[\d]$/",$field)) die("Improper priority detected. Please hit your browser back button and try again.");
	}
	else {
		if(!preg_match("/^[\d]$/",$field)) die("Improper priority detected. Please hit your browser back button and try again.");
	}
}

	$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];strlencheck($firstname,1,60,"You have not entered a proper first name. Please hit your browser back button and check your name entry.","You have entered a first name that is too long. Please hit your browser back button and check your name entry."); strlencheck($lastname,1,60,"You have not entered a proper last name. Please hit your browser back button and check your name entry.","You have entered a last name that is too long. Please hit your browser back button and check your name entry.");$phone = $_REQUEST['phone'];checkphone($phone,1,"Improper first phone number detected. Please hit your browser back button and try again."); $besttime = $_REQUEST['besttime'];if ($dontsendemail == 0) $dontsendemail = spamcheck($_REQUEST["htest"]);
function checkcaptcha() {
			session_start();
			if ($_SESSION["pass"] != $_POST["userpass"]) {
				die("Sorry, you failed the CAPTCHA. Note that the CAPTCHA is case-sensitive. Please hit your browser back button and try again.");
				return 1;
			}
		}
	
		if ($dontsendemail == 0) $dontsendemail = checkcaptcha($email);
	if ($dontsendemail == 0) $dontsendemail = spamcheck($firstname)+spamcheck($lastname);
if ($dontsendemail == 0) $dontsendemail = spamcheck($phone);
if ($dontsendemail == 0) $dontsendemail = spamcheck($besttime);

if ($dontsendemail == 0) $dontsendemail = checkemail($email);
if ($dontsendemail == 0) $dontsendemail = spamcheck($email);
if ($dontsendemail == 0) $dontsendemail = spamcheck($subject);
if ($dontsendemail == 0) $dontsendemail = strlencheck($email,10,255,"The email address field is too short. Please hit your browser back button and check your entry.<br />","The email address you have entered is too long. Please hit your browser back button and check your entry."); //NOTE: An extremely small number of people worldwide have email addresses that are shorter than 10 characters. Though they exist, I as a webmaster who receives 200 emails per day have never seen a valid email address that was shorter than 12 characters. However, email addresses of length 13 characters are fairly common. I recommend that you do not reduce the 10 unless you plan on using internal emails from a business that has short email addresses, but that you do not raise the 10 so that you can avoid accidentally eliminating real contacts. Feel free to delete this message when you read it. It will not reduce the functionality of this contact form.

if ($dontsendemail == 0) $dontsendemail = strlencheck($subject,5,255,"The subject field is too short. Please hit your browser back button and check your entry.<br />","The subject you have entered is too long. Please hit your browser back button and check your entry."); //NOTE: There is no technical minimum subject line length. Any length, however, helps avoid spam, and a 5 character subject line is not so cumbersome as to annoy the user.

if ($dontsendemail == 0) $dontsendemail = strlencheck($message,10,10000,"The message field is too short. Please hit your browser back button and check your entry.<br />","Your message is limited to 10000 characters. Please hit your browser back button and shorten your message."); //NOTE: If you want your users to send you messages longer than 10000 characters long, modify the 10000 to a larger number. Similarly, if you want your maximum message length to be shorter and more to the point, reduce the 10000 to a smaller number. 
if ($dontsendemail == 0) $dontsendemail = strlencheck($emailaddress,8,255,"You have not selected a recipient of your message. Please hit your browser back button and check your entry.<br />","Possible spam detected. Please hit your browser back button and choose a recipient for your email.");
if ($dontsendemail == 0) {
	$message="";
	$message.="Name: ".$firstname." ".$lastname."\r\n";
	$message.="Phone Number: ".$phone."\r\n";
	$message.="Best time to call: ".$besttime."\r\n";
	
	$message=$message."\r\nMessage:\r\n".$_REQUEST['message'];
	mail($emailaddress,"$subject",$message,"From: $email" ); include "email_sent.php";
}