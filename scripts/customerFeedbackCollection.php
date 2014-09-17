<?php
//processFeedback.php
$subject = "Feedback";
//Construct the message to be sent to the business
$messageToBusiness = 
    "From: ".$_POST['title']." "
            .$_POST['fullName']."r\n".
    "Member Id: ".$_POST['memberId']."\r\n" .
    "E-mail address: ".$_POST['email']."\r\n".
    "Phone number: ".$_POST['phoneNum']."\r\n".
    "Subject: ".$_POST['overallsat']."\r\n".
    $_POST['message']."\r\n";
// subject

//Send the e-mail feedback message to the business (but here, to the webbook site)
$headerToBusiness = "From: $_POST[email]\r\n";
mail("shohad.cse@gmail.com", $subject, $messageToBusiness, $headerToBusiness);

//Construct the confirmation message to be e-mailed to the client
$messageToClient =
    "Dear ".$_POST['title']." ".$_POST['fullName'].":\r\n".
    "A message was received from you by Bongo Bazaar:\r\n\r\n".
	"Your satisfiction: ".$_POST['overallsat']."\r\n\r\n".
    $messageToBusiness.
	
	
    "------------------------\r\nWe really appreciate your opinion and support\r\n" .
    "Bongo Bazaar Wholesale\r\n------------------------\r\n";
if ($_POST['reply'])
    $messageToClient .= "P.S. We will contact you as soon as possible with details.";
//Send the confirmation message to the client
$headerToClient = "From: shohad.cse@gmail.com\r\n";
mail($_POST['email'], "Re: ",$subject, $messageToClient, $headerToClient);

//Transform the confirmation message to the client into XHTML format and display it
$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display =
    "<html><head><title>Your Message</title></head><body><tt>".
    $display.
    "</tt></body></html>";
echo $display;

//Log the message in a file called feedback.txt on the web server
$fileVar = fopen("../data/feedback.txt", "a")
    or die("Error: Could not open the log file.");
fwrite($fileVar, "\n-------------------------------------------------------\n")
    or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
    or die("Error: Could not write to the log file.");
?>
