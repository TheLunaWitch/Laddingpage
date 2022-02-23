<?php 

$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$answer5 = $_POST['answer5'];

header("location: ../index.php?answer1=$answer1&answer2=$answer2&answer3=$answer3&answer4=$answer4&answer5=$answer5");
?>