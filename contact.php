<?
if ($send=="yes") {
	$sendTo = "pedidos@cabezademartillo.com";
	$bccTo = "cabezademartillo@esfera.cl";
	if ($subjectVar=="") { $subject="kompra"; } else { $subject="$subjectVar"; }
	
	$headers = "From: " . $nameVar;
	$headers .= "<" . $emailVar . ">\r\n";
	$headers .= "Reply-To: " . $emailVar; 
	mail($sendTo, $bccTo, $subject, $body, $headers);
}
echo "&errormessage=El email ha sido enviado&";
?>