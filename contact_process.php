<?php

    $to = "moustaphadiongue1@gmail.com";
    $from = "fuki-mailer@fuki.de";
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $logo = 'http://wethemez.com/test-html/consultplus/img/logo-black.png';
   
    $subject = "Mariage Moustapha et Vicky";
    $from2 = $_REQUEST['email'];

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Nom:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Mail:</strong> {$from2}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Message:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

  	if($send){
  		$send = 'oui';
  	}else{
  		$send = 'non';
  	}
    header('Location:contact.php?send='.$send); 

?>
