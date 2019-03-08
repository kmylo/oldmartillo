<?
if ($send=="yes") {
	$sendTo = "argentina@cabezademartillo.com";
	$bccTo = "argentina@cabezademartillo.com";
	if ($subjectVar=="") { $subject="kompra"; } else { $subject="$subjectVar"; }
	
	$headers = "From: " . $nameVar;
	$headers .= "<" . $emailVar . ">\r\n";
	$headers .= "Reply-To: " . $emailVar; 
	mail($sendTo, $bccTo, $subject, $body, $headers);
}
echo "&errormessage=El email ha sido enviado&";
?>