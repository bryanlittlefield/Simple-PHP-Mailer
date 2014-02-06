<?php

/* These are the variable that tell the subject of the email and where the email will be sent.*/

$emailSubject = 'Subject of Email Here';
$mailto = 'me@myemail.com';

/* These will gather what the user has typed into the field. */

$name = $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$comments= $_POST['comments'];

/* This takes the information and lines it up the way you want it to be sent in the email. */

$body = <<<EOD
<br><hr><br>
Name: $name <br>
Email: $email <br>
Phone: $phone <br>
Comments: $comments <br>
EOD;

$headers = "From: from@theemail.com\r\n"; // This takes the email and displays it as who this email is from.
$headers .= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.
$success = mail($mailto, $emailSubject, $body, $headers); // This tells the server what to send.
echo $success;

?>
