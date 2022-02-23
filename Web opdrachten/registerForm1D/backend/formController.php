<?php

echo "Hello world ";

$username = $_POST['username'];
$email = $_POST['email'];

echo $username . ", ";
echo $email;


file_put_contents('form.txt', $username . ", ". $email . "\n", FILE_APPEND);

$msg = "Houdoe en bedankt!";
header("location: ../index.php?msg=$msg");
?>
