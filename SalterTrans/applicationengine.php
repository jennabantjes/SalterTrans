<?php

if (isset($_POST['SpamButton'])) {
    echo "No spam allowed."; exit ();
} 

else {
    //assume btnSubmit

	// Pull in info from form
	$EmailFrom = 'SalterTrans.com';
	$EmailTo = 'jennabantjes@gmail.com';
	$ApplicantName = htmlentities(trim(stripslashes($_POST['ApplicantName'] )));
	$ApplicantEmail = htmlentities(trim(stripslashes($_POST['ApplicantEmail'] ))); 
	$ApplicantPhone = htmlentities(trim(stripslashes($_POST['ApplicantPhone'] )));

	// Check to see if form field are spaces
	$SpamBlankMessage = "No blank spaces permitted.";

	if(empty($ApplicantName)) {echo "$SpamBlankMessage"; exit();}
	if(empty($ApplicantEmail)) {echo "$SpamBlankMessage"; exit();}


	// Check to see if URLs have been injected
	$validationOK=true;
	if (!$validationOK) {
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
	  exit;
	}

	// Check to see if URLs have been injected 
	$SpamURLMessage = "No website URLs permitted.";

	if (preg_match("/(http|www)/i", "$ApplicantName")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$ApplicantEmail")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$ApplicantPhone")) {echo "$SpamURLMessage"; exit();}


	// Check to see if scripts have been embedded.

	$ScriptAlertMessage = "No scripts permitted.";

	if (preg_match("/script/i", "$ApplicantName")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$ApplicantEmail")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$ApplicantPhone")) {echo "$ScriptAlertMessage"; exit();}


	// Pattern match search to strip out the invalid charcaters, this prevents the mail injection spammer 
	$pattern = '/(;|\||`|>|<|&|^|"|'."\n|\r|'".'|{|}|[|]|\)|\()/i'; // build the pattern match string 

	$ApplicantName = preg_replace($pattern, "", $ApplicantName);
	$ApplicantEmail = preg_replace($pattern, "", $ApplicantEmail);
	$ApplicantPhone = preg_replace($pattern, "", $ApplicantPhone);

	$SpamReplaceText = "*content removed*";

	// Check for the injected headers from the spammer attempt 
	// This will replace the injection attempt text with the string you have set above 
	$find = array("/bcc\:/i","/Content\-Type\:/i","/cc\:/i","/to\:/i"); 

	$ApplicantName = preg_replace($find, "SpamReplaceText", $ApplicantName);
	$ApplicantEmail = preg_replace($find, "SpamReplaceText", $ApplicantEmail);
	$ApplicantPhone = preg_replace($find, "SpamReplaceText", $ApplicantPhone);

	// Check to see if the fields contain any content we want to ban
// 	if(stristr($name, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 

	if(stristr($ApplicantName, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($ApplicantEmail, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($ApplicantPhone, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
 
	// Do a check on the send email and subject text
 	if(stristr($EmailTo, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
 	if(stristr($EmailFrom, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}

	// Prepare email body text
	$EmailBody .= "Name: ".($ApplicantName)."\n";
	$EmailBody .= "Email: ".($ApplicantEmail)."\n";

	// Check to see if optional fields are populated and if so, put into email body

	if(isset($ApplicantPhone)&&$ApplicantPhone!=''){
		$EmailBody .= "Phone: ".($ApplicantPhone)."\n";
	}

	// Send email 
	$success = mail($EmailTo, $Subject, $EmailBody, "From: <$EmailFrom>");

	// Redirect to success page 
	if ($success){
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
	}

	else {
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.php\">";
	}
}
?>