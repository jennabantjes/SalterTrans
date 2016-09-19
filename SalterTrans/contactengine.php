<?php

$EmailFrom = "SalterTrans.com";
$EmailTo = "Maryannk@saltertrans.com, smith@saltertrans.com, jennabantjes@gmail.com";
$Subject = Trim(stripslashes($_POST['Subject']));
$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message']));
$Group = Trim(stripslashes($_POST['Group']));
$Phone = Trim(stripslashes($_POST['Phone']));
$Address = Trim(stripslashes($_POST['Address']));
$City = Trim(stripslashes($_POST['City']));
$State = Trim(stripslashes($_POST['State']));
$Zip = Trim(stripslashes($_POST['Zip']));
$Type = Trim(stripslashes($_POST['Type']));
$Vehicles = Trim(stripslashes($_POST['Vehicles']));
$Start = Trim(stripslashes($_POST['Start']));
$End = Trim(stripslashes($_POST['End']));
$Pickup = Trim(stripslashes($_POST['Pickup']));
$Destination = Trim(stripslashes($_POST['Destination']));
$Depart = Trim(stripslashes($_POST['Depart']));
$Return = Trim(stripslashes($_POST['Return']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

$SpamErrorMessage = "No website URLs permitted.";

if (preg_match("/http/i", "$Name")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Subject")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Email")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Message")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Group")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Address")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$City")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$State")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Zip")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Vehicles")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Pickup")) {echo "$SpamErrorMessage"; exit();}
if (preg_match("/http/i", "$Destination")) {echo "$SpamErrorMessage"; exit();}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $Subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
$Body .= "Group: ";
$Body .= $Group;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $Address;
$Body .= "\n";
$Body .= "City: ";
$Body .= $City;
$Body .= "\n";
$Body .= "State: ";
$Body .= $State;
$Body .= "\n";
$Body .= "Zip: ";
$Body .= $Zip;
$Body .= "\n";
$Body .= "Type: ";
$Body .= $Type;
$Body .= "\n";
$Body .= "Vehicles: ";
$Body .= $Vehicles;
$Body .= "\n";
$Body .= "Start: ";
$Body .= $Start;
$Body .= "\n";
$Body .= "End: ";
$Body .= $End;
$Body .= "\n";
$Body .= "Pickup: ";
$Body .= $Pickup;
$Body .= "\n";
$Body .= "Destination: ";
$Body .= $Destination;
$Body .= "\n";
$Body .= "Depart: ";
$Body .= $Depart;
$Body .= "\n";
$Body .= "Return: ";
$Body .= $Return;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>