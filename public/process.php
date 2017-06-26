<?php
$newFileName = 'file:///C:/Hugo/bin/tradicious.com/public/test.txt';
// Open the file to get existing content
$email = file_get_contents($file);
// Append a new person to the file
$email .= "John Smith\n";
// Write the contents back to the file
file_put_contents($file, $email);
?>
