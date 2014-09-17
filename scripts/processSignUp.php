<?php
 if (emailExists($signUpEmail))
 {
 	echo "<h3>Sorry, your e-mail address has been used previously.<br/> Check customer service to reactivate your account.</h3>";
 }
 else
 {
 	$unique_login = getUniqueID($customerUserName);
 	if ($unique_login != $customerUserName)
 	{
 		echo "<h3>Your login name already used. Please choose different name.<br/> If you account expires, check customer service to reactivate your account.<br/></h3>";
 	}

 	$query = "INSERT INTO my_CustomerInfo (
 	customer_title,customer_fname, customer_lname, customer_address, customer_postalCode, customer_city, customer_province,customer_phone,customer_email, customer_userName, customer_password
 	)
 	VALUES (
 	'$signUptitle', '$signUpFirstName', '$signUpLastName', '$signUpAddress', '$signUpPcode',
 	'$signUpCityName', '$signUpProvName', '$signUpPhone', '$signUpEmail', '$customerUserName', '$customerPasswordPcode'
 	);";
 	$customers = mysql_query($query)
 	or die(mysql_error());
 	echo "<h3>Thank you sign up. We will be providing our upcoming promotion as soon as possible.</h3>";
}
 
function emailExists($signUpEmail)
 {
 $query = "SELECT * FROM my_CustomerInfo WHERE customer_email = '$signUpEmail'";
 $customers = mysql_query($query)
 or die(mysql_error());
 $numRecords = mysql_num_rows($customers);
 if ($numRecords > 0)
 return true;
 else
 return false;
 }

 function getUniqueID($customerUserName)
 {
 	$unique_login = $customerUserName;
 	$query = "SELECT * FROM my_CustomerInfo WHERE customer_userName = '$unique_login'";
 	$customers = mysql_query($query)
 	or die(mysql_error());
 	$numRecords = mysql_num_rows($customers);
 	for ($i = 0; $numRecords > 0; $i++)
 	{
 		$unique_login = $customer_userName.$i;
 		$query = "SELECT * FROM my_CustomerInfo WHERE customer_userName = '$unique_login'";
 		$customers = mysql_query($query)
 		or die(mysql_error());
 		$numRecords = mysql_num_rows($customers);
 	}

 	return $unique_login;
 }

?>