<?php

if (isset($_POST['SpamButton'])) {
    echo "No spam allowed."; exit ();
} 

else {
//assume btnSubmit

// Pull in info from form
$EmailFrom = 'SalterTrans.com';
$EmailTo = 'MaryannK@saltertrans.com, smith@saltertrans.com';
$Subject = trim(stripslashes($_POST['Subject']));
$Name = trim(stripslashes($_POST['Name']));
$Email = trim(stripslashes($_POST['Email'])); 
$Message = trim(stripslashes($_POST['Message']));
$Group = trim(stripslashes($_POST['Group']));
$Phone = trim(stripslashes($_POST['Phone']));
$Address = trim(stripslashes($_POST['Address']));
$City = trim(stripslashes($_POST['City']));
$State = trim(stripslashes($_POST['State']));
$Zip = trim(stripslashes($_POST['Zip']));
$Type = trim(stripslashes($_POST['Type']));
$Vehicles = trim(stripslashes($_POST['Vehicles']));
$Start = trim(stripslashes($_POST['Start']));
$End = trim(stripslashes($_POST['End']));
$Pickup = trim(stripslashes($_POST['Pickup']));
$Destination = trim(stripslashes($_POST['Destination']));
$Depart = trim(stripslashes($_POST['Depart']));
$Return = trim(stripslashes($_POST['Return']));

// Check to see if URLs have been injected
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// Check to see if URLs have been injected 
$SpamErrorMessage = "No website URLs permitted.";

if (preg_match("/http/i", "$Name")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Subject")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Email")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Message")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Group")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Phone")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Address")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$City")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Zip")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Vehicles")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Pickup")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Destination")) {echo "$SpamErrorMessage"; exit();}

// Check to see if emails have been injected

function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}

// Prepare email body text
$EmailBody .= "Name: ".($Name)."\n";
$EmailBody .= "Email: ".($Email)."\n";
$EmailBody .= "Subject: ".($Subject)."\n";
$EmailBody .= "Message: ".($Message)."\n";

// Check to see if optional fields are populated and if so, put into email body
if(isset($Group)&&$Group!=''){
	$EmailBody .= "Group: ".($Group)."\n";
}
if(isset($Phone)&&$Phone!=''){
	$EmailBody .= "Phone: ".($Phone)."\n";
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
if(isset($Type)&&$Type!=''){
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