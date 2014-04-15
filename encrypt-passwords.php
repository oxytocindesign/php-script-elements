<?php
// Include the phpass library
require_once('phpass-0.3/PasswordHash.php');
 
// Initialize hasher without portable hashes (this is more secure)
$hasher = new PasswordHash(7, false);
 
// declare password in a variable (in the next example we will pull it from a SQL table)
$KalensPassword = ('this said something else but its not for the internet to know <3');

// Hash the password.  $hashedPassword will be a 60-character string
// that can be safely stored in a MYSQL database.
$hashedPassword = $hasher->HashPassword($KalensPassword);

// example of the CheckPassword function, we need to pull the password
// data from the MYSQL table or else this entire script is a useless parlour trick

//fail example
$hasher->CheckPassword('the wrong password', $hashedPassword); // false
//success example
if ($hasher->CheckPassword('this said something else but its not for the internet to know <3', $hashedPassword)) {
	echo "The password hash is successful.";
	}
	
echo "<p>The password hash is: \"$hashedPassword\"</p>";
?>
