<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Reken toets</title>
</head>
<body>
   <?php

    if(isset($_GET['answer1'])){
        $answer1 = $_GET['answer1'];
        $answer2 = $_GET['answer2'];
        $answer3 = $_GET['answer3'];
        $answer4 = $_GET['answer4'];
        $answer5 = $_GET['answer5'];
    }

    ?>
    <div class="form">
        <form action="backend/toetsController.php" method="POST">
            <div class="formGroup">
                <label for="question1">Wat is 3 x 3?</label>
                <input type="number" name="answer1">
                <?php 

                if($answer1 == 9){
                    echo "CORRECT";
                }
                else{
                    echo "INCORRECT";
                }

                ?>
            </div>

            <div class="formGroup">
                <label for="question2">Wat is 5 x 7?</label>
                <input type="number" name="answer2">
                <?php 

                if($answer2 == 35){
                    echo "CORRECT";
                }
                else{
                    echo "INCORRECT";
                }

                ?>
            </div>

            <div class="formGroup">
                <label for="question3">Wat is Pi?</label>
                <input type="radio" name="answer3" value="3.14">
                <label for="option1">3,14</label>
                <input type="radio" name="answer3" value="wtf">
                <label for="option2">Wtf</label>
                <input type="radio" name="answer3" value="Te veel moeite">
                <label for="option3">Te veel moeite</label>
                <input type="radio" name="answer3" value="De 1e 2 letters van pizza">
                <label for="option4">De 1e 2 letters van pizza</label>
                <?php

                if(isset($_GET['answer3'])){
                    if($_GET['answer3'] == "De 1e 2 letters van pizza"){
                        echo "Correct";
                    }

                    else{
                        echo "Incorrect";
                    }
                }

                ?>
            </div>

            <div class="formGroup">
                <label for="question4">Welk woord hoort niet in deze zin?: "3 maal 3 is negen, ieder zingt zijn eigen aap lied"</label>
                <input type="text" name="answer4">
                <?php

                if($answer4 == "aap"){
                    echo "Correct";
                }
                else{
                    echo "Incorrect";
                }

                ?>
            </div>

            <div class="formGroup">
                <label for="question5">Wat is 5 keer 10?</label>
                <input type="number" name="answer5">
                <?php 

                if ($answer5 == "50") {
                    echo "CORRECT";
                }

                else{
                    echo "INCORRECT";
                }
                ?>
            </div>
            <input type="submit" value="VERSTUUR">
        </form>
    </div>
</body>
</html>