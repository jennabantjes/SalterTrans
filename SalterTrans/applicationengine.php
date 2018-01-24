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
	$Message = htmlentities(trim(stripslashes($_POST['Message'] )));
	$Group = htmlentities(trim(stripslashes($_POST['Group'] )));
	$ApplicantPhone = htmlentities(trim(stripslashes($_POST['ApplicantPhone'] )));
	$Address = htmlentities(trim(stripslashes($_POST['Address'] )));
	$City = htmlentities(trim(stripslashes($_POST['City'] )));
	$State = htmlentities(trim(stripslashes($_POST['State'] )));
	$Zip = htmlentities(trim(stripslashes($_POST['Zip'] )));
	$Type = htmlentities(trim(stripslashes($_POST['Type'] )));
	$Vehicles = htmlentities(trim(stripslashes($_POST['Vehicles'] )));
	$Start = htmlentities(trim(stripslashes($_POST['Start'] )));
	$End = htmlentities(trim(stripslashes($_POST['End'] )));
	$Pickup = htmlentities(trim(stripslashes($_POST['Pickup'] )));
	$Destination = htmlentities(trim(stripslashes($_POST['Destination'] )));
	$Depart = htmlentities(trim(stripslashes($_POST['Depart'] )));
	$Return = htmlentities(trim(stripslashes($_POST['Return'] )));

	// Check to see if form field are spaces
	$SpamBlankMessage = "No blank spaces permitted.";

	if(empty($ApplicantName)) {echo "$SpamBlankMessage"; exit();}
	if(empty($ApplicantEmail)) {echo "$SpamBlankMessage"; exit();}
	if(empty($Message)) {echo "$SpamBlankMessage"; exit();}


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
	if (preg_match("/(http|www)/i", "$Message")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$Group")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$ApplicantPhone")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$Address")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$City")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$Zip")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$Vehicles")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$Pickup")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$Destination")) {echo "$SpamURLMessage"; exit();}

	// Check to see if scripts have been embedded.

	$ScriptAlertMessage = "No scripts permitted.";

	if (preg_match("/script/i", "$ApplicantName")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$ApplicantEmail")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$Message")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$Group")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$ApplicantPhone")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$Address")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$City")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$Zip")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$Vehicles")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$Pickup")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$Destination")) {echo "$ScriptAlertMessage"; exit();}


	// Pattern match search to strip out the invalid charcaters, this prevents the mail injection spammer 
	$pattern = '/(;|\||`|>|<|&|^|"|'."\n|\r|'".'|{|}|[|]|\)|\()/i'; // build the pattern match string 

	$ApplicantName = preg_replace($pattern, "", $ApplicantName);
	$ApplicantEmail = preg_replace($pattern, "", $ApplicantEmail);
	$Message = preg_replace($pattern, "", $Message);
	$Group = preg_replace($pattern, "", $Group);
	$ApplicantPhone = preg_replace($pattern, "", $ApplicantPhone);
	$Address = preg_replace($pattern, "", $Address);
	$City = preg_replace($pattern, "", $City);
	$State = preg_replace($pattern, "", $State);
	$Zip = preg_replace($pattern, "", $Zip);
	$Type = preg_replace($pattern, "", $Type);
	$Vehicles = preg_replace($pattern, "", $Vehicles);
	$Start = preg_replace($pattern, "", $Start);
	$End = preg_replace($pattern, "", $End);
	$Pickup = preg_replace($pattern, "", $Pickup);
	$Destination = preg_replace($pattern, "", $Destination);
	$Depart = preg_replace($pattern, "", $Depart);
	$Return = preg_replace($pattern, "", $Return);

	$SpamReplaceText = "*content removed*";

	// Check for the injected headers from the spammer attempt 
	// This will replace the injection attempt text with the string you have set above 
	$find = array("/bcc\:/i","/Content\-Type\:/i","/cc\:/i","/to\:/i"); 

	$ApplicantName = preg_replace($find, "SpamReplaceText", $ApplicantName);
	$ApplicantEmail = preg_replace($find, "SpamReplaceText", $ApplicantEmail);
	$Message = preg_replace($find, "SpamReplaceText", $Message);
	$Group = preg_replace($find, "SpamReplaceText", $Group);
	$ApplicantPhone = preg_replace($find, "SpamReplaceText", $ApplicantPhone);
	$Address = preg_replace($find, "SpamReplaceText", $Address);
	$City = preg_replace($find, "SpamReplaceText", $City);
	$State = preg_replace($find, "SpamReplaceText", $State);
	$Zip = preg_replace($find, "SpamReplaceText", $Zip);
	$Type = preg_replace($find, "SpamReplaceText", $Type);
	$Vehicles = preg_replace($find, "SpamReplaceText", $Vehicles);
	$Start = preg_replace($find, "SpamReplaceText", $Start);
	$End = preg_replace($find, "SpamReplaceText", $End);
	$Pickup = preg_replace($find, "SpamReplaceText", $Pickup);
	$Destination = preg_replace($find, "SpamReplaceText", $Destination);
	$Depart = preg_replace($find, "SpamReplaceText", $Depart);
	$Return = preg_replace($find, "SpamReplaceText", $Return);

	// Check to see if the fields contain any content we want to ban
// 	if(stristr($name, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 

	if(stristr($ApplicantName, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($ApplicantEmail, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($Message, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($Group, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($ApplicantPhone, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($Address, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($City, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($State, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($Zip, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($Type, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($Vehicles, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($Start, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($End, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($Pickup, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($Destination, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($Depart, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($Return, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
 
	// Do a check on the send email and subject text
 	if(stristr($EmailTo, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
 	if(stristr($EmailFrom, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}

	// Prepare email body text
	$EmailBody .= "Name: ".($ApplicantName)."\n";
	$EmailBody .= "Email: ".($ApplicantEmail)."\n";
	$EmailBody .= "Message: ".($Message)."\n";

	// Check to see if optional fields are populated and if so, put into email body
	if(isset($Group)&&$Group!=''){
		$EmailBody .= "Group: ".($Group)."\n";
	}
	if(isset($ApplicantPhone)&&$ApplicantPhone!=''){
		$EmailBody .= "Phone: ".($ApplicantPhone)."\n";
	}
	if(isset($Address)&&$Address!=''){
		$EmailBody .= "Address: ".($Address)."\n";
	}
	if(isset($City)&&$City!=''){
		$EmailBody .= "City: ".($City)."\n";
	}
	if(isset($State)&&$State!=''){
		$EmailBody .= "State: ".($State)."\n";
	}
	if(isset($Zip)&&$Zip!=''){
		$EmailBody .= "Zip: ".($Zip)."\n";
	}
	if(isset($Type)&&$Type!='What type of bus do you need?'){
		$EmailBody .= "Type: ".($Type)."\n";
	}
	if(isset($Vehicles)&&$Vehicles!=''){
		$EmailBody .= "Vehicles: ".($Vehicles)."\n";
	}
	if(isset($Start)&&$Start!=''){
		$EmailBody .= "Start: ".($Start)."\n";
	}
	if(isset($End)&&$End!=''){
		$EmailBody .= "End: ".($End)."\n";
	}
	if(isset($Pickup)&&$Pickup!=''){
		$EmailBody .= "Pickup: ".($Pickup)."\n";
	}
	if(isset($Destination)&&$Destination!=''){
		$EmailBody .= "Destination: ".($Destination)."\n";
	}
	if(isset($Depart)&&$Depart!=''){
		$EmailBody .= "Depart: ".($Depart)."\n";
	}
	if(isset($Return)&&$Return!=''){
		$EmailBody .= "Return: ".($Return)."\n";
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