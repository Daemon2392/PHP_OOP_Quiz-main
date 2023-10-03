<?php
require_once './Helper/create.php';
?>


<?php
    class MathQuestion extends Question
    {
        public function createQuestion()
        {
            echo  "Question is :</br></br>";
            return  "";
        }
        public function createAnsware()
        {
            echo "Answare is :</br></br>";
            return "";
        }
        public function createSolution(): bool
        {
            return true || false;
        }
    }

?>

