<?php 

$email = $_POST['email'];
$command = escapeshellcmd('/websites/publicsite/www/smtpex.py ' . $email);
$output = shell_exec($command);
echo $output;
print("Success! Go check your email!");

?>
