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
	$ApplicantAddress = htmlentities(trim(stripslashes($_POST['ApplicantAddress'] )));
	$ApplicantCity = htmlentities(trim(stripslashes($_POST['ApplicantCity'] )));
	$ApplicantState = htmlentities(trim(stripslashes($_POST['ApplicantState'] )));
	$ApplicantZip = htmlentities(trim(stripslashes($_POST['ApplicantZip'] ))); 
	$DifferentAddress = htmlentities(trim(stripslashes($_POST['DifferentAddress'] )));
	$PreviousAddress = htmlentities(trim(stripslashes($_POST['PreviousAddress'] )));
	$PreviousCity = htmlentities(trim(stripslashes($_POST['PreviousCity'] )));
	$PreviousState = htmlentities(trim(stripslashes($_POST['PreviousState'] )));
	$PreviousZip = htmlentities(trim(stripslashes($_POST['PreviousZip'] )));
	$DrivingAccidents = htmlentities(trim(stripslashes($_POST['DrivingAccidents'] )));
	$AccidentDate = htmlentities(trim(stripslashes($_POST['AccidentDate'] )));
	$AccidentFatalities = htmlentities(trim(stripslashes($_POST['AccidentFatalities'] )));
	$AccidentInjuries = htmlentities(trim(stripslashes($_POST['AccidentInjuries'] )));
	$AccidentDetails = htmlentities(trim(stripslashes($_POST['AccidentDetails'] )));
	$TrafficConvictions = htmlentities(trim(stripslashes($_POST['TrafficConvictions'] )));
	$TrafficConvictionDate = htmlentities(trim(stripslashes($_POST['TrafficConvictionDate'] )));
	$TrafficConvictionLocation = htmlentities(trim(stripslashes($_POST['TrafficConvictionLocation'] )));
	$TrafficConvictionCharge = htmlentities(trim(stripslashes($_POST['TrafficConvictionCharge'] )));
	$TrafficConvictionPenalty = htmlentities(trim(stripslashes($_POST['TrafficConvictionPenalty'] )));
	$DeniedLicense = htmlentities(trim(stripslashes($_POST['DeniedLicense'] )));
	$DeniedLicenseExplanation = htmlentities(trim(stripslashes($_POST['DeniedLicenseExplanation'] )));
	$HighSchoolName = htmlentities(trim(stripslashes($_POST['HighSchoolName'] )));
	$HighSchoolCompletion = htmlentities(trim(stripslashes($_POST['HighSchoolCompletion'] )));
	$HighSchoolGraduationStatus = htmlentities(trim(stripslashes($_POST['HighSchoolGraduationStatus'] )));
	$HighSchoolGraduationYear = htmlentities(trim(stripslashes($_POST['HighSchoolGraduationYear'] )));
	$CollegeName = htmlentities(trim(stripslashes($_POST['CollegeName'] )));
	$CollegeCompletion = htmlentities(trim(stripslashes($_POST['CollegeCompletion'] )));
	$CollegeGraduationStatus = htmlentities(trim(stripslashes($_POST['CollegeGraduationStatus'] )));
	$CollegeYear = htmlentities(trim(stripslashes($_POST['CollegeYear'] )));
	$CollegeMajor = htmlentities(trim(stripslashes($_POST['CollegeMajor'] )));
	$PreviousAffiliation = htmlentities(trim(stripslashes($_POST['PreviousAffiliation'] )));
	$AffiliatedEmployerName = htmlentities(trim(stripslashes($_POST['AffiliatedEmployerName'] )));
	$AffiliatedEmployerFrom = htmlentities(trim(stripslashes($_POST['AffiliatedEmployerFrom'] )));
	$AffiliatedEmployerTo = htmlentities(trim(stripslashes($_POST['AffiliatedEmployerTo'] )));
	$AffiliatedEmployerReasonForLeaving = htmlentities(trim(stripslashes($_POST['AffiliatedEmployerReasonForLeaving'] )));
	$FormerEmployerName = htmlentities(trim(stripslashes($_POST['FormerEmployerName'] )));
	$FormerEmployerDateFrom = htmlentities(trim(stripslashes($_POST['FormerEmployerDateFrom'] )));
	$FormerEmployerDateto = htmlentities(trim(stripslashes($_POST['FormerEmployerDateto'] )));
	$FormerEmployerAddress = htmlentities(trim(stripslashes($_POST['FormerEmployerAddress'] )));
	$FormerEmployerCity = htmlentities(trim(stripslashes($_POST['FormerEmployerCity'] )));
	$FormerEmployerState = htmlentities(trim(stripslashes($_POST['FormerEmployerState'] )));
	$FormerEmployerZip = htmlentities(trim(stripslashes($_POST['FormerEmployerZip'] )));
	$FormerPositionHeld = htmlentities(trim(stripslashes($_POST['FormerPositionHeld'] )));
	$FormerSalary = htmlentities(trim(stripslashes($_POST['FormerSalary'] )));
	$FormerSupervisorName = htmlentities(trim(stripslashes($_POST['FormerSupervisorName'] )));
	$FormerSupervisorPhone = htmlentities(trim(stripslashes($_POST['FormerSupervisorPhone'] )));
	$FormerEmployerReasonForLeaving = htmlentities(trim(stripslashes($_POST['FormerEmployerReasonForLeaving'] )));
	$LegalStatus = htmlentities(trim(stripslashes($_POST['LegalStatus'] )));
	$Conviction = htmlentities(trim(stripslashes($_POST['Conviction'] )));
	$ConvictionExplanation = htmlentities(trim(stripslashes($_POST['ConvictionExplanation'] )));
	$AdditionalQualifications = htmlentities(trim(stripslashes($_POST['AdditionalQualifications'] )));


	// Check to see if form field are spaces
	$SpamBlankMessage = "No blank spaces permitted.";

	if(empty($ApplicantName)) {echo "$SpamBlankMessage"; exit();}
	if(empty($ApplicantPhone)) {echo "$SpamBlankMessage"; exit();}
	if(empty($ApplicantEmail)) {echo "$SpamBlankMessage"; exit();}
	if(empty($ApplicantAddress)) {echo "$SpamBlankMessage"; exit();}

	//if(empty($ApplicantAddress)) {echo "$SpamBlankMessage"; exit();}

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
	if (preg_match("/(http|www)/i", "$ApplicantAddress")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$ApplicantCity")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$ApplicantState")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$ApplicantZip")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$PreviousAddress")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$PreviousCity")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$PreviousState")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$PreviousZip")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$AccidentFatalities")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$AccidentInjuries")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$AccidentDetails")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$TrafficConvictionLocation")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$TrafficConvictionCharge")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$TrafficConvictionPenalty")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$DeniedLicenseExplanation")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$HighSchoolName")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$HighSchoolGraduationYear")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$CollegeName")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$CollegeYear")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$CollegeMajor")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$AffiliatedEmployerName")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$FormerEmployerName")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$FormerEmployerAddress")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$FormerEmployerCity")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$FormerEmployerState")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$FormerEmployerZip")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$FormerPositionHeld")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$FormerSalary")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$FormerSupervisorName")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$AffiliatedEmployerReasonForLeaving")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$FormerEmployerReasonForLeaving")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$ConvictionExplanation")) {echo "$SpamURLMessage"; exit();}
	if (preg_match("/(http|www)/i", "$AdditionalQualifications")) {echo "$SpamURLMessage"; exit();}


	// Check to see if scripts have been embedded.

	$ScriptAlertMessage = "No scripts permitted.";

	if (preg_match("/script/i", "$ApplicantName")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$ApplicantEmail")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$ApplicantPhone")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$ApplicantAddress")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$ApplicantCity")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$ApplicantState")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$ApplicantZip")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$PreviousAddress")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$PreviousCity")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$PreviousState")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$PreviousZip")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$AccidentFatalities")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$AccidentInjuries")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$AccidentDetails")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$TrafficConvictionLocation")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$TrafficConvictionCharge")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$TrafficConvictionPenalty")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$DeniedLicenseExplanation")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$HighSchoolName")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$HighSchoolGraduationYear")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$CollegeName")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$CollegeYear")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$CollegeMajor")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$AffiliatedEmployerName")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$AffiliatedEmployerReasonForLeaving")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$FormerEmployerName")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$FormerEmployerAddress")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$FormerEmployerCity")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$FormerEmployerState")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$FormerEmployerZip")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$FormerPositionHeld")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$FormerSalary")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$FormerSupervisorName")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$FormerEmployerReasonForLeaving")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$ConvictionExplanation")) {echo "$ScriptAlertMessage"; exit();}
	if (preg_match("/script/i", "$AdditionalQualifications")) {echo "$ScriptAlertMessage"; exit();}

	// Pattern match search to strip out the invalid charcaters, this prevents the mail injection spammer 
	$pattern = '/(;|\||`|>|<|&|^|"|'."\n|\r|'".'|{|}|[|]|\)|\()/i'; // build the pattern match string 

	$ApplicantName = preg_replace($pattern, "", $ApplicantName);
	$ApplicantEmail = preg_replace($pattern, "", $ApplicantEmail);
	$ApplicantPhone = preg_replace($pattern, "", $ApplicantPhone);
	$ApplicantAddress = preg_replace($pattern, "", $ApplicantAddress);
	$ApplicantCity = preg_replace($pattern, "", $ApplicantCity);
	$ApplicantState = preg_replace($pattern, "", $ApplicantState);
	$ApplicantZip = preg_replace($pattern, "", $ApplicantZip);
	$PreviousAddress = preg_replace($pattern, "", $PreviousAddress);
	$PreviousCity = preg_replace($pattern, "", $PreviousCity);
	$PreviousState = preg_replace($pattern, "", $PreviousState);
	$PreviousZip = preg_replace($pattern, "", $PreviousZip);
	$AccidentFatalities = preg_replace($pattern, "", $AccidentFatalities);
	$AccidentInjuries = preg_replace($pattern, "", $AccidentInjuries);
	$AccidentDetails = preg_replace($pattern, "", $AccidentDetails);
	$TrafficConvictionLocation = preg_replace($pattern, "", $TrafficConvictionLocation);
	$TrafficConvictionCharge = preg_replace($pattern, "", $TrafficConvictionCharge);
	$TrafficConvictionPenalty = preg_replace($pattern, "", $TrafficConvictionPenalty);
	$DeniedLicenseExplanation = preg_replace($pattern, "", $DeniedLicenseExplanation);
	$HighSchoolName = preg_replace($pattern, "", $HighSchoolName);
	$HighSchoolGraduationYear = preg_replace($pattern, "", $HighSchoolGraduationYear);
	$CollegeName = preg_replace($pattern, "", $CollegeName);
	$CollegeYear = preg_replace($pattern, "", $CollegeYear);
	$CollegeMajor = preg_replace($pattern, "", $CollegeMajor);
	$AffiliatedEmployerName = preg_replace($pattern, "", $AffiliatedEmployerName);
	$AffiliatedEmployerReasonForLeaving = preg_replace($pattern, "", $AffiliatedEmployerReasonForLeaving);
	$FormerEmployerName = preg_replace($pattern, "", $FormerEmployerName);
	$FormerEmployerAddress = preg_replace($pattern, "", $FormerEmployerAddress);
	$FormerEmployerCity = preg_replace($pattern, "", $FormerEmployerCity);
	$FormerEmployerState = preg_replace($pattern, "", $FormerEmployerState);
	$FormerEmployerZip = preg_replace($pattern, "", $FormerEmployerZip);
	$FormerPositionHeld = preg_replace($pattern, "", $FormerPositionHeld);
	$FormerSalary = preg_replace($pattern, "", $FormerSalary);
	$FormerSupervisorName = preg_replace($pattern, "", $FormerSupervisorName);
	$FormerEmployerReasonForLeaving = preg_replace($pattern, "", $FormerEmployerReasonForLeaving);
	$ConvictionExplanation = preg_replace($pattern, "", $ConvictionExplanation);
	$AdditionalQualifications = preg_replace($pattern, "", $AdditionalQualifications);


	$SpamReplaceText = "*content removed*";

	// Check for the injected headers from the spammer attempt 
	// This will replace the injection attempt text with the string you have set above 
	$find = array("/bcc\:/i","/Content\-Type\:/i","/cc\:/i","/to\:/i"); 

	$ApplicantName = preg_replace($find, "SpamReplaceText", $ApplicantName);
	$ApplicantEmail = preg_replace($find, "SpamReplaceText", $ApplicantEmail);
	$ApplicantPhone = preg_replace($find, "SpamReplaceText", $ApplicantPhone);
	$ApplicantAddress = preg_replace($find, "SpamReplaceText", $ApplicantAddress);
	$ApplicantCity = preg_replace($find, "SpamReplaceText", $ApplicantCity);
	$ApplicantState = preg_replace($find, "SpamReplaceText", $ApplicantState);
	$ApplicantZip = preg_replace($find, "SpamReplaceText", $ApplicantZip);
	$PreviousAddress = preg_replace($find, "SpamReplaceText", $PreviousAddress);
	$PreviousCity = preg_replace($find, "SpamReplaceText", $PreviousCity);
	$PreviousState = preg_replace($find, "SpamReplaceText", $PreviousState);
	$PreviousZip = preg_replace($find, "SpamReplaceText", $PreviousZip);
	$AccidentFatalities = preg_replace($find, "SpamReplaceText", $AccidentFatalities);
	$AccidentInjuries = preg_replace($find, "SpamReplaceText", $AccidentInjuries);
	$AccidentDetails = preg_replace($find, "SpamReplaceText", $AccidentDetails);
	$TrafficConvictionLocation = preg_replace($find, "SpamReplaceText", $TrafficConvictionLocation);
	$TrafficConvictionCharge = preg_replace($find, "SpamReplaceText", $TrafficConvictionCharge);
	$TrafficConvictionPenalty = preg_replace($find, "SpamReplaceText", $TrafficConvictionPenalty);
	$DeniedLicenseExplanation = preg_replace($find, "SpamReplaceText", $DeniedLicenseExplanation);
	$HighSchoolName = preg_replace($find, "SpamReplaceText", $HighSchoolName);
	$HighSchoolGraduationYear = preg_replace($find, "SpamReplaceText", $HighSchoolGraduationYear);
	$CollegeName = preg_replace($find, "SpamReplaceText", $CollegeName);
	$CollegeYear = preg_replace($find, "SpamReplaceText", $CollegeYear);
	$CollegeMajor = preg_replace($find, "SpamReplaceText", $CollegeMajor);
	$AffiliatedEmployerName = preg_replace($find, "SpamReplaceText", $AffiliatedEmployerName);
	$AffiliatedEmployerReasonForLeaving = preg_replace($find, "SpamReplaceText", $AffiliatedEmployerReasonForLeaving);
	$FormerEmployerName = preg_replace($find, "SpamReplaceText", $FormerEmployerName);
	$FormerEmployerAddress = preg_replace($find, "SpamReplaceText", $FormerEmployerAddress);
	$FormerEmployerCity = preg_replace($find, "SpamReplaceText", $FormerEmployerCity);
	$FormerEmployerState = preg_replace($find, "SpamReplaceText", $FormerEmployerState);
	$FormerEmployerZip = preg_replace($find, "SpamReplaceText", $FormerEmployerZip);
	$FormerPositionHeld = preg_replace($find, "SpamReplaceText", $FormerPositionHeld);
	$FormerSalary = preg_replace($find, "SpamReplaceText", $FormerSalary);
	$FormerSupervisorName = preg_replace($find, "SpamReplaceText", $FormerSupervisorName);
	$FormerEmployerReasonForLeaving = preg_replace($find, "SpamReplaceText", $FormerEmployerReasonForLeaving);
	$ConvictionExplanation = preg_replace($find, "SpamReplaceText", $ConvictionExplanation);
	$AdditionalQualifications = preg_replace($find, "SpamReplaceText", $AdditionalQualifications);


	// Check to see if the fields contain any content we want to ban
// 	if(stristr($name, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 

	if(stristr($ApplicantName, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($ApplicantEmail, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($ApplicantPhone, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
 	if(stristr($ApplicantAddress, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
 	if(stristr($ApplicantCity, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($ApplicantState, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($ApplicantZip, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($PreviousAddress, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($PreviousCity, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($PreviousState, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($PreviousZip, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($AccidentFatalities, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($AccidentInjuries, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($AccidentDetails, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($TrafficConvictionLocation, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($TrafficConvictionCharge, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($TrafficConvictionPenalty, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($DeniedLicenseExplanation, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($HighSchoolName, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($HighSchoolGraduationYear, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($CollegeName, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($CollegeYear, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($CollegeMajor, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($AffiliatedEmployerName, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($AffiliatedEmployerReasonForLeaving, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($FormerEmployerName, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($FormerEmployerAddress, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($FormerEmployerCity, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($FormerEmployerState, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($FormerEmployerZip, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($FormerPositionHeld, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($FormerSalary, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($FormerSupervisorName, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($FormerEmployerReasonForLeaving, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($ConvictionExplanation, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}
	if(stristr($AdditionalQualifications, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}

	// Do a check on the send email and subject text
 	if(stristr($EmailTo, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
 	if(stristr($EmailFrom, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();}

	// Prepare email body text
	$EmailBody .= "Name: ".($ApplicantName)."\n";
	$EmailBody .= "Phone: ".($ApplicantPhone)."\n";
	$EmailBody .= "Email: ".($ApplicantEmail)."\n";
	$EmailBody .= "Address: ".($ApplicantAddress)."\n";
	$EmailBody .= "City: ".($ApplicantCity)."\n";
	$EmailBody .= "State: ".($ApplicantState)."\n";
	$EmailBody .= "Zip: ".($ApplicantZip)."\n";


	// Check to see if optional fields are populated and if so, put into email body

	if(isset($DifferentAddress)&&$DifferentAddress!=''){
		$EmailBody .= "DifferentAddress: ".($DifferentAddress)."\n";
	}
	if(isset($PreviousAddress)&&$PreviousAddress!=''){
		$EmailBody .= "PreviousAddress: ".($PreviousAddress)."\n";
	}
	if(isset($PreviousCity)&&$PreviousCity!=''){
		$EmailBody .= "PreviousCity: ".($PreviousCity)."\n";
	}
	if(isset($PreviousState)&&$PreviousState!=''){
		$EmailBody .= "PreviousState: ".($PreviousState)."\n";
	}
	if(isset($PreviousZip)&&$PreviousZip!=''){
		$EmailBody .= "PreviousZip: ".($PreviousZip)."\n";
	}
	if(isset($DrivingAccidents)&&$DrivingAccidents!=''){
		$EmailBody .= "DrivingAccidents: ".($DrivingAccidents)."\n";
	}
	if(isset($AccidentDate)&&$AccidentDate!=''){
		$EmailBody .= "AccidentDate: ".($AccidentDate)."\n";
	}
	if(isset($AccidentFatalities)&&$AccidentFatalities!=''){
		$EmailBody .= "AccidentFatalities: ".($AccidentFatalities)."\n";
	}
	if(isset($AccidentInjuries)&&$AccidentInjuries!=''){
		$EmailBody .= "AccidentInjuries: ".($AccidentInjuries)."\n";
	}
	if(isset($AccidentDetails)&&$AccidentDetails!=''){
		$EmailBody .= "AccidentDetails: ".($AccidentDetails)."\n";
	}
	if(isset($TrafficConvictions)&&$TrafficConvictions!=''){
		$EmailBody .= "TrafficConvictions: ".($TrafficConvictions)."\n";
	}
	if(isset($TrafficConvictionDate)&&$TrafficConvictionDate!=''){
		$EmailBody .= "TrafficConvictionDate: ".($TrafficConvictionDate)."\n";
	}
	if(isset($TrafficConvictionLocation)&&$TrafficConvictionLocation!=''){
		$EmailBody .= "TrafficConvictionLocation: ".($TrafficConvictionLocation)."\n";
	}
	if(isset($TrafficConvictionCharge)&&$TrafficConvictionCharge!=''){
		$EmailBody .= "TrafficConvictionCharge: ".($TrafficConvictionCharge)."\n";
	}
	if(isset($TrafficConvictionPenalty)&&$TrafficConvictionPenalty!=''){
		$EmailBody .= "TrafficConvictionPenalty: ".($TrafficConvictionPenalty)."\n";
	}
	if(isset($DeniedLicense)&&$DeniedLicense!=''){
		$EmailBody .= "DeniedLicense: ".($DeniedLicense)."\n";
	}
	if(isset($DeniedLicenseExplanation)&&$DeniedLicenseExplanation!=''){
		$EmailBody .= "DeniedLicenseExplanation: ".($DeniedLicenseExplanation)."\n";
	}
	if(isset($HighSchoolName)&&$HighSchoolName!=''){
		$EmailBody .= "HighSchoolName: ".($HighSchoolName)."\n";
	}
	if(isset($HighSchoolCompletion)&&$HighSchoolCompletion!=''){
		$EmailBody .= "HighSchoolCompletion: ".($HighSchoolCompletion)."\n";
	}
	if(isset($HighSchoolGraduationStatus)&&$HighSchoolGraduationStatus!=''){
		$EmailBody .= "HighSchoolGraduationStatus: ".($HighSchoolGraduationStatus)."\n";
	}
	if(isset($HighSchoolGraduationYear)&&$HighSchoolGraduationYear!=''){
		$EmailBody .= "HighSchoolGraduationYear: ".($HighSchoolGraduationYear)."\n";
	}
	if(isset($CollegeName)&&$CollegeName!=''){
		$EmailBody .= "CollegeName: ".($CollegeName)."\n";
	}
	if(isset($CollegeCompletion)&&$CollegeCompletion!=''){
		$EmailBody .= "CollegeCompletion: ".($CollegeCompletion)."\n";
	}
	if(isset($CollegeGraduationStatus)&&$CollegeGraduationStatus!=''){
		$EmailBody .= "CollegeGraduationStatus: ".($CollegeGraduationStatus)."\n";
	}
	if(isset($CollegeYear)&&$CollegeYear!=''){
		$EmailBody .= "CollegeYear: ".($CollegeYear)."\n";
	}
	if(isset($CollegeMajor)&&$CollegeMajor!=''){
		$EmailBody .= "CollegeMajor: ".($CollegeMajor)."\n";
	}
	if(isset($PreviousAffiliation)&&$PreviousAffiliation!=''){
		$EmailBody .= "PreviousAffiliation: ".($PreviousAffiliation)."\n";
	}
	if(isset($AffiliatedEmployerName)&&$AffiliatedEmployerName!=''){
		$EmailBody .= "AffiliatedEmployerName: ".($AffiliatedEmployerName)."\n";
	}
	if(isset($AffiliatedEmployerFrom)&&$AffiliatedEmployerFrom!=''){
		$EmailBody .= "AffiliatedEmployerFrom: ".($AffiliatedEmployerFrom)."\n";
	}
	if(isset($AffiliatedEmployerTo)&&$AffiliatedEmployerTo!=''){
		$EmailBody .= "AffiliatedEmployerTo: ".($AffiliatedEmployerTo)."\n";
	}
	if(isset($AffiliatedEmployerReasonForLeaving)&&$AffiliatedEmployerReasonForLeaving!=''){
		$EmailBody .= "AffiliatedEmployerReasonForLeaving: ".($AffiliatedEmployerReasonForLeaving)."\n";
	}
/* --> */	$EmailBody .= "Former Employer: ".($FormerEmployerName)."\n";

	if(isset($FormerEmployerDateFrom)&&$FormerEmployerDateFrom!=''){
		$EmailBody .= "FormerEmployerDateFrom: ".($FormerEmployerDateFrom)."\n";
	}
	if(isset($FormerEmployerDateTo)&&$FormerEmployerDateTo!=''){
		$EmailBody .= "FormerEmployerDateTo: ".($FormerEmployerDateTo)."\n";
	}
	if(isset($FormerEmployerAddress)&&$FormerEmployerAddress!=''){
		$EmailBody .= "FormerEmployerAddress: ".($FormerEmployerAddress)."\n";
	}
	if(isset($FormerEmployerCity)&&$FormerEmployerCity!=''){
		$EmailBody .= "FormerEmployerCity: ".($FormerEmployerCity)."\n";
	}
	if(isset($FormerEmployerState)&&$FormerEmployerState!=''){
		$EmailBody .= "FormerEmployerState: ".($FormerEmployerState)."\n";
	}
	if(isset($FormerEmployerZip)&&$FormerEmployerZip!=''){
		$EmailBody .= "FormerEmployerZip: ".($FormerEmployerZip)."\n";
	}
	
/*-->*/	$EmailBody .= "Former Position: ".($FormerPositionHeld)."\n";

	if(isset($FormerSalary)&&$FormerSalary!=''){
		$EmailBody .= "FormerSalary: ".($FormerSalary)."\n";
	}
	if(isset($FormerSupervisorName)&&$FormerSupervisorName!=''){
		$EmailBody .= "FormerSupervisorName: ".($FormerSupervisorName)."\n";
	}
	if(isset($FormerSupervisorPhone)&&$FormerSupervisorPhone!=''){
		$EmailBody .= "FormerSupervisorPhone: ".($FormerSupervisorPhone)."\n";
	}
	if(isset($FormerEmployerReasonForLeaving)&&$FormerEmployerReasonForLeaving!=''){
		$EmailBody .= "FormerEmployerReasonForLeaving: ".($FormerEmployerReasonForLeaving)."\n";
	}
	if(isset($LegalStatus)&&$LegalStatus!=''){
		$EmailBody .= "LegalStatus: ".($LegalStatus)."\n";
	}
	if(isset($Conviction)&&$Conviction!=''){
		$EmailBody .= "Conviction: ".($Conviction)."\n";
	}
	if(isset($ConvictionExplanation)&&$ConvictionExplanation!=''){
		$EmailBody .= "ConvictionExplanation: ".($ConvictionExplanation)."\n";
	}
	if(isset($AdditionalQualifications)&&$AdditionalQualifications!=''){
		$EmailBody .= "AdditionalQualifications: ".($AdditionalQualifications)."\n";
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