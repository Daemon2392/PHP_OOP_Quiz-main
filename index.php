<?php
require_once './Question/Math/mathQuestion.php';
require_once './Question/Developement/developeQuestions.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $question = new DevelopeQuestion;
        $question -> createQuestion();
        echo "</br></br></br>";

        // $answare = $question;
        // $question -> createAnsware();
        // echo "</br></br></br>";

        $solution = $question;
        $question -> createSolution();
        echo "</br></br></br>";
        
        echo("-----------------------------------------------------------");

        echo "</br></br></br>";
        $question = new MathQuestion;
        
        $question -> createQuestion();
        echo "</br></br></br>";
        
        $answare = $question;
        $question -> createAnsware();
        echo "</br></br></br>";
        
        $solution = $question;
        $question -> createSolution();
        echo "</br></br></br>";
        

        

    ?>
    
</body>
</html>