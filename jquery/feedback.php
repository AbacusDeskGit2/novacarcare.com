<?php 

/*<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>*/

$mailto = 'sarthak@humanoidsindia.com, novacarcareprd@gmail.com, ka@humanoidsindia.com' ;


$subject = "Query from Shinencare.com" ;

$formurl = "http://www.shinencare.com/contact.html" ;
$errorurl = "http://www.shinencare.com/error.html" ;
$thankyouurl = "http://www.shinencare.com/thankyou.html" ;

$email_is_required = 1;
$name_is_required = 1;
$uself = 0;
$use_envsender = 0;
$use_utf8 = 1;
$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;
$content_type = (!isset( $use_utf8 ) || ($use_utf8 == 0)) ? 'Content-Type: text/plain; charset="iso-8859-1"' : 'Content-Type: text/plain; charset="utf-8"' ;
if (!isset( $use_envsender )) { $use_envsender = 0 ; }
$envsender = "-f$mailto" ;
$name = $_POST['name'] ;
$name2 = $_POST['name2'] ;
$email = $_POST['email'] ;
$comments = $_POST['comments'] ;
$http_referrer = getenv( "HTTP_REFERER" );

if (!isset($_POST['email'])) {
	header( "Location: $formurl" );
	exit ;
}
if (($email_is_required && (empty($email) || !ereg("@", $email))) || ($name_is_required && empty($name))) {
	header( "Location: $errorurl" );
	exit ;
}
if ( ereg( "[\r\n]", $name ) || ereg( "[\r\n]", $email ) ) {
	header( "Location: $errorurl" );
	exit ;
}
if (empty($email)) {
	$email = $mailto ;
}

if (get_magic_quotes_gpc()) {
	$comments = stripslashes( $comments );
}

$messageproper =
	"This message was sent from:\n" .
	"$http_referrer\n" .
	"------------------------------------------------------------\n" .
	"Name of sender: $name\n" .
	
	"Phone Number: $name2\n" .
	"Email of sender: $email\n" .
	"------------------------- COMMENTS -------------------------\n\n" .
	$comments .
	"\n\n------------------------------------------------------------\n" ;

$headers =
	"From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep . "X-Mailer: chfeedback.php 2.12.0" .
	$headersep . 'MIME-Version: 1.0' . $headersep . $content_type ;

if ($use_envsender) {
	mail($mailto, $subject, $messageproper, $headers, $envsender );
}
else {
	mail($mailto, $subject, $messageproper, $headers );
}
header( "Location: $thankyouurl" );
exit ;

/*</body>
</html>*/

?>


