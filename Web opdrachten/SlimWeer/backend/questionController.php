<?php


$username = $_POST['username'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];

echo $username . ", ";
echo $email . ", ";
echo $textarea;


file_put_contents('questions.txt', $name . ", ". $email . " , " .$textarea . "\n", FILE_APPEND);

header("location: ../index.php?msg=$msg");
?>