<?php
$name = $_POST['name'];
$class = $_POST['class'];
$email = $_POST['email'];
$date = $_POST['date'];
$favclass = $_POST['favclass'];
$favclass1 = $_POST['favclass1'];
$favclass2 = $_POST['favclass2'];
$besthelp = $_POST['besthelp'];
$enjoyment = $_POST['enjoyment'];
$time = $_POST['time'];
$week = $_POST['week'];

file_put_contents('form.txt', $name . ", " . $class . ", " . $email . ", " . $date . ", " . $favclass . ", " . $favclass1 . ", " . $favclass2 . ", " . $besthelp . ", " . 
$enjoyment . ", " .
$time . ", " . $week . ", " . "\n", FILE_APPEND);

$msg = "Bedankt voor u input!";
header("location: ../index.php?msg=$msg");
?>