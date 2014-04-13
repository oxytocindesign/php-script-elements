<?php
// Include the phpass library
require_once('phpass-0.3/PasswordHash.php');
 
// Initialize the hasher without portable hashes (this is more secure)
$hasher = new PasswordHash(8, false);
 
// Hash the password.  $hashedPassword will be a 60-character string.
$hashedPassword = $hasher->HashPassword('my super cool password');
 
// You can now safely store the contents of $hashedPassword in your database!
 
// Check if a user has provided the correct password by comparing what they typed with our hash
$hasher->CheckPassword('the wrong password', $hashedPassword); // false
 
$hasher->CheckPassword('my super cool password', $hashedPassword); // true
?>
