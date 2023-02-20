<?php
$email = $_POST['email'];

// Open the CSV file for writing
$file = fopen('emails.csv', 'a');

// Write the email address to the CSV file
fputcsv($file, array($email));

// Close the file
fclose($file);
?>
